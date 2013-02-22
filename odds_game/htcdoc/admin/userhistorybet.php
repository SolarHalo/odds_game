<?php
include "../../configs/load.php";
include BASE_HOME."includes/IboBet.class.php";

loginValidate();

$username = $_GET['useremail'];
if($username){
	$IboBet = new IboBet($dbutil);
	$userHistoryBets = $IboBet->getUserHistoryBet($username);
	
	$smarty->assign("userHistoryBets",$userHistoryBets);
	$smarty->assign("username",$username);
	$smarty->display("admin/userhistorybet.tpl");
}else{
	gotousermanagePage();
}


function loginValidate(){
	if(!array_key_exists('administrator', $_SESSION)){
		$currentPage = "usermanage.php";
		header("Location: login.php?pageto=".$currentPage);
	}
}

function gotousermanagePage(){
	//如果更换文件名，此处需修改
	$currentPage = "usermanage.php";
	header("Location: ".$currentPage);
}
?>