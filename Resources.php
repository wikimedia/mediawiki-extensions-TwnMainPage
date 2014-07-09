<?php
/**
 * JavaScript and CSS resource definitions.
 *
 * @file
 * @license GPL-2.0+
 */

$resourcePaths = array(
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'TwnMainPage'
);

$wgResourceModules['ext.translate.mainpage'] = array(
	'scripts' => 'resources/js/ext.translate.mainpage.js',
	'dependencies' => array(
		'ext.translate.groupselector',
		'ext.translate.mainpage.icons',
		'ext.translate.statsbar',
		'ext.uls.interface',
		'ext.uls.pt',
		'mediawiki.Uri',
		'mediawiki.language',
		'mediawiki.util',
		'mediawiki.ui.button',
	),
	'messages' => array(
		'twnmp-show-more-projects',
		'twnmp-select-target-language',
		'percent',
	),
) + $resourcePaths;

$wgResourceModules['ext.translate.mainpage.signup'] = array(
	'scripts' => 'resources/js/ext.translate.mainpage.signup.js',
	'dependencies' => array(
		'ext.uls.mediawiki',
		'mediawiki.api',
		'mediawiki.api.login',
		'json',
	),
	'messages' => array(
		'twnmp-signup-error-invalidusername',
		'twnmp-signup-error-nonfreeusername',
		'twnmp-signup-error-invalidpassword',
		'twnmp-signup-error-invalidemail',
		'twnmp-signup-error-other',
		'twnmp-signup-error-unknown',
	),
) + $resourcePaths;

$wgResourceModules['ext.translate.mainpage.styles'] = array(
	'styles' => 'resources/css/ext.translate.mainpage.css',
) + $resourcePaths;

$wgResourceModules['ext.translate.mainpage.icons'] = array(
	'class' => 'ResourceLoaderProjectIconsModule'
);
