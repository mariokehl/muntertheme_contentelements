<?php
if(!defined('TYPO3_MODE')){
    die('Access denied.');
}

$TCA['tx_munterthemecontentelements_contact_item'] = array(
    'ctrl' => $TCA['tx_munterthemecontentelements_contact_item']['ctrl'],
    'interface' => array(
        'showRecordFieldList' => '
            hidden,
            content_element,
            type,
            title,
            link,
        ',
    ),
    'types' => array(
        'phone' => array('showitem' => '
            hidden;;1,
            content_element,
            type,
            title,
            link,
        '),
        'envelope' => array('showitem' => '
            hidden;;1,
            content_element,
            type,
            title,
            link,
        '),
        'home' => array('showitem' => '
            hidden;;1,
            content_element,
            type,
            title,
            link,
        '),
        'facebook' => array('showitem' => '
            hidden;;1,
            content_element,
            type,
            title,
            link,
        '),
        'twitter' => array('showitem' => '
            hidden;;1,
            content_element,
            type,
            title,
            link,
        '),
    ),
    'palettes' => array(
        '1' => array('showitem' => ''),
    ),
    'columns' => array(
        'hidden' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'content_element' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:tx_munterthemecontentelements_contact_item.content_element',
            'config' => array(
                'type' => 'select',
                'foreign_table' => 'tt_content',
                'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.CType="muntertheme_contact"',
                'maxitems' => 1,
            ),
        ),
        'type' => array(
            'config' => array(
                'default' => 'phone',
                'items' => array(
                    array('LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:contact.phone','phone'),
                    array('LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:contact.envelope','envelope'),
                    array('LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:contact.home','home'),
                    array('LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:contact.facebook','facebook'),
                    array('LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:contact.twitter','twitter'),
                ),
                'maxitems' => 1,
                'size' => 1,
                'type' => 'select',
                'exclude' => 1

            ),
            'label' => 'LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:tx_munterthemecontentelements_contact_item.type',
        ),
        'title' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:tx_munterthemecontentelements_contact_item.title',
            'config' => array(
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim,required'
            ),
        ),
        'link' => array(
            'label' => 'LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:tx_munterthemecontentelements_contact_item.link',
            'config' => array(
                'default' => '#',
                'type' => 'input',
                'max' => 256,
                'size' => 50,
                'softref' => 'typolink',
                'wizards' => array(
                    'link' => array(
                        'type' => 'popup',
                        'icon' => 'link_popup.gif',
                        'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
                        'script' => 'browse_links.php?mode=wizard',
                        'title' => 'LLL:EXT:cms/locallang_ttc.xml:header_link_formlabel',
                    ),
                    '_PADDING' => 2,
                ),
            ),
        ),
    ),
);