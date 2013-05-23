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
	function getAllEvent($conditionArr){
		$sqlcondition = $this->getEventSqlCondition($conditionArr);
		if($sqlcondition){
			$sql = "SELECT e.event_id, e.team_mian_name, e.team_sec_name, e.sport_subtype_name, e.event_time, o.victory, o.planish, o.fail ". 
											"FROM ibo_event e, ibo_odds o ".
											"WHERE e.event_id = o.event_id AND e.event_time > now() and e.event_result='' and (".$sqlcondition.") order by e.event_time asc";
		}else{
			$sql = "SELECT e.event_id, e.team_mian_name, e.team_sec_name, e.sport_subtype_name, e.event_time, o.victory, o.planish, o.fail ". 
											"FROM ibo_event e, ibo_odds o ".
											"WHERE e.event_id = o.event_id AND e.event_time > now() and e.event_result='' order by e.event_time asc";
			
		}
		return $this->dbutil->get_results($sql);
	}
	
	function setBet($param){
		$this->dbutil->insert("ibo_bet", $param);
		return $this->dbutil->last_error;
	}
	
	function getEventResults($eids){
		return $this->dbutil->get_results("select event_result from ibo_event where event_id in(".$eids.")");
	}
	
	/**
	 * 获取所有结束赛事
	 */
	function getAllFinishedEvent($conditionArr,$page){
		$sqlcondition = $this->getEventSqlCondition($conditionArr);
		$totalsize = $this->getAllFinishedEventNums($conditionArr);
		if($totalsize<1){
			return null;
		}
		$page->setTotalSize($totalsize);
		if($sqlcondition){
			$sql = "SELECT e.event_id, e.team_mian_name, e.team_sec_name, e.sport_subtype_name, e.event_time,e.event_result, o.victory, o.planish, o.fail ". 
											"FROM ibo_event e, ibo_odds o ".
											"WHERE e.event_id = o.event_id AND e.event_time < date_format(curdate(), '%Y-%m-%d' ) and (e.event_result is not null and e.event_result!='') and (".$sqlcondition.") order by e.event_time asc limit ".$page->startIndex.",".$page->pagesize;
		}else{
			$sql = "SELECT e.event_id, e.team_mian_name, e.team_sec_name, e.sport_subtype_name, e.event_time,e.event_result, o.victory, o.planish, o.fail ". 
											"FROM ibo_event e, ibo_odds o ".
											"WHERE e.event_id = o.event_id AND e.event_time < date_format(curdate(), '%Y-%m-%d' ) and (e.event_result is not null and e.event_result!='') order by e.event_time asc limit ".$page->startIndex.",".$page->pagesize;
		}
		$events =  $this->dbutil->get_results($sql);
		$page->result = $events;
		return $page;
	}
	
	/**
	 * 获取结束赛事条数
	 * @param unknown_type $conditionArr
	 */
	function getAllFinishedEventNums($conditionArr){
		$sqlcondition = $this->getEventSqlCondition($conditionArr);
		if($sqlcondition){
			$sql = "select * from ibo_event e, ibo_odds o ".
											"WHERE e.event_id = o.event_id AND e.event_time < date_format(curdate(), '%Y-%m-%d' ) and (e.event_result is not null and e.event_result!='') and (".$sqlcondition.") order by e.event_time asc";
		}else{
			$sql = "select * from ibo_event e, ibo_odds o ".
											"WHERE e.event_id = o.event_id AND e.event_time < date_format(curdate(), '%Y-%m-%d' ) and (e.event_result is not null and e.event_result!='') order by e.event_time asc";
		}
		return $this->dbutil->getResultNums($sql);
	}
	
	/**
	 * 获取赛事投注的用户列表
	 */
	function getEventUserBet($event_id){
//		$event_id = '676';
		$sql = "select b.user_name, b.bet_vmoney,b.bet_odd,b.odds_name,b.bet_time from ibo_bet b 
		where b.event_id='".$event_id."'";
		return $this->dbutil->get_results($sql);
	}
	
	/**
	 * 获取历史赔率
	 * Enter description here ...
	 * @param unknown_type $event_id
	 */
	function getEventOddsHistory($event_id){
		return $this->dbutil->get_results("
			select victory,planish,fail from ibo_odds_history where event_id='".$event_id."'
		");
		
	}
	
	/**
	 * 拼sql查询条件
	 * @param unknown_type $sport_subtype_name 赛事名称
	 * @param unknown_type $team_name 球队名称
	 */
	function getEventSqlCondition($conditionArr){
		if(!$conditionArr||count($conditionArr)<1){
			return null;
		}
		$sqlcondition = null;
		if(array_key_exists('sport_subtype_name',$conditionArr)){
			$sport_subtype_name = $conditionArr['sport_subtype_name'];
			if($sport_subtype_name!=null&&$sport_subtype_name!=''){
				$sportCondition = "sport_subtype_name like '%".$sport_subtype_name."%'";
			}
		}
		if(array_key_exists('team_name', $conditionArr)){
			$team_name = $conditionArr['team_name'];
			if($team_name!=null&&$team_name!=''){
				$teamCondition = "(team_mian_name like '%".$team_name."%' or team_sec_name like '%".$team_name."%')";
			}
		}
		
		if(array_key_exists('starttime',$conditionArr)){
			$starttime = $conditionArr['starttime'];
			if($starttime!=null&&$starttime!=''){
				$starttimeCondition = "event_time >=date_format('".$starttime."', '%Y-%m-%d' )";
			}
		}
		if(array_key_exists('endtime', $conditionArr)){
			$endtime = $conditionArr['endtime'];
			if($endtime!=null&&$endtime!=''){
				$endtimeCondition = "event_time<=date_format('".$endtime."','%Y-%m-%d')";
			}
		}
		
		$expression = " and ";
		$conditionArray = array();
		
		if($sportCondition!=null){
			array_push($conditionArray, $sportCondition);
		}
		if($teamCondition!=null){
			array_push($conditionArray, $teamCondition);
		}
		if($starttimeCondition!=null){
			array_push($conditionArray, $starttimeCondition);
		}
		if($endtimeCondition!=null){
			array_push($conditionArray, $endtimeCondition);
		}
		$sqlcondition = implode($expression,$conditionArray);
		return $sqlcondition;
	}
	
	/**
	 * 修改没有比分的已结束赛事，并将result_type 设置为1
	 * @param unknown_type $score 修改后的比分
	 * @param unknown_type $event_id 赛事id
	 */
	function upadteHistoryeventScore($score,$event_id){
		$sql = "update ibo_event set event_result='".$score."',result_type=1 where event_id='".$event_id."'";
		return $this->dbutil->query($sql);
	}
	
	/**
	 * 查询所有没有比分的已结束赛事
	 */
	function getHistoryeventWithNoScore(){
		$sql = "SELECT e.event_id, e.team_mian_name, e.team_sec_name, e.sport_subtype_name, e.event_time,e.event_result ". 
											"FROM ibo_event e ".
											"WHERE e.event_time < date_format(curdate(), '%Y-%m-%d' ) and (e.event_result is null or e.event_result='') order by e.event_time asc";
		return $this->dbutil->get_results($sql);
	}
	
	/**
	 * 根据id获取赛事
	 * @param $event_id
	 */
	function getEventById($event_id){
		$sql = "select * from ibo_event where event_id=$event_id ";
		return $this->dbutil->get_row($sql);
	}
}
?>