<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_elements_domain_model_task'] = Array(
	'ctrl' => $TCA['tx_elements_domain_model_task']['ctrl'],
	'interface' => Array(
		'showRecordFieldList' => 'hidden, task_content'
	),
	'columns' => Array(
		'sys_language_uid' => Array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => Array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => Array(
					Array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages', -1),
					Array('LLL:EXT:lang/locallang_general.php:LGL.default_value', 0)
				),
			),
		),
		'l18n_parent' => Array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tt_news',
				'foreign_table_where' => 'AND tt_news.uid=###REC_FIELD_l18n_parent### AND tt_news.sys_language_uid IN (-1,0)',
			)

		),
		'l18n_diffsource' => Array(
			'config'=>Array(
				'type'=>'passthrough')
		),
		't3ver_label' => Array (
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => Array (
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => Array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => Array(
				'type' => 'check'
			)
		),
		'uuid' => Array(
			'exclude' => 0,
			'label' => 'LLL:EXT:elements/Resources/Private/Language/locallang_db.xml:tx_elements_domain_model_task.uuid',
			'config' => Array(
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim,required',
				'max' => 140,
			)
		),
		'task_content' => Array(
			'exclude' => 0,
			'label' => 'LLL:EXT:elements/Resources/Private/Language/locallang_db.xml:tx_elements_domain_model_task.taskContent',
			'config' => Array(
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim,required',
				'max' => 140,
			)
		),
		'user' => Array(
			'exclude' => 0,
			'label' => 'LLL:EXT:elements/Resources/Private/Language/locallang_db.xml:tx_elements_domain_model_task.user',
			'config' => Array(
				'type' => 'input',
				'eval' => 'trim,required',
				'size' => '20',
				'max' => 140,
			)
		),
	),
	'types' => array(
		'1' => array('showitem' => 'hidden, task_content, user')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	)
);

$TCA['tx_elements_domain_model_tag'] = Array(
	'ctrl' => $TCA['tx_elements_domain_model_tag']['ctrl'],
	'interface' => Array(
		'showRecordFieldList' => 'hidden, name'
	),
	'columns' => Array(
		'sys_language_uid' => Array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => Array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => Array(
					Array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages', -1),
					Array('LLL:EXT:lang/locallang_general.php:LGL.default_value', 0)
				),
			),
		),
		'l18n_parent' => Array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tt_news',
				'foreign_table_where' => 'AND tt_news.uid=###REC_FIELD_l18n_parent### AND tt_news.sys_language_uid IN (-1,0)',
			)

		),
		'l18n_diffsource' => Array(
			'config'=>Array(
				'type'=>'passthrough')
		),
		't3ver_label' => Array (
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => Array (
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => Array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => Array(
				'type' => 'check'
			)
		),
		'uuid' => Array(
			'exclude' => 0,
			'label' => 'LLL:EXT:elements/Resources/Private/Language/locallang_db.xml:tx_elements_domain_model_tag.uuid',
			'config' => Array(
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim,required',
				'max' => 140,
			)
		),
		'name' => Array(
			'exclude' => 0,
			'label' => 'LLL:EXT:elements/Resources/Private/Language/locallang_db.xml:tx_elements_domain_model_tag.name',
			'config' => Array(
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim,required',
				'max' => 140,
			)
		),
		'user' => Array( // TODO FIXME Wrong config for user...
			'exclude' => 0,
			'label' => 'LLL:EXT:elements/Resources/Private/Language/locallang_db.xml:tx_elements_domain_model_tag.user',
			'config' => Array(
				'type' => 'input',
				'size' => '20',
				'eval' => 'trim,required',
				'max' => 140,
			)
		),
	),
	'types' => array(
		'1' => array('showitem' => 'hidden, name, user')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	)
);

?>
