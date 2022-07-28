<?php
/**
 * Special:MainPage special page.
 *
 * @file
 * @author Niklas Laxström
 * @author Santhosh Thottingal
 * @license GPL-2.0-or-later
 */

use MediaWiki\Extension\Translate\Services;
use MediaWiki\Extension\Translate\TranslatorSandbox\TranslationStashReader;
use MediaWiki\MainConfigNames;

/**
 * Provides the main page with stats and stuff.
 *
 * @ingroup SpecialPage
 */
class SpecialTwnMainPage extends SpecialPage {
	protected $maxProjectTiles = 8;
	/** @var TranslationStashReader */
	private $translationStashReader;

	public function __construct() {
		parent::__construct( 'TwnMainPage' );
		$this->translationStashReader = Services::getInstance()->getTranslationStashReader();
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

	protected function getStatsTiles( $stats ) {
		$data = [
			// Rows X cols
			[
				[
					'name' => 'twnmp-s-projects',
					'stats' => $stats['projects'],
					'url' => Title::makeTitle( NS_CATEGORY, 'Supported projects' )->getLocalURL(),
				],
				[
					'name' => 'twnmp-s-translators',
					'stats' => $stats['translators'],
					'url' => SpecialPage::getTitleFor( 'Activeusers' )->getLocalURL(),
				],
				[
					'name' => 'twnmp-s-messages',
					'stats' => $stats['messages'],
					'url' => SpecialPage::getTitleFor( 'Translate' )->getLocalURL(),
				],
			],
			[
				null,
				null,
				[
					'name' => 'twnmp-s-languages',
					'stats' => $stats['languages'],
					'url' => SpecialPage::getTitleFor( 'SupportedLanguages' )->getLocalURL(),
				],
			],
		];

		return $data;
	}

	public function execute( $parameters ) {
		$out = $this->getOutput();
		$skin = $this->getSkin();

		$this->setHeaders();
		$out->setArticleBodyOnly( true );
		$out->loadSkinModules( $skin );

		// Enable this if you need useful debugging information
		// $out->addHtml( MWDebug::getDebugHTML( $this->getContext() ) );
		Hooks::run( 'BeforePageDisplay', [ &$out, &$skin ] );
		$out->addModuleStyles( 'jquery.uls.grid' );
		$out->addModuleStyles( 'ext.translate.mainpage.styles' );
		$out->addModuleStyles( 'mediawiki.ui.button' );
		$out->addModuleStyles( 'ext.translate.mainpage.icons' );
		$out->addModules( 'ext.translate.mainpage' );
		// Forcing wgULSPosition to personal to mimick that behavior regardless
		// of the position of the uls trigger in other pages.
		$out->addJsConfigVars( 'wgULSPosition', 'personal' );
		$out->addJsConfigVars( 'maxProjectTiles', $this->maxProjectTiles );
		$out->addMeta( 'viewport', 'width=device-width, initial-scale=0.5' );
		// We very much do want this page to be indexed even though special pages normally aren't
		$out->setRobotPolicy( $this->getConfig()->get( MainConfigNames::DefaultRobotPolicy ) );

		// These add modules so this has to be called before headElement
		$output = $this->makeContent();

		$out->addHTML(
			$out->headElement( $skin ) .
			$output .
			$out->getBottomScripts() .
			 '</body></html>'
		);
	}

	public function makeContent() {
		$output = '';

		$output .= Html::openElement( 'div', [ 'class' => 'grid twn-mainpage' ] );
		$output .= $this->header();
		$output .= Html::openElement( 'main' );
		$output .= $this->banner();
		$output .= $this->searchBar();
		$output .= $this->projectSelector();
		$output .= $this->newProject();
		$output .= Html::closeElement( 'main' );
		$output .= $this->footer();
		$output .= Html::closeElement( 'div' );
		return $output;
	}

	public function header() {
		global $wgSitename;

		$sitenameEsc = htmlspecialchars( $wgSitename );
		$sitemottoEsc = $this->msg( 'twnmp-brand-motto' )->escaped();

		$code = $this->getLanguage()->getCode();
		$languageName = TranslateUtils::getLanguageName( $code, $code );
		$params = [
			'href' => '#',
			'class' => 'uls-trigger',
			'tabindex' => 0,
			'role' => 'button',
			'aria-haspopup' => 'true'
		];
		$uls = Html::element( 'a', $params, $languageName );

		$userLink = '';

		$user = $this->getUser();
		if ( $user->isRegistered() ) {
			$params = [
				'class' => 'login username text-right',
				'href' => $user->getUserPage()->getLocalURL(),
			];
			$userLink = Html::element( 'a', $params, $user->getName() );

			$logout = SpecialPage::getTitleFor( 'Userlogout' );
			$params = [
				'class' => 'logout text-right',
				'href' => $logout->getLocalURL( [ 'returnto' => 'Special:MainPage' ] ),
			];
			$loginout = Html::element( 'a', $params, $this->msg( 'twnmp-logout' )->text() );
		} else {
			$login = SpecialPage::getTitleFor( 'Userlogin' );
			$params = [
				'class' => 'login text-right',
				'href' => $login->getLocalURL( [ 'returnto' => 'Special:MainPage' ] ),
			];
			$loginout = Html::element( 'a', $params, $this->msg( 'twnmp-login' )->text() );
		}

		$html = <<<HTML
<header class="row twn-mainpage-header">
	<div class="seven columns twn-mainpage-title">
		<div class="twn-brand-name">$sitenameEsc</div>
		<div class="twn-brand-motto">$sitemottoEsc</div>
	</div>
	<div class="five columns twn-mainpage-personal-actions">
		$uls
		$userLink
		$loginout
	</div>
</header>
HTML;

		return $html;
	}

	public function searchBar() {
		$out = Html::openElement( 'form',
			[
				'class' => 'row twn-mainpage-search',
				'action' => SpecialPage::getTitleFor( 'SearchTranslations' )->getLocalURL(),
			] );

		$out .= Html::element( 'input',
			[
				'class' => 'ten columns searchbox',
				'id' => 'twnmp-search-field',
				// @todo move to JS, placeholders are not supported in IE
				'placeholder' => $this->msg( 'twnmp-search-placeholder' )->text(),
				'type' => 'search',
				'name' => 'query',
				'dir' => $this->getLanguage()->getDir(),
			] );

		$out .= Html::element( 'input',
			[
				'name' => 'language',
				'value' => $this->getLanguage()->getCode(),
				'type' => 'hidden',
			] );

		$out .= Html::element( 'button',
			[
				'class' => 'mw-ui-button mw-ui-progressive',
				'type' => 'submit',
				'id' => 'twnmp-search-button',
			],
			$this->msg( 'twnmp-search-button' )->text() );
		$out .= Html::closeElement( 'form' );

		return $out;
	}

	public function projectSelector() {
		$out = Html::element( 'div', [ 'class' => 'row twn-mainpage-project-selector-title' ],
			$this->msg( 'twnmp-search-choose-project' )->text() );

		$out .= Html::openElement(
			'div',
			[
				'class' => 'row twn-mainpage-project-tiles',
			]
		);

		$handler = $this->getProjectHandler();
		$projects = $handler->getProjects();
		$language = $this->getLanguage()->getCode();
		$stats = MessageGroupStats::forLanguage( $language, MessageGroupStats::FLAG_CACHE_ONLY );
		$handler->sortByPriority( $projects, $language, $stats );

		$tiles = [];

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

	public function newProject(): string {
		$add = Title::newFromText( 'Special:MyLanguage/Translating:New_project' )
			->getFullURL();

		$out = Html::element(
			'a',
			[
				'class' => 'row twn-mainpage-add-project',
				'href' => $add
			],
			$this->msg( 'twnmp-add-project' )->text()
		);

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
				htmlspecialchars( $projectPage->getLocalURL() ),
				'data-url="X"'
			);
			$linked = 'linked';
		}

		$escLang = htmlspecialchars( $groupLanguage );

		$class = 'project-icon-' . Sanitizer::escapeClass( $id );
		$image = Html::element( 'div', [ 'class' => $class ] );
		$label = htmlspecialchars( $group->getLabel( $this->getContext() ) );

		$msggroupid = htmlspecialchars( $id );
		$out = <<<HTML
<div class="three columns twn-mainpage-project-tile">
	<div class="project-tile $linked" $dataUrl data-lang="$escLang" data-msggroupid="$msggroupid"
		tabindex="0">
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
		<div class="row project-actions">
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

		$view = Html::element( 'a', [
			'class' => 'translate',
			'href' => $title->getLocalURL( [ 'group' => $id ] )
		], $this->msg( 'twnmp-view-link' )->text() );

		$translate = Html::element( 'a', [
			'class' => 'translate',
			'href' => $title->getLocalURL( [ 'group' => $id ] )
		], $this->msg( 'twnmp-translate-link' )->text() );

		$proofread = Html::element( 'a', [
			'class' => 'proofread',
			'href' => $title->getLocalURL( [ 'group' => $id, 'action' => 'proofread' ] )
		], $this->msg( 'twnmp-proofread-link' )->text() );

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

		$image = [];
		$images = array_values( $wgMainPageImages );
		$imageIndex = date( 'z' ) % count( $images );
		if ( isset( $images[$imageIndex] ) ) {
			$image = $images[$imageIndex];
		}

		$bannerAttribs = [ 'class' => 'row twn-mainpage-banner' ];
		if ( isset( $image['url'] ) ) {
			$url = $image['url'];
			$bannerAttribs['style'] = "background-image: url($url);";
		}

		$out = Html::openElement( 'div', $bannerAttribs );
		$out .= $this->twnStats();

		if ( isset( $image['attribution'] ) ) {
			$out .= Html::rawElement( 'div', [ 'class' => 'banner-attribution' ],
				$this->msg( 'twnmp-bannerwho' )->rawParams( $image['attribution'] )->escaped()
			);
		}

		$out .= $this->userWidget();

		$out .= Html::closeElement( 'div' );

		return $out;
	}

	public function footer() {
		$out = Html::openElement( 'footer' );
		$out .= Html::openElement( 'div', [ 'class' => 'row twn-mainpage-footer' ] );
		$out .= Html::element( 'a', [
			'class' => 'three column',
			'href' => Title::newFromText( 'Special:MyLanguage/Project:About' )->getLocalURL(),
		], $this->msg( 'twnmp-bottom-about' )->text() );
		$out .= Html::element( 'a', [
			'class' => 'three column',
			'href' => SpecialPage::getTitleFor( 'SupportedLanguages' )->getLocalURL(),
		], $this->msg( 'twnmp-bottom-languages-supported' )->text() );
		$out .= Html::element( 'a', [
			'class' => 'three column',
			'href' => Title::newFromText( 'Support' )->getLocalURL(),
		], $this->msg( 'twnmp-bottom-support' )->text() );
		$out .= Html::element( 'a', [
			'class' => 'three column',
			'href' => Title::newFromText( 'Translating:Index' )->getLocalURL(),
		], $this->msg( 'twnmp-bottom-help' )->text() );
		$out .= Html::closeElement( 'div' );

		global $wgFooterIcons;
		$skin = $this->getSkin();
		foreach ( $wgFooterIcons['poweredby'] as $icon ) {
			$out .= Html::openElement( 'div', [ 'class' => 'row twn-mainpage-poweredby' ] );
			$out .= $skin->makeFooterIcon( $icon, 'noicon' );
			$out .= Html::closeElement( 'div' );
		}

		$out .= Html::closeElement( 'footer' );

		return $out;
	}

	public static function numberOfLanguages( $period ) {
		global $wgTranslateMessageNamespaces;

		$dbr = wfGetDB( DB_REPLICA );
		$tables = [ 'recentchanges' ];
		$fields = [ 'substring_index(rc_title, \'/\', -1) as lang, count(rc_id) as count' ];
		$conds = [
			'rc_title' . $dbr->buildLike( $dbr->anyString(), '/', $dbr->anyString() ),
			'rc_namespace' => $wgTranslateMessageNamespaces,
			'rc_timestamp > ' . $dbr->timestamp( wfTimestamp( TS_UNIX ) - 60 * 60 * 24 * $period ),
			'rc_bot' => 0,
		];
		$options = [ 'GROUP BY' => 'lang', 'HAVING' => 'count > 20' ];

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

	/**
	 * Callback for CachedStat
	 * @param ProjectHandler $handler
	 * @return array
	 */
	public static function getTwnStats( ProjectHandler $handler ) {
		$projects = count( $handler->getProjects() );
		$translators = SiteStats::numberingroup( 'translator' );
		$messages = count( MessageIndex::singleton()->retrieve() );
		$languages = self::numberOfLanguages( 180 );

		return [
			'projects' => $projects,
			'translators' => $translators,
			'messages' => $messages,
			'languages' => $languages,
		];
	}

	/**
	 * Callback for CachedStat
	 * @param string $code
	 * @param int $period
	 * @return array
	 */
	public static function getUserStats( $code, $period ) {
		return [
			'translators' => TwnUserStats::getTranslationRankings( $code, $period ),
			'proofreaders' => TwnUserStats::getProofreadRankings( $code, $period ),
		];
	}

	public function twnStats() {
		$stale = 60 * 60 * 6;
		$expired = 60 * 60 * 24;
		$handler = $this->getProjectHandler();

		$cacher = new CachedStat( 'twnstats', $stale, $expired,
			[ 'SpecialTwnMainPage::getTwnStats', $handler ], 'allow miss' );
		$stats = $cacher->get();

		$data = [
			[ null, null, null ],
			[ null, null, null ],
		];

		if ( is_array( $stats ) ) {
			$data = $this->getStatsTiles( $stats );
		}

		$out = '';
		$out .= '<div class="six columns twn-mainpage-stats-tiles">';

		$lang = $this->getLanguage();

		foreach ( $data as $rows ) {
			$out .= '<div class="row stats-tile-row">';
			foreach ( $rows as $column ) {
				if ( $column === null ) {
					$out .= <<<HTML
<div class="four columns">
	<div class="stats-tile unused"></div>
</div>
HTML;
					continue;
				}
				$name = $column['name'];
				$value = $column['stats'];
				$url = htmlspecialchars( $column['url'] );

				if ( $value > 1000 ) {
					$digits = 3 - ceil( log( $value, 100 ) );
					$fmtValue = number_format( $value / 1000, $digits );
					$fmtValue = $this->msg( 'twnmp-stats-number-k' )->numParams( $fmtValue )->escaped();
				} else {
					$fmtValue = htmlspecialchars( $lang->formatNum( $value ) );
				}

				$text = $this->msg( $name )->numParams( $value )->escaped();

				$out .= <<<HTML
<div class="four columns">
		<div class="stats-tile" id="$name">
			<a href="$url"></a>
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
		if ( $this->getUser()->isRegistered() ) {
			return $this->loggedInWidget();
		} else {
			return $this->loginForm();
		}
	}

	/**
	 * Form that allows users to signup via sandbox.
	 * @return true
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
			[ 'data-code' => $languageCode ]
		);
		$username = Html::element( 'input', [
			'class' => 'twelve columns required',
			'name' => 'wpName',
			'autocomplete' => 'off',
			'required',
			'placeholder' => $this->msg( 'twnmp-signup-username-placeholder' )->text(),
		] );
		$password = Html::element( 'input', [
			'class' => 'twelve columns required',
			'name' => 'wpPassword',
			'autocomplete' => 'off',
			'type' => 'password',
			'required',
			'placeholder' => $this->msg( 'twnmp-signup-password-placeholder' )->text(),
		] );
		$email = Html::element( 'input', [
			'class' => 'twelve columns required',
			'name' => 'wpEmail',
			'autocomplete' => 'off',
			'type' => 'email',
			'required',
			'placeholder' => $this->msg( 'twnmp-signup-email-placeholder' )->text(),
		] );
		$reasonInput = Html::element( 'textarea', [
			'class' => 'twelve columns required',
			'name' => 'reason',
			'rows' => '4',
		] );

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
		<button class="signup-language-selector mw-ui-button" type="button">
			{$this->msg( 'twnmp-choose-another-language' )->escaped()}
		</button>
	</div>
	<h2 class="row">
		{$this->msg( 'twnmp-choose-fill-account-details' )->escaped()}
	</h2>
	<div class="row">$username</div>
	<div class="js-signup-err twnmp-signup-error hide"></div>
	<div class="row">$password</div>
	<div class="js-signup-err twnmp-signup-error hide"></div>
	<div class="row">$email</div>
	<div class="js-signup-err twnmp-signup-error hide"></div>
	<div class="row label only-dev hide">
		{$this->msg( 'twnmp-join-community-reason' )->escaped()}
	</div>
	<div class="row only-dev hide">$reasonInput</div>
	<div class="row">
		<button class="mw-ui-button mw-ui-progressive mw-ui-big" type="submit" id="twnmp-create-account">
			{$this->msg( 'twnmp-create-account-button' )->escaped()}
		</button>
		<button class="mw-ui-button mw-ui-big mw-ui-quiet only-dev cancel hide">
			{$this->msg( 'twnmp-create-account-cancel' )->escaped()}
		</button>
		<span class="twn-mainpage-loading-indicator hide"></span>
	</div>
	<div class="js-signup-err twnmp-signup-generic-error hide"></div>
	<div class="row dev-signup only-nondev">
		<a>{$this->msg( 'twnmp-join-community-info' )->escaped()}</a>
	</div>
HTML;

		$action = SpecialPage::getTitleFor( 'Userlogin' )->getLocalURL(
			[
				'returnto' => 'Special:MainPage',
				'type' => 'signup'
			]
		);

		$out = Html::rawElement( 'form',
			[ 'class' => 'five columns main-widget login-widget',
				'method' => 'post',
				'action' => $action,
			],
			"\n$contents\n"
		);

		return "\n$out\n";
	}

	public function loggedInWidget() {
		$languageCode = $this->getLanguage()->getCode();
		$languageName = TranslateUtils::getLanguageName( $languageCode, $languageCode );

		$groupsSourceLanguage = MessageGroups::haveSingleSourceLanguage(
			MessageGroups::getAllGroups()
		);

		$link = Html::element( 'a', [
			'href' => SpecialPage::getTitleFor( 'LanguageStats' )->getLocalURL(),
		], $this->msg( 'twnmp-your-view-language-stats' )->text() );

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
			[
				'SpecialTwnMainPage::getUserStats',
				$languageForStats,
				30
			],
			'allow miss'
		);
		$statsArray = $cacher->get();
		if ( $statsArray === null ) {
			$statsArray = [
				'translators' => [],
				'proofreaders' => [],
			];
		}

		if ( $languageForStats === '' ) {
			$translationStatsRankingMsg = 'twnmp-translations-translator-ranking-source';
			$languageName = '';
		} else {
			$translationStatsRankingMsg = 'twnmp-translations-translator-ranking';
			$languageName = TranslateUtils::getLanguageName( $languageForStats, $languageForStats );
		}

		$myuser = $this->getUser()->getName();

		$out = Html::openElement( 'form', [
			'class' => 'row ranking',
			'action' => SpecialPage::getTitleFor( 'Translate' )->getLocalURL(),
		] );
		$out .= Html::hidden( 'action', 'translate' );
		$out .= Html::hidden( 'group', '!additions' );
		$out .= Html::openElement( 'div', [ 'class' => 'row eight columns' ] );
		$stats = $statsArray['translators'];
		$i = 1;
		$translators = count( $stats );
		foreach ( $stats as $user => $count ) {
			if ( $user === $myuser ) {
				$out .= Html::element(
					'div',
					[ 'class' => 'count' ],
					$this->getLanguage()->formatNum( $count )
				);
				$out .= Html::element(
					'div',
					[ 'class' => 'count-description' ],
					$this->msg( 'twnmp-translations-per-month' )->numParams( $count )->text()
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
		$out .= Html::openElement( 'div', [ 'class' => 'four columns' ] );
		$out .= Html::element( 'button', [
			'id' => 'twnmp-translate',
			'type' => 'submit',
			'class' => 'mw-ui-button mw-ui-progressive'
		], $this->msg( 'twnmp-translate-button' )->text() );
		$out .= Html::closeElement( 'div' );
		$out .= Html::closeElement( 'form' );

		// Proofreading row
		$out .= Html::openElement( 'form', [
			'class' => 'row ranking',
			'action' => SpecialPage::getTitleFor( 'Translate' )->getLocalURL(),
		] );
		$out .= Html::hidden( 'action', 'proofread' );
		$out .= Html::hidden( 'group', '!recent' );
		$out .= Html::openElement( 'div', [ 'class' => 'row eight columns' ] );
		$stats = $statsArray['proofreaders'];
		$i = 1;
		$translators = count( $stats );
		foreach ( $stats as $user => $count ) {
			if ( $user === $myuser ) {
				$out .= Html::element(
					'div',
					[ 'class' => 'count' ],
					$this->getLanguage()->formatNum( $count )
				);
				$out .= Html::element(
					'div',
					[ 'class' => 'count-description' ],
					$this->msg( 'twnmp-reviews-per-month' )->numParams( $count )->text()
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
		$out .= Html::openElement( 'div', [ 'class' => 'four columns' ] );
		$out .= Html::element( 'button', [
			'id' => 'twnmp-proofread',
			'type' => 'submit',
			'class' => 'mw-ui-button mw-ui-progressive'
		], $this->msg( 'twnmp-proofread-button' )->text() );
		$out .= Html::closeElement( 'div' );
		$out .= Html::closeElement( 'form' );

		return $out;
	}

	public function getSandboxRows() {
		global $wgTranslateSandboxLimit;

		$count = count( $this->translationStashReader->getTranslations( $this->getUser() ) );

		if ( $count < $wgTranslateSandboxLimit ) {
			$button = $this->msg( 'twnmp-translate-button' )->escaped();
			$message = $this->msg( 'twnmp-sandboxed' )->numParams( $count )->escaped();
		} else {
			$button = $this->msg( 'twnmp-view-button' )->escaped();
			$message = $this->msg( 'twnmp-sandboxed-limit' )->escaped();
		}

		$count = $this->getLanguage()->formatNum( $count );
		$count = htmlspecialchars( $count );

		$action = SpecialPage::getTitleFor( 'TranslationStash' )->getLocalURL();
		$action = htmlspecialchars( $action );

		return <<<HTML

<form class="row ranking" action="$action">
	<div class="eight columns">
		<div class="count">$count</div>
		<div class="count-description">
			{$this->msg( 'twnmp-translations-in-sandbox' )->numParams( $count )->escaped()}
		</div>
	</div>
	<div class="four columns">
		<button type="submit" class="mw-ui-button mw-ui-progressive">$button</button>
	</div>
</form>
<div class="row sandbox-message">$message</div>

HTML;
	}

	protected function getGroupName() {
		return 'wiki';
	}
}
