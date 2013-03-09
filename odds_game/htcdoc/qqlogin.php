<?php
include "../configs/load.php";
include BASE_HOME."includes/IboUser.class.php";
require_once(BASE_HOME."/includes/Tencent.php");
//填写自己的appid
$client_id = '801324132';
//填写自己的appkey
$client_secret = 'fbb14745941f5586e78bd6e03d268d8a';
OAuth::init($client_id, $client_secret);
header('Content-Type: text/html; charset=utf-8');
$callback = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];//回调url
if ($_GET['code']) {//已获得code
        $code = $_GET['code'];
        $openid = $_GET['openid'];
        $openkey = $_GET['openkey'];
        //获取授权token
        $url = OAuth::getAccessToken($code, $callback);
        $r = Http::request($url);
        parse_str($r, $out);
        //存储授权数据
        if ($out['access_token']) {
            $_SESSION['t_access_token'] = $out['access_token'];
            $_SESSION['t_refresh_token'] = $out['refresh_token'];
            $_SESSION['t_expire_in'] = $out['expires_in'];
            $_SESSION['t_code'] = $code;
            $_SESSION['t_openid'] = $openid;
            $_SESSION['t_openkey'] = $openkey;
            
            //验证授权
            $r = OAuth::checkOAuthValid();
            if ($r) {
                header('Location: ' . $callback);//刷新页面
            } else {
                header('Location: login.php?error=tencent');//刷新页面
            }
        } else {
           	header('Location: login.php?error=tencent');//刷新页面
        }
}else if ($_SESSION['t_access_token'] || ($_SESSION['t_openid'] && $_SESSION['t_openkey'])) {//用户已授权 
	$r = Tencent::api('user/info');
	$r = json_decode($r, true);
	print_r($r);
	if($r['errcode'] != '0'){
		header('Location: login.php?error=tencent');//刷新页面
		exit(0);
	}else{
		$userdb = new IboUser($dbutil);
		$user = $userdb->getUser("tencent_".strval($r['data']['openid']));
		if($user){
			$u = array('user_name'=>$r['data']['nick'], "user_photo"=>$r['data']['head'],"user_exp"=>intval($user->user_exp)+5);
			$userdb->updateUserMessage($u, "tencent_".strval($r['data']['openid']));
		}else{
			$userdb->addUser("tencent_".strval($r['data']['openid']), "", $r['data']['nick'], $r['data']['head'], 1);
		}
		$user = $userdb->getUser("tencent_".strval($r['data']['openid']));
		$_SESSION['user'] = $user;
		header("Location: index.php");
	}	
}
?>