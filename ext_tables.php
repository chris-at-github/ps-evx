<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Ps.Evx',
            'Frontend',
            'Frontend'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('evx', 'Configuration/TypoScript', 'Evx');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_evx_domain_model_map', 'EXT:evx/Resources/Private/Language/locallang_csh_tx_evx_domain_model_map.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_evx_domain_model_map');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_evx_domain_model_maptile', 'EXT:evx/Resources/Private/Language/locallang_csh_tx_evx_domain_model_maptile.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_evx_domain_model_maptile');

    }
);
