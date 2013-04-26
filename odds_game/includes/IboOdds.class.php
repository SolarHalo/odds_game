<?php
	class IboOdds{
		var $dbutil;
		
		//构造函数
		function __construct($dbutil){
			$this->dbutil = $dbutil;
		}
		
		/**
		 * 查询赛事历史赔率
		 * @param $event_id
		 */
		function getHistoryOddsByEventId($event_id){
			$sql = "select h.victory,h.planish,h.fail from ibo_odds_history h where h.event_id=$event_id order by h.create_time";
			return $this->dbutil->get_results($sql);
		}
		
		/**
		 * 根据赛事查询当前赔率
		 * @param $event_id
		 */
		function getOddsByEventId($event_id){
			$sql = "select o.victory,o.planish,o.fail from ibo_odds o where o.event_id=$event_id";
			return $this->dbutil->get_row($sql);
		}
	}
?>