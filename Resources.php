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
		'ext.uls.mediawiki',
		'ext.uls.interface',
		'mediawiki.language',
		'mediawiki.Uri',
		'mediawiki.util',
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
		'ext.uls.interface',
		'mediawiki.api',
		'mediawiki.api.login',
		'jquery.json',
	),
) + $resourcePaths;

$wgResourceModules['ext.translate.mainpage.styles'] = array(
	'styles' => 'resources/css/ext.translate.mainpage.css',
) + $resourcePaths;

$wgResourceModules['ext.translate.mainpage.icons'] = array(
	'class' => 'ResourceLoaderProjectIconsModule'
);
