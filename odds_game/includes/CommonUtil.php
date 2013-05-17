<?php
include_once BASE_HOME."includes/IboUser.class.php";
function encodePassword($password){
	return md5($password."iboadmin");
}


function passport_encrypt($txt, $key) {
	srand((double)microtime() * 1000000);
	$encrypt_key = md5(rand(0, 32000));
	$ctr = 0;
	$tmp = '';
	for($i = 0;$i < strlen($txt); $i++) {
		$ctr = $ctr == strlen($encrypt_key) ? 0 : $ctr;
		$tmp .= $encrypt_key[$ctr].($txt[$i] ^ $encrypt_key[$ctr++]);
	}
	return base64_encode(passport_key($tmp, $key));
}

function passport_decrypt($txt, $key) {
	$txt = passport_key(base64_decode($txt), $key);
	$tmp = '';
	for($i = 0;$i < strlen($txt); $i++) {
		$md5 = $txt[$i];
		$tmp .= $txt[++$i] ^ $md5;
	}
	return $tmp;
}

function passport_key($txt, $encrypt_key) {
	$encrypt_key = md5($encrypt_key);
	$ctr = 0;
	$tmp = '';
	for($i = 0; $i < strlen($txt); $i++) {
		$ctr = $ctr == strlen($encrypt_key) ? 0 : $ctr;
		$tmp .= $txt[$i] ^ $encrypt_key[$ctr++];
	}
	return $tmp;
}

function checkLoginState($email, $pass, $dbutil){
	$userdb = new IboUser($dbutil);
	$user = $userdb->getUser($email);
	if($user){
		if($pass == $user->user_passwd){
			$user->user_exp = $user->user_exp + 5;
			$userdb->updateUserMessage(array('user_exp'=>$user->user_exp), $user->user_id);
			$_SESSION['user'] = $user;
			
			return $user;
		}else{
			return 2;
		}
	}
	else{
		return 3;
	}
}
?>