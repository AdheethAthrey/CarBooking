<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'HofUniversity.Sitemanagement',
            'Carinventory',
            [
                'Car' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Car' => 'list, show, new, create, edit, update, delete'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'HofUniversity.Sitemanagement',
            'Bookings',
            [
                'Booking' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Booking' => 'list, show, new, create, edit, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    carinventory {
                        iconIdentifier = sitemanagement-plugin-carinventory
                        title = LLL:EXT:sitemanagement/Resources/Private/Language/locallang_db.xlf:tx_sitemanagement_carinventory.name
                        description = LLL:EXT:sitemanagement/Resources/Private/Language/locallang_db.xlf:tx_sitemanagement_carinventory.description
                        tt_content_defValues {
                            CType = list
                            list_type = sitemanagement_carinventory
                        }
                    }
                    bookings {
                        iconIdentifier = sitemanagement-plugin-bookings
                        title = LLL:EXT:sitemanagement/Resources/Private/Language/locallang_db.xlf:tx_sitemanagement_bookings.name
                        description = LLL:EXT:sitemanagement/Resources/Private/Language/locallang_db.xlf:tx_sitemanagement_bookings.description
                        tt_content_defValues {
                            CType = list
                            list_type = sitemanagement_bookings
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'sitemanagement-plugin-carinventory',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:sitemanagement/Resources/Public/Icons/user_plugin_carinventory.svg']
			);
		
			$iconRegistry->registerIcon(
				'sitemanagement-plugin-bookings',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:sitemanagement/Resources/Public/Icons/user_plugin_bookings.svg']
			);
		
    }
);
