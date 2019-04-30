<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'HofUniversity.Notifications',
            'Notification',
            [
                'Notification' => 'list, create, delete'
            ],
            // non-cacheable actions
            [
                'Notification' => 'list, create, delete'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'HofUniversity.Notifications',
            'Newsletter',
            [
                'Newsletter' => 'list, create, edit, delete'
            ],
            // non-cacheable actions
            [
                'Newsletter' => 'list, create, edit, delete'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'HofUniversity.Notifications',
            'Offer',
            [
                'Offer' => 'list, create, edit, delete'
            ],
            // non-cacheable actions
            [
                'Offer' => 'list, create, edit, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    notification {
                        iconIdentifier = notifications-plugin-notification
                        title = LLL:EXT:notifications/Resources/Private/Language/locallang_db.xlf:tx_notifications_notification.name
                        description = LLL:EXT:notifications/Resources/Private/Language/locallang_db.xlf:tx_notifications_notification.description
                        tt_content_defValues {
                            CType = list
                            list_type = notifications_notification
                        }
                    }
                    newsletter {
                        iconIdentifier = notifications-plugin-newsletter
                        title = LLL:EXT:notifications/Resources/Private/Language/locallang_db.xlf:tx_notifications_newsletter.name
                        description = LLL:EXT:notifications/Resources/Private/Language/locallang_db.xlf:tx_notifications_newsletter.description
                        tt_content_defValues {
                            CType = list
                            list_type = notifications_newsletter
                        }
                    }
                    offer {
                        iconIdentifier = notifications-plugin-offer
                        title = LLL:EXT:notifications/Resources/Private/Language/locallang_db.xlf:tx_notifications_offer.name
                        description = LLL:EXT:notifications/Resources/Private/Language/locallang_db.xlf:tx_notifications_offer.description
                        tt_content_defValues {
                            CType = list
                            list_type = notifications_offer
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'notifications-plugin-notification',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:notifications/Resources/Public/Icons/user_plugin_notification.svg']
			);
		
			$iconRegistry->registerIcon(
				'notifications-plugin-newsletter',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:notifications/Resources/Public/Icons/user_plugin_newsletter.svg']
			);
		
			$iconRegistry->registerIcon(
				'notifications-plugin-offer',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:notifications/Resources/Public/Icons/user_plugin_offer.svg']
			);
		
    }
);
