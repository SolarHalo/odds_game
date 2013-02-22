<?php
/**
 * 后台操作数据库封闭类
 * @author yuyue
 */
class EventsDBUtil{
	
	var $dbutil;
    //构造函数
	function __construct($dbutil){
		$this->dbutil = $dbutil;
	}
	
	function getAllEventsByDateDesc(){ 
		return $this->dbutil->get_results("select * from ibo_event limit 100");
	}
	
	
}