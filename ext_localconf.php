<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(function() {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'Ps.Evx',
		'Frontend',
		[
			'Game' => 'index, create, playground',
			'Queue' => 'wizard, create, process',
		],

		// non-cacheable actions
		[
			'Game' => 'index, create, playground',
			'Queue' => 'wizard, create, process',
		]
	);

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					frontend {
						iconIdentifier = evx-plugin-frontend
						title = LLL:EXT:evx/Resources/Private/Language/locallang_plugin.xlf:tx_evx_frontend.name
						description = LLL:EXT:evx/Resources/Private/Language/locallang_plugin.xlf:tx_evx_frontend.description
						tt_content_defValues {
							CType = list
							list_type = evx_frontend
						}
					}
				}
				show = *
			}
	 }'
	);

	$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
	$iconRegistry->registerIcon(
		'evx-plugin-frontend',
		\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
		['source' => 'EXT:evx/Resources/Public/Icons/user_plugin_frontend.svg']
	);
});
