<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:sitemanagement/Resources/Private/Language/locallang_db.xlf:tx_sitemanagement_domain_model_car',
        'label' => 'id',
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
        'searchFields' => 'model,color,transmission,fuel_type,availability',
        'iconfile' => 'EXT:sitemanagement/Resources/Public/Icons/tx_sitemanagement_domain_model_car.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, id, model, color, transmission, fuel_type, seating, availability, booking',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, id, model, color, transmission, fuel_type, seating, availability, booking, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_sitemanagement_domain_model_car',
                'foreign_table_where' => 'AND {#tx_sitemanagement_domain_model_car}.{#pid}=###CURRENT_PID### AND {#tx_sitemanagement_domain_model_car}.{#sys_language_uid} IN (-1,0)',
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

        'id' => [
            'exclude' => false,
            'label' => 'LLL:EXT:sitemanagement/Resources/Private/Language/locallang_db.xlf:tx_sitemanagement_domain_model_car.id',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'model' => [
            'exclude' => false,
            'label' => 'LLL:EXT:sitemanagement/Resources/Private/Language/locallang_db.xlf:tx_sitemanagement_domain_model_car.model',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'color' => [
            'exclude' => false,
            'label' => 'LLL:EXT:sitemanagement/Resources/Private/Language/locallang_db.xlf:tx_sitemanagement_domain_model_car.color',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'transmission' => [
            'exclude' => false,
            'label' => 'LLL:EXT:sitemanagement/Resources/Private/Language/locallang_db.xlf:tx_sitemanagement_domain_model_car.transmission',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'fuel_type' => [
            'exclude' => false,
            'label' => 'LLL:EXT:sitemanagement/Resources/Private/Language/locallang_db.xlf:tx_sitemanagement_domain_model_car.fuel_type',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'seating' => [
            'exclude' => false,
            'label' => 'LLL:EXT:sitemanagement/Resources/Private/Language/locallang_db.xlf:tx_sitemanagement_domain_model_car.seating',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'availability' => [
            'exclude' => false,
            'label' => 'LLL:EXT:sitemanagement/Resources/Private/Language/locallang_db.xlf:tx_sitemanagement_domain_model_car.availability',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'booking' => [
            'exclude' => false,
            'label' => 'LLL:EXT:sitemanagement/Resources/Private/Language/locallang_db.xlf:tx_sitemanagement_domain_model_car.booking',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_sitemanagement_domain_model_booking',
                'foreign_field' => 'car',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
    
    ],
];
