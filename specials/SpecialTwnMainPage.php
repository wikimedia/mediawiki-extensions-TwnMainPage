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
	protected $maxProjectTiles = 8;

	function __construct() {
		parent::__construct( 'TwnMainPage' );
	}

	public function getDescription() {
		return $this->msg( 'twnmp-mainpage' )->text();
	}

	protected function getProjectHandler() {
		if ( !isset( $this->projectHandler ) ) {
			$this->projectHandler = new ProjectHandler();
		}

		return $this->projectHandler;
	}

	public function execute( $parameters ) {
		$out = $this->getOutput();
		$skin = $this->getSkin();
		$user = $this->getUser();
		$request = $this->getRequest();

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
		$out->addJsConfigVars( 'maxProjectTiles', $this->maxProjectTiles );

		$out->addHTML( $out->headElement( $skin ) );

		$this->makeContent();

		// Enable this if you need useful debugging information
		// $out->addHtml( MWDebug::getDebugHTML( $this->getContext() ) );
		wfRunHooks( 'BeforePageDisplay', array( &$out, &$skin ) );
		$out->addHTML( $skin->bottomScripts() );
		$out->addHTML( '</body></html>' );
	}

	public function makeContent() {
		$out = $this->getOutput();

		$out->addHTML( Html::openElement(
			'div',
			array( 'class' => 'grid twn-mainpage' )
		) );
		$out->addHTML( $this->header() );
		$out->addHTML( $this->banner() );
		$out->addHTML( $this->searchBar() );
		$out->addHTML( $this->projectSelector() );
		$out->addHTML( $this->footer() );
		$out->addHTML( Html::closeElement( 'div' ) ); // grid twn-mainpage
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
				'id' => 'twnmp-search-field',
				// @todo move to JS, placeholders are not supported in IE
				'placeholder' => $this->msg( 'twnmp-search-placeholder' )->text(),
				'type' => 'search',
				'name' => 'query',
				'dir' => $this->getLanguage()->getDir(),
			) );

		$out .= Html::element( 'input',
			array(
				'name' => 'language',
				'value' => $this->getLanguage()->getCode(),
				'type' => 'hidden',
			) );

		$out .= Html::element( 'button',
			array(
				'class' => 'blue button',
				'type' => 'submit',
				'id' => 'twnmp-search-button',
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

		$handler = $this->getProjectHandler();
		$projects = $handler->getProjects();
		$language = $this->getLanguage()->getCode();
		MessageGroupStats::setTimeLimit( 1 );
		$stats = MessageGroupStats::forLanguage( $language );
		$handler->sortByPriority( $projects, $language, $stats );

		$tiles = array();

		foreach ( $projects as $group ) {
			$tiles[] = $this->makeGroupTile( $group, $stats[$group->getId()] );
			if ( count( $tiles ) === $this->maxProjectTiles ) {
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
		$statsHtml = '';

		// If this is the source language, show the number of messages.
		// Else we load stats and statsbar with JavaScript on the client.
		if (
			$uiLanguage === $groupLanguage &&
			// This can be null if we don't have stats available. And numParams
			// throws ugly notice if we pass null to it.
			$stats[MessageGroupStats::TOTAL] !== null
		) {
			$statsHtml = $this->msg( 'twn-mainpage-total-messages-in-language' )
				->numParams( $stats[MessageGroupStats::TOTAL] )
				->escaped();
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

		$class = 'project-icon-' . Sanitizer::escapeClass( $id );
		$image = Html::element( 'div', array( 'class' => $class ) );
		$label = htmlspecialchars( $group->getLabel( $this->getContext() ) );

		$msggroupid = htmlspecialchars( $id );
		$out = <<<HTML
<div class="three columns twn-mainpage-project-tile">
	<div class="project-tile $linked" $dataUrl data-msggroupid="$msggroupid">
		<div class="row project-top">
			<div class="project-icon four columns">$image</div>
			<div class="project-content eight columns">
				<div class="row project-name" dir="auto">$label</div>
				<div class="project-stats">
					<div class="row project-statsbar"></div>
					<div class="row project-statstext">$statsHtml</div>
				</div>
			</div>
		</div>
		<div class="row project-actions hide">
			{$this->getProjectActions( $id )}
		</div>
	</div>
</div>
HTML;

		return $out;
	}

	/**
	 * @param string $id Message group id
	 * @return string HTML
	 */
	protected function getProjectActions( $id ) {
		$user = $this->getUser();
		$title = SpecialPage::getTitleFor( 'Translate' );

		$view = Html::element( 'a', array(
			'class' => 'translate',
			'href' => $title->getLocalUrl( array( 'group' => $id ) )
		), $this->msg( 'twnmp-view-link' )->text() );

		$translate = Html::element( 'a', array(
			'class' => 'translate',
			'href' => $title->getLocalUrl( array( 'group' => $id ) )
		), $this->msg( 'twnmp-translate-link' )->text() );

		$proofread = Html::element( 'a', array(
			'class' => 'proofread',
			'href' => $title->getLocalUrl( array( 'group' => $id, 'action' => 'proofread' ) )
		), $this->msg( 'twnmp-proofread-link' )->text() );

		if ( $user->isAnon() || TranslateSandbox::isSandboxed( $user ) ) {
			return <<<HTML
<div class="twelve columns action">$view</div>

HTML;

		} else {
			return <<<HTML
<div class="six columns action">$translate</div>
<div class="six columns action">$proofread</div>

HTML;
		}
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
		$add = Title::newFromText( 'Special:MyLanguage/Translating:New_project' )
			->getFullUrl();

		$out = Html::element(
			'a',
			array(
				'class' => 'row twn-mainpage-add-project',
				'href' => $add
			),
			$this->msg( 'twnmp-add-project' )->text()
		);

		$out .= Html::openElement( 'div', array( 'class' => 'row twn-mainpage-footer' ) );
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
			'href' => Title::newFromText( 'Support' )->getLocalUrl(),
		), $this->msg( 'twnmp-bottom-support' )->text() );
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
			// @todo FIXME: This has awful performance
			if ( Language::isKnownLanguageTag( $row->lang ) ) {
				$count++;
			}
		}

		return $count;
	}

	// Callback for CachedStat
	public static function getTwnStats( ProjectHandler $handler ) {
		$projects = count( $handler->getProjects() );
		$translators = SiteStats::numberingroup( 'translator' );
		$messages = count( MessageIndex::singleton()->retrieve() );
		$languages = self::numberOfLanguages( 180 );

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
			'translators' => TwnUserStats::getTranslationRankings( $code, $period ),
			'proofreaders' => TwnUserStats::getProofreadRankings( $code, $period ),
		);
	}

	public function twnStats() {
		$stale = 60 * 60 * 6;
		$expired = 60 * 60 * 24;
		$handler = $this->getProjectHandler();

		$cacher = new CachedStat( 'twnstats', $stale, $expired,
			array( 'SpecialTwnMainPage::getTwnStats', $handler ), 'allow miss' );
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
					$fmtValue = number_format( $value / 1000, $digits );
					$fmtValue = $this->msg( 'twnmp-stats-number-k' )->numParams( $fmtValue )->plain();
				} else {
					$fmtValue = $lang->formatNum( $value );
				}

				$value = htmlspecialchars( $value );
				$text = $this->msg( $column )->numParams( $value )->escaped();

				$out .= <<<HTML
<div class="four columns">
	<div class="stats-tile" id="$column">
		<div class="stats-number">$fmtValue</div>
		<div class="stats-text">$text</div>
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
			return $this->loggedInWidget();
		} else {
			return $this->loginForm();
		}
	}

	/**
	 * Form that allows users to signup via sandbox.
	 */
	public function loginForm() {
		$this->getOutput()->addModules( 'ext.translate.mainpage.signup' );

		$languageCode = $this->getLanguage()->getCode();
		$languageName = TranslateUtils::getLanguageName( $languageCode, $languageCode );

		$defaultLanguage = Xml::checkLabel(
			$languageName,
			'signuplanguage',
			'language-' . $languageCode,
			true,
			array( 'data-code' => $languageCode )
		);
		$username = Html::element( 'input', array(
			'class' => 'eleven columns required',
			'name' => 'wpName',
			'autocomplete' => 'off',
			'required',
			'placeholder' => $this->msg( 'twnmp-signup-username-placeholder' )->text(),
		) );
		$password = Html::element( 'input', array(
			'class' => 'eleven columns required',
			'name' => 'wpPassword',
			'autocomplete' => 'off',
			'type' => 'password',
			'required',
			'placeholder' => $this->msg( 'twnmp-signup-password-placeholder' )->text(),
		) );
		$email = Html::element( 'input', array(
			'class' => 'eleven columns required',
			'name' => 'wpEmail',
			'autocomplete' => 'off',
			'type' => 'email',
			'required',
			'placeholder' => $this->msg( 'twnmp-signup-email-placeholder' )->text(),
		) );
		$reasonInput = Html::element( 'textarea', array(
			'class' => 'eleven columns required',
			'name' => 'reason',
			'rows' => '4',
			'required',
		) );

		$contents = <<<HTML
	<h1 class="row only-dev hide">
		{$this->msg( 'twnmp-join-community' )->escaped()}
	</h1>
	<div class="row only-dev hide label">
		{$this->msg( 'twnmp-join-community-desc' )->escaped()}
	</div>
	<h1 class="row only-nondev">
		{$this->msg( 'twnmp-become-translator' )->escaped()}
	</h1>
	<h2 class="row only-nondev">
		{$this->msg( 'twnmp-choose-languages-you-know' )->escaped()}
	</h2>
	<ul class="row signup-languages only-nondev autonym">
		<li>
			$defaultLanguage
		</li>
	</ul>
	<div class="row only-nondev">
		<div class="eight columns">
			<div class="signup-language-selector">
				{$this->msg( 'twnmp-choose-another-language' )->escaped()}
			</div>
		</div>
	</div>
	<h2 class="row">
		{$this->msg( 'twnmp-choose-fill-account-details' )->text()}
	</h2>
	<div class="row">$username</div>
	<div class="twnmp-signup-error eleven columns hide"></div>
	<div class="row">$password</div>
	<div class="twnmp-signup-error eleven columns hide"></div>
	<div class="row">$email</div>
	<div class="twnmp-signup-error eleven columns hide"></div>
	<div class="row label only-dev hide">
		{$this->msg( 'twnmp-join-community-reason' )->escaped()}
	</div>
	<div class="row only-dev hide">$reasonInput</div>
	<div class="row">
		<button class="six columns green button" type="submit">
			{$this->msg( 'twnmp-create-account-button' )->escaped()}
		</button>
		<button class="four columns button offset-by-one only-dev cancel hide">
			{$this->msg( 'twnmp-create-account-cancel' )->escaped()}
		</button>
	</div>
	<div class="row dev-signup only-nondev">
		<a>{$this->msg( 'twnmp-join-community-info' )->escaped()}</a>
	</div>
HTML;

		$token = Html::hidden( 'wpSandboxToken', ApiTranslateSandbox::getToken() );

		$action = SpecialPage::getTitleFor( 'Userlogin' )->getLocalUrl(
			array(
				'returnto' => 'Special:MainPage',
				'type' => 'signup'
			)
		);

		$out = Html::rawElement( 'form',
			array( 'class' => 'five columns main-widget login-widget',
				'method' => 'post',
				'action' => $action,
			),
			"\n\t$token\n$contents\n"
		);

		return "\n$out\n";
	}

	public function loggedInWidget() {
		$languageCode = $this->getLanguage()->getCode();
		$languageName = TranslateUtils::getLanguageName( $languageCode, $languageCode );

		$groupsSourceLanguage = MessageGroups::haveSingleSourceLanguage(
			MessageGroups::getAllGroups()
		);

		$link = Html::element( 'a', array(
			'href' => SpecialPage::getTitleFor( 'LanguageStats' )->getLocalUrl(),
		), $this->msg( 'twnmp-your-view-language-stats' )->text() );

		if ( TranslateSandbox::isSandboxed( $this->getUser() ) ) {
			$subtitleClass = 'for-sandbox';
			$subtitle = '';
			$rows = $this->getSandboxRows();
		} elseif ( $groupsSourceLanguage === $languageCode ) {
			$subtitleClass = 'for-all-languages';
			$subtitle = $this->msg( 'twnmp-your-translations-stats-all-languages' )->escaped();
			$rows = $this->getTranslationStatsRows( '' );
		} else {
			$subtitleClass = Sanitizer::escapeClass( "for-language-$languageCode" );
			$subtitle = htmlspecialchars( $languageName );
			$rows = $this->getTranslationStatsRows( $languageCode );
		}

		$email = $this->getUser()->getEmail();
		$avatar = 'https://secure.gravatar.com/avatar/' . md5( strtolower( $email ) );
		$background = "background-image: url('$avatar?d=mm');";
		$background = htmlspecialchars( $background );
		$background = "style=\"$background\"";

		return <<<HTML

<div class="five columns main-widget stats-widget">
	<div class="row user-stats-title" $background>
		<h2>
			{$this->msg( 'twnmp-your-translations-stats' )->escaped()}
		</h2>
		<div class="subtitle $subtitleClass">$subtitle</div>
	</div>
	$rows
	<div class="row langstats-link">$link</div>
</div>

HTML;
	}

	/**
	 * Gets data and formats language stats row. Use empty string to
	 * get stats for all languages.
	 * @param string $languageForStats Language code or empty string.
	 * @return string HTML
	 */
	public function getTranslationStatsRows( $languageForStats ) {
		$stale = 60 * 5;
		$expired = 60 * 60 * 12;
		$cacher = new CachedStat( "userstats-$languageForStats", $stale, $expired,
			array(
				'SpecialTwnMainPage::getUserStats',
				$languageForStats,
				30
			),
			'allow miss'
		);
		$statsArray = $cacher->get();
		if ( $statsArray === null ) {
			$statsArray = array(
				'translators' => array(),
				'proofreaders' => array(),
			);
		}

		if ( $languageForStats === '' ) {
			$translationStatsRankingMsg = 'twnmp-translations-translator-ranking-source';
			$languageName = '';
		} else {
			$translationStatsRankingMsg = 'twnmp-translations-translator-ranking';
			$languageName = TranslateUtils::getLanguageName( $languageForStats, $languageForStats );
		}

		$myuser = $this->getUser()->getName();

		$out = Html::openElement( 'form', array(
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
				$out .= Html::element(
					'div',
					array( 'class' => 'count' ),
					$this->getLanguage()->formatNum( $count )
				);
				$out .= Html::element(
					'div',
					array( 'class' => 'count-description' ),
					$this->msg( 'twnmp-translations-per-month' )->text()
				);

				// @todo When refactoring, $languageName should not be used
				// when using the message for the source page
				$msg = $this->msg( $translationStatsRankingMsg, $myuser )
					->numParams( $i, $translators )
					->params( $languageName )
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

		// Proofreading row
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
				$out .= Html::element(
					'div',
					array( 'class' => 'count' ),
					$this->getLanguage()->formatNum( $count )
				);
				$out .= Html::element(
					'div',
					array( 'class' => 'count-description' ),
					$this->msg( 'twnmp-reviews-per-month' )->text()
				);

				// @todo When refactoring, $languageName should not be used
				// when using the message for the source page
				$msg = $this->msg( $translationStatsRankingMsg, $myuser )
					->numParams( $i, $translators )
					->params( $languageName )
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

		return $out;
	}

	public function getSandboxRows() {
		global $wgTranslateSandboxLimit;

		$store = new TranslationStashStorage( wfGetDB( DB_SLAVE ) );
		$count = count( $store->getTranslations( $this->getUser() ) );

		if ( $count < $wgTranslateSandboxLimit ) {
			$button = $this->msg( 'twnmp-translate-button' )->escaped();
			$message = $this->msg( 'twnmp-sandboxed' )->escaped();
		} else {
			$button = $this->msg( 'twnmp-view-button' )->escaped();
			$message = $this->msg( 'twnmp-sandboxed-limit' )->escaped();
		}

		$count = $this->getLanguage()->formatNum( $count );
		$count = htmlspecialchars( $count );

		$action = SpecialPage::getTitleFor( 'TranslationStash' )->getLocalUrl();
		$action = htmlspecialchars( $action );

		return <<<HTML

<form class="row ranking" action="$action">
	<div class="eight columns">
		<div class="count">$count</div>
		<div class="count-description">
			{$this->msg( 'twnmp-translations-in-sandbox' )->escaped()}
		</div>
	</div>
	<div class="four columns">
		<button type="submit" class="button green">$button</button>
	</div>
</form>
<div class="row sandbox-message">$message</div>

HTML;
	}
}
