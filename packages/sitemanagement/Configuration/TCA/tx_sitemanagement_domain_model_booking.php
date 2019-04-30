<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:sitemanagement/Resources/Private/Language/locallang_db.xlf:tx_sitemanagement_domain_model_booking',
        'label' => 'booking_id',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'pick_up_date,pick_up_location,drop_off_date,drop_off_location',
        'iconfile' => 'EXT:sitemanagement/Resources/Public/Icons/tx_sitemanagement_domain_model_booking.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, booking_id, pick_up_date, pick_up_location, drop_off_date, drop_off_location',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, booking_id, pick_up_date, pick_up_location, drop_off_date, drop_off_location, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_sitemanagement_domain_model_booking',
                'foreign_table_where' => 'AND {#tx_sitemanagement_domain_model_booking}.{#pid}=###CURRENT_PID### AND {#tx_sitemanagement_domain_model_booking}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'booking_id' => [
            'exclude' => false,
            'label' => 'LLL:EXT:sitemanagement/Resources/Private/Language/locallang_db.xlf:tx_sitemanagement_domain_model_booking.booking_id',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'pick_up_date' => [
            'exclude' => false,
            'label' => 'LLL:EXT:sitemanagement/Resources/Private/Language/locallang_db.xlf:tx_sitemanagement_domain_model_booking.pick_up_date',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'pick_up_location' => [
            'exclude' => false,
            'label' => 'LLL:EXT:sitemanagement/Resources/Private/Language/locallang_db.xlf:tx_sitemanagement_domain_model_booking.pick_up_location',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'drop_off_date' => [
            'exclude' => false,
            'label' => 'LLL:EXT:sitemanagement/Resources/Private/Language/locallang_db.xlf:tx_sitemanagement_domain_model_booking.drop_off_date',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'drop_off_location' => [
            'exclude' => false,
            'label' => 'LLL:EXT:sitemanagement/Resources/Private/Language/locallang_db.xlf:tx_sitemanagement_domain_model_booking.drop_off_location',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
    
        'car' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
