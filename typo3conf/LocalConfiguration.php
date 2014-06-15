<?php
return array(
	'BE' => array(
		'debug' => FALSE,
		'explicitADmode' => 'explicitAllow',
		'installToolPassword' => '$P$Cua9PNenq8RGsXuSWGppKKAnDdnRED0',
		'loginSecurityLevel' => 'normal',
	),
	'DB' => array(
		'database' => 'typo3_test',
		'extTablesDefinitionScript' => 'extTables.php',
		'host' => 'localhost',
		'password' => '',
		'socket' => '',
		'username' => 'root',
	),
	'EXT' => array(
		'extConf' => array(
			'bootstrap_package' => 'a:3:{s:4:"Logo";s:84:"../typo3conf/ext/bootstrap_package/Resources/Public/Images/Backend/TopBarLogo@2x.png";s:9:"LoginLogo";s:80:"../typo3conf/ext/bootstrap_package/Resources/Public/Images/Backend/LoginLogo.png";s:16:"UseRealUrlConfig";s:1:"1";}',
			'coreapi' => 'a:0:{}',
			'introduction' => 'a:0:{}',
			'phpunit' => 'a:6:{s:17:"excludeextensions";s:8:"lib, div";s:12:"composerpath";s:0:"";s:13:"selenium_host";s:9:"localhost";s:13:"selenium_port";s:4:"4444";s:16:"selenium_browser";s:8:"*firefox";s:19:"selenium_browserurl";s:0:"";}',
			'realurl' => 'a:5:{s:10:"configFile";s:26:"typo3conf/realurl_conf.php";s:14:"enableAutoConf";s:1:"1";s:14:"autoConfFormat";s:1:"0";s:12:"enableDevLog";s:1:"0";s:19:"enableChashUrlDebug";s:1:"0";}',
			'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
			'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
		),
	),
	'FE' => array(
		'activateContentAdapter' => FALSE,
		'debug' => FALSE,
		'loginSecurityLevel' => 'rsa',
	),
	'GFX' => array(
		'colorspace' => 'sRGB',
		'im' => 1,
		'im_mask_temp_ext_gif' => 1,
		'im_path' => '/opt/local/bin/',
		'im_path_lzw' => '/opt/local/bin/',
		'im_v5effects' => 1,
		'im_version_5' => 'im6',
		'image_processing' => 1,
		'jpg_quality' => '80',
	),
	'SYS' => array(
		'caching' => array(
			'cacheConfigurations' => array(
				'extbase_object' => array(
					'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
					'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
					'groups' => array(
						'system',
					),
					'options' => array(
						'defaultLifetime' => 0,
					),
				),
			),
		),
		'clearCacheSystem' => FALSE,
		'compat_version' => '6.2',
		'devIPmask' => '',
		'displayErrors' => FALSE,
		'enableDeprecationLog' => FALSE,
		'encryptionKey' => 'af4b0cd324090ebdadcc21d0c89a4a488615d4ac2af54f6560021192e9157f0b9eed27142d35b12a53557f4b185a421d',
		'isInitialInstallationInProgress' => FALSE,
		'sitename' => 'GSOC Core API',
		'sqlDebug' => 1,
		'systemLogLevel' => 2,
		't3lib_cs_convMethod' => 'mbstring',
		't3lib_cs_utils' => 'mbstring',
	),
);
?>
