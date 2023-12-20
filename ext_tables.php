<?php
if (!defined('TYPO3')) {
    die('Access denied.');
}

$tempColumns = array(
     'tx_directmailsubscription_localgender' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:direct_mail_subscription/locallang_db.xlf:tt_address.tx_directmailsubscription_localgender',
        'config' => array(
            'type' => 'input',
            'size' => '30',
            'eval' => 'trim',
        )
     ),
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_address', $tempColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_address',
    'tx_directmailsubscription_localgender',
    '',
    'after:gender'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('direct_mail_subscription', 'static/', 'Direct Mail subscription');

