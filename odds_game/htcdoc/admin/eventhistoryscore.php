<?php

include "../../configs/load.php";
include BASE_HOME."includes/IboEvent.class.php";

//if(!array_key_exists('administrator', $_SESSION)){
//	//如果更换文件名，此处需修改
//	$currentPage = "oddsmanage.php";
//	header("Location: login.php?pageto=".$currentPage);
//}

loginValidate();

$event_id = $_GET['event_id'];
if($event_id){
	$event = new IboEvent($dbutil);
	
	$eventResults = $event->getEventHistoryScore($event_id);
	$smarty->assign("eventResults",$eventResults);
	
	$smarty->display("admin/eventhistoryscore.tpl");
}else{
	gotoOddManagePage();
}

function loginValidate(){
	if(!array_key_exists('administrator', $_SESSION)){
		//如果更换文件名，此处需修改
		$currentPage = "oddsmanage.php";
		header("Location: login.php?pageto=".$currentPage);
	}
}

function gotoOddManagePage(){
	//如果更换文件名，此处需修改
	$currentPage = "oddsmanage.php";
	header("Location: ".$currentPage);
}

?>