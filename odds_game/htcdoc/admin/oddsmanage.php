<?php
include "../../configs/load.php";
//include BASE_HOME."includes/EventsDBUtil.php";

include BASE_HOME."includes/IboEvent.class.php";




if(!array_key_exists('administrator', $_SESSION)){
	//如果更换文件名，此处需修改
	$currentPage = "oddsmanage.php";
	header("Location: login.php?pageto=".$currentPage);
}

//赛事名称
if(array_key_exists('sport_subtype_name', $_GET)){
	$sport_subtype_name = $_GET['sport_subtype_name'];
}

//队名
if(array_key_exists('team_name', $_GET)){
	$team_name = $_GET['team_name'];
}

//比赛起始时间
if(array_key_exists('starttime', $_GET)){
	$starttime = $_GET['starttime'];
//	$starttime = dateformat($starttime);
}

//比赛结束时间
if(array_key_exists('endtime', $_GET)){
	$endtime = $_GET['endtime'];
//	$endtime = dateformat($endtime);
}

if(array_key_exists('type', $_GET)){
	$type = $_GET['type'];
}else{
	$type = "current";
}

//$admin_user = $_SESSION['administrator'];

//$eventsdb = new EventsDBUtil($dbutil);
//$events = $eventsdb->getAllEventsByDateDesc();
//$smarty->assign("events" ,$events);

//if(!$type){
//	$type = "current";
//}

$iboEvent = new IboEvent($dbutil);

$events = null;

if($type=='current'){
	//查询当前赛事
	$events = $iboEvent->getAllEvent($sport_subtype_name,$team_name,$starttime,$endtime);
}else{
	//查询比赛结束赛事
	$events = $iboEvent->getAllFinishedEvent($sport_subtype_name,$team_name,$starttime,$endtime);
}
$smarty->assign("eventcurrentnav",$type);
$smarty->assign("currentnav" , "oddsmanage");
$smarty->assign("events",$events);



$smarty->assign("modulename","赛事管理首页");
$smarty->display("admin/oddsmanage.tpl");


?>