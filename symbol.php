<?php
global $_CONFIG;
DEFINE ( 'DEVELOPMENT_ENVIRONMENT', 'DEVELOPMENT_ENVIRONMENT' );
DEFINE ( 'DEVELOPER_WARNING', 		'DEVELOPER_WARNING' );
DEFINE ( 'AUTOLOAD_ERRORS_WARNING', 'AUTOLOAD_ERRORS_WARNING' );
DEFINE ( 'USER_AUTH', 				'user_auth' );
DEFINE ( 'user_auth', 				USER_AUTH );
DEFINE ( 'auth', 					'auth' );
DEFINE ( 'DS', 						DIRECTORY_SEPARATOR );
DEFINE ( 'ds', 						DIRECTORY_SEPARATOR );
DEFINE ( 'BS', 						"\\" );
DEFINE ( 'PS', 						"/" );
DEFINE ( 'ps', 						PS );
DEFINE ( 'NL', 						"\n" );
DEFINE ( 'nl', 						NL );
DEFINE ( 'TAB', 					"\t" );
DEFINE ( 'tab', 					TAB );
DEFINE ( 'BL', 						"<br/>" );
DEFINE ( 'bl', 						BL );
DEFINE ( 'DOT', 					'.' );
DEFINE ( 'dot', 					DOT );
DEFINE ( 'COMMA', 					',' );
DEFINE ( 'comma', 					COMMA );
DEFINE ( 'SEMICOLON', 				';' );
DEFINE ( 'semicolon', 				SEMICOLON );
DEFINE ( 'EMPTY_CHAR', 				'' );
DEFINE ( 'empty_char', 				EMPTY_CHAR );
DEFINE ( 'empc', 					EMPTY_CHAR );
DEFINE ( 'DASH', 					'-' ); 
DEFINE ( 'dash', 					DASH ); 
DEFINE ( 'UNDERSCORE', 				'_' ); 
DEFINE ( 'underscore', 				UNDERSCORE ); 
DEFINE ( 'mad', 					'_' ); 
DEFINE ( 'SPACE', 					' ' );
DEFINE ( 'space', 					' ' );
DEFINE ( 'QUOTE', 					"'" );
DEFINE ( 'quote', 					QUOTE );
DEFINE ( 'EMPTY_STRING', 			"" );
DEFINE ( 'empty_string', 			EMPTY_STRING );
DEFINE ( 'emps', 					EMPTY_STRING );
DEFINE ( 'HEAD', 					0 ); 
DEFINE ( 'head', 					0 ); 
DEFINE ( 'ZERO', 					0 ); 
DEFINE ( 'zero', 					0 ); 
DEFINE ( 'CODE_ENTRY', 				(isset($_CONFIG['CODE_ENTRY']))?$_CONFIG['CODE_ENTRY']:'main' );
DEFINE ( 'EXTENSIONS', 				'extensions' );
DEFINE ( 'WIDGETS', 				'widgets' );
DEFINE ( 'extensions', 				EXTENSIONS );
DEFINE ( 'widgets', 				WIDGETS );
DEFINE ( 'CONTROLLER', 				'Controller' );
DEFINE ( 'MODEL', 					'Model' );
DEFINE ( 'VIEW', 					'View' );
DEFINE ( 'ACTION', 					'Action' );
DEFINE ( 'ID', 						'id' );
DEFINE ( 'CTRLER_PRE', 					CONTROLLER.'s' );
DEFINE ( 'MODEL_PRE', 					MODEL.'s' );
DEFINE ( 'VIEW_PRE', 					VIEW.'s' );
DEFINE ( 'CTRLER_DIR', 						CTRLER_PRE.DS );
DEFINE ( 'MODEL_DIR',					MODEL_PRE.DS );
DEFINE ( 'VIEW_DIR', 					VIEW_PRE.DS );
DEFINE ( 'LAYOUT_MAIN', 				'main.tpl' );
DEFINE ( 'ROOT', 						$_CONFIG['ROOT'] ); 
DEFINE ( 'APP_ROOT', 					$_CONFIG['APP_DIR'] );
DEFINE ( 'FW_NAME',						'Zuuda' );
DEFINE ( 'ROOT_DIR', 					ROOT.DS ); 

DEFINE ( 'VENDOR_NAME', 				'bapquad' );
DEFINE ( 'VENDOR', 						ROOT_DIR.'vendor'.DS.VENDOR_NAME );
DEFINE ( 'VENDOR_DIR', 					VENDOR.DS );
DEFINE ( 'SRC_DIR',						'src'.DS );
DEFINE ( 'WEB_ROOT', 					APP_ROOT );
DEFINE ( 'APP_DIR', 					WEB_ROOT.DS );
DEFINE ( 'WEB_DIR', 					APP_DIR );
DEFINE ( 'MOD_NAME_DIR',				"modules".DS );
DEFINE ( 'COM_NAME_DIR', 				"com".DS );
DEFINE ( 'CODE_NAME_DIR', 				"code".DS );
DEFINE ( 'MOD_DIR', 					APP_DIR.MOD_NAME_DIR );
DEFINE ( 'COM', 						MOD_DIR.COM_NAME_DIR );
DEFINE ( 'COM_DIR', 					MOD_DIR.COM_NAME_DIR );
DEFINE ( 'CODE', 						MOD_DIR.CODE_NAME_DIR );
DEFINE ( 'CODE_DIR', 					MOD_DIR.CODE_NAME_DIR );
DEFINE ( 'TMP_NAME_DIR', 				"tmp".DS );
DEFINE ( 'CACHE_NAME_DIR', 				TMP_NAME_DIR."cache".DS );
DEFINE ( 'CACHE_TPL_NAME_DIR',			CACHE_NAME_DIR."templates".DS );
DEFINE ( 'CACHE_LAYOUT_NAME_DIR',		CACHE_TPL_NAME_DIR."layout".DS );
DEFINE ( 'LOG_NAME_DIR',				TMP_NAME_DIR."logs".DS );
DEFINE ( 'TMP_DIR', 					APP_DIR.TMP_NAME_DIR );
DEFINE ( 'CACHE_DIR', 					APP_DIR.CACHE_NAME_DIR );
DEFINE ( 'CACHE_TPL_DIR', 				CACHE_DIR.CACHE_TPL_NAME_DIR );
DEFINE ( 'CACHE_LAYOUT_DIR', 			CACHE_TPL_DIR.CACHE_LAYOUT_NAME_DIR );
DEFINE ( 'LOG_DIR', 					TMP_DIR.LOG_NAME_DIR );
DEFINE ( 'THEME_NAME_DIR',				"themes".DS );
DEFINE ( 'THEME_DIR', 					APP_DIR.THEME_NAME_DIR );
DEFINE ( 'MEDIA_NAME_DIR',				"media".DS );
DEFINE ( 'MEDIA_PHOTO_NAME_DIR',		MEDIA_NAME_DIR."Photos".DS );
DEFINE ( 'MEDIA_AUDIO_NAME_DIR',		MEDIA_NAME_DIR."Audios".DS );
DEFINE ( 'MEDIA_VIDEO_NAME_DIR', 		MEDIA_NAME_DIR."Videos".DS );
DEFINE ( 'MEDIA_DOCUMENT_NAME_DIR', 	MEDIA_NAME_DIR."Documents".DS );
DEFINE ( 'MEDIA_COMPRESSED_NAME_DIR', 	MEDIA_NAME_DIR."Compressed".DS );
DEFINE ( 'MEDIA_OTHERS_NAME_DIR', 		MEDIA_NAME_DIR."Others".DS );
DEFINE ( 'MEDIA_ROOT_NAME_DIR', 		MEDIA_NAME_DIR."Root".DS );
DEFINE ( 'MEDIA_DIR', 				APP_DIR.MEDIA_NAME_DIR );
DEFINE ( 'MEDIA_PHOTO_DIR', 		MEDIA_DIR.MEDIA_PHOTO_NAME_DIR );
DEFINE ( 'MEDIA_AUDIO_DIR', 		MEDIA_DIR.MEDIA_AUDIO_NAME_DIR );
DEFINE ( 'MEDIA_VIDEO_DIR', 		MEDIA_DIR.MEDIA_VIDEO_NAME_DIR );
DEFINE ( 'MEDIA_DOCUMENT_DIR', 		MEDIA_DIR.MEDIA_DOCUMENT_NAME_DIR );
DEFINE ( 'MEDIA_COMPRESSED_DIR', 	MEDIA_DIR.MEDIA_COMPRESSED_NAME_DIR );
DEFINE ( 'MEDIA_OTHERS_DIR', 		MEDIA_DIR.MEDIA_OTHERS_NAME_DIR );
DEFINE ( 'MEDIA_ROOT_DIR',	 		MEDIA_DIR.MEDIA_ROOT_NAME_DIR );
DEFINE ( 'PHOTO_DIR', 				MEDIA_PHOTO_DIR );
DEFINE ( 'AUDIO_DIR', 				MEDIA_AUDIO_DIR );
DEFINE ( 'VIDEO_DIR', 				MEDIA_VIDEO_DIR );
DEFINE ( 'TPL_NAME_DIR', 			"templates".DS );
DEFINE ( 'TPL_LAYOUT_NAME_DIR', 	TPL_NAME_DIR."layout".DS );
DEFINE ( 'TPL_BLOCK_NAME_DIR', 		TPL_NAME_DIR."block".DS );
DEFINE ( 'TPL_WIDGET_NAME_DIR', 	TPL_NAME_DIR."widget".DS );
DEFINE ( 'TPL_DIR', 				APP_DIR.TPL_NAME_DIR );
DEFINE ( 'TPL_LAYOUT_DIR', 			TPL_LAYOUT_NAME_DIR );
DEFINE ( 'TPL_BLOCK_DIR', 			TPL_BLOCK_NAME_DIR );
DEFINE ( 'TPL_WIDGET_DIR', 			TPL_WIDGET_NAME_DIR );
DEFINE ( 'LAYOUT_DIR', 				TPL_LAYOUT_DIR );
DEFINE ( 'BLOCK_DIR', 				TPL_BLOCK_DIR );
DEFINE ( 'WIDGET_DIR', 				TPL_WIDGET_DIR );
DEFINE ( 'SKIN_DIR',				APP_DIR."skin".DS );
DEFINE ( 'IMG_DIR',					SKIN_DIR."img".DS );
DEFINE ( 'CSS_DIR',					SKIN_DIR."css".DS );
DEFINE ( 'JS_DIR',					APP_DIR."js".DS );
DEFINE ( 'JUI_DIR',					APP_DIR."jui".DS );
DEFINE ( 'ORIGIN_DOMAIN', 			$_CONFIG['ORIGIN_DOMAIN'] );
DEFINE ( 'WEB_PATH', 				ORIGIN_DOMAIN.((PS===$_CONFIG['APP_PATH'])?NULL:$_CONFIG['APP_PATH']) );
DEFINE ( 'TPL_PATH', 				WEB_PATH."templates".PS );
DEFINE ( 'MEDIA_PATH', 				WEB_PATH.'media'.PS );
DEFINE ( 'MEDIA_PHOTO_PATH', 		MEDIA_PATH.'Photos'.PS );
DEFINE ( 'MEDIA_AUDIO_PATH', 		MEDIA_PATH.'Audios'.PS );
DEFINE ( 'MEDIA_VIDEO_PATH', 		MEDIA_PATH.'Videos'.PS );
DEFINE ( 'MEDIA_DOCUMENT_PATH', 	MEDIA_PATH.'Documents'.PS );
DEFINE ( 'MEDIA_COMPRESSED_PATH', 	MEDIA_PATH.'Compressed'.PS );
DEFINE ( 'MEDIA_OTHER_PATH', 		MEDIA_PATH.'Others'.PS );
DEFINE ( 'PHOTO_PATH', 				MEDIA_PHOTO_PATH );
DEFINE ( 'AUDIO_PATH', 				MEDIA_AUDIO_PATH );
DEFINE ( 'VIDEO_PATH', 				MEDIA_VIDEO_PATH );
DEFINE ( 'JS_PATH', 				WEB_PATH."js".PS );
DEFINE ( 'JUI_PATH', 				WEB_PATH."jui".PS );
DEFINE ( 'SKIN_PATH', 				WEB_PATH."skin".PS );
DEFINE ( 'CSS_PATH', 				SKIN_PATH."css".PS );
DEFINE ( 'IMG_PATH', 				SKIN_PATH."img".PS );
DEFINE ( 'IMAGE_PATH', 				IMG_PATH );
DEFINE ( 'THEME_PATH', 				WEB_PATH."themes".PS );