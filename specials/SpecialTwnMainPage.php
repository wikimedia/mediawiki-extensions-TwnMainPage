<?php
/**
 * Special:MainPage special page.
 *
 * @file
 * @author Niklas Laxström
 * @author Santhosh Thottingal
 * @license GPL-2.0+
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
		return $this->msg( 'twnmp-mainpage' )->text();
	}

	public function execute( $parameters ) {
		$out = $this->getOutput();
		$user = $this->getUser();
		$request = $this->getRequest();

		// Temporary hack to display the main page only to logged in
		// users while the signup track is not complete. But guard it
		// with beta url parameter for testing.
		if ( !$user->isLoggedIn() && !$request->getBool( 'beta' ) ) {
			$out->redirect( Title::newFromText( 'Main_Page' ) );
		}

		$this->setHeaders();
		$out->setArticleBodyOnly( true );
		// Default modules copied from OutputPage::addDefaultModules
		$out->addModules( array(
			'mediawiki.user',
			'mediawiki.page.startup',
			'mediawiki.page.ready',
		) );

		$out->addModuleStyles( 'jquery.uls.grid' );
		$out->addModuleStyles( 'ext.translate.mainpage.styles' );
		$out->addModules( 'ext.translate.mainpage' );
		// Forcing wgULSPosition to personal to mimick that behavior regardless
		// of the position of the uls trigger in other pages.
		$out->addJsConfigVars( 'wgULSPosition', 'personal' );

		$out->addHTML( $out->headElement( $this->getSkin() ) );
		$out->addHTML( Html::openElement(
			'div',
			array( 'class' => 'grid twn-mainpage' )
		) );
		$out->addHTML( $this->header() );
		$out->addHTML( $this->banner() );
		$out->addHTML( $this->searchBar() );
		$out->addHTML( $this->projectSelector() );
		$out->addHTML( $this->footer() );
		$out->addHTML( $out->getBottomScripts() );
		$out->addHTML( Html::closeElement( 'div' ) ); // grid twn-mainpage
		// Enable this if you need useful debugging information
		// $out->addHtml( MWDebug::getDebugHTML( $this->getContext() ) );
		$out->addHTML( '</body></html>' );
	}

	public function header() {
		global $wgSitename;

		$sitenameEsc = htmlspecialchars( $wgSitename );
		$sitemottoEsc = $this->msg( 'twnmp-brand-motto' )->escaped();

		$code = $this->getLanguage()->getCode();
		$languageName = TranslateUtils::getLanguageName( $code, $code );
		$uls = Html::element( 'span', array( 'class' => 'uls-trigger' ), $languageName );

		$userLink = '';

		$user = $this->getUser();
		if ( $user->isLoggedIn() ) {
			$params = array(
				'class' => 'login username text-right',
				'href' => $user->getUserPage()->getLocalUrl(),
			);
			$userLink = Html::element( 'a', $params, $user->getName() );

			$logout = SpecialPage::getTitleFor( 'Userlogout' );
			$params = array(
				'class' => 'logout text-right',
				'href' => $logout->getLocalUrl( array( 'returnto' => 'Special:MainPage' ) ),
			);
			$loginout = Html::element( 'a', $params, $this->msg( 'twnmp-logout' )->text() );
		} else {
			$login = SpecialPage::getTitleFor( 'Userlogin' );
			$params = array(
				'class' => 'login text-right',
				'href' => $login->getLocalUrl( array( 'returnto' => 'Special:MainPage' ) ),
			);
			$loginout = Html::element( 'a', $params, $this->msg( 'twnmp-login' )->text() );
		}

		$html = <<<HTML
<div class="row twn-mainpage-header">
	<div class="eight columns twn-mainpage-title">
		<div class="twn-brand-name">$sitenameEsc</div>
		<div class="twn-brand-motto">$sitemottoEsc</div>
	</div>
	<div class="four columns twn-mainpage-personal-actions">
		$uls
		$userLink
		$loginout
	</div>
</div>
HTML;

		return $html;
	}

	public function searchBar() {
		$out = Html::openElement( 'form',
			array(
				'class' => 'row twn-mainpage-search',
				'action' => SpecialPage::getTitleFor( 'SearchTranslations' )->getLocalUrl(),
			) );
		$out .= Html::element( 'input',
			array(
				'class' => 'ten columns searchbox',
				// @todo move to JS, placeholders are not supported in IE
				'placeholder' => $this->msg( 'twnmp-search-placeholder' )->text(),
				'type' => 'search',
				'name' => 'query',
				'dir' => $this->getLanguage()->getDir(),
			) );

		$out .= Html::element( 'button',
			array(
				'class' => 'columns end blue button',
				'type' => 'submit',
			),
			$this->msg( 'twnmp-search-button' )->text() );
		$out .= Html::closeElement( 'form' );

		return $out;
	}

	public function projectSelector() {
		$out = Html::element( 'div', array( 'class' => 'row twn-mainpage-project-selector-title' ),
			$this->msg( 'twnmp-search-choose-project' )->text() );

		$groupsSourceLanguage = MessageGroups::haveSingleSourceLanguage(
			MessageGroups::getAllGroups()
		);
		$languageCode = $this->getLanguage()->getCode();

		$out .= Html::openElement(
			'div',
			array(
				'class' => 'row twn-mainpage-project-tiles',
				'data-sourcelanguage' => $groupsSourceLanguage,
				'data-same-sourcelanguage' => $groupsSourceLanguage === $languageCode,
			)
		);

		$projects = ProjectHandler::getProjects();
		$language = $this->getLanguage()->getCode();
		MessageGroupStats::setTimeLimit( 1 );
		$stats = MessageGroupStats::forLanguage( $language );
		ProjectHandler::sortByPriority( $projects, $language, $stats );

		$tiles = array();

		foreach ( $projects as $group ) {
			$tiles[] = $this->makeGroupTile( $group, $stats[$group->getId()] );
			if ( count( $tiles ) === 8 ) {
				break;
			}
		}

		$out .= implode( "\n\n", $tiles );
		$out .= Html::closeElement( 'div' );

		return $out;
	}

	protected function makeGroupTile( MessageGroup $group, array $stats ) {
		$id = $group->getId();
		$uiLanguage = $this->getLanguage()->getCode();
		$groupLanguage = $group->getSourceLanguage();
		$acts = '';
		if ( $uiLanguage === $groupLanguage ) {
			$stats = Html::element(
				'div',
				array( 'class' => 'row project-statsbar' ),
				$this->msg( 'twn-mainpage-total-messages-in-language' )
					->numParams( $stats[MessageGroupStats::TOTAL] )
					->text()
			);
		} else {
			$statsbar = StatsBar::getNew( $id, $uiLanguage, $stats );
			$translated = $stats[MessageGroupStats::TRANSLATED];
			$proofread = $stats[MessageGroupStats::PROOFREAD];
			if ( $stats[MessageGroupStats::TOTAL] ) {
				$translated = round( 100 * $translated / $stats[MessageGroupStats::TOTAL] );
				$proofread = round( 100 * $proofread / $stats[MessageGroupStats::TOTAL] );
			}
			$stats = $statsbar->getHtml( $this->getContext() );

			$acts = Html::element(
				'span',
				array( 'class' => 'translate' ),
				$this->msg( 'percent' )->numParams( $translated )->text()
			);
			$acts .= Html::element(
				'span',
				array( 'class' => 'proofread' ),
				$this->msg( 'percent' )->numParams( $proofread )->text()
			);
		}

		// Approximate project page links while we don't have config value for them
		$projectPage = Title::newFromText( "Translating:{$group->getLabel()}" );
		$dataUrl = $linked = '';
		if ( $projectPage->exists() ) {
			$dataUrl = str_replace(
				'X',
				htmlspecialchars( $projectPage->getLocalUrl() ),
				'data-url="X"'
			);
			$linked = 'linked';
		}

		$image = Html::element( 'div', array( 'class' => "project-icon-$id" ) );
		$label = htmlspecialchars( $group->getLabel( $this->getContext() ) );


		$title = SpecialPage::getTitleFor( 'Translate' );
		$translate = Html::element( 'a', array(
			'class' => 'translate',
			'href' => $title->getLocalUrl( array( 'group' => $id ) )
		), $this->msg( 'twnmp-translate-button' )->text() );

		$proofread = Html::element( 'a', array(
			'class' => 'proofread',
			'href' => $title->getLocalUrl( array( 'group' => $id, 'action' => 'proofread' ) )
		), $this->msg( 'twnmp-proofread-button' )->text() );

		$out = <<<HTML
<div class="three columns twn-mainpage-project-tile">
	<div class="project-tile $linked" $dataUrl>
		<div class="row project-top">
			<div class="project-icon four columns">$image</div>
			<div class="project-content eight columns">
				<div class="row project-name" dir="auto">$label</div>
				<div class="row project-statsbar">$stats</div>
				<div class="row project-stats">$acts</div>
			</div>
		</div>
		<div class="row project-actions hide">
			<div class="six columns action">$translate</div>
			<div class="six columns action">$proofread</div>
		</div>
	</div>
</div>
HTML;

		return $out;
	}

	public function banner() {
		global $wgMainPageImages;

		$image = array();
		$images = array_values( $wgMainPageImages );
		$imageIndex = date( 'z' ) % count( $images );
		if ( isset( $images[$imageIndex] ) ) {
			$image = $images[$imageIndex];
		}

		$bannerAttribs = array( 'class' => 'row twn-mainpage-banner' );
		if ( isset( $image['url'] ) ) {
			$url = $image['url'];
			$bannerAttribs['style'] = "background-image: url($url);";
		}

		$out = Html::openElement( 'div', $bannerAttribs );
		$out .= $this->twnStats();

		if ( isset( $image['attribution'] ) ) {
			$out .= Html::rawElement( 'div', array( 'class' => 'banner-attribution' ),
				$this->msg( 'twnmp-bannerwho', $image['attribution'] )->plain()
			);
		}

		$out .= $this->userWidget();

		$out .= Html::closeElement( 'div' );

		return $out;
	}

	public function footer() {
		$out = Html::openElement( 'div', array( 'class' => 'row twn-mainpage-footer' ) );
		$out .= Html::element( 'a', array(
			'class' => 'three column',
			'href' => Title::newFromText( 'Special:MyLanguage/Project:About' )->getLocalUrl(),
		), $this->msg( 'twnmp-bottom-about' )->text() );
		$out .= Html::element( 'a', array(
			'class' => 'three column',
			'href' => SpecialPage::getTitleFor( 'SupportedLanguages' )->getLocalUrl(),
		), $this->msg( 'twnmp-bottom-languages-supported' )->text() );
		$out .= Html::element( 'a', array(
			'class' => 'three column',
			'href' => SpecialPage::getTitleFor( 'Specialpages' )->getLocalUrl(),
		), $this->msg( 'twnmp-bottom-special-pages' )->text() );
		$out .= Html::element( 'a', array(
			'class' => 'three column',
			'href' => Title::newFromText( 'Translating:Index' )->getLocalUrl(),
		), $this->msg( 'twnmp-bottom-help' )->text() );
		$out .= Html::closeElement( 'div' );

		return $out;
	}

	public static function numberOfLanguages( $period ) {
		global $wgTranslateMessageNamespaces;

		$dbr = wfGetDB( DB_SLAVE );
		$tables = array( 'recentchanges' );
		$fields = array( 'substring_index(rc_title, \'/\', -1) as lang, count(rc_id) as count' );
		$conds = array(
			'rc_title' . $dbr->buildLike( $dbr->anyString(), '/', $dbr->anyString() ),
			'rc_namespace' => $wgTranslateMessageNamespaces,
			'rc_timestamp > ' . $dbr->timestamp( wfTimeStamp( TS_UNIX ) - 60 * 60 * 24 * $period ),
			'rc_bot' => 0,
		);
		$options = array( 'GROUP BY' => 'lang', 'HAVING' => 'count > 20' );

		$res = $dbr->select( $tables, $fields, $conds, __METHOD__, $options );

		$count = 0;
		foreach ( $res as $row ) {
			// TODO: this has awful performance
			if ( Language::isKnownLanguageTag( $row->lang ) ) {
				$count++;
			}
		}

		return $count;
	}

	// Callback for CachedStat
	public static function getTwnStats() {
		$projects = count( ProjectHandler::getProjects() );
		$translators = SiteStats::numberingroup( 'translator' );
		$messages = count( MessageIndex::singleton()->retrieve() );
		$languages = self::numberOfLanguages( 30 );

		return array(
			'projects' => $projects,
			'translators' => $translators,
			'messages' => $messages,
			'languages' => $languages,
		);
	}

	// Callback for CachedStat
	public static function getUserStats( $code, $period ) {
		return array(
			'translators' => UserStats::getTranslationRankings( $code, $period ),
			'proofreaders' => UserStats::getProofreadRankings( $code, $period ),
		);
	}

	public function twnStats() {
		$stale = 60 * 60 * 6;
		$expired = 60 * 60 * 24;
		$cacher = new CachedStat( 'atwnstats', $stale, $expired,
			array( 'SpecialTwnMainPage::getTwnStats' ), 'allow miss' );
		$stats = $cacher->get();

		$data = array(
			array( null, null, null ),
			array( null, null, null ),
		);

		if ( is_array( $stats ) ) {
			// Rows x columns
			$data = array(
				array(
					'twnmp-s-projects' => $stats['projects'],
					'twnmp-s-translators' => $stats['translators'],
					'twnmp-s-messages' => $stats['messages'],
				),
				array(
					null,
					null,
					'twnmp-s-languages' => $stats['languages'],
				)
			);
		}

		$out = '';
		$out .= '<div class="six columns twn-mainpage-stats-tiles">';

		$lang = $this->getLanguage();

		foreach ( $data as $rows ) {
			$out .= '<div class="row stats-tile-row">';
			foreach ( $rows as $column => $value ) {
				if ( $value === null ) {
					$out .= <<<HTML
<div class="four columns">
	<div class="stats-tile unused"></div>
</div>
HTML;
					continue;
				}

				if ( $value > 1000 ) {
					$digits = 3 - ceil( log( $value, 100 ) );
					$value = number_format( $value / 1000, $digits );
					$value = $this->msg( 'twnmp-stats-number-k' )->numParams( $value )->plain();
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
		$languageCode = $this->getLanguage()->getCode();
		$languageName = TranslateUtils::getLanguageName( $languageCode );

		// Shortcut for creating row elements
		$row = array( 'class' => 'row' );

		$out = Html::openElement( 'form',
			array( 'class' => 'five columns main-widget login-widget',
				'method' => 'post',
				'action' => SpecialPage::getTitleFor( 'Userlogin' )
					->getLocalUrl( array(
						'returnto' => 'Special:MainPage',
						'type' => 'signup' ) ),
			) );

		$out .= Html::hidden( 'wpSandboxToken', ApiTranslateSandbox::getToken() );
		$out .= Html::element( 'h1', $row, $this->msg( 'twnmp-become-translator' )->text() );
		$out .= Html::element(
			'h2',
			$row,
			$this->msg( 'twnmp-choose-languages-you-know' )->text()
		);
		$out .= Html::openElement( 'ul', array( 'class' => 'row signup-languages' ) );
		$out .= Html::openElement( 'li' );
		$out .= Xml::checkLabel( $languageName, 'signuplanguage', 'language-' . $languageCode, true );
		$out .= Html::closeElement( 'li' );
		$out .= Html::closeElement( 'ul' );
		$out .= Html::openElement( 'div', $row );
		$out .= Html::openElement( 'div', array( 'class' => 'eight columns' ) );
		$out .= Html::element(
			'div',
			array( 'class' => 'signup-language-selector' ),
			$this->msg( 'twnmp-choose-another-language' )->text()
		);
		$out .= Html::closeElement( 'div' );
		$out .= Html::closeElement( 'div' );
		$out .= Html::element(
			'h2',
			$row,
			$this->msg( 'twnmp-choose-fill-account-details' )->text()
		);
		$out .= Html::openElement( 'div', $row );
		$out .= Html::element( 'input', array(
			'class' => 'eleven columns',
			'name' => 'wpName',
			// @todo IE doesn't support placeholders
			'placeholder' => $this->msg( 'twnmp-signup-username-placeholder' )->text(),
		) );
		$out .= Html::closeElement( 'div' );

		$out .= Html::openElement( 'div', $row );
		$out .= Html::element( 'input', array(
			'class' => 'eleven columns',
			'name' => 'wpPassword',
			'type' => 'password',
			// @todo IE doesn't support placeholders
			'placeholder' => $this->msg( 'twnmp-signup-password-placeholder' )->text(),
		) );
		$out .= Html::closeElement( 'div' );

		$out .= Html::openElement( 'div', $row );
		$out .= Html::element( 'input', array(
			'class' => 'eleven columns',
			'name' => 'wpEmail',
			'type' => 'email',
			// @todo IE doesn't support placeholders
			'placeholder' => $this->msg( 'twnmp-signup-email-placeholder' )->text(),
		) );
		$out .= Html::closeElement( 'div' );

		$out .= Html::openElement( 'div', $row );
		$out .= Html::element( 'button', array(
			'class' => 'six columns green button offset-by-three',
		), $this->msg( 'twnmp-create-account-button' )->text() );
		$out .= Html::closeElement( 'div' );

		$out .= Html::closeElement( 'form' );

		return $out;
	}

	public function userStats() {
		$languageCode = $this->getLanguage()->getCode();
		$languageName = TranslateUtils::getLanguageName( $languageCode, $languageCode );

		$stale = 60 * 5;
		$expired = 60 * 60 * 12;
		$cacher = new CachedStat( "userstats-$languageCode", $stale, $expired,
			array( 'SpecialTwnMainPage::getUserStats', $languageCode, 30 ),
			'allow miss'
		);
		$statsArray = $cacher->get();
		if ( $statsArray === null ) {
			$statsArray = array(
				'translators' => array(),
				'proofreaders' => array(),
			);
		}

		$out = Html::openElement(
			'div',
			array( 'class' => 'five columns main-widget stats-widget' )
		);

		$out .= Html::openElement( 'div', array( 'class' => 'row user-stats-title' ) );
		$out .= Html::element(
			'h2',
			array(),
			$this->msg( 'twnmp-your-translations-stats' )->text()
		);
		$out .= Html::element( 'div', array(), $languageName );
		$out .= Html::closeElement( 'div' );

		$myuser = $this->getUser()->getName();

		$out .= Html::openElement( 'form', array(
			'class' => 'row ranking',
			'action' => SpecialPage::getTitleFor( 'Translate' )->getLocalUrl(),
		) );
		$out .= Html::hidden( 'action', 'translate' );
		$out .= Html::hidden( 'group', '!additions' );
		$out .= Html::openElement( 'div', array( 'class' => 'row eight columns' ) );
		$stats = $statsArray['translators'];
		$i = 1;
		$translators = count( $stats );
		foreach ( $stats as $user => $count ) {
			if ( $user === $myuser ) {
				$out .= Html::element( 'div', array( 'class' => 'count' ), $count );
				$out .= Html::element(
					'div',
					array( 'class' => 'count-description' ),
					$this->msg( 'twnmp-translations-per-month' )->text()
				);

				$msg = $this->msg( 'twnmp-translations-translator-ranking' )
					->params( $myuser, $i, $translators, $languageName )
					->plain();
				$wrap = new RawMessage( "<div class='rank-description'>$msg</div>" );
				$out .= $wrap->parse();
				break;
			}
			$i++;
		}
		$out .= Html::closeElement( 'div' );
		$out .= Html::openElement( 'div', array( 'class' => 'four columns' ) );
		$out .= Html::element( 'button', array(
			'id' => 'twnmp-translate',
			'type' => 'submit',
			'class' => 'button green'
		), $this->msg( 'twnmp-translate-button' )->text() );
		$out .= Html::closeElement( 'div' );
		$out .= Html::closeElement( 'form' );

		$out .= Html::openElement( 'form', array(
			'class' => 'row ranking',
			'action' => SpecialPage::getTitleFor( 'Translate' )->getLocalUrl(),
		) );
		$out .= Html::hidden( 'action', 'proofread' );
		$out .= Html::hidden( 'group', '!recent' );
		$out .= Html::openElement( 'div', array( 'class' => 'row eight columns' ) );
		$stats = $statsArray['proofreaders'];
		$i = 1;
		$translators = count( $stats );
		foreach ( $stats as $user => $count ) {
			if ( $user === $myuser ) {
				$out .= Html::element( 'div', array( 'class' => 'count' ), $count );
				$out .= Html::element(
					'div',
					array( 'class' => 'count-description' ),
					$this->msg( 'twnmp-reviews-per-month' )->text()
				);

				$msg = $this->msg( 'twnmp-translations-translator-ranking' )
					->params( $myuser, $i, $translators, $languageName )
					->plain();
				$wrap = new RawMessage( "<div class='rank-description'>$msg</div>" );
				$out .= $wrap->parse();

				break;
			}
			$i++;
		}
		$out .= Html::closeElement( 'div' );
		$out .= Html::openElement( 'div', array( 'class' => 'four columns' ) );
		$out .= Html::element( 'button', array(
			'id' => 'twnmp-proofread',
			'type' => 'submit',
			'class' => 'button green'
		), $this->msg( 'twnmp-proofread-button' )->text() );
		$out .= Html::closeElement( 'div' );
		$out .= Html::closeElement( 'form' );

		$out .= Html::openElement( 'div', array( 'class' => 'row langstats-link-row' ) );
		$out .= Html::element( 'a', array(
			'class' => 'twelve columns langstats-link',
			'href' => SpecialPage::getTitleFor( 'LanguageStats' )->getLocalUrl(),
		), $this->msg( 'twnmp-your-view-language-stats' )->text() );
		$out .= Html::closeElement( 'div' );
		$out .= Html::closeElement( 'div' );

		return $out;
	}
}
