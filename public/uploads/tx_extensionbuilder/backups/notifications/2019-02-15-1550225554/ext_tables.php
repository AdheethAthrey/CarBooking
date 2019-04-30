<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'HofUniversity.Notifications',
            'Notification',
            'Notifications'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'HofUniversity.Notifications',
            'Newsletter',
            'Newsletter'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'HofUniversity.Notifications',
            'Offer',
            'Offer'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('notifications', 'Configuration/TypoScript', 'Notifications App');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_notifications_domain_model_offer', 'EXT:notifications/Resources/Private/Language/locallang_csh_tx_notifications_domain_model_offer.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_notifications_domain_model_offer');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_notifications_domain_model_newsletter', 'EXT:notifications/Resources/Private/Language/locallang_csh_tx_notifications_domain_model_newsletter.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_notifications_domain_model_newsletter');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_notifications_domain_model_notification', 'EXT:notifications/Resources/Private/Language/locallang_csh_tx_notifications_domain_model_notification.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_notifications_domain_model_notification');

    }
);
