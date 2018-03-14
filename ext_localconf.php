<?php
defined('TYPO3_MODE') or die();

// Register for hook to show preview of tt_content element of CType="ot_texticon" in page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['ot_texticon'] = \OliverThiele\OtTexticon\Hooks\TexticonPreviewRenderer::class;

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
    'ot-texticon-icon',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => 'EXT:ot_texticon/Resources/Public/Icons/FontAwesome-FortAwesome.svg']
);

# **************************************************
# Add the divider to the "New Content Element Wizard"
# **************************************************

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
mod.wizards.newContentElement.wizardItems.special {
    elements {
        ot_texticon {
            iconIdentifier = ot-texticon-icon
            title = LLL:EXT:ot_texticon/Resources/Private/Language/locallang_db.xlf:wizard.title
            description = LLL:EXT:ot_texticon/Resources/Private/Language/locallang_db.xlf:wizard.description
            tt_content_defValues {
                CType = ot_texticon
            }
        }
    }
    show := addToList(ot_texticon)
}
');
