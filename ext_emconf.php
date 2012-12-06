<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Facebook OpenGraph',
	'description' => 'Extension for adding OpenGraph meta tags to pages.',
	'category' => 'plugin',
	'author' => 'Matthias Nitsch',
	'author_email' => 'matthias.nitsch@me.com',
	'author_company' => 'clickstorm GmbH',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '1',
	'createDirs' => '',
	'modify_tables' => 'pages',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.0',
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