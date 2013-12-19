<?php
/**
 * Autoloader classes.
 *
 * @file
 * @author Niklas Laxström
 * @license GPL2+
 */

$dir = __DIR__;

$wgAutoloadClasses['CachedStat'] = "$dir/CachedStat.php";
$wgAutoloadClasses['CachedStatJob'] = "$dir/CachedStat.php";
$wgAutoloadClasses['ProjectHandler'] = "$dir/ProjectHandler.php";
$wgAutoloadClasses['ResourceLoaderProjectIconsModule'] =
	"$dir/ResourceLoaderProjectIconsModule.php";
$wgAutoloadClasses['TwnUserStats'] = "$dir/TwnUserStats.php";
$wgAutoloadClasses['SpecialTwnMainPage'] = "$dir/specials/SpecialTwnMainPage.php";
