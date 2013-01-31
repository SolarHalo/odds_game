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
	function addUser($email, $pass){
		$user = array("user_email"=>$email,
					  "user_passwd"=> encodePassword($pass),
					  "user_exp"=> 0,
					  "user_vmoney"=>50,
					  "user_regdate"=> date("c"),
					  "user_lastdate"=> date("c"));
		$this->dbutil->insert("ibo_user", $user);
		
		$user = $this->dbutil->get_row("select * from ibo_user where user_email='".$email."'");
		$_SESSION['user'] = $user;
	}
	
	function getUser($email){
		$user = $this->dbutil->get_row("select * from ibo_user where user_email='".$email."'");
		return $user;
	}
}
?>