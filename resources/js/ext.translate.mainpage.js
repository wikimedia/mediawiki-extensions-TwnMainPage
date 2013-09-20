/**
 * Dynamic behavior for the main page
 * @author Niklas Laxström
 * @license GPL2+
 */
( function ( $, mw ) {
	'use strict';

	/**
	 * If the source language of all projects are same as target language,
	 * provide a language selector to select target language.
	 */
	function setupTargetLanguageSelector() {
		var $sameLanguageULSTrigger,
			sourceLanguage = $( '.twn-mainpage-project-tiles' ).data( 'sourcelanguage' ),
			sameLanguageULSLanguages = $.extend( {}, mw.config.get( 'wgULSLanguages' ) );

		$sameLanguageULSTrigger = $( '<div>' )
			.addClass( 'row' )
			.append( $( '<div>' )
				.addClass( 'two columns' )
				.append(
					$( '<button>' )
						.text( mw.msg( 'twnmp-select-target-language' ) )
						.addClass( 'same-language-uls-trigger' )
				)
			);

		$( '.twn-mainpage-project-tiles' ).before( $sameLanguageULSTrigger );

		delete sameLanguageULSLanguages[sourceLanguage];
		$sameLanguageULSTrigger.uls( {
			languages: sameLanguageULSLanguages,
			top: '20%',
			onSelect: mw.uls.changeLanguage,
			quickList: function () {
				var frequentLanguageList = mw.uls.getFrequentLanguageList(),
					sourceLanguagePosition = $.inArray( sourceLanguage, frequentLanguageList );

				// Remove the source language from the usual common languages list
				frequentLanguageList.splice( sourceLanguagePosition, 1 );

				return frequentLanguageList;
			}
		} );
	}

	/**
	 * Setup the project tiles in the main page.
	 */
	function setupProjectTiles () {
		var language, $selector,
			$tiles = $( '.project-tile' );

		if ( $( '.twn-mainpage-project-tiles' ).data( 'same-sourcelanguage' ) ) {
			setupTargetLanguageSelector();
		}

		$tiles.hover(
			function () {
				$( this ).find( '.project-actions' ).removeClass( 'hide' );
			},
			function () {
				$( this ).find( '.project-actions' ).addClass( 'hide' );
			}
		);

		$tiles.click( function () {
			var url = $( this ).data( 'url' );
			if ( url ) {
				window.location.href = url;
			}
		} );

		if ( $tiles.length !== 8 ) {
			// We have less than 8 tiles, so all are shown
			return;
		}

		language = mw.config.get( 'wgUserLanguage' );

		// Prepare one project tile to be a message group selector.
		$selector = $( '<div>' )
			.addClass( 'project-tile more' )
			.text( mw.msg( 'twnmp-show-more-projects' ) )
			.one( 'click', function () {
				$.when(
					mw.translate.loadMessageGroups()
				).then( function () {
					$( '.project-tile.more' ).trigger( 'dataready.translate' );
				} );
			} )
			.msggroupselector( {
				language: language,
				onSelect: function ( messageGroup ) {
					window.location.href = new mw.Uri( mw.util.wikiGetlink( 'Special:Translate' ) )
						.extend( {
							group: messageGroup.id
						} );
				},
				position: {
					my: 'left bottom',
					at: 'right bottom+275'
				}
			} );

		// Replace the last shown tile with group selector.
		// Users without JavaScript will just see the original one.
		$tiles.eq( 7 ).replaceWith( $selector );
	}

	function signupLanguageSelector () {
		$( '.signup-language-selector' ).uls( {
			onSelect: function ( language ) {
				if ( $( '#language-' + language ).length ) {
					// Language already selected. Make sure it is checked.
					$( '#language-' + language ).prop( 'checked', true );
					return;
				}

				$( 'ul.signup-languages' )
					.append( $( '<li>' )
						.append(
							$( '<input>' )
								.attr( {
									id: 'language-' + language,
									type: 'checkbox',
									name: 'signuplanguage',
									checked: 'checked'
								} ),
							$( '<label>' )
								.text( $.uls.data.getAutonym( language ) )
								.attr( 'for', 'language-' + language )
						)
					);
			},
			quickList: function () {
				return mw.uls.getFrequentLanguageList();
			}
		} );
	}

	function loginFormHandler( e ) {
		var options, req,
			$form = $( '.login-widget' ),
			api = new mw.Api(),
			username = $form.find( 'input[name="wpName"]' ).val(),
			email = $form.find( 'input[name="wpEmail"]' ).val(),
			password = $form.find( 'input[name="wpPassword"]' ).val();

		e.preventDefault();

		options = {
			action: 'translatesandbox',
			'do': 'create',
			username: username,
			email: email,
			password: password,
			token: $form.find( 'input[name="wpSandboxToken"]' ).val()
		};

		req = api.post( options );
		req.fail( function () {
			window.alert( 'Account creation failed' );
		} );
		req.done( function () {
			var options, req,
				api = new mw.Api();

			options = {
				action: 'login',
				lgname: username,
				lgpassword: password
			};

			req = api.post( options );
			req.fail( function () {
				window.alert( 'Logging in failed' );
			} );
			req.done( function ( data ) {
				var req,
					api = new mw.Api();

				req = api.post( $.extend( {}, { lgtoken: data.login.token }, options ) );
				req.done( function () {
					window.location.reload();
				} );
			} );
		} );
	}

	$( document ).ready( function () {
		signupLanguageSelector();
		$( '.login-widget' ).on( 'submit', loginFormHandler );
		setupProjectTiles();
	} );
}( jQuery, mediaWiki ) );
