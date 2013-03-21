<?php
/**
 * Special:MainPage special page.
 *
 * @file
 * @author Niklas Laxström
 * @author Santhosh Thottingal
 * @license GPL2+
 */

/**
 * Provides the main page with stats and stuff.
 *
 * @ingroup SpecialPage
 */
class SpecialTwnMainPage extends SpecialPage {

	function __construct() {
		parent::__construct( 'TwnMainPage' );
	}

	public function getDescription() {
		return $this->msg( 'twnmp-mainpage' );
	}

	public function execute( $parameters ) {
		$this->setHeaders();
		$out = $this->getOutput();
		$out->setArticleBodyOnly( true );
		$out->addModules( 'ext.translate.mainpage' );
		$out->addHtml( $out->headElement( $this->getSkin() ) );
		$out->addHTML( Html::openElement( 'div', array(
				'class' => 'grid twn-mainpage',
		) ) );
		$out->addHTML( $this->header() );
		$out->addHTML( $this->banner() );
		$out->addHTML( $this->searchBar() );
		$out->addHTML( $this->projectSelector() );
		$out->addHTML( $this->footer() );
		$out->addHtml( '</body></html>' );
	}

	public function header() {
		$out = Html::openElement( 'div', array( 'class' => 'row twn-mainpage-header' ) );
		$out .= Html::openElement( 'div', array( 'class' => 'ten columns twn-mainpage-title' ) );
		$out .= Html::element( 'div',
			array(
				'class' => 'twn-brand-name',
			)
			, 'translatewiki.net' );
		$out .= Html::element( 'div',
			array(
				'class' => 'twn-brand-motto',
			)
			, 'Opensource translation community' );
		$out .= Html::closeElement( 'div' );
		$out .= Html::element( 'span',
			array(
				'class' => 'uls-trigger column',
			)
			, 'English' );
		$out .= Html::element( 'a',
			array(
				'class' => 'login column text-right',
			)
			, 'Login' );
		$out .= Html::closeElement( 'div' );
		return $out;
	}

	public function searchBar() {
		$out = Html::openElement( 'div', array( 'class' => 'row twn-mainpage-search' ) );
		$out .= Html::element( 'span',
			array(
				'class' => 'search-label',
			) );
		$out .= Html::element( 'input',
			array(
				'class' => 'ten columns searchbox',
				'placeholder' => 'Find and fix translations'
			) );

		$out .= Html::element( 'button',
			array(
				'class' => 'one column end blue button',
			),
			'Find' );
		$out .= Html::closeElement( 'div' );
		return $out;
	}

	public function projectSelector() {
		$out = Html::element( 'div', array( 'class' => 'row twn-mainpage-project-selector-title' ),
			'Choose a project to translate' );
		$out .= Html::openElement( 'div', array( 'class' => 'row twn-mainpage-project-tiles' ) );
		$out .= Html::openElement( 'div', array( 'class' => 'three columns twn-mainpage-project-tile' ) );
		$out .= Html::closeElement( 'div' );
		$out .= Html::openElement( 'div', array( 'class' => 'three columns twn-mainpage-project-tile' ) );
		$out .= Html::closeElement( 'div' );
		$out .= Html::openElement( 'div', array( 'class' => 'three columns twn-mainpage-project-tile' ) );
		$out .= Html::closeElement( 'div' );
		$out .= Html::openElement( 'div', array( 'class' => 'three columns twn-mainpage-project-tile' ) );
		$out .= Html::closeElement( 'div' );
		$out .= Html::closeElement( 'div' );
		return $out;
	}

	public function banner() {
		$out = Html::openElement( 'div', array( 'class' => 'row twn-mainpage-banner' ) );
		$out .= $this->twnStats();
		$out .= $this->userWidget();
		$out .= Html::closeElement( 'div' );
		return $out;
	}

	public function footer() {
		$out = Html::openElement( 'div', array( 'class' => 'row twn-mainpage-footer' ) );
		$out .= Html::element( 'a', array( 'class' => 'three column' ), 'About' );
		$out .= Html::element( 'a', array( 'class' => 'three column' ), 'Languages supported' );
		$out .= Html::element( 'a', array( 'class' => 'three column' ), 'Special pages' );
		$out .= Html::element( 'a', array( 'class' => 'three column' ), 'Help' );
		$out .= Html::closeElement( 'div' );
		return $out;
	}

	public function numberOfLanguages( $period ) {
		global $wgTranslateMessageNamespaces;

		$dbr = wfGetDB( DB_SLAVE );
		$tables = array( 'recentchanges' );
		$fields = array( 'substring_index(rc_title, \'/\', -1) as lang, count(rc_id) as count' );
		$conds = array(
			'rc_title' . $dbr->buildLike( $dbr->anyString(), '/', $dbr->anyString() ),
			'rc_namespace' => $wgTranslateMessageNamespaces,
			'rc_timestamp > ' . $dbr->timestamp( TS_DB, wfTimeStamp( TS_UNIX ) - 60 * 60 * 24 * $period ),
			'rc_bot' => 0,
		);
		$options = array( 'GROUP BY' => 'lang', 'HAVING' => 'count > 20' );

		$res = $dbr->select( $tables, $fields, $conds, __METHOD__, $options );

		$count = 0;
		foreach ( $res as $row ) {
			if ( Language::isKnownLanguageTag( $row->lang ) ) {
				$count++;
			}
		}

		return $count;
	}

	public function twnStats() {
		$lang = $this->getLanguage();

		$groups = MessageGroups::getGroupStructure();
		$count = 0;
		foreach ( $groups as $mixed ) {
			if ( is_array( $mixed ) ) {
				$group = array_shift( $mixed );
			} else {
				$group = $mixed;
			}

			if ( $group->getIcon() !== null ) {
				$count++;
			}
		}

		// Rows x columns
		$data = array(
			array(
				'twnmp-s-projects' => $count,
				'twnmp-s-translators' => SiteStats::numberingroup( 'translator' ),
				'twnmp-s-messages' => count( MessageIndex::singleton()->retrieve() ),
			),
			array(
				null,
				null,
				'twnmp-s-languages' => $this->numberOfLanguages( 30 ),
			)
		);

		$out = '';
		$out .= '<div class="six columns twn-mainpage-stats-tiles">';

		foreach ( $data as $rows ) {
			$out .= '<div class="row stats-tile-row">';
			foreach ( $rows as $column => $value ) {
				if ( $value === null ) {
					$out .= <<<HTML
<div class="four columns">
	<div class=stats-tile unused></div>
</div>
HTML;
					continue;
				}

				if ( $value > 1000 ) {
					$digits = 3 - ceil( log( $value, 100 ) );
					$value = number_format( $value / 1000, $digits );
					$value = $lang->formatNum( $value ) . 'k';
				} else {
					$value = $lang->formatNum( $value );
				}

				$value = htmlspecialchars( $value );
				$text = $this->msg( $column )->escaped();

				$out .= <<<HTML
<div class="four columns">
	<div class=stats-tile>
		<div class=stats-number>$value</div>
		<div class=stats-text>$text</div>
	</div>
</div>
HTML;

			}

			$out .= '</div>';
		}

		$out .= '</div>';

		return $out;
	}

	public function userWidget() {
		if ( $this->getUser()->isLoggedIn() ) {
			return $this->userStats();
		} else {
			return $this->loginForm();
		}
	}

	public function loginForm() {
		$out = Html::element( 'div', array( 'class' => 'five columns main-widget login-widget' ) );
		return $out;
	}

	public function userStats() {
		$languageCode =  $this->getLanguage()->getCode();
		$languageName = TranslateUtils::getLanguageName( $languageCode );

		$out = Html::openElement( 'div', array( 'class' => 'five columns main-widget stats-widget' ) );

		$out .= Html::openElement( 'div', array( 'class' => 'row' ) );
		$out .= Html::element( 'h2', array(), 'Your translation statistics' );
		$out .= Html::element( 'div', array(), $languageName );
		$out .= Html::closeElement( 'div' );


		$myuser = $this->getUser()->getName();


		$out .= Html::openElement( 'div', array( 'class' => 'row ranking' ) );
		$out .= Html::openElement( 'div', array( 'class' => 'row eight columns' ) );
		$stats = UserStats::getTranslationRankings( $languageCode, 30 );
		$i = 1;
		$translators = count( $stats );
		foreach ( $stats as $user => $count ) {
			if ( $user === $myuser ) {
				$out .= Html::element( 'div', array( 'class' => 'count' ), $count );
				$out .= Html::element( 'div', array( 'class' => 'count-description' ), 'Translations/month' );
				$out .= Html::element( 'div', array( 'class' => 'rank-description' ), "Ranked $i of $translators translators" );
				$out .= Html::element( 'div', array( 'class' => 'language-description' ), "in $languageName" );
				break;
			}
			$i++;
		}
		$out .= Html::closeElement( 'div' );
		$out .= Html::openElement( 'div', array( 'class' => 'four columns' ) );
		$out .= Html::element( 'button', array( 'class' => 'button green' ), 'Translate' );
		$out .= Html::closeElement( 'div' );
		$out .= Html::closeElement( 'div' );

		$out .= Html::openElement( 'div', array( 'class' => 'row ranking' ) );
		$out .= Html::openElement( 'div', array( 'class' => 'row eight columns' ) );
		$stats = UserStats::getProofreadRankings( $languageCode, 30 );
		$i = 1;
		$translators = count( $stats );
		foreach ( $stats as $user => $count ) {
			if ( $user === $myuser ) {
				$out .= Html::element( 'div', array( 'class' => 'count' ), $count );
				$out .= Html::element( 'div', array( 'class' => 'count-description' ), 'Revisions/month' );
				$out .= Html::element( 'div', array( 'class' => 'rank-description' ), "Ranked $i of $translators translators" );
				$out .= Html::element( 'div', array( 'class' => 'language-description' ), "in $languageName" );
				break;
			}
			$i++;
		}
		$out .= Html::closeElement( 'div' );
		$out .= Html::openElement( 'div', array( 'class' => 'four columns' ) );
		$out .= Html::element( 'button', array( 'class' => 'button green' ), 'Proofread' );
		$out .= Html::closeElement( 'div' );
		$out .= Html::closeElement( 'div' );

		$out .= Html::closeElement( 'div' );
		return $out;
	}
}
