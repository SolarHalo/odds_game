<!-- 搜索表单 -->
<form class="form-inline span=12" action="oddsmanage.php" method="get" >

	<input name="sport_subtype_name" type="text" class="input-small" placeholder="赛事">
  	<input name="team_name" type="text" class="input-small" placeholder="球队名称">
	<input type="text" id="datepicker1" class="uneditable-input" name="starttime" placeholder="开始时间" onClick="WdatePicker()">
  	<input type="text" id="datepicker2" class="uneditable-input" name="endtime" placeholder="结束时间" onClick="WdatePicker()">
	<input name="type" type="hidden" value="{{$eventcurrentnav}}">
  	<input type="submit" class="btn btn-primary" value="搜索" class="con-search"><i class="icon-search icon-white"></i>
	
</form>

