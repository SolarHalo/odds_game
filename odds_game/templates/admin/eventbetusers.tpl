{{* 引入头部文件 *}}
{{include file='admin/header.tpl'}}

<!--<div class="container-fluid">-->
<!--	<div class="row"> -->
<!--		<div class="span12"> -->
<!--	 -->
<!--		       {{foreach $users as $user}}-->
<!--						{{$user->user_name}}-->
<!--				{{/foreach}}-->
<!--    -->
<!--   </div>-->
<!--	</div> -->
<!--</div>-->

<div class="container-fluid">
	<div class="row"> 
		<div class="span12"> 
	 		
		       <table id="usertable" class="table table-striped table-bordered table-condensed span9" style="font-size: 16px;">
					<caption class="well">投注用户列表</caption>
					<thead>
						<tr>
							<th>#</th>
							<th>用户</th>
							<th>类别</th>
							<th>主队</th>
							<th>客队</th>
							<th>投注金额</th>
							<th>赔率</th>
							<th>投注名称</th>
							<th>投注时间</th>
						</tr>
					</thead>
					<tbody>
						{{foreach $users as $key=>$user}}
						<tr>
							<td>{{$key}}</td>
							<td>{{$user->user_name}}</td>
							<td>{{$user->sport_subtype_name}}</td>
							<td>{{$user->team_mian_name}}</td>
							<td>{{$user->team_sec_name}}</td>
							<td>{{$user->bet_vmoney}}</td>
							<td>{{$user->bet_odd}}</td>
							<td>{{$user->odds_name}}</td>
							<td>{{$user->bet_time}}</td>
						</tr>
						{{/foreach}}
					</tbody>
				</table>
    
   </div>
	</div> 
</div>

{{* 引入底部文件 *}}
{{include file='admin/footer.tpl'}}