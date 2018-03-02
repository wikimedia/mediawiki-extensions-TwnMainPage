<?php
/**
 * Just hooks.
 *
 * @file
 * @author Niklas Laxström
 * @license GPL-2.0-or-later
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
}
