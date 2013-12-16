/**
 * Handle the signup thingie.
 *
 * @author Niklas Laxström
 * @license GPL-2.0+
 */
( function ( $, mw ) {
	'use strict';

	mw.translate.setupSignupForm = function ( $form ) {
		var $username = $form.find( 'input[name="wpName"]' ),
			$email = $form.find( 'input[name="wpEmail"]' ),
			$password = $form.find( 'input[name="wpPassword"]' );

		function initDeveloperSignup() {
			$form.find( '.dev-signup' ).click( function () {
				$form.find( '.only-dev' ).removeClass( 'hide' );
				$form.find( '.only-nondev' ).addClass( 'hide' );
				$form.find( '.required' ).trigger( 'change' );
			} );

			$form.find( 'button.cancel' ).click( function ( e ) {
				e.preventDefault();
				$form.find( '.only-dev' ).addClass( 'hide' );
				$form.find( '.only-nondev' ).removeClass( 'hide' );
				$form.find( '.required' ).trigger( 'change' );
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
							'for': checkboxId,
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
				quickList: mw.uls.getFrequentLanguageList
			} );
		}

		/**
		 * Account creation can fail on invalid user input.
		 * @param {string} errorcode Error code as returned by MW api
		 * @param {object} result Result retuned by MW api
		 */
		function handleAccountCreationFailure( errorcode, result ) {
			var extra;

			switch ( errorcode ) {
				case 'invalidusername':
				case 'nonfreeusername':
					$username.addClass( 'invalid' );
					break;
				case 'invalidpassword':
					$password.addClass( 'invalid' );
					break;
				case 'invalidemail':
					$email.addClass( 'invalid' );
					break;
			}

			// @TODO: i18n
			extra = result && result.error && result.error.info || 'Unknown reason';
			window.alert( 'Account creation failed: ' + extra );
		}

		/**
		 * Handles the chain of many ajax requests when user submits the signup form.
		 * @param {jQuery.Event} e
		 */
		function handleSubmit( e ) {
			var reqCreate, codes, preferences,
				api = new mw.Api(),
				username = $username.val(),
				password = $password.val(),
				email = $email.val();

			e.preventDefault();
			// Remove any invalid markers from earlier attempts
			$form.find( '.invalid' ).removeClass( '.invalid' );

			codes = $form.find( '.signup-languages :checked' ).map( function () {
				return $( this ).data( 'code' );
			} ).toArray();

			preferences = $.toJSON( {
				languages: codes,
				comment: $form.find( 'textarea' ).val()
			} );

			reqCreate = api.postWithToken( 'translatesandbox', {
				action: 'translatesandbox',
				'do': 'create',
				username: username,
				email: email,
				password: password
			} );

			reqCreate.fail( handleAccountCreationFailure );
			reqCreate.done( function () {
				var reqLogin,
					api = new mw.Api();

				// This should not fail on normal conditions
				reqLogin = api.login( username, password );
				reqLogin.done( function () {
					var reqOptions,
						api = new mw.Api();

					reqOptions = api.postWithToken( 'options', {
						action: 'options',
						optionname: 'translate-sandbox',
						optionvalue: preferences
					} );

					reqOptions.done( function () {
						window.location.reload();
					} );
				} );
			} );
		}

		// Set the thing up
		initSubmitButtonDisabler();
		initDeveloperSignup();
		initLanguageSelector();

		$form.on( 'submit', handleSubmit );
	};
}( jQuery, mediaWiki ) );
