<?php
/**
 * JavaScript and CSS resource definitions.
 *
 * @file
 * @license GPL2+
 */

$resourcePaths = array(
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'MainPage'
);

$wgResourceModules['ext.translate.mainpage'] = array(
	'scripts' => 'resources/js/ext.translate.mainpage.js',
	'styles' => 'resources/css/ext.translate.mainpage.css',
	'dependencies' => array(
		'ext.translate.grid',
		'jquery.uls'
	),
	'position' =>'top',
) + $resourcePaths;
