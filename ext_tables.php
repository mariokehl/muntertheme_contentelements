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
$aboutus_column = array(
    'tx_munterthemecontentelements_aboutus_item' => array(
        'label' => 'LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:aboutus.general',
        'config' => array(
            'maxitems' => 4,
            'type' => 'inline',
            'foreign_table' => 'tx_munterthemecontentelements_aboutus_item',
            'foreign_field' => 'content_element',
            'appearance' => array(
                'useSortable' => 1,
                'collapseAll' => 1,
                'expandSingle' => 1,
                'levelLinksPosition' => 'bottom'
            ),
        ),
    ),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',$aboutus_column);
unset($aboutus_column);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_munterthemecontentelements_aboutus_item');
$TCA['tx_munterthemecontentelements_aboutus_item'] = array(
    'ctrl' => array(
        'title'	=> 'LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:tx_munterthemecontentelements_aboutus_item',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => TRUE,
        'sortby' => 'sorting',
        'versioningWS' => 2,
        'versioning_followPages' => TRUE,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'type' => 'type',
        'typeicon_column' => 'type',
        'typeicons' => array(
            'eye' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/aboutus_eye.gif',
            'laptop' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/aboutus_laptop.gif',
            'pencil' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/aboutus_pencil.gif',
            'tablet' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/aboutus_tablet.gif',
        ),
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
        'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/AboutUsItem.php',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'ext_icon.gif'
    ),
);
$TCA['tt_content']['types']['muntertheme_aboutus']['showitem'] = "
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
    header,
    subheader,
    tx_munterthemecontentelements_aboutus_item,
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
$process_column = array(
    'tx_munterthemecontentelements_process_item' => array(
        'label' => 'LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:aboutus.general',
        'config' => array(
            'maxitems' => 5,
            'type' => 'inline',
            'foreign_table' => 'tx_munterthemecontentelements_process_item',
            'foreign_field' => 'content_element',
            'appearance' => array(
                'useSortable' => 1,
                'collapseAll' => 1,
                'expandSingle' => 1,
                'levelLinksPosition' => 'bottom'
            ),
        ),
    ),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',$process_column);
unset($process_column);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_munterthemecontentelements_process_item');
$TCA['tx_munterthemecontentelements_process_item'] = array(
    'ctrl' => array(
        'title'	=> 'LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:tx_munterthemecontentelements_process_item',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => TRUE,
        'sortby' => 'sorting',
        'versioningWS' => 2,
        'versioning_followPages' => TRUE,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'type' => 'type',
        'typeicon_column' => 'type',
        'typeicons' => array(
            'bolt' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/process_bolt.gif',
            'cog' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/process_cog.gif',
            'cloud' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/process_cloud.gif',
            'map-marker' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/process_map-marker.gif',
            'gift' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/process_gift.gif',
        ),
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
        'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/ProcessItem.php',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'ext_icon.gif'
    ),
);
$TCA['tt_content']['types']['muntertheme_process']['showitem'] = "
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
    header,
    bodytext,
    tx_munterthemecontentelements_process_item,
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
$contact_column = array(
    'tx_munterthemecontentelements_contact_item' => array(
        'label' => 'LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:contact.general',
        'config' => array(
            'maxitems' => 5,
            'type' => 'inline',
            'foreign_table' => 'tx_munterthemecontentelements_contact_item',
            'foreign_field' => 'content_element',
            'appearance' => array(
                'useSortable' => 1,
                'collapseAll' => 1,
                'expandSingle' => 1,
                'levelLinksPosition' => 'bottom'
            ),
        ),
    ),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',$contact_column);
unset($contact_column);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_munterthemecontentelements_contact_item');
$TCA['tx_munterthemecontentelements_contact_item'] = array(
    'ctrl' => array(
        'title'	=> 'LLL:EXT:'.$_EXTKEY.'/Resources/Private/Language/Language.xml:tx_munterthemecontentelements_contact_item',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => TRUE,
        'sortby' => 'sorting',
        'versioningWS' => 2,
        'versioning_followPages' => TRUE,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'type' => 'type',
        'typeicon_column' => 'type',
        'typeicons' => array(
            'phone' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/contact_phone.gif',
            'envelope' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/contact_envelope.gif',
            'home' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/contact_home.gif',
            'facebook' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/contact_facebook.gif',
            'twitter' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/contact_twitter.gif',
        ),
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
        'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/ContactItem.php',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'ext_icon.gif'
    ),
);
$TCA['tt_content']['types']['muntertheme_contact']['showitem'] = "
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,
    header,
    subheader,
    tx_munterthemecontentelements_contact_item,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.appearance,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.frames;frames,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,
    --palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access,
    --div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended
";