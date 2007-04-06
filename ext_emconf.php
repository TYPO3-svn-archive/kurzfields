<?php

########################################################################
# Extension Manager/Repository config file for ext: "kurzfields"
#
# Auto generated 14-02-2007 23:55
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Kurzfields',
	'description' => 'This extension adds the fields "office number" ("Dienststellennummer") and "personnel number" ("Personalnummer") to fe_users and provides an adapted HTML template for sr_feuser_register.',
	'category' => 'misc',
	'author' => 'Oliver Klee',
	'author_email' => 'typo3-coding@oliverklee.de',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'fe_users',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.1.0',
	'constraints' => array(
		'depends' => array(
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'sr_feuser_register' => '',
		),
	),
	'_md5_values_when_last_written' => 'a:8:{s:12:"ext_icon.gif";s:4:"1bdc";s:14:"ext_tables.php";s:4:"5eda";s:14:"ext_tables.sql";s:4:"6cbb";s:16:"locallang_db.xml";s:4:"cc4a";s:14:"doc/manual.sxw";s:4:"4836";s:19:"doc/wizard_form.dat";s:4:"7071";s:20:"doc/wizard_form.html";s:4:"57d6";s:44:"static/tx_srfeuserregister_pi1_css_tmpl.html";s:4:"a9fa";}',
	'suggests' => array(
	),
);

?>