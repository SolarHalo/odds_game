<div class="row">
	<div class="span12 well">
		<strong>用户列表</strong>
	</div>
	<div class="span12">
		<table id="usertable" class="table table-striped table-bordered table-condensed span9" style="font-size: 16px;">
			<thead>
				<tr>
					<th>#</th>
					<th>邮箱</th>
					<th>经验值</th>
					<th>虚拟金钱</th>
					<th>注册时间</th>
					<th>最近登录时间</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				{{foreach $users as $key=>$user}}
				<tr>
					<td>{{$key}}</td>
					<td>{{$user->user_email}}</td>
					<td>{{$user->user_exp}}</td>
					<td>{{$user->user_vmoney}}</td>
					<td>{{$user->user_regdate}}</td>
					<td>{{$user->user_lastdate}}</td>
					<td width="280">
						<a href="#deluserModal" data-toggle="modal" class="btn btn-danger deluser" un="{{$user->user_email}}"><i class="icon-trash icon-white"></i> 删除</a>
					</td>
				</tr>
				{{/foreach}}
			</tbody>
		</table>
	</div>
</div>


<div class="modal hide fade" id="deluserModal">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3 id="wintitle">删除用户</h3>
  </div>
  <div class="modal-body">
    <div class="alert alert-error">
	  <strong>警告！</strong> 确认删除用户?
	</div>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn"  data-dismiss="modal">关闭</a>
    <a id="deluser" href="#" class="btn btn-danger">确认</a>
  </div>
</div>

<script type="text/javascript">

$(document).ready(function(){
	
	$(".deluser").live('click', function(){
		var un = $(this).attr("un");
		$("#deluser").attr('un', un);
	});

	

	$("#deluser").click(function(){
		var useremail = $(this).attr("un");
		$.ajax({
			'url': 'ajaxuserop.php',
			'data': {'method': 'deleteuser', 'useremail': useremail},
			'success': function(data){
				if(data == 'error'){
				}else if(data == 'success'){
					$("#deluserModal").modal('hide');
					$("#usertable >tbody >tr >td").children("a[un='"+useremail+"']").parents("tr").remove();
				}
			}
			});
		});

	
	
});

</script>
