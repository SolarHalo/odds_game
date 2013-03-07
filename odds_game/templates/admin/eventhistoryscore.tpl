<!-- 历史比分窗口 -->
<div class="modal hide fade" id="eventhistoryscoreModal" >
    <div class="modal-header">
      <a class="close" data-dismiss="modal">×</a>
      <h3 id="wintitle">赔率历史</h3>
    </div>
	<div class="modal-body">
	    <table id="historyscoretable" class="table table-striped table-bordered table-condensed span9" style="font-size: 16px;">
					<thead>
						<tr>
							<th>#</th>
							<th>胜</th>
							<th>平</th>
							<th>负</th>
						</tr>
					</thead>
<!--					<tbody>-->
<!--					</tbody>-->
				</table>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	
	$(".eventhistoryscore").click(function(){
		var event_id = $(this).attr("un");
		var table1 = document.getElementById("historyscoretable");
		//清空表格数据先
		deleteAllRow(table1);
		$.ajax({
			'url': 'ajaxoddsmanageop.php',
			'data': {'method': 'getEventOddsHistory', 'event_id': event_id},
			'success': function(data){
				if(data!=null){
					var obj = eval('(' + data + ')');
					for(var i=0;i<obj.length;i++){
						var objRow = table1.insertRow(i+1);
						var event = obj[i];
						var cellIndex = 0;
						var idexCel = objRow.insertCell(cellIndex);
						idexCel.innerHTML = i;
						cellIndex++;
						for(var k in event){
							var objCel = objRow.insertCell(cellIndex);
							objCel.innerHTML =event[k];
							cellIndex++;
							}
						}
				}else {
				}
			}
			});
	});

	//删除表格所有数据（不删除表头）
	function deleteAllRow(table){
		var rownum = table.rows.length;
		for(var i=rownum-1;i>0;i--){
			deleteOneRow(table,i);
		}
	}

	//删除表格一行数据
	function deleteOneRow(table,rowIndex){
		if(rowIndex>0){
			table.deleteRow(rowIndex);
		}
	}
});

</script>

<!--<div class="container-fluid">-->
<!--	<div class="row"> -->
<!--		<div class="span12"> -->
<!--	 -->
<!--		       <table id="usertable" class="table table-striped table-bordered table-condensed span9" style="font-size: 16px;">-->
<!--					<caption class="well">历史赛事比分</caption>-->
<!--					<thead>-->
<!--						<tr>-->
<!--							<th>#</th>-->
<!--							<th>类别</th>-->
<!--							<th>主队</th>-->
<!--							<th>客队</th>-->
<!--							<th>开赛时间</th>-->
<!--							<th>历史比分</th>-->
<!--						</tr>-->
<!--					</thead>-->
<!--					<tbody>-->
<!--						{{foreach $eventResults as $key=>$event}}-->
<!--						<tr>-->
<!--							<td>{{$key}}</td>-->
<!--							<td>{{$event->sport_subtype_name}}</td>-->
<!--							<td>{{$event->team_mian_name}}</td>-->
<!--							<td>{{$event->team_sec_name}}</td>-->
<!--							<td>{{$event->event_time}}</td>-->
<!--							<td>{{$event->event_result}}</td>-->
<!--  							<td>-->
<!--  							</td>-->
<!--						</tr>-->
<!--						{{/foreach}}-->
<!--					</tbody>-->
<!--				</table>-->
<!--    -->
<!--   </div>-->
<!--	</div> -->
<!--</div>-->

