<?php
// Add to localconf.php
//
// Not working completely... Stefan? Got a clue?
//
$TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT'] = Array(
	'preVars' => Array(
		Array(
			'noMatch' => 'bypass',
		),
	),
	'pagePath' => Array(
		'type' => 'user',
		'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
		'spaceCharacter' => '-',
		'languageGetVar' => 'L',
		'expireDays' => 30,
	),
	'postVarSets' => Array(
		'_DEFAULT' => Array(
			'task' => Array(
				Array(
					'GETvar' => 'tx_elements_first[action]',
				),
				Array(
					'GETvar' => 'tx_elements_first[controller]',
				),
			),
		),
	),
	'fileName' => Array(
		'index' => Array(
			'.json' => Array(
				'keyValues' => Array(
					'type' => 1278258337,
				),
			),
		),
	),
);
?>
