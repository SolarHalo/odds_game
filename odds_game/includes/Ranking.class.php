<?php
class IboRanking{
var $dbutil;
	
	//构造函数
	function __construct($dbutil){
		$this->dbutil = $dbutil;
	}
	
	/**
	 * 查询周榜
	 */
	function getWeekRanking(){
		$sql = "SELECT user_id, user_email,user_name, user_vmoney,rank   FROM `ibo_leaderboard` where rank_type=0 order by rank";
		return $this->dbutil->get_results($sql);
	}
	
	/**
	 * 查询月榜
	 */
	function getMonthRanking(){
		$sql = "SELECT user_id, user_email,user_name, user_vmoney ,rank   FROM `ibo_leaderboard` where rank_type=1 order by rank";
		return $this->dbutil->get_results($sql);
	}
	
	/**
	 * 查询总榜
	 */
	function getTotalRanking(){
		$sql = "SELECT user_id, user_email,user_name, user_vmoney ,rank   FROM `ibo_leaderboard` where rank_type=2 order by rank";
		return $this->dbutil->get_results($sql);
	}
}

?>