<?php
class IboEvent{
	var $dbutil;
	
	//构造函数
	function __construct($dbutil){
		$this->dbutil = $dbutil;
	}
	
	/**
	 * 获取所有当前赛事表.
	 */
	function getAllEvent(){
		return $this->dbutil->get_results("SELECT e.event_id, e.team_mian_name, e.team_sec_name, e.sport_subtype_name, e.event_time, o.victory, o.planish, o.fail ". 
											"FROM ibo_event e, ibo_odds o ".
											"WHERE e.event_id = o.event_id AND e.event_time > date_format( date_sub(curdate(), INTERVAL 2 DAY), '%Y-%m-%d' ) and e.event_result='' order by e.event_time desc");
	}
	
	function setBet($param){
		$this->dbutil->insert("ibo_bet", $param);
		return $this->dbutil->last_error;
	}
	
	function getEventResults($eids){
		return $this->dbutil->get_results("select event_result from ibo_event where event_id in(".$eids.")");
	}
}
?>