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
	function getAllEvent($sport_subtype_name,$team_name,$starttime,$endtime){
		$sqlcondition = $this->getEventSqlCondition($sport_subtype_name,$team_name,$starttime,$endtime);
		if($sqlcondition){
			$sql = "SELECT e.event_id, e.team_mian_name, e.team_sec_name, e.sport_subtype_name, e.event_time, o.victory, o.planish, o.fail ". 
											"FROM ibo_event e, ibo_odds o ".
											"WHERE e.event_id = o.event_id AND e.event_time > date_format(curdate(), '%Y-%m-%d' ) and e.event_result='' and (".$sqlcondition.") order by e.event_time asc";
		}else{
			$sql = "SELECT e.event_id, e.team_mian_name, e.team_sec_name, e.sport_subtype_name, e.event_time, o.victory, o.planish, o.fail ". 
											"FROM ibo_event e, ibo_odds o ".
											"WHERE e.event_id = o.event_id AND e.event_time > date_format(curdate(), '%Y-%m-%d' ) and e.event_result='' order by e.event_time asc";
			
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
	function getAllFinishedEvent($sport_subtype_name,$team_name,$starttime,$endtime){
		$sqlcondition = $this->getEventSqlCondition($sport_subtype_name,$team_name,$starttime,$endtime);
		if($sqlcondition){
			$sql = "SELECT e.event_id, e.team_mian_name, e.team_sec_name, e.sport_subtype_name, e.event_time,e.event_result, o.victory, o.planish, o.fail ". 
											"FROM ibo_event e, ibo_odds o ".
											"WHERE e.event_id = o.event_id AND e.event_time < date_format(curdate(), '%Y-%m-%d' ) and (e.event_result is not null and e.event_result!='') and (".$sqlcondition.") order by e.event_time asc";
		}else{
			$sql = "SELECT e.event_id, e.team_mian_name, e.team_sec_name, e.sport_subtype_name, e.event_time,e.event_result, o.victory, o.planish, o.fail ". 
											"FROM ibo_event e, ibo_odds o ".
											"WHERE e.event_id = o.event_id AND e.event_time < date_format(curdate(), '%Y-%m-%d' ) and (e.event_result is not null and e.event_result!='') order by e.event_time asc";
		}
		return $this->dbutil->get_results($sql);
	}
	
	/**
	 * 获取赛事投注的用户列表
	 */
	function getEventUserBet($event_id){
		$sql = "select b.user_name, e.sport_subtype_name,e.team_mian_name,e.team_sec_name, b.bet_vmoney,b.bet_odd,b.odds_name,b.bet_time from ibo_event e,ibo_bet b 
		where e.event_id=b.event_id and e.event_id='".$event_id."'";
		return $this->dbutil->get_results($sql);
	}
	
	/**
	 * 获取赛事历史比分
	 * @param unknown_type $event_id
	 */
	function getEventHistoryScore($event_id){
		return $this->dbutil->get_results("select e.event_id, e.team_mian_name, e.team_sec_name, 
		e.sport_subtype_name,e.event_result,e.event_time from ibo_event_history e 
		where e.event_id='".$event_id."' and e.event_result is not null and e.event_result!=''");
	}
	
	/**
	 * 拼sql查询条件
	 * @param unknown_type $sport_subtype_name 赛事名称
	 * @param unknown_type $team_name 球队名称
	 */
	function getEventSqlCondition($sport_subtype_name,$team_name,$starttime,$endtime){
		//稍后加除去前后空格处理
		$sqlcondition = null;
		if($sport_subtype_name!=null&&$sport_subtype_name!=''){
			$sportCondition = "sport_subtype_name like '%".$sport_subtype_name."%'";
		}
		
		if($team_name!=null&&$team_name!=''){
			$teamCondition = "(team_mian_name like '%".$team_name."%' or team_sec_name like '%".$team_name."%')";
		}
		
		if($starttime!=null&&$endtime!=null){
			$eventtimeCondition = "event_time between date_format('".$starttime."','%Y-%m-%d') and date_format('".$endtime."','%Y-%m-%d')";
		}else if($starttime!=null&&$endtime==null){
			$eventtimeCondition = "event_time >=date_format('".$starttime."', '%Y-%m-%d' )";
		}else if($starttime==null&&$endtime!=null){
			$eventtimeCondition = "event_time<=date_format('".$endtime."','%Y-%m-%d')";
		}
		
		$expression = " and ";
		$conditionArray = array();
		
		if($sportCondition!=null){
			array_push($conditionArray, $sportCondition);
		}
		if($teamCondition!=null){
			array_push($conditionArray, $teamCondition);
		}
		if($eventtimeCondition!=null){
			array_push($conditionArray, $eventtimeCondition);
		}
		$sqlcondition = implode($expression,$conditionArray);
		return $sqlcondition;
	}
}
?>