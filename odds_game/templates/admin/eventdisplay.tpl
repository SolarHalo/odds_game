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
							<td class="event_score">{{$event->event_result}}</td>
							<td>
  								<a  href="#eventbetusersModal" data-toggle="modal" class="btn btn-info eventbetusers" un="{{$event->event_id}}"><i class="icon-user icon-white"></i> 投注用户</a>
								<a  href="#eventhistoryscoreModal" data-toggle="modal" class="btn btn-info eventhistoryscore" un="{{$event->event_id}}"><i class="icon-th-list icon-white"></i> 赔率历史</a>
								{{if $eventcurrentnav=='updatescore'}}
								<a  href="#sethistoryscoreModal" data-toggle="modal" class="btn btn-warning sethistoryeventScore" un="{{$event->event_id}}"><i class="icon-edit icon-white"></i> 设置比分</a>
								{{/if}}
  							</td>
  							<td>
  							</td>
						</tr>
						{{/foreach}}
					</tbody>
				</table>
				
				
				<div class="row">
				  <div class="span5">
				{{if $eventcurrentnav=='history'}}
					<div class="pagination">
					  <ul>
					    <li {{if $page->haspre}}class="active"{{else}}class="disabled"{{/if}}><a href="oddsmanage.php?pageNo={{$page->pre}}&&type=history" class="active">Prev</a></li>
					  	
					  	{{for $foo=$startPage to $endPage}}
					    <li {{if $page->pageNo==$foo}}class="active"{{/if}}><a href="oddsmanage.php?pageNo={{$foo}}&&type=history" >{{$foo}}</a></li>
					    {{/for}}
					    
					    
					    <li {{if $page->hasnext}}class="active"{{else}}class="disabled"{{/if}}><a href="oddsmanage.php?pageNo={{$page->next}}&&type=history" class="active">Next</a></li>
					  </ul>
					</div>
	    			
					
				  </div>
				  <div class="span2" style="padding:20px 0 0 0">
				  
					  <div class="input-append">
					    <input id="pageto" type="text" value="{{$page->pageNo}}" class="span1">
			    		<button id="gotoBtn" class="btn btn-primary" onclick="gotoPage()">GO</button>
				      </div>
				  </div>
				  <div class="span5" style="padding:20px 0 0 0">
					  第{{$page->pageNo}}/{{$page->totalpage}}页
					 显示{{$page->startIndex+1}}到{{$page->endIndex}}条记录，共{{$page->totalsize}}条记录
				  
				  </div>
				  {{/if}}
				</div>
   		</div>
	</div> 
</div>


<!-- 投注用户列表窗口 -->
{{include 'admin/eventbetusers.tpl'}}


<!-- 历史比分窗口 -->
{{include 'admin/eventhistoryscore.tpl'}}

<div class="modal hide fade" id="sethistoryscoreModal" >
    <div class="modal-header">
      <a class="close" data-dismiss="modal">×</a>
      <h3 id="wintitle">修改比分</h3>
    </div>
	<div class="modal-body">
		<form class="form-horizontal">
		  <div class="control-group">
		    <label class="control-label" >设置比分：</label>
		    <div class="controls">
		      <input type="text" id="event_result" name="event_result" >
		    </div>
		  </div>
		</form>
	</div>
	<div class="modal-footer">
	    <a href="#" class="btn"  data-dismiss="modal">关闭</a>
	    <button id="saveEventScoreBtn"  class="btn btn-primary">保存</button>
	  </div>
</div>


<script type="text/javascript">

$(document).ready(function(){
	 
//	$("#deluser").click(function(){
//		var username = $(this).attr("un");
//		$.ajax({
//			'url': 'ajaxuserop.php',
//			'data': {'method': 'deleteadmin', 'username': username},
//			'success': function(data){
//				if(data == 'error'){
//				}else if(data == 'success'){
//					$("#deladminModal").modal('hide');
//					$("#usertable >tbody >tr >td").children("a[un='"+username+"']").parents("tr").remove();
//				}
//			}
//			});
//		});

	$("#gotoBtn").click(function(){
		var page = $("#pageto").attr("value");
		window.location.href = "oddsmanage.php?pageNo="+page+"&&type=history";
	});

	$(".sethistoryeventScore").live('click',function(){
		var event_id = $(this).attr('un');
		$("#saveEventScoreBtn").attr('un',event_id);
	});

	$("#saveEventScoreBtn").click(function(){
		var event_id = $(this).attr('un');
		var event_score = $("#event_result").val();
		if(event_score==undefined||event_score==null||event_score.trim().length<1){
			alert("您没有设置比分");
			return;
		}
		$.ajax({
			'url': 'ajaxoddsmanageop.php',
			'data': {'method': 'updateHistoryEventBet', 'event_id': event_id, 'event_result': event_score},
			'success': function(data){
				if(data !=-1){
					$("#usertable >tbody >tr >td").children("a[un='"+event_id+"']").parents("tr").remove();
					$("#sethistoryscoreModal").modal('hide');
					$("#saveEventScoreBtn").attr('data-dismiss','modal');
//					var updatedRow = $("#usertable >tbody >tr >td").children("a[un='"+event_id+"']").parents("tr");
//					updatedRow.children(".event_score").html(event_score);
				}else {
					alert("设置比分失败");
				}
			}
			});
	});

});


</script>
