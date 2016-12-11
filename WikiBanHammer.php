<?php
if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'WikiBanHammer' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['WikiBanHammer'] = __DIR__ . '/i18n';
	/* wfWarn(
		'Deprecated PHP entry point used for SpamBlacklist extension. Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	); */
	return;
} else {
	die( 'This version of the WikiBanHammer extension requires MediaWiki 1.25+' );
}