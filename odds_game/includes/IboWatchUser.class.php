<?php

class IboWatchUser {

	var $dbutil;
	
	//构造函数
	function __construct($dbutil){
		$this->dbutil = $dbutil;
	}
	
	function checkWatchUser($userid,$watchUserid){
		
		$sql = " select * from ibo_watch_user where user_id='$userid' and watch_user_id='$watchUserid'";
		
		$result = $this->dbutil->get_results($sql);
		
		if($result == null){
			return false;	
		}else{
			return true;
		}
	}
	
	function watchUser($userid,$watchUserid){
// 		$data = array("user_id"=>$userid,
// 			"watch_user_id"=> $watchUserid,
// 		    "watch_time"=>time());
// 		return $this->dbutil->insert('ibo_watch_user', $data);
		$sql = "insert into ibo_watch_user(user_id , watch_user_id ,watch_time) values('$userid','$watchUserid', sysdate())";
		return $this->dbutil->query($sql);
	}
	
	function unWatchUser($userid,$watchUserid){
		$sql = "delete from ibo_watch_user where user_id = '$userid' and watch_user_id = '$watchUserid' ";
		return $this->dbutil->query($sql);
	}
	
	function watchUserList($userid){
		$sql = "select user.user_photo as photo,user.user_id as userid ,count(watch.user_id) as wcount ".
			"from ibo_user user,ibo_watch_user watch ".
			"where user.user_id = watch.user_id ".
			//" and  user.user_id != '$userid' ".
			"group by user.user_photo,user.user_id order by wcount desc limit 6 ";
		return $this->dbutil->get_results($sql);
	}
		
}

?>