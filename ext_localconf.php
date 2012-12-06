<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$TYPO3_CONF_VARS['FE']['pageOverlayFields'] .= ',tx_facebookopengraph_title,tx_facebookopengraph_site_name,tx_facebookopengraph_type,tx_facebookopengraph_image,tx_facebookopengraph_description,tx_facebookopengraph_admins';
$TYPO3_CONF_VARS['FE']['addRootLineFields'] .= ',tx_facebookopengraph_title,tx_facebookopengraph_site_name,tx_facebookopengraph_type,tx_facebookopengraph_image,tx_facebookopengraph_description,tx_facebookopengraph_admins';
?>