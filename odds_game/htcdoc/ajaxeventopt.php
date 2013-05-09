<?php
include '../configs/load.php';
include BASE_HOME."includes/IboEvent.class.php";
include BASE_HOME."includes/IboUser.class.php";

$method = $_GET['method'];
$user = $_SESSION['user'];

if($method == 'getAllEvent'){
	$eventdb = new IboEvent($dbutil);
	$events = $eventdb->getAllEvent(null,null,null,null);
	$smarty->assign("events", $events);
	echo $smarty->fetch("eventtable.tpl", false);
	exit(0);
}

if($method == 'betevent'){
	$msg = array();
	if(!$user){
		$msg['code'] = "error";
		$msg['msg']="您还未登录，请先登录！";
		//echo "error:您还未登录，请先登录！";
		exit(0);
	}
	$mybets = $_GET['betodd'];
	$eventdb = new IboEvent($dbutil);
	$eids = '';
	foreach ($mybets as $k => $mybet){
		$eids = $eids.$k.',';
	}
	$eids = substr($eids, 0, strlen($eids) -1);
	$eventresult = $eventdb->getEventResults($eids);
	foreach ($eventresult as $res){
		if($res->event_result != '' && $res->event_result != null){
			$msg['code'] = "error";
			$msg['msg']="部分赛事已结束，请刷新页面后重新投注！";
			//echo "error:::部分赛事已结束，请刷新页面后重新投注！";
			exit(0);
		}
	}
	$betmoneyC = 0;
	foreach ($mybets as $key => $mybet){
		foreach ($mybet as $bet){
			$data = array('event_id'=> $key, 'odds_name'=>$bet['oddname'], 'user_name'=> $user->user_email,
							'bet_time'=>date("Y-m-d H:i:s"), 'bet_vmoney'=> $bet['betmoney'], 'bet_odd'=> $bet['odd']);
			$re = $eventdb->setBet($data);
			$betmoneyC = $betmoneyC + (int)$bet['betmoney'];
			if($re !=0){
				$msg['code'] = "error";
				$msg['msg']="数据库错误，请重试！";
				//echo "error:::数据库错误，请重试！";
				exit(0);
			}
		}
	}
	$user->user_vmoney = (int)$user->user_vmoney - $betmoneyC;
	$_SESSION['user'] = $user;
	$userdb = new IboUser($dbutil);
	$u = array("user_vmoney"=>$user->user_vmoney, "user_exp" => $user->user_exp + 1);
	$userdb->updateUserMessage($u, $user->user_id);
	$msg['code'] = "success";
	$msg['msg']="投注已保存成功！<a href='".URL_ROOT."manager.php' >查看投注单</a>";
	//echo "{'code':'success','msg':'投注已保存成功！<a href='".URL_ROOT."manager.php' >查看投注单</a>";
	echo json_encode($msg);
	exit(0);
}
?>