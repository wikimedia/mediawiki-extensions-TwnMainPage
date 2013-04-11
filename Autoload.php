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
$wgAutoloadClasses['UserStats'] = "$dir/UserStats.php";
$wgAutoloadClasses['SpecialTwnMainPage'] = "$dir/specials/SpecialTwnMainPage.php";