<?php

########################################################################
# Extension Manager/Repository config file for ext "elements".
#
# Auto generated 28-06-2010 08:46
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
	'author' => '',
	'author_email' => '',
	'author_company' => '',
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
	'_md5_values_when_last_written' => 'a:21:{s:17:"ext_localconf.php";s:4:"64db";s:14:"ext_tables.php";s:4:"50ca";s:14:"ext_tables.sql";s:4:"fb3c";s:37:"Classes/Controller/TaskController.php";s:4:"365b";s:37:"Classes/Controller/UserController.php";s:4:"312a";s:29:"Classes/Domain/Model/Task.php";s:4:"18ee";s:29:"Classes/Domain/Model/User.php";s:4:"a061";s:44:"Classes/Domain/Repository/TaskRepository.php";s:4:"70f9";s:41:"Classes/MVC/Controller/RESTController.php";s:4:"22e2";s:38:"Configuration/TypoScript/constants.txt";s:4:"05e5";s:34:"Configuration/TypoScript/setup.txt";s:4:"a7a7";s:34:"Documentation/Diagram/Elements.dot";s:4:"4a25";s:34:"Documentation/Diagram/Elements.pdf";s:4:"39fd";s:30:"Documentation/Diagram/Makefile";s:4:"488f";s:40:"Resources/Private/Language/locallang.xml";s:4:"09c3";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"5382";s:38:"Resources/Private/Layouts/default.html";s:4:"59ca";s:43:"Resources/Private/Templates/Task/index.html";s:4:"7590";s:41:"Resources/Private/Templates/Task/new.html";s:4:"17b6";s:43:"Resources/Private/Templates/User/index.html";s:4:"f41e";s:41:"Resources/Private/Templates/User/new.html";s:4:"bf27";}',
	'suggests' => array(
	),
);

?>