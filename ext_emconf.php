<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Facebook OpenGraph',
	'description' => 'Extension for adding OpenGraph meta tags to pages.',
	'category' => 'plugin',
	'author' => 'Matthias Nitsch',
	'author_email' => 'nitsch@clickstorm.de',
	'author_company' => 'clickstorm GmbH',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => '1',
	'createDirs' => '',
	'modify_tables' => 'pages',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.9.1',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.7',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);

?>