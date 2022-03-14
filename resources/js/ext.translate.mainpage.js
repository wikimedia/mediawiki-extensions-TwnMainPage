/*!
 * Dynamic behavior for the main page
 *
 * @author Niklas Laxström
 * @license GPL-2.0-or-later
 */
( function ( $, mw ) {
	'use strict';

	var selectedLanguage = mw.config.get( 'wgUserLanguage' );

	/**
	 * Setup the stats tiles.
	 */
	function setupStatsTiles() {
		var $tiles = $( '.stats-tile' ).not( '.unused' );

		$tiles.on( 'click', function ( e ) {
			e.stopPropagation();
			location.href = $( this ).find( 'a' ).prop( 'href' );
		} );
	}

	/**
	 * Show the message group stats bars.
	 *
	 * @param {string} language
	 */
	function showMessageGroupStats( language ) {
		var $tiles = $( '.project-tile' );

		// Clear current numbers first so they don't stay if something goes wrong
		$tiles.each( function () {
			var $tile = $( this );

			$tile.find( '.project-statsbar' ).empty()
				.removeData( 'languagestatsbar' );
			$tile.find( '.project-statstext' ).empty();
			// Update the links to go to the correct language
			$tile.find( '.project-actions a' ).each( function () {
				var $this = $( this ),
					uri = new mw.Uri( $this.prop( 'href' ) );

				uri.extend( { language: language } );
				$this.prop( 'href', uri );
			} );
		} );

		mw.translate.loadMessageGroupStatsForLanguage( language ).done( function () {
			$tiles.each( function () {
				var stats, translated, proofread,
					$tile = $( this ),
					$statsbar = $tile.find( '.project-statsbar' ),
					msggroupid = $tile.data( 'msggroupid' ),
					sourceLanguage = $tile.data( 'lang' );

				if ( !$statsbar.length || sourceLanguage === language ) {
					return;
				}

				$statsbar.languagestatsbar( {
					language: language,
					group: msggroupid
				} );

				stats = $statsbar.data( 'languagestatsbar' ).getGroupStatsWithFallback();

				// Avoid NaNs on display
				if ( stats.total === 0 ) {
					return;
				}

				translated = 100 * stats.translated / stats.total;
				proofread = 100 * stats.proofread / stats.total;

				$tile.find( '.project-statstext' ).append(
					$( '<span>' ).addClass( 'translate' )
						.text( mw.msg( 'percent',
							mw.language.convertNumber( Math.round( translated ) ) ) ),
					$( '<span>' ).addClass( 'proofread' )
						.text( mw.msg( 'percent',
							mw.language.convertNumber( Math.round( proofread ) ) ) )
				);
			} );
		} );
	}

	/**
	 * Provide a language selector to select the target language above the tiles.
	 */
	function setupTargetLanguageSelector() {
		var $ulsTrigger = $( '<button>' )
			.text( $.uls.data.getAutonym( selectedLanguage ) )
			.addClass( 'same-language-uls-trigger mw-ui-button' );

		$( '.twn-mainpage-project-selector-title' ).append( $ulsTrigger );

		// Delayed setup
		$ulsTrigger.one( 'click', function () {
			mw.loader.using( 'ext.uls.mediawiki' ).done( function () {
				$ulsTrigger.uls( {
					onSelect: function ( code ) {
						selectedLanguage = code;
						$ulsTrigger.text( $.uls.data.getAutonym( code ) );
						showMessageGroupStats( code );
					},
					ulsPurpose: 'interface-language',
					quickList: mw.uls.getFrequentLanguageList()
				} );

				$ulsTrigger.trigger( 'click' );
			} );
		} );
	}

	/**
	 * Setup the project tiles in the main page.
	 */
	function setupProjectTiles() {
		var $selector,
			maxProjectTiles = mw.config.get( 'maxProjectTiles' ),
			$tiles = $( '.project-tile' );

		showMessageGroupStats( selectedLanguage );

		$tiles.on( 'click', function () {
			var url = $( this ).data( 'url' );

			if ( url ) {
				location.href = url;
			}
		} );

		// Make the whole action div clickable to override above
		$tiles.find( '.action' ).on( 'click', function ( e ) {
			e.stopPropagation();

			location.href = $( this ).find( 'a' ).prop( 'href' );
		} );

		if ( $tiles.length !== maxProjectTiles ) {
			// We have less than 8 tiles, so all are shown
			return;
		}

		// Prepare one project tile to be a message group selector.
		$selector = $( '<div>' )
			.addClass( 'project-tile more' )
			.text( mw.msg( 'twnmp-show-more-projects' ) );

		// Replace the last shown tile with group selector.
		// Users without JavaScript will just see the original one.
		$tiles.eq( maxProjectTiles - 1 ).replaceWith( $selector );

		$selector.one( 'click', function () {
			mw.loader.using( 'ext.translate.groupselector' ).done( function () {
				$selector.msggroupselector( {
					language: selectedLanguage,
					preventSelector: true,
					onSelect: function ( messageGroup ) {
						location.href = mw.util.getUrl(
							'Special:Translate',
							{
								group: messageGroup.id,
								language: selectedLanguage
							}
						);
					},
					position: {
						my: 'left bottom',
						at: 'right bottom+275'
					}
				} );

				// Add class to remove the triangle callout
				$( '.tux-groupselector' ).addClass( 'removecallout' );

				$selector.trigger( 'click' );
			} );
		} );
	}

	$( setupStatsTiles );
	$( setupProjectTiles );
	$( setupTargetLanguageSelector );
}( jQuery, mw ) );
