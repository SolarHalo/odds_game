{{* 引入头部文件 *}}
{{include file='admin/header.tpl'}}

<div class="container-fluid">
	<div class="row"> 
		<div class="span12"> 
	 
		       <table id="usertable" class="table table-striped table-bordered table-condensed span9" style="font-size: 16px;">
					<caption class="well">历史赛事比分</caption>
					<thead>
						<tr>
							<th>#</th>
							<th>类别</th>
							<th>主队</th>
							<th>客队</th>
							<th>开赛时间</th>
							<th>历史比分</th>
						</tr>
					</thead>
					<tbody>
						{{foreach $eventResults as $key=>$event}}
						<tr>
							<td>{{$key}}</td>
							<td>{{$event->sport_subtype_name}}</td>
							<td>{{$event->team_mian_name}}</td>
							<td>{{$event->team_sec_name}}</td>
							<td>{{$event->event_time}}</td>
							<td>{{$event->event_result}}</td>
  							<td>
  							</td>
						</tr>
						{{/foreach}}
					</tbody>
				</table>
    
   </div>
	</div> 
</div>

{{* 引入底部文件 *}}
{{include file='admin/footer.tpl'}}