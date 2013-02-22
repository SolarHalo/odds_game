<?php

	class IboBet{
		
		var $dbutil;
		
		//构造函数
		function __construct($dbutil){
			$this->dbutil = $dbutil;
		}
		
		/**
		 * 获取用户投注历史
		 * Enter description here ...
		 * @param unknown_type $username 用户名
		 */
		function getUserHistoryBet($username){
			$sql = "select e.sport_subtype_name,e.team_mian_name,e.team_sec_name,
			t.odds_name,t.bet_time,t.bet_vmoney,t.bet_odd from ibo_bet_history t,ibo_event e 
			where t.event_id=e.event_id and t.user_name='".$username."'";
			return $this->dbutil->get_results($sql);
		}
	}

?>