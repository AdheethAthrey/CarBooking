<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'HofUniversity.Sitemanagement',
            'Carinventory',
            'Car Inventory'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'HofUniversity.Sitemanagement',
            'Bookings',
            'Bookings'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('sitemanagement', 'Configuration/TypoScript', 'Site Management');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_sitemanagement_domain_model_car', 'EXT:sitemanagement/Resources/Private/Language/locallang_csh_tx_sitemanagement_domain_model_car.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_sitemanagement_domain_model_car');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_sitemanagement_domain_model_booking', 'EXT:sitemanagement/Resources/Private/Language/locallang_csh_tx_sitemanagement_domain_model_booking.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_sitemanagement_domain_model_booking');

    }
);
