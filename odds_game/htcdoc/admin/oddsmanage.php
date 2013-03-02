<?php
include "../../configs/load.php";
//include BASE_HOME."includes/EventsDBUtil.php";

include BASE_HOME."includes/IboEvent.class.php";
include BASE_HOME.'includes/Page.class.php';




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
}

//比赛结束时间
if(array_key_exists('endtime', $_GET)){
	$endtime = $_GET['endtime'];
}
$conditionArr = array();
if($sport_subtype_name!=null){
	$conditionArr['sport_subtype_name'] = $sport_subtype_name;
}
if($team_name!=null){
	$conditionArr['team_name'] = $team_name;
}
if($starttime!=null){
	$conditionArr['starttime'] = $starttime;
}
if($endtime!=null){
	$conditionArr['endtime'] = $endtime;
}

if(array_key_exists('type', $_GET)){
	$type = $_GET['type'];
}else{
	$type = "current";
}

if(array_key_exists('pageNo', $_GET)){
	$pageNo = $_GET['pageNo'];
}else{
	$pageNo = 1;
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
//	$events = $iboEvent->getAllEvent($sport_subtype_name,$team_name,$starttime,$endtime);
	$events = $iboEvent->getAllEvent($conditionArr);
}else{
	//查询比赛结束赛事
	$page = new Page($pageNo,10);
	$events = $iboEvent->getAllFinishedEvent($conditionArr,$page)->result;
	$page->result = null;
}
$smarty->assign("eventcurrentnav",$type);
$smarty->assign("currentnav" , "oddsmanage");
$smarty->assign("events",$events);
$smarty->assign("page",$page);

$maxdisplaypageNum = 5;
if($page->totalpage<=5){
	$startPage = 1;
	$endPage = $page->totalpage;
}else{
	if($page->pageNo>(int)$maxdisplaypageNum/2+1){
		if($page->pageNo+2<$page->totalpage){
			$startPage = $page->pageNo-2;
			$endPage = $page->pageNo+2;
		}else{
			$startPage = $page->totalpage-$maxdisplaypageNum+1;
			$endPage = $page->totalpage;
		}
	}else{
		$startPage = 1;
		if($page->totalpage>5){
			$endPage = $maxdisplaypageNum;
		}else{
			$endPage = $page->totalpage;
		}
	}
}
$smarty->assign("startPage",$startPage);
$smarty->assign("endPage",$endPage);


$smarty->assign("modulename","赛事管理首页");
$smarty->display("admin/oddsmanage.tpl");


?>