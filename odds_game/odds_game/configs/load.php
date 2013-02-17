<?php
require 'config.php';
session_start(); 
require  BASE_HOME.'includes/DBUtil.class.php';
include BASE_HOME. 'includes/setup.php';
include BASE_HOME.'includes/CommonUtil.php';

$dbutil = new DbUtil(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$smarty = new Smarty_Ibo();

//开启session


?>
