<?php

if (!defined ('TYPO3_MODE')) {
	die('Access denied.');
}

$tempColumns = array(
	'tx_kurzfields_office_number' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:kurzfields/locallang_db.xml:fe_users.tx_kurzfields_office_number',
		'config' => Array (
			'type' => 'input',
			'size' => '4',
			'max' => '4',
			'eval' => 'int',
			'checkbox' => '0',
			'range' => Array (
				'upper' => '9999',
				'lower' => '0'
			),
			'default' => 0
		)
	),
	'tx_kurzfields_personnel_number' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:kurzfields/locallang_db.xml:fe_users.tx_kurzfields_personnel_number',
		'config' => Array (
			'type' => 'input',
			'size' => '7',
			'max' => '7',
			'eval' => 'int',
			'checkbox' => '0',
			'range' => Array (
				'upper' => '9999999',
				'lower' => '0'
			),
			'default' => 0
		)
	),
);


t3lib_div::loadTCA('fe_users');
t3lib_extMgm::addTCAcolumns('fe_users', $tempColumns, 1);
t3lib_extMgm::addToAllTCAtypes('fe_users', 'tx_kurzfields_office_number;;;;1-1-1, tx_kurzfields_personnel_number');

?>
