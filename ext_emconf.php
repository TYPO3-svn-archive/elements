<?php

########################################################################
# Extension Manager/Repository config file for ext "elements".
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Elements',
	'description' => 'Elementary Taskmanager',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '0.0.1',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Holger Reinecke',
	'author_email' => 'Holger.Reinecke@konplan.com',
	'author_company' => 'konplan',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.3.0-4.5.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:11:{s:12:"ext_icon.gif";s:4:"8c8e";s:17:"ext_localconf.php";s:4:"13ea";s:14:"ext_tables.php";s:4:"09ec";s:38:"Classes/Controller/StartController.php";s:4:"1b12";s:30:"Classes/Domain/Model/Start.php";s:4:"ade1";s:43:"Classes/ViewHelpers/DummytextViewHelper.php";s:4:"2158";s:38:"Classes/ViewHelpers/LoopViewHelper.php";s:4:"3545";s:40:"Resources/Private/Language/locallang.xml";s:4:"ca47";s:44:"Resources/Private/Layouts/defaultLayout.html";s:4:"bd6c";s:42:"Resources/Private/Partials/formErrors.html";s:4:"669f";s:44:"Resources/Private/Templates/Start/index.html";s:4:"4826";}',
);

?>
