<?php
/**
 * Just hooks.
 *
 * @file
 * @author Niklas Laxström
 * @license GPL-2.0+
 */

class TwnMainPageHooks {
	public static function setup() {
		global $wgMainPageImages, $wgExtensionAssetsPath;
		$wgMainPageImages[] = [
			'url' => "$wgExtensionAssetsPath/TwnMainPage/resources/banners/dance.jpg",
			'attribution' => '<a href="http://www.flickr.com/photos/ldhendrix/7389351416/">' .
				'CC-BY ldhendrix</a>',
		];
	}

	public static function onUnitTestsList( &$files ) {
		$dir = new RecursiveDirectoryIterator( __DIR__ . '/tests/phpunit' );
		$ite = new RecursiveIteratorIterator( $dir );
		$matches = new RegexIterator( $ite, '/.*Test\.php/', RegexIterator::GET_MATCH );
		foreach ( $matches as $file ) {
			$files = array_merge( $files, $file );
		}
	}
}
