<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 'Facebook Open Graph');

$tempColumns = Array (
	'tx_facebookopengraph_title' => Array (
		'exclude' => 1,
		'label' => 'LLL:EXT:facebook_opengraph/Resources/Private/Language/locallang_db.xlf:tx_facebookopengraph_title',
		'l10n_mode' => 'mergeIfNotBlank',
		'config' => Array (
			'type' => 'input',
			'size' => '30',
			'eval' => 'trim'
		)
	),
	'tx_facebookopengraph_type' => Array (
		'exclude' => 1,
		'label' => 'LLL:EXT:facebook_opengraph/Resources/Private/Language/locallang_db.xlf:tx_facebookopengraph_type',
		'l10n_mode' => 'mergeIfNotBlank',
		'config' => Array (
			'type'  => 'select',
			'items' => array (
				array('LLL:EXT:facebook_opengraph/Resources/Private/Language/locallang_db.xlf:tx_facebookopengraph_type.div_activities', '--div--'),
				array('activity', 'activity'),
				array('sport', 'sport'),
				array('LLL:EXT:facebook_opengraph/Resources/Private/Language/locallang_db.xlf:tx_facebookopengraph_type.div_business', '--div--'),
				array('bar', 'bar'),
				array('company', 'company'),
				array('cafe', 'cafe'),
				array('hotel', 'hotel'),
				array('restaurant', 'restaurant'),
				array('LLL:EXT:facebook_opengraph/Resources/Private/Language/locallang_db.xlf:tx_facebookopengraph_type.div_groups', '--div--'),
				array('cause', 'cause'),
				array('sports_league', 'sports_league'),
				array('sports_team', 'sports_team'),
				array('LLL:EXT:facebook_opengraph/Resources/Private/Language/locallang_db.xlf:tx_facebookopengraph_type.div_organizations', '--div--'),
				array('band', 'band'),
				array('government', 'government'),
				array('non_profit', 'non_profit'),
				array('school', 'school'),
				array('university', 'university'),
				array('LLL:EXT:facebook_opengraph/Resources/Private/Language/locallang_db.xlf:tx_facebookopengraph_type.div_people', '--div--'),
				array('actor', 'actor'),
				array('athlete', 'athlete'),
				array('author', 'author'),
				array('director', 'director'),
				array('musician', 'musician'),
				array('politician', 'politician'),
				array('public_figure', 'public_figure'),
				array('LLL:EXT:facebook_opengraph/Resources/Private/Language/locallang_db.xlf:tx_facebookopengraph_type.div_places', '--div--'),
				array('city', 'city'),
				array('country', 'country'),
				array('landmark', 'landmark'),
				array('state_province', 'state_province'),
				array('LLL:EXT:facebook_opengraph/Resources/Private/Language/locallang_db.xlf:tx_facebookopengraph_type.div_entertainment', '--div--'),
				array('album', 'album'),
				array('book', 'book'),
				array('drink', 'drink'),
				array('food', 'food'),
				array('game', 'game'),
				array('product', 'product'),
				array('song', 'song'),
				array('movie', 'movie'),
				array('tv_show', 'tv_show'),
				array('LLL:EXT:facebook_opengraph/Resources/Private/Language/locallang_db.xlf:tx_facebookopengraph_type.div_websites', '--div--'),
				array('blog', 'blog'),
				array('website', 'website'),
				array('article', 'article')
			),
		)
	),
	'tx_facebookopengraph_image' => Array (
		'exclude' => 1,
		'label' => 'LLL:EXT:facebook_opengraph/Resources/Private/Language/locallang_db.xlf:tx_facebookopengraph_image',
		'l10n_mode' => 'mergeIfNotBlank',
		'config' => array (
			'type' => 'group',
			'internal_type' => 'file',
			'allowed' => 'gif,png,jpeg,jpg',
			'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
			'uploadfolder' => 'uploads/tx_facebookopengraph',
			'show_thumbs' => 1,
			'size' => 1,
			'minitems' => 0,
			'maxitems' => 1,
		)
	),
	'tx_facebookopengraph_site_name' => Array (
		'exclude' => 1,
		'label' => 'LLL:EXT:facebook_opengraph/Resources/Private/Language/locallang_db.xlf:tx_facebookopengraph_site_name',
		'l10n_mode' => 'mergeIfNotBlank',
		'config' => Array (
			'type' => 'input',
			'size' => '30',
			'eval' => 'trim',
		)
	),
	'tx_facebookopengraph_admins' => Array (
		'exclude' => 1,
		'label' => 'LLL:EXT:facebook_opengraph/Resources/Private/Language/locallang_db.xlf:tx_facebookopengraph_admins',
		'l10n_mode' => 'mergeIfNotBlank',
		'config' => Array (
			'type' => 'input',
			'size' => '30',
			'eval' => 'trim',
		)
	),
	'tx_facebookopengraph_description' => Array (
		'exclude' => 1,
		'label' => 'LLL:EXT:facebook_opengraph/Resources/Private/Language/locallang_db.xlf:tx_facebookopengraph_description',
		'l10n_mode' => 'mergeIfNotBlank',
		'config' => Array (
			'type' => 'text',
			'cols' => '30',
			'rows' => '10'
		)
	)
);

// TCA Palettes
$TCA['pages']['palettes']['tx_facebookopengraph'] = array(
	'showitem'			=> 'tx_facebookopengraph_title,--linebreak--,tx_facebookopengraph_site_name,--linebreak--,tx_facebookopengraph_type,--linebreak--,tx_facebookopengraph_description,--linebreak--,tx_facebookopengraph_image,--linebreak--,tx_facebookopengraph_admins',
	'canNotCollapse'	=> 1
);
t3lib_div::loadTCA('pages');
t3lib_extMgm::addTCAcolumns('pages', $tempColumns, 1);
t3lib_extMgm::addToAllTCAtypes('pages','--div--;LLL:EXT:facebook_opengraph/Resources/Private/Language/locallang_db.xlf:pages.tab.opengraph;,--palette--;Facebook Open Graph;tx_facebookopengraph,', '', 'after:author_email');

// TCA Palettes
$TCA['pages_language_overlay']['palettes']['tx_facebookopengraph'] = array(
	'showitem'			=> 'tx_facebookopengraph_title,--linebreak--,tx_facebookopengraph_site_name,--linebreak--,tx_facebookopengraph_type,--linebreak--,tx_facebookopengraph_description,--linebreak--,tx_facebookopengraph_image,--linebreak--,tx_facebookopengraph_admins',
	'canNotCollapse'	=> 1
);
t3lib_div::loadTCA('pages_language_overlay');
t3lib_extMgm::addTCAcolumns('pages_language_overlay', $tempColumns, 1);
t3lib_extMgm::addToAllTCAtypes('pages_language_overlay','--div--;LLL:EXT:facebook_opengraph/Resources/Private/Language/locallang_db.xlf:pages.tab.opengraph;,--palette--;Facebook Open Graph;tx_facebookopengraph,', '', 'after:author_email');
?>