<?php
if(!defined('TYPO3_MODE')){
    die('Access denied.');
}

$TCA['tx_munterthemecontentelements_aboutus_item'] = array(
    'ctrl' => $TCA['tx_munterthemecontentelements_aboutus_item']['ctrl'],
    'interface' => array(
        'showRecordFieldList' => '
            hidden,
            content_element,
            type,
            title,
            subtitle,
        ',
    ),
    'types' => array(
        'eye' => array('showitem' => '
            hidden;;1,
            content_element,
            type,
            title,
            subtitle,
        '),
        'laptop' => array('showitem' => '
            hidden;;1,
            content_element,
            type,
            title,
            subtitle,
        '),
        'tablet' => array('showitem' => '
            hidden;;1,
            content_element,
            type,
            title,
            subtitle,
        '),
        'pencil' => array('showitem' => '
            hidden;;1,
            content_element,
            type,
            title,
            subtitle,
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
            'label' => 'LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:tx_munterthemecontentelements_aboutus_item.content_element',
            'config' => array(
                'type' => 'select',
                'foreign_table' => 'tt_content',
                'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.CType="muntertheme_aboutus"',
                'maxitems' => 1,
            ),
        ),
        'type' => array(
            'config' => array(
                'default' => 'eye',
                'items' => array(
                    array('LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:aboutus.eye','eye'),
                    array('LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:aboutus.laptop','laptop'),
                    array('LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:aboutus.tablet','tablet'),
                    array('LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:aboutus.pencil','pencil'),
                ),
                'maxitems' => 1,
                'size' => 1,
                'type' => 'select',
                'exclude' => 1

            ),
            'label' => 'LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:tx_munterthemecontentelements_aboutus_item.type',
        ),
        'title' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:tx_munterthemecontentelements_aboutus_item.title',
            'config' => array(
                'type' => 'input',
                'size' => 25,
                'eval' => 'trim,required'
            ),
        ),
        'subtitle' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:tx_munterthemecontentelements_aboutus_item.subtitle',
            'config' => array(
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim,required'
            ),
        ),
    ),
);