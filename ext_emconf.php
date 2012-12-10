<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Facebook Open Graph',
	'description' => 'Extension for adding Open Graph meta tags to pages.',
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
	'modify_tables' => 'pages, pages_language_overlay',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.2.0',
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