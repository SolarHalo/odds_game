<?php
include "../configs/load.php";
include BASE_HOME.'includes/saetv2.ex.class.php';
require_once(BASE_HOME."/includes/Tencent.php");


define( "WB_AKEY" , '995123813' );
	define( "WB_SKEY" , '9c0a16dd718ee29b2278342230e6ed2a' );
	define( "WB_CALLBACK_URL" , DOMAIN_HOME.'sinalogin.php' );
	//填写自己的appid
	$client_id = '801324132';
	//填写自己的appkey
	$client_secret = 'fbb14745941f5586e78bd6e03d268d8a';
	OAuth::init($client_id, $client_secret);

	$o = new SaeTOAuthV2( WB_AKEY , WB_SKEY );

	$code_url = $o->getAuthorizeURL( WB_CALLBACK_URL );
	
	$tencentCallBack = OAuth::getAuthorizeURL(DOMAIN_HOME."qqlogin.php");
	
	$smarty->assign("sinaauthurl", $code_url);
	$smarty->assign("tencenturl", $tencentCallBack);

$smarty->display("windowlogin.tpl");

?>