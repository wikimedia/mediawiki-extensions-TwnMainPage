/**
 * Dynamic behavior for the main page
 * @author Niklas Laxström
 * @license GPL2+
 */
( function ( $, mw ) {
	'use strict';

	$( document ).ready( function () {
		var $tiles, language, $selector;

		$tiles = $( '.project-tile' );

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
					$tiles.trigger( 'dataready.translate' );
				} );
			} )
			.msggroupselector( {
				language: language,
				onSelect: mw.translate.changeGroup,
				position: {
					my: 'left bottom',
					at: 'right bottom+275'
				}
			} );

		// Replace the last shown tile with group selector.
		// Users without JavaScript will just see the original one.
		$tiles.eq( 7 ).replaceWith( $selector );
	} );
}( jQuery, mediaWiki ) );

// Sign up form
( function ( $, mw ) {
	'use strict';

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

	$( document ).ready( function () {
		var $form = $( '.login-widget' );

		signupLanguageSelector();

		$form.on( 'submit', function ( e ) {
			var options, req,
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
				window.alert( 'Failure' );
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
					window.alert( 'Failure2' );
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
		} );
	} );
}( jQuery, mediaWiki ) );
