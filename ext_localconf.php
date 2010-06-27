<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

/**
 * Configure the Plugin to call the 
 * right combination of Controller and Action according to
 * the user input (default settings, FlexForm, URL etc.)
 */
Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,				// The extension name (in UpperCamelCase) or the extension key (in lower_underscore)
	'first',					// A unique name of the plugin in UpperCamelCase
	array(					// An array holding the controller-action-combinations that are accessible 
		'Task' => 'index',      	// The first controller and its first action will be the default 
		'User' => 'index, new, create',
	),
	array(					// An array of non-cachable controller-action-combinations (they must already be enabled)
		'User' => 'index, new, create',
		'Task' => 'index'
	)
);
?>
