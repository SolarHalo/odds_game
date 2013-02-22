{{* 引入头部文件 *}}
{{include file='admin/header.tpl'}}

<div class="container-fluid">
	<div class="row"> 
		<div class="span12"> 
	 			
		       <table id="oddsgametable" class="table table-striped table-bordered table-condensed span9" style="font-size: 16px;">
					<caption class="well">{{$username}} 投注历史记录</caption>
					<thead>
						<tr>
							<th>#</th>
							<th>类别</th>
							<th>主队</th>
							<th>客队</th>
							<th>投注名称</th>
							<th>投注时间</th>
							<th>投注金额</th>
							<th>赔率</th>
						</tr>
					</thead>
					<tbody>
						{{foreach $userHistoryBets as $key=>$historybet}}
						<tr>
							<td>{{$key}}</td>
							<td>{{$historybet->sport_subtype_name}}</td>
							<td>{{$historybet->team_mian_name}}</td>
							<td>{{$historybet->team_sec_name}}</td>
							<td>{{$historybet->odds_name}}</td>
							<td>{{$historybet->bet_time}}</td>
							<td>{{$historybet->bet_vmoney}}</td>
							<td>{{$historybet->bet_odd}}</td>
						</tr>
						{{/foreach}}
					</tbody>
				</table>
    
   </div>
	</div> 
</div>


{{* 引入底部文件 *}}
{{include file='admin/footer.tpl'}}