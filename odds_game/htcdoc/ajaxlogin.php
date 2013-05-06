<?php
include '../configs/load.php';
include BASE_HOME."includes/IboUser.class.php";
header("Content-type: text/plain; charset=utf-8");
$msg = "";

if(array_key_exists("email", $_GET) && array_key_exists("password", $_GET)){
	$email = $_GET['email'];
	$pass = $_GET['password'];
	$userdb = new IboUser($dbutil);
	$user = $userdb->getUser($email);
	if($user){
		if(encodePassword($pass) == $user->user_passwd){
			$user->user_exp = $user->user_exp + 5;
			$userdb->updateUserMessage(array('user_exp'=>$user->user_exp), $user->user_id);
			$_SESSION['user'] = $user;
			
			$msg = "success:::<div class='user_colum'>欢迎你 : <font>".$user->user_name."</font><br />当前金币："
			.$user->user_vmoney."&nbsp <a href='".URL_ROOT."manager.php'>管理中心</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='logout.php'>退出</a>"
            ."</div>:::$user->user_vmoney";
		}else{
			$msg = "error:::用户名密码不正确！";
		}
	}
	else{
		$msg = "error:::用户不存在！";
	}
	
}else{
	$msg = "error:::请输入登录信息！";
}
echo $msg;
?>