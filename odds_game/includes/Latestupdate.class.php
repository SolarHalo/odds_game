<?php
	class Latestupdate{
		var $dbutil;

		function __construct($dbutil){
			$this->dbutil = $dbutil;
		}
		
		function LoginGetLatestBets($sessionid){
			$sql = "select b.user_id,b.user_name,a.bet_time,a.bet_vmoney,b.user_photo,c.team_mian_name,c.team_sec_name,a.odds_name,a.bet_odd,d.id as watchid 
						from 
							(select user_name,event_id,bet_time,bet_vmoney,odds_name,bet_odd from ibo_bet order by bet_time desc limit 15) a,
							ibo_user b,
							ibo_event c ,ibo_watch_user d
						where 
							a.user_name=b.user_email and a.event_id=c.event_id and d.user_id=".$sessionid." and d.watch_user_id="."b.user_id";
			
			$sql2 = "select tt.*,d.id as watchid from (select b.user_id,b.user_name,a.bet_time,a.bet_vmoney,b.user_photo,c.team_mian_name,c.team_sec_name,a.odds_name,a.bet_odd
						from 
							(select user_name,event_id,bet_time,bet_vmoney,odds_name,bet_odd from ibo_bet order by bet_time desc limit 15) a,
							ibo_user b,
							ibo_event c 
						where 
							a.user_name=b.user_email and a.event_id=c.event_id) tt left join ibo_watch_user d on d.user_id=".$sessionid." and d.watch_user_id=tt.user_id";
			return $this->dbutil->get_results($sql2);
		}
		
	function noLoginGetLatestBets(){
			$sql = "select b.user_id,b.user_name,a.bet_time,a.bet_vmoney,b.user_photo,c.team_mian_name,c.team_sec_name,a.odds_name,a.bet_odd,-1 as watchid 
						from 
							(select user_name,event_id,bet_time,bet_vmoney,odds_name,bet_odd from ibo_bet order by bet_time desc limit 15) a,
							ibo_user b,
							ibo_event c 
						where 
							a.user_name=b.user_email and a.event_id=c.event_id;";
			return $this->dbutil->get_results($sql);
		}
		
	function userFollow($fans,$superStar){
			$data = array("user_id"=>$fans,
					  	  "watch_user_id"=> $superStar,
					      "watch_time"=>time());
			return $this->dbutil->insert('ibo_watch_user', $data);
		}
		
	function userUnFollow($fans,$superStar){
			$this->dbutil->query("delete from ibo_watch_user where user_id='" . $fans . "' and watch_user_id='".$superStar."';");
		}
	}
?>