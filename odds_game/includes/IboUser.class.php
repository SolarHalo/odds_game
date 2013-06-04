<?php
/**
 * 用户管理类
 */

class IboUser{
	var $dbutil;
	
	//构造函数
	function __construct($dbutil){
		$this->dbutil = $dbutil;
	}
	
	/**
	 * 检查用户邮箱是否唯一
	 * Enter description here ...
	 * @param unknown_type $email
	 */
	function checkEmailUnique($email){
		$email = $this->dbutil->get_var("select user_email from ibo_user where user_email='".$email."'");
		if($email){
			return true;
		}else{
			return false;
		}
	}
	
	/**
	 * 
	 * 登录成功
	 * @param unknown_type $email
	 * @param unknown_type $pass
	 */
	function addUser($email, $pass, $name, $photo, $weiboflag = null){
		$user = array("user_email"=>$email,
					  "user_passwd"=> encodePassword($pass),
					  "user_exp"=> 0,
					  "user_vmoney"=>100,
					  "user_regdate"=> date("c"),
					  "user_lastdate"=> date("c"),
					  "user_name"=> $name, 
					  "user_photo" => $photo,
					  "weibo_flag" => $weiboflag);
		$this->dbutil->insert("ibo_user", $user);
		
		$user = $this->dbutil->get_row("select * from ibo_user where user_email='".$email."'");
		$_SESSION['user'] = $user;
	}
	
	function getUser($email){
		$user = $this->dbutil->get_row("select * from ibo_user where user_email='".$email."'");
		return $user;
	}
	
	function getUserById($id){
		$user = $this->dbutil->get_row("select * from ibo_user where user_id='".$id."'");
		return $user;
	}
	
	function updateUsername($userKey,$username){
		return $this->dbutil->update("ibo_user", array("user_name"=> $username), array("user_id"=>$userKey) );
	}
	
	function updatePassword($userKey,$password){
		return $this->dbutil->update("ibo_user", array("user_passwd"=> $password), array("user_id"=>$userKey) );
	}
	
	function updatePhoto($userKey,$photoPath){
		$res = $this->dbutil->update("ibo_user", array("user_photo"=> $photoPath), array("user_id"=>$userKey) );
		return $res;
	}
	
	function updateUserMoney($user){
		$this->dbutil->update("ibo_user", array("user_vmoney"=> $user->user_vmoney), array("user_id"=>$user->user_id) );
	}
	
	function updateUserMessage($user, $id){
		$this->dbutil->update("ibo_user", $user, array("user_id"=>$id));
	}
	
	function getLastThreeBetWathedUser($userid){
		$sql = "select a.* from ("
				."select u.user_id, u.user_name,u.user_email,u.user_exp, u.user_vmoney, u.user_photo, b.event_id, b.bet_vmoney, b.odds_name, b.bet_time , e.team_mian_name, e.team_sec_name "
				."from ibo_watch_user i, ibo_user u, ibo_bet b, ibo_event e "
				."where e.event_id = b.event_id and  u.user_email = b.user_name and u.user_id = i.watch_user_id and i.user_id = $userid "
				.") a "
				."where 3 > ( "
				."select count(*) from ibo_bet be where a.user_email = be.user_name and be.bet_time > a.bet_time )";

		return $this->dbutil->get_results($sql);
	}
}
?>