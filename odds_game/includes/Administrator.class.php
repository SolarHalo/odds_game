<?php

/**
 * 管理员数据库操作类,主要实现对管理员的数据库操作
 * Enter description here ...
 * @author hsw
 *
 */
class Administrator{
	
	var $dbutil;
	
	//构造函数
	function __construct($dbutil){
		$this->dbutil = $dbutil;
	}
	/**
	 * 根据用户名获取用户信息
	 * Enter description here ...
	 * @param unknown_type $name
	 */
	function getAdminByName($name){
		//echo "<pre>";
        //print_r("select * from ibo_administrator where admin_name='".$name."'");
        //exit();
		return $this->dbutil->get_row("select * from ibo_administrator where admin_name='".$name."'");
	}
	/**
	 * 检查登录
	 * @param unknown_type $name
	 * @param unknown_type $password
	 */
	function checkLogin($name, $password){
		$admin = $this->getAdminByName($name);
		echo $admin->admin_passwd;
		echo "xxxxxxxxxx";
		echo $password;
		if($admin){
			echo $admin->admin_passwd."      ".$password;
			if($admin->admin_passwd == $password){
				return $admin;
			}else{
				return false;
			}
		}else{
			return false;
		}
		
	}
	
	/**
	 * 增加一个管理员
	 * Enter description here ...
	 * @param unknown_type $data
	 */
	function addAdmin($data){
		 $this->dbutil->insert('ibo_administrator', $data);
	}
	
	/**
	 * 获取所有的管理员.无分页.
	 * Enter description here ...
	 */
	function getAllAdmins(){
		return $this->dbutil->get_results("select * from ibo_administrator");
	}
	
	/**
	 * 更新管理员密码
	 * Enter description here ...
	 * @param unknown_type $data
	 * @param unknown_type $username
	 */
	function updateAdmin($data, $username){
		return $this->dbutil->update("ibo_administrator", $data, array("admin_name"=>$username));
	}
	
	/**
	 * 删除管理员
	 * Enter description here ...
	 * @param unknown_type $username
	 */
	function deleteAdmin($username){
		$this->dbutil->query("delete from ibo_administrator where admin_name='" . $username . "'");
	}
}

?>