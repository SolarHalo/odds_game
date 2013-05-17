<?php
include '../configs/load.php';
header("Content-type: text/plain; charset=utf-8");
$msg = array();

if(array_key_exists("email", $_POST) && array_key_exists("password", $_POST)){
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$holdlogin = $_POST['holdlogin'];
	
	$checkd = checkLoginState($email, encodePassword($pass), $dbutil);
	if(!is_int($checkd)){
		if($holdlogin == "true"){
			$cookiemsg = array();
			$cookiemsg['email'] = $email;
			$cookiemsg['key'] = passport_encrypt(encodePassword($pass) , COOKIEENCRYPTKEY);
			setcookie("usermsg", json_encode($cookiemsg), time() + 3600 * 24 * 30);
		}
		
		
		$user = $checkd;
		$msg['code'] = "success";
		$msg['msg'] = "<div class='user_colum'>欢迎你 : <font>".$user->user_name."</font><br />当前金币："
			.$user->user_vmoney."&nbsp <a href='".URL_ROOT."manager.php'>管理中心</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href='logout.php'>退出</a>"
            ."</div>";
        $msg['money'] = $user->user_vmoney;
	}else if($checkd == 2){
		$msg['code'] = "error";
		$msg['msg'] = "用户名密码不正确！";
	}else if($checkd == 3){
		$msg['code'] = "error";
		$msg['msg'] = "用户不存在！";
	}
	
}else{
	$msg['code'] = "error";
	$msg['msg'] = "请输入登录信息！";
}
echo json_encode($msg);
?>