<?php
/**
 * JavaScript and CSS resource definitions.
 *
 * @file
 * @license GPL-2.0+
 */

$resourcePaths = [
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'TwnMainPage'
];

$wgResourceModules['ext.translate.mainpage'] = [
	'scripts' => 'resources/js/ext.translate.mainpage.js',
	'dependencies' => [
		'ext.translate.groupselector',
		'ext.translate.mainpage.icons',
		'ext.translate.statsbar',
		'ext.uls.interface',
		'ext.uls.pt',
		'mediawiki.Uri',
		'mediawiki.language',
		'mediawiki.util',
		'mediawiki.ui.button',
	],
	'messages' => [
		'twnmp-show-more-projects',
		'twnmp-select-target-language',
		'percent',
	],
	'position' => 'bottom',
] + $resourcePaths;

$wgResourceModules['ext.translate.mainpage.signup'] = [
	'scripts' => 'resources/js/ext.translate.mainpage.signup.js',
	'dependencies' => [
		'ext.uls.mediawiki',
		'mediawiki.api',
		'mediawiki.api.login',
		'json',
	],
	'messages' => [
		'twnmp-signup-error-invalidusername',
		'twnmp-signup-error-nonfreeusername',
		'twnmp-signup-error-invalidpassword',
		'twnmp-signup-error-invalidemail',
		'twnmp-signup-error-other',
		'twnmp-signup-error-unknown',
	],
	'position' => 'bottom',
] + $resourcePaths;

$wgResourceModules['ext.translate.mainpage.styles'] = [
	'styles' => 'resources/css/ext.translate.mainpage.css',
	'position' => 'top',
] + $resourcePaths;

$wgResourceModules['ext.translate.mainpage.icons'] = [
	'class' => 'ResourceLoaderProjectIconsModule',
	'position' => 'bottom',
];
