<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

$beGroupKindIconPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::siteRelPath('be_groups') . "Resources/Public/Images/selicon_be_groups_tx_begroups_kind_";

$tempColumns = array (
    "tx_begroups_kind" => array (
        "exclude" => 1,
        "label"   => "LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tx_begroups_kind",
        "config"  => array (
            "type"  => "select",
            "renderType" => "selectSingle",
            "showIconTable" => true,
            "items" => array (
                array("LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tx_begroups_kind.I.0", "0", $beGroupKindIconPath . "0.gif"),
                array("LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tx_begroups_kind.I.1", "1", $beGroupKindIconPath . "1.gif"),
                array("LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tx_begroups_kind.I.2", "2", $beGroupKindIconPath . "2.gif"),
                array("LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tx_begroups_kind.I.3", "3", $beGroupKindIconPath . "3.gif"),
                array("LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tx_begroups_kind.I.4", "4", $beGroupKindIconPath . "4.gif"),
                array("LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tx_begroups_kind.I.5", "5", $beGroupKindIconPath . "5.gif"),
                array("LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tx_begroups_kind.I.6", "6", $beGroupKindIconPath . "6.gif"),
                array("LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tx_begroups_kind.I.7", "7", $beGroupKindIconPath . "7.gif"),
                array("LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tx_begroups_kind.I.8", "8", $beGroupKindIconPath . "8.gif"),
            ),
            "size"     => 1,
            "maxitems" => 1,
        )
    ),
    'subgroup_fm' => array(
        'exclude' => 1,
        "label"   => 'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.file_mount',
        "config"  => array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'foreign_table' => 'be_groups',
            'foreign_table_where' => ' AND be_groups.tx_begroups_kind = 5',
            'size' => 10,
            'maxitems' => 999,
            'minitems' => 0,
            'multiple' => TRUE,
        )
    ),
    'subgroup_pm' => array(
        'exclude' => 1,
        "label"   => 'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.db_mount',
        "config"  => array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'foreign_table' => 'be_groups',
            'foreign_table_where' => ' AND be_groups.tx_begroups_kind = 6',
            'size' => 10,
            'maxitems' => 999,
            'minitems' => 0,
            'multiple' => TRUE,
        )
    ),
    'subgroup_ws' => array(
        'exclude' => 1,
        "label"   => 'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.workspace_rights',
        "config"  => array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'foreign_table' => 'be_groups',
            'foreign_table_where' => ' AND be_groups.tx_begroups_kind = 8',
            'size' => 10,
            'maxitems' => 999,
            'minitems' => 0,
            'multiple' => TRUE,
        )
    ),
    'subgroup_r' => array(
        'exclude' => 1,
        "label"   => 'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.rights',
        "config"  => array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'foreign_table' => 'be_groups',
            'foreign_table_where' => ' AND be_groups.tx_begroups_kind = 1',
            'size' => 10,
            'maxitems' => 999,
            'minitems' => 0,
            'multiple' => TRUE,
        )
    ),
    'subgroup_pa' => array(
        'exclude' => 1,
        "label"   => 'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.page_access',
        "config"  => array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'foreign_table' => 'be_groups',
            'foreign_table_where' => ' AND be_groups.tx_begroups_kind = 4',
            'size' => 10,
            'maxitems' => 999,
            'minitems' => 0,
            'multiple' => TRUE,
        )
    ),
    'subgroup_ts' => array(
        'exclude' => 1,
        "label"   => 'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.tsconfig',
        "config"  => array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'foreign_table' => 'be_groups',
            'foreign_table_where' => ' AND be_groups.tx_begroups_kind = 7',
            'size' => 10,
            'maxitems' => 999,
            'minitems' => 0,
            'multiple' => TRUE,
        )
    ),
    'subgroup_l' => array(
        'exclude' => 1,
        "label"   => 'LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.language',
        "config"  => array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'foreign_table' => 'be_groups',
            'foreign_table_where' => ' AND be_groups.tx_begroups_kind = 2',
            'size' => 10,
            'maxitems' => 999,
            'minitems' => 0,
            'multiple' => TRUE,
            'appearance' => array(
                'newRecordLinkPosition' => 'bottom',
                'collapseAll' => 1,
                'expandSingle' => 1,
            ),
        )
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns("be_groups", $tempColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes("be_groups","tx_begroups_kind;;;;1-1-1",'','after:title');
unset($tempColumns);


$tabExtended       = '';
$tabExtendedFields = '';
if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('tt_news')) {
    $tabExtendedFields .= 'tt_news_categorymounts;;;;1-1-1, ';
}
if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('dam')) {
    $tabExtendedFields .= 'tx_dam_mountpoints;;;;1-1-1, ';
}
if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('templavoila')) {
    $tabExtendedFields .= 'tx_templavoila_access;;;;1-1-1, ';
}
if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('snowbabel')) {
    $tabExtendedFields .= 'tx_snowbabel_extensions;;;;1-1-1,tx_snowbabel_languages;;;;1-1-1, ';
}
if (trim($tabExtendedFields) != '') {
    $tabExtended = '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, ' . $tabExtendedFields;
}

$filePermissions = '--div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xlf:be_groups.tabs.file_permissions, file_permissions,';


// register the new types field
$GLOBALS['TCA']['be_groups']['ctrl']['default_sortby'] = 'ORDER BY tx_begroups_kind, title ASC';
$GLOBALS['TCA']['be_groups']['ctrl']['label_userFunc'] = 'AOE\\BeGroups\\Service\\TceMain\\LabelHelper->getCombinedTitle';
$GLOBALS['TCA']['be_groups']['ctrl']['type']            = 'tx_begroups_kind';
$GLOBALS['TCA']['be_groups']['ctrl']['typeicon_column'] = 'tx_begroups_kind';
$GLOBALS['TCA']['be_groups']['ctrl']['typeicons']       = array (
    '1' => $beGroupKindIconPath . '1.gif',
    '2' => $beGroupKindIconPath . '2.gif',
    '3' => $beGroupKindIconPath . '3.gif',
    '4' => $beGroupKindIconPath . '4.gif',
    '5' => $beGroupKindIconPath . '5.gif',
    '6' => $beGroupKindIconPath . '6.gif',
    '7' => $beGroupKindIconPath . '7.gif',
    '8' => $beGroupKindIconPath . '8.gif',
);


// Improve visibility of subgroups in usergroup field to show only META groups
$GLOBALS['TCA']['be_users']['columns']['usergroup']['config']['foreign_table_where'] = ' AND hide_in_lists = 0 ORDER BY be_groups.tx_begroups_kind, be_groups.title';
$GLOBALS['TCA']['be_groups']['columns']['file_mountpoints']['config']['renderType']= 'selectCheckBox';
$GLOBALS['TCA']['be_groups']['columns']['file_mountpoints']['config']['wizards'] = null;
$GLOBALS['TCA']['be_groups']['columns']['subgroup']['config']['foreign_table_where'] = 'AND tx_begroups_kind NOT IN(3) AND NOT(be_groups.uid = ###THIS_UID###) AND be_groups.hidden=0 ORDER BY be_groups.tx_begroups_kind,be_groups.title';
$GLOBALS['TCA']['be_groups']['columns']['subgroup']['config']['wizards']['add'] = array(
    'icon' => 'action-add',
    'params' => array(
        'pid' => 0,
        'setValue' => 'prepend',
        'table' => 'be_groups',
    ),
    'module' => array(
        'name' => 'wizard_add',
    ),
    'title' => 'LLL:EXT:lang/locallang_tca.xml:be_users.usergroup_add_title',
    'type' => 'script',
);

/**
0 = all
1 = authorization + extensions
2 = language
3 = meta
4 = page access group
5 = starting point of files system
6 = starting point of page tree
7 = tsconfig
8 = workspace
 */

// define the new types and their showitems
$GLOBALS['TCA']['be_groups']['types']['0'] = array ('showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2,tx_begroups_kind, description, subgroup;;;;3-3-3, --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.base_rights, inc_access_lists;;;;1-1-1, groupMods, tables_select, tables_modify, pagetypes_select, non_exclude_fields, explicit_allowdeny , allowed_languages;;;;2-2-2, custom_options;;;;3-3-3, --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.mounts_and_workspaces, db_mountpoints;;;;1-1-1,file_mountpoints, fileoper_perms, workspace_perms;;;;2-2-2, --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.options, lockToDomain;;;;1-1-1, hide_in_lists;;;;2-2-2, TSconfig;;;;3-3-3, --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.extended');
$GLOBALS['TCA']['be_groups']['types']['1'] = array ('showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2,tx_begroups_kind, description, --div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.modul_rights, groupMods, --div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xlf:be_groups.tabs.table_rights, tables_select, tables_modify, non_exclude_fields, --div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xlf:be_groups.tabs.page_rights, pagetypes_select, explicit_allowdeny, ' . $filePermissions . $tabExtended . ' --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.options, lockToDomain;;;;1-1-1, hide_in_lists;;;;2-2-2');
$GLOBALS['TCA']['be_groups']['types']['2'] = array ('showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2,tx_begroups_kind, description, --div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.language_rights, allowed_languages, --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.options, lockToDomain;;;;1-1-1, hide_in_lists;;;;2-2-2');
$GLOBALS['TCA']['be_groups']['types']['3'] = array ('showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2,tx_begroups_kind, description, --div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.rights, subgroup_r,subgroup_pa,subgroup_ts, --div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.mountAndWs, subgroup_fm,subgroup_pm,subgroup_ws, --div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.language, subgroup_l, --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.options, lockToDomain;;;;1-1-1, hide_in_lists;;;;2-2-2');
$GLOBALS['TCA']['be_groups']['types']['4'] = array ('showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2,tx_begroups_kind, description, --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.options, lockToDomain;;;;1-1-1, hide_in_lists;;;;2-2-2');
$GLOBALS['TCA']['be_groups']['types']['5'] = array ('showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2,tx_begroups_kind, description, --div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.file_mount, file_mountpoints, fileoper_perms, --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.options, lockToDomain;;;;1-1-1, hide_in_lists;;;;2-2-2');
$GLOBALS['TCA']['be_groups']['types']['6'] = array ('showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2,tx_begroups_kind, description, --div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.db_mount, db_mountpoints, --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.options, lockToDomain;;;;1-1-1, hide_in_lists;;;;2-2-2');
$GLOBALS['TCA']['be_groups']['types']['7'] = array ('showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2,tx_begroups_kind, description, --div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.tsconfig, TSconfig, --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.options, lockToDomain;;;;1-1-1, hide_in_lists;;;;2-2-2');
$GLOBALS['TCA']['be_groups']['types']['8'] = array ('showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2,tx_begroups_kind, description, --div--;LLL:EXT:be_groups/Resources/Private/Language/locallang_db.xml:be_groups.tabs.workspace_rights, workspace_perms;;;;2-2-2, --div--;LLL:EXT:lang/locallang_tca.xml:be_groups.tabs.options, lockToDomain;;;;1-1-1, hide_in_lists;;;;2-2-2');
