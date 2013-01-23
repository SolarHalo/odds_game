<?php
include "../../configs/load.php";



//if(!array_key_exists('administrator', $_SESSION)){
//	header("Location: login.php");
//}



//$admin_user = $_SESSION['administrator'];

$smarty->assign("currentnav" , "oddsmanage");



$smarty->assign("modulename","赛事管理首页");
$smarty->display("admin/oddsmanage.tpl");
?>