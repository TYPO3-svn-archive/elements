<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

$extensionName = t3lib_div::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature = strtolower($extensionName) . '_first';

Tx_Extbase_Utility_Extension::registerPlugin($_EXTKEY,'First','Elements');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Elements');
//t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform.xml');

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY] = 'layout,select_key,pages,recursive';

t3lib_extMgm::allowTableOnStandardPages('tx_elements_domain_model_task');
$TCA['tx_elements_domain_model_task'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:elements/Resources/Private/Language/locallang_db.xml:tx_elements_domain_model_task',
		'label' 			=> 'task_content',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> true,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/icon_tx_elements_domain_model_task.png'
	)
);

t3lib_extMgm::allowTableOnStandardPages('tx_elements_domain_model_tag');
$TCA['tx_elements_domain_model_tag'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:elements/Resources/Private/Language/locallang_db.xml:tx_elements_domain_model_tag',
		'label' 			=> 'name',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> true,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/icon_tx_elements_domain_model_tag.png'
	)
);
?>
