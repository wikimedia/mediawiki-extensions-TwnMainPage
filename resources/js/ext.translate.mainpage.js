/*!
 * Dynamic behavior for the main page
 *
 * @author Niklas Laxström
 * @license GPL-2.0+
 */
( function ( $, mw ) {
	'use strict';

	/**
	 * Setup the stats tiles.
	 */
	function setupStatsTiles() {
		var $tiles = $( '.stats-tile' ).not( '.unused' );

		$tiles.click( function ( e ) {
			e.stopPropagation();
			location.href = $( this ).find( 'a' ).prop( 'href' );
		} );
	}

	/**
	 * Show the message group stats bars.
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

		mw.translate.loadLanguageStats( language ).done( function () {
			$tiles.each( function () {
				var stats, translated, proofread,
					$tile = $( this ),
					$statsbar = $tile.find( '.project-statsbar' ),
					msggroupid = $tile.data( 'msggroupid' );

				if ( !$statsbar.length ) {
					return;
				}

				$statsbar.languagestatsbar( {
					language: language,
					group: msggroupid
				} );

				stats = $statsbar.data( 'languagestatsbar' ).getStatsForGroup( msggroupid );

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
	 * If the source language of all projects is the same as the target language,
	 * provide a language selector to select the target language above the tiles.
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
						.addClass( 'same-language-uls-trigger mw-ui-button' )
				)
			);

		$( '.twn-mainpage-project-tiles' ).before( $sameLanguageULSTrigger );

		delete sameLanguageULSLanguages[ sourceLanguage ];
		$sameLanguageULSTrigger.uls( {
			languages: sameLanguageULSLanguages,
			top: '20%',
			onSelect: showMessageGroupStats,
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
	function setupProjectTiles() {
		var $selector,
			language = mw.config.get( 'wgUserLanguage' ),
			maxProjectTiles = mw.config.get( 'maxProjectTiles' ),
			$tiles = $( '.project-tile' );

		if ( $( '.twn-mainpage-project-tiles' ).data( 'same-sourcelanguage' ) ) {
			mw.loader.using( 'ext.uls.mediawiki', setupTargetLanguageSelector );
		} else {
			showMessageGroupStats( language );
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
				location.href = url;
			}
		} );

		// Make the whole action div clickable to override above
		$tiles.find( '.action' ).click( function ( e ) {
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
			.text( mw.msg( 'twnmp-show-more-projects' ) )
			.msggroupselector( {
				language: language,
				onSelect: function ( messageGroup ) {
					location.href = mw.util.getUrl(
						'Special:Translate',
						{ group: messageGroup.id }
					);
				},
				position: {
					my: 'left bottom',
					at: 'right bottom+275'
				}
			} );

		// Replace the last shown tile with group selector.
		// Users without JavaScript will just see the original one.
		$tiles.eq( maxProjectTiles - 1 ).replaceWith( $selector );

		// Add class to remove the triangle callout in the TWN Main Page.
		$( '.tux-groupselector' ).addClass( 'removecallout' );
	}

	$( document ).ready( setupStatsTiles );
	$( document ).ready( setupProjectTiles );
}( jQuery, mediaWiki ) );
