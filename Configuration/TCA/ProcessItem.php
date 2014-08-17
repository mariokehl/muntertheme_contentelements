<?php
if(!defined('TYPO3_MODE')){
    die('Access denied.');
}

$TCA['tx_munterthemecontentelements_process_item'] = array(
    'ctrl' => $TCA['tx_munterthemecontentelements_process_item']['ctrl'],
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
        'bolt' => array('showitem' => '
            hidden;;1,
            content_element,
            type,
            title,
            subtitle,
        '),
        'cog' => array('showitem' => '
            hidden;;1,
            content_element,
            type,
            title,
            subtitle,
        '),
        'cloud' => array('showitem' => '
            hidden;;1,
            content_element,
            type,
            title,
            subtitle,
        '),
        'map-marker' => array('showitem' => '
            hidden;;1,
            content_element,
            type,
            title,
            subtitle,
        '),
        'gift' => array('showitem' => '
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
            'label' => 'LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:tx_munterthemecontentelements_process_item.content_element',
            'config' => array(
                'type' => 'select',
                'foreign_table' => 'tt_content',
                'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.CType="muntertheme_process"',
                'maxitems' => 1,
            ),
        ),
        'type' => array(
            'config' => array(
                'default' => 'bolt',
                'items' => array(
                    array('LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:process.bolt','bolt'),
                    array('LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:process.cog','cog'),
                    array('LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:process.cloud','cloud'),
                    array('LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:process.map-marker','map-marker'),
                    array('LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:process.gift','gift'),
                ),
                'maxitems' => 1,
                'size' => 1,
                'type' => 'select',
                'exclude' => 1

            ),
            'label' => 'LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:tx_munterthemecontentelements_process_item.type',
        ),
        'title' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:tx_munterthemecontentelements_process_item.title',
            'config' => array(
                'type' => 'input',
                'size' => 25,
                'eval' => 'trim,required'
            ),
        ),
        'subtitle' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:muntertheme_contentelements/Resources/Private/Language/Language.xml:tx_munterthemecontentelements_process_item.subtitle',
            'config' => array(
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim,required'
            ),
        ),
    ),
);