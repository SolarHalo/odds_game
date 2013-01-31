<?php
include "../../configs/load.php";
include BASE_HOME."includes/EventsDBUtil.php";



//if(!array_key_exists('administrator', $_SESSION)){
//	header("Location: login.php");
//}



//$admin_user = $_SESSION['administrator'];

$smarty->assign("currentnav" , "oddsmanage");
$eventsdb = new EventsDBUtil($dbutil);
$events = $eventsdb->getAllEventsByDateDesc();
$smarty->assign("events" ,$events);



$smarty->assign("modulename","赛事管理首页");
$smarty->display("admin/oddsmanage.tpl");
?>