<div class="container-fluid">
	<div class="row"> 
		<div class="span12"> 
	 
		       <table id="usertable" class="table table-striped table-bordered table-condensed span9" style="font-size: 16px;">
					<thead>
						<tr>
							<th>#</th>
							<th>类别</th>
							<th>主队</th>
							<th>客队</th>
							<th>开赛时间</th>
							<th>比分</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody>
						{{foreach $events as $key=>$event}}
						<tr>
							<td>{{$key}}</td>
							<td>{{$event->sport_subtype_name}}</td>
							<td>{{$event->team_mian_name}}</td>
							<td>{{$event->team_sec_name}}</td>
							<td>{{$event->event_time}}</td>
							<td>{{$event->event_result}}</td>
							<td>
								<a href="#deladminModal" data-toggle="modal" class="btn btn-danger deladmin" un="{{$event->team_main_name}}"><i class="icon-trash icon-white"></i> 删除</a>
								<a href="eventbetusers.php?event_id={{$event->event_id}}"  class="btn btn-info" target="_blank"><i class="icon-trash icon-white"></i> 投注用户</a>
								<a href="eventhistoryscore.php?event_id={{$event->event_id}}" class="btn btn-info" target="_blank"><i class="icon-trash icon-white"></i> 历史比分</a>
  							</td>
  							<td>
  							</td>
						</tr>
						{{/foreach}}
					</tbody>
				</table>
    
   </div>
	</div> 
</div>
<script type="text/javascript">

$(document).ready(function(){
	 
	$("#deluser").click(function(){
		var username = $(this).attr("un");
		$.ajax({
			'url': 'ajaxuserop.php',
			'data': {'method': 'deleteadmin', 'username': username},
			'success': function(data){
				if(data == 'error'){
				}else if(data == 'success'){
					$("#deladminModal").modal('hide');
					$("#usertable >tbody >tr >td").children("a[un='"+username+"']").parents("tr").remove();
				}
			}
			});
		});

	 
	
});

</script>
