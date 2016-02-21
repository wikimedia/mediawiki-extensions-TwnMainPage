<?php
if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'TwnMainPage' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['TwnMainPage'] = __DIR__ . '/i18n';
	$wgExtensionMessagesFiles['TwnMainPageAlias'] = __DIR__ . '/MainPage.alias.php';
	/*wfWarn(
		'Deprecated PHP entry point used for TwnMainPage extension. ' .
		'Please use wfLoadExtension instead, see ' .
		'https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);*/

	return;
} else {
	die( 'This version of the TwnMainPage extension requires MediaWiki 1.25+' );
}
