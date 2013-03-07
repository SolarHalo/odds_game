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
<!--								<a href="#deladminModal" data-toggle="modal" class="btn btn-danger deladmin" un="{{$event->team_main_name}}"><i class="icon-trash icon-white"></i> 删除</a>-->
  								<a  href="#eventbetusersModal" data-toggle="modal" class="btn btn-info eventbetusers" un="{{$event->event_id}}"><i class="icon-user icon-white"></i> 投注用户</a>
								<a  href="#eventhistoryscoreModal" data-toggle="modal" class="btn btn-info eventhistoryscore" un="{{$event->event_id}}"><i class="icon-th-list icon-white"></i> 赔率历史</a>
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
	    			{{/if}}
					
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
				</div>
   		</div>
	</div> 
</div>


<!-- 投注用户列表窗口 -->
{{include 'admin/eventbetusers.tpl'}}


<!-- 历史比分窗口 -->
{{include 'admin/eventhistoryscore.tpl'}}

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

});


</script>
