<?php
include "../../configs/load.php";
include BASE_HOME."includes/IboEvent.class.php";

//验证用户是否已登录
loginValidate();

$event_id = $_GET['event_id'];

if($event_id){
	$event = new IboEvent($dbutil);
	$users = $event->getEventUserBet($event_id);
	$smarty->assign("users",$users);
	$smarty->display("admin/eventbetusers.tpl");
}else{
	//返回到父页面
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