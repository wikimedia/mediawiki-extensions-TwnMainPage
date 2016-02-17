<?php
if ( !defined( 'MEDIAWIKI' ) ) {
	die();
}
/**
 * Let our main page be usable and pretty.
 *
 * @file
 * @ingroup Extensions
 *
 * @author Niklas Laxström
 * @license GPL-2.0+
 */

$wgExtensionCredits['specialpage'][] = [
	'path' => __FILE__,
	'name' => 'Translatewiki.net main page',
	'version' => '2013-05-10',
	'author' => [ 'Niklas Laxström', 'Santhosh Thottingal' ],
	'descriptionmsg' => 'twnmp-desc',
];

$dir = __DIR__;

require_once "$dir/Resources.php";
require_once "$dir/Autoload.php";

$wgMessagesDirs['MainPage'] = "$dir/i18n";
$wgExtensionMessagesFiles['MainPageAlias'] = "$dir/MainPage.alias.php";

$wgSpecialPages['TwnMainPage'] = 'SpecialTwnMainPage';

$wgJobClasses['CachedStatJob'] = 'CachedStatJob';

$wgMainPageImages = [];

// Example
$wgExtensionFunctions[] = function () {
	global $wgMainPageImages, $wgExtensionAssetsPath;
	$wgMainPageImages[] = [
		'url' => "$wgExtensionAssetsPath/TwnMainPage/resources/banners/dance.jpg",
		'attribution' => '<a href="http://www.flickr.com/photos/ldhendrix/7389351416/">' .
			'CC-BY ldhendrix</a>',
	];

	return true;
};

$wgHooks['UnitTestsList'][] = function ( &$files ) {
	$dir = new RecursiveDirectoryIterator( __DIR__ . '/tests/phpunit' );
	$ite = new RecursiveIteratorIterator( $dir );
	$matches = new RegexIterator( $ite, '/.*Test\.php/', RegexIterator::GET_MATCH );
	foreach ( $matches as $file ) {
		$files = array_merge( $files, $file );
	}

	return true;
};
