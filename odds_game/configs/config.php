<?php
ob_start();   //加上就好了。。。
/**
 * 定义数据库连接
 * Enter description here ...
 * @var unknown_type
 */
define('DB_NAME', 'odds_game'); 
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

// 手动指定Smarty的libs目录位置
 
//define('SMARTY_DIR', 'E:/gisrespository/personal/php/php/odds_game/odds_game/lib/Smarty-3.1.13/libs/');
 define('SMARTY_DIR', 'D:/game/odds_game/lib/Smarty-3.1.13/libs/');

ini_set('include_path', ini_get('include_path').PATH_SEPARATOR.SMARTY_DIR);

//配置程序根目录,非文档根目录
 
//define('BASE_HOME', "E:/gisrespository/personal/php/php/odds_game/odds_game/");
define('BASE_HOME', "D:/game/odds_game/");
//获得http路径的地址
//define('DOMAIN_HOME', $_SERVER['HTTP_HOST']);
define('DOMAIN_HOME', "http://localhost/");
define('urlroot', "http://localhost/");

?>
