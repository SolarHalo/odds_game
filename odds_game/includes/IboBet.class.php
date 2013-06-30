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
	/**
	 * 获取所有当前投注.
	 */
	function getAllBet4User($username,$getAll){
		$sql = "SELECT bet.odds_name odds_name, 	".
			"	ev.team_mian_name team_mian_name, 	".
			"	ev.team_sec_name team_sec_name, 	".
			"	bet.bet_time bet_time, 				".
			"	bet.bet_odd bet_odd, 				".
			"	bet.bet_money bet_money, 			".
			"	bet.bet_vmoney bet_vmoney 			".
			"from ibo_bet bet, ibo_event ev 		".
			"where bet.event_id = ev.event_id 		";
		if($username != null){
			$sql = $sql." and bet.user_name = '".$username."'";
		}
		$sql = $sql." ORDER BY bet.bet_time desc ";
		if(!$getAll){
			$sql = $sql."LIMIT 5";
		}
		return $this->dbutil->get_results($sql);
	}
	
	function getAllBetHistory4User($username,$getAll){
		$sql = "SELECT bet.odds_name odds_name, 	".
			"	ev.team_mian_name team_mian_name, 	".
			"	ev.team_sec_name team_sec_name, 	".
			"	bet.bet_time bet_time, 				".
			"	bet.bet_odd bet_odd, 				".
			"	bet.bet_money bet_money, 			".
			"	bet.bet_vmoney bet_vmoney 			".
			"from ibo_bet_history bet, ibo_event ev ".
			"where bet.event_id = ev.event_id 		";
		if($username != null){
			$sql = $sql." and bet.user_name = '".$username."'";
		}
		$sql = $sql." ORDER BY bet.bet_time desc ";
		if(!$getAll){
			$sql = $sql."LIMIT 5";
		}
		return $this->dbutil->get_results($sql);
	}
	
	function getBetResults($eids){
		
	}
	
	function getLastBet(){
		$sql = "select u.user_id, t.odds_name, t.bet_vmoney, t.bet_odd,".
			   " t.bet_time, e.team_mian_name, e.team_sec_name,".
 			   "u.user_email, u.user_name, u.user_photo,u.user_id  from ibo_bet t, ibo_event e".
 			   " , ibo_user u where t.event_id = e.event_id and".
 			   " t.user_name = u.user_email order by t.bet_time desc limit 15";
		
		return $this->dbutil->get_results($sql);
	}
	
	/**
	 * 统计赛事投注统计情况  ：统计赛事投掷用户数，投掷总金额
	 * @param $event_id
	 */
	function getBetStatisticByEventId($event_id){
		//$sql = "select t.odds_name,t.bet_odd ,count(t.user_name) sumUser,sum(t.bet_vmoney) sumVmoney from ibo_bet t where t.event_id='".$event_id."' group by t.odds_name,t.bet_odd";
		$sql = "select a.odd_name odds_name, a.bet_odd, count(t.user_name) sumUser , sum(case when t.bet_vmoney is null then 0 else t.bet_vmoney end) sumVmoney from "
				."(select event_id, '主胜' as odd_name, victory as bet_odd from ibo_odds where event_id='".$event_id."' union ALL "
				."select event_id,'主平' as odd_name, planish as bet_odd from ibo_odds where event_id='".$event_id."' union ALL "
				."select event_id,'主负' as odd_name, fail as bet_odd from ibo_odds where event_id='".$event_id."' ) a "
				."LEFT JOIN ibo_bet t on a.event_id = t.event_id and a.odd_name = t.odds_name group by a.odd_name";
		
		return $this->dbutil->get_results($sql);
	}
}

?>