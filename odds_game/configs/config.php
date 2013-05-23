<?php
ob_start();
/**
 * 定义数据库连接
 * Enter description here ...
 * @var unknown_type
 */
define('DB_NAME', 'odd_games'); 
define('DB_USER', 'root'); 
define('DB_PASSWORD', 'root'); 
define('DB_HOST', 'localhost'); 
define('DB_CHARSET', 'utf8'); 

/**
 * 定义数据库查询结果类型
 * Enter description here ...
 * @var unknown_type
 */
define("OBJECT", "object");
define("OBJECT_K", "object_k");
define("ARRAY_A", "array_a");
define("ARRAY_N", "array_n");

//定义cookie保持登录用户加密密码的key
define("COOKIEENCRYPTKEY", "iboencryptcookiepassword");

// 手动指定Smarty的libs目录位置
 
 

//define('SMARTY_DIR', 'G:/odds_game/odds_game/lib/Smarty-3.1.13/libs/');
 
//define('SMARTY_DIR', '/var/www/odds_game/lib/Smarty-3.1.13/libs/');

//define('SMARTY_DIR', 'D:/gitspace/odds_game/odds_game/lib/Smarty-3.1.13/libs/');
// define('SMARTY_DIR', 'D:/workspace4php/odds_game/odds_game/lib/Smarty-3.1.13/libs/');

//define('SMARTY_DIR', 'G:/odds_game/odds_game/lib/Smarty-3.1.13/libs/');
 
                       
//define('SMARTY_DIR', 'C:/weblib/Smarty-3.1.13/libs/');

define('SMARTY_DIR','D:/workspace/php/odds_game/odds_game/lib/Smarty-3.1.13/libs/');
 

ini_set('include_path', ini_get('include_path').PATH_SEPARATOR.SMARTY_DIR);

//配置程序根目录,非文档根目录
 
 
//define('BASE_HOME', "D:/gitspace/odds_game/odds_game/");
//define('BASE_HOME', "G:/odds_game/odds_game/");
 
//define('BASE_HOME', "/var/www/odds_game/");
//define('BASE_HOME', "D:/workspace4php/odds_game/odds_game/");
//define('BASE_HOME', "G:/odds_game/odds_game/");
//define('BASE_HOME', "D:/work/workspace/phpspace/odds_game/odds_game/");
define('BASE_HOME', "D:/workspace/php/odds_game/odds_game/");
 
//获得http路径的地址
//define('DOMAIN_HOME', $_SERVER['HTTP_HOST']);
//define('DOMAIN_HOME', "http://ibo123.com/odds_game/htcdoc/");
//define('URL_ROOT', "http://ibo123.com/odds_game/htcdoc/");

define('DOMAIN_HOME', "http://localhost/");
define('URL_ROOT', "http://localhost/");

?>
