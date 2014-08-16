<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

/***************
 * Add Content Elements to List
 */
$backupCTypeItems = $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'] = array(
    array(
        'LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:muntertheme_contentelements',
        '--div--'
    ),
    array(
        'LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:muntertheme_home',
        'muntertheme_home',
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'ext_icon.gif'
    ),
    array(
        'LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:muntertheme_aboutus',
        'muntertheme_aboutus',
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'ext_icon.gif'
    ),
    array(
        'LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:muntertheme_portfolio',
        'muntertheme_portfolio',
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'ext_icon.gif'
    ),
    array(
        'LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:muntertheme_process',
        'muntertheme_process',
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'ext_icon.gif'
    ),
    array(
        'LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:muntertheme_clients',
        'muntertheme_clients',
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'ext_icon.gif'
    ),
    array(
        'LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:muntertheme_contact',
        'muntertheme_contact',
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'ext_icon.gif'
    ),
);
foreach($backupCTypeItems as $key => $value){
    $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = $value;
}
unset($key);
unset($value);
unset($backupCTypeItems);

/**
 * Home
 */
$TCA['tt_content']['types']['muntertheme_home']['showitem'] = "
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
    header,
    subheader,
    image,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended
";

/**
 * About us
 */
$TCA['tt_content']['types']['muntertheme_aboutus']['showitem'] = "
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
    header,
    subheader,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended
";

/**
 * Portfolio
 */
$TCA['tt_content']['types']['muntertheme_portfolio']['showitem'] = "
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
    header;LLL:EXT:cms/locallang_ttc.xml:header.ALT.html_formlabel,
    image,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended
";

/**
 * Process
 */
$TCA['tt_content']['types']['muntertheme_process']['showitem'] = "
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
    header,
    bodytext,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended
";

/**
 * Clients
 */
$TCA['tt_content']['types']['muntertheme_clients']['showitem'] = "
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
    header,
    bodytext,
    image,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended
";

/**
 * Contact
 */
$TCA['tt_content']['types']['muntertheme_contact']['showitem'] = "
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
    header,
    subheader,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended
";