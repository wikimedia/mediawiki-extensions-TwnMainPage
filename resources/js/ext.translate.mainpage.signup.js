/*!
 * Handle the signup thingie.
 *
 * @author Niklas Laxström
 * @license GPL-2.0-or-later
 */
( function ( $, mw ) {
	'use strict';

	mw.translate.setupSignupForm = function ( $form ) {
		var $username = $form.find( 'input[name="wpName"]' ),
			$email = $form.find( 'input[name="wpEmail"]' ),
			$password = $form.find( 'input[name="wpPassword"]' ),
			$reason = $form.find( 'input[name="reason"]' );

		function initDeveloperSignup() {
			$form.find( '.dev-signup' ).on( 'click', function () {
				$form.find( '.only-dev' ).removeClass( 'hide' );
				$form.find( '.only-nondev' ).addClass( 'hide' );
				$form.find( '.required' ).trigger( 'change' );
				$reason.prop( 'required', true );
			} );

			$form.find( 'button.cancel' ).on( 'click', function ( e ) {
				e.preventDefault();
				$form.find( '.only-dev' ).addClass( 'hide' );
				$form.find( '.only-nondev' ).removeClass( 'hide' );
				$form.find( '.required' ).trigger( 'change' );
				$reason.prop( 'required', false );
			} );
		}

		function initSubmitButtonDisabler() {
			var $submit = $form.find( 'button[type=submit]' );

			$submit.prop( 'disabled', true );
			$form.on( 'change keyup', '.required', function () {
				var anyEmpty = false;

				$form.find( '.required:visible' ).each( function () {
					anyEmpty = anyEmpty || $( this ).val().trim() === '';
				} );
				$submit.prop( 'disabled', anyEmpty );
			} );
		}

		function initLanguageSelector() {
			$form.find( '.signup-language-selector' ).uls( {
				onSelect: function ( language ) {
					var $checkbox, $label,
						checkboxId = 'language-' + language,
						$currentCheckbox = $( '#' + checkboxId );

					if ( $currentCheckbox.length ) {
						// Language already selected. Make sure it is checked.
						$currentCheckbox.prop( 'checked', true );

						return;
					}

					$checkbox = $( '<input>' )
						.attr( {
							id: checkboxId,
							type: 'checkbox',
							name: 'signuplanguage',
							checked: 'checked'
						} )
						.data( 'code', language );
					$label = $( '<label>' )
						.text( $.uls.data.getAutonym( language ) )
						.attr( {
							for: checkboxId,
							lang: language,
							dir: $.uls.data.getDir( language )
						} );

					$form.find( 'ul.signup-languages' )
						.append( $( '<li>' )
							.append(
								$checkbox,
								// Space between checkbox and label
								$( '<span>' ).text( ' ' ),
								$label
							)
						);
				},
				ulsPurpose: 'twnmainpage-signup-userlanguage',
				quickList: mw.uls.getFrequentLanguageList
			} );
		}

		function toggleLoading( isLoading ) {
			var $submitBtn = $form.find( 'button[type=submit]' ),
				$loading = $form.find( '.twn-mainpage-loading-indicator' );

			if ( isLoading ) {
				$submitBtn.prop( 'disabled', true );
				$loading.removeClass( 'hide' );
			} else {
				$submitBtn.prop( 'disabled', false );
				$loading.addClass( 'hide' );
			}
		}

		/**
		 * Account creation can fail on invalid user input.
		 *
		 * @param {string} errorcode Error code as returned by MW api
		 * @param {Object} result Result retuned by MW api
		 */
		function handleAccountCreationFailure( errorcode, result ) {
			var $element = $( [] ),
				$genericErrorContainer = $form.find( '.twnmp-signup-generic-error' ).last();

			switch ( errorcode ) {
				case 'invalidusername':
				case 'nonfreeusername':
					$element = $username;
					break;
				case 'passwordtooshort':
				case 'passwordincommonlist':
				case 'passwordtoolong':
				case 'password-substring-username-match':
					$element = $password;
					break;
				case 'invalidemail':
					$element = $email;
					break;
			}

			if ( $element.length ) {
				$element.addClass( 'invalid' );
				// Messages used here:
				// twnmp-signup-error-invalidusername
				// twnmp-signup-error-nonfreeusername
				// twnmp-signup-error-invalidemail
				if ( result && result.error && result.error.info ) {
					var $errorContainer = $element.parent().next( '.twnmp-signup-error' );
					var errorTextMessage = mw.message( 'twnmp-signup-error-' + errorcode );
					$errorContainer.removeClass( 'hide' );

					if ( errorTextMessage.exists() ) {
						$errorContainer.text( errorTextMessage.text() + result.error.info );
					} else {
						$errorContainer.text( result.error.info );
					}
				}
			} else {
				$genericErrorContainer.removeClass( 'hide' );
				if ( errorcode ) {
					$genericErrorContainer
						.text( mw.message( 'twnmp-signup-error-other', errorcode ) );
				} else {
					$genericErrorContainer
						.text( mw.message( 'twnmp-signup-error-unknown' ) );
				}
			}
		}

		/**
		 * Handles the chain of many ajax requests when user submits the signup form.
		 *
		 * @param {jQuery.Event} e
		 */
		function handleSubmit( e ) {
			var reqCreate, codes, preferences,
				api = new mw.Api(),
				username = $username.val(),
				password = $password.val(),
				email = $email.val(),
				isRefreshing = false;

			e.preventDefault();

			// Remove any invalid markers from earlier attempts
			$form.find( '.invalid' ).removeClass( 'invalid' );

			// Hide previous errors
			$form.find( '.js-signup-err' ).addClass( 'hide' );

			// Show loading
			toggleLoading( true );

			codes = $form.find( '.signup-languages :checked' ).map( function () {
				return $( this ).data( 'code' );
			} ).toArray();

			preferences = JSON.stringify( {
				languages: codes,
				comment: $form.find( 'textarea' ).val()
			} );

			reqCreate = api.postWithToken( 'csrf', {
				action: 'translatesandbox',
				do: 'create',
				username: username,
				email: email,
				password: password
			} );

			reqCreate.fail( handleAccountCreationFailure );
			reqCreate.then( function () {
				var api = new mw.Api();
				// This should not fail on normal conditions
				return api.login( username, password );
			} ).then( function () {
				var api = new mw.Api();
				return api.postWithToken( 'csrf', {
					action: 'options',
					optionname: 'translate-sandbox',
					optionvalue: preferences
				} );
			} ).then( function () {
				isRefreshing = true;
				window.location.reload();
			} ).always( function () {
				if ( !isRefreshing ) {
					// If the page is not refreshing stop the loading,
					// probably there was an error or validation failure.
					toggleLoading( false );
				}
			} );
		}

		// Set the thing up
		initSubmitButtonDisabler();
		initDeveloperSignup();
		initLanguageSelector();

		$form.on( 'submit', handleSubmit );
	};

	$( function () {
		mw.translate.setupSignupForm( $( '.login-widget' ) );
	} );
}( jQuery, mw ) );
