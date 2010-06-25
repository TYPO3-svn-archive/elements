<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

$extensionName = t3lib_div::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature = strtolower($extensionName) . '_first';

Tx_Extbase_Utility_Extension::registerPlugin($_EXTKEY,'First','Elements');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Elements');
t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform.xml');

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY] = 'layout,select_key,pages,recursive';
?>
