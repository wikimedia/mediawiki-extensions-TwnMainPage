<?php
/**
 * JavaScript and CSS resource definitions.
 *
 * @file
 * @license GPL2+
 */

$resourcePaths = array(
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'TwnMainPage'
);

$wgResourceModules['ext.translate.mainpage'] = array(
	'scripts' => 'resources/js/ext.translate.mainpage.js',
	'dependencies' => array(
		'ext.translate.mainpage.icons',
		'ext.uls.interface',
		'ext.translate.groupselector',
		'ext.translate.statsbar',
		'mediawiki.util',
		'mediawiki.Uri',
	),
	'messages' => array(
		'twnmp-show-more-projects',
	),
) + $resourcePaths;

$wgResourceModules['ext.translate.mainpage.styles'] = array(
	'styles' => 'resources/css/ext.translate.mainpage.css',
) + $resourcePaths;

$wgResourceModules['ext.translate.mainpage.icons'] = array(
	'class' => 'ResourceLoaderProjectIconsModule'
);
