<?php /* Smarty version Smarty-3.1.13, created on 2013-03-06 23:36:41
         compiled from "D:\gitspace\odds_game\odds_game\templates\admin\adminusermanage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:256555101e715920861-03531742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fde010fe6cfd607444f426826b5fc011b452df6' => 
    array (
      0 => 'D:\\gitspace\\odds_game\\odds_game\\templates\\admin\\adminusermanage.tpl',
      1 => 1362487070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256555101e715920861-03531742',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5101e715b63ec1_24332066',
  'variables' => 
  array (
    'admins' => 0,
    'key' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5101e715b63ec1_24332066')) {function content_5101e715b63ec1_24332066($_smarty_tpl) {?><div class="row">
	<div class="span12 well">
		<strong>用户列表</strong>
		<a id="addadmin" href="#addadminModal" data-toggle="modal" class="btn btn-info pull-right">增加管理员</a>
	</div>
	<div class="span12">
		<table id="usertable" class="table table-striped table-bordered table-condensed span9" style="font-size: 16px;">
			<thead>
				<tr>
					<th>#</th>
					<th>用户名</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['admin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['admin']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['admins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['admin']->key => $_smarty_tpl->tpl_vars['admin']->value){
$_smarty_tpl->tpl_vars['admin']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['admin']->key;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['admin']->value->admin_name;?>
</td>
					<td width="280">
						<a href="#deladminModal" data-toggle="modal" class="btn btn-danger deladmin" un="<?php echo $_smarty_tpl->tpl_vars['admin']->value->admin_name;?>
"><i class="icon-trash icon-white"></i> 删除</a>
						
						<a href="#addadminModal" data-toggle="modal" class="btn btn-primary modifyadmin" un="<?php echo $_smarty_tpl->tpl_vars['admin']->value->admin_name;?>
"><i class="icon-pencil icon-white"></i> 修改密码</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<div class="modal hide fade" id="addadminModal">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3 id="wintitle">增加管理员</h3>
  </div>
  <div class="modal-body">
    <form class="form-horizontal" method="post" onsubmit="">
			<div class="userc control-group">
				<label class="control-label" for="username">用户名</label>
				<div class="controls">
					<input type="text" id="username" name="username" placeholder="用户名">
					<span id="uerrorp" class="help-inline"></span>
				</div>
			</div>
			<div class="control-group pass1c"><label class="control-label"
				for="password">密码</label>
			<div class="controls"><input type="password" id="password" name="password"
				placeholder="密码">
				<span id="pass1p" class="help-inline"></span>
				</div>
			</div>
			<div class="control-group pass2c"><label class="control-label"
				for="password2">确认密码</label>
			<div class="controls"><input type="password" id="password2" name="password2"
				placeholder="确认密码">
				<span id="pass2p" class="help-inline"></span>
				</div>
			</div>
		</form>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn"  data-dismiss="modal">关闭</a>
    <a id="savuser" href="#" class="btn btn-primary">保存</a>
  </div>
</div>

<div class="modal hide fade" id="deladminModal">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3 id="wintitle">删除管理员</h3>
  </div>
  <div class="modal-body">
    <div class="alert alert-error">
	  <strong>警告！</strong> 确认删除管理员?
	</div>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn"  data-dismiss="modal">关闭</a>
    <a id="deluser" href="#" class="btn btn-danger">确认</a>
  </div>
</div>

<script type="text/javascript">

$(document).ready(function(){
	$("#addadmin").click(function(){
			$("#wintitle").html("增加管理员");
			$("#savuser").attr('ot',"save");
			$("#username").removeAttr("readonly");
		});

	$(".modifyadmin").live('click', function(){
			var un = $(this).attr("un");
			$("#username").val(un);
			$("#wintitle").html("修改密码");
			$("#savuser").attr('ot',"update");
			$("#username").attr("readonly", "readonly");
		});

	$(".deladmin").live('click', function(){
		var un = $(this).attr("un");
		alert(un);
		$("#deluser").attr('un', un);
	});

	$("#savuser").click(function(){
			var type = $(this).attr('ot');
			var username = $("#username").val();
			var pass1 = $("#password").val();
			var pass2 = $("#password2").val();

			if(type == 'save'){
				if(username.length == 0){
					$(".userc").addClass("error");
					$("#uerrorp").html("请输入用户名!");
					return;
				}
			}

			if(pass1.length == 0){
				$(".pass1c").addClass("error");
				$("#pass1p").html("请输入密码!");
				return;
			}

			if(pass2 != pass1){
				$(".pass2c").addClass("error");
				$("#pass2p").html("两次密码不同!");
				return;
			}

			$(".userc").removeClass("error");
			$(".pass1c").removeClass("error");
			$(".pass2c").removeClass("error");

			$.ajax({
				'url': 'ajaxuserop.php',
				'data': {'method': type == 'save' ? 'addadmin' : 'updateadmin', 'username': username, 'password': pass1},
				'success': function(data){
					if(data == 'error'){
						$(".userc").addClass("error");
						$("#uerrorp").html("用户名已存在!");
					}else if(data == 'success'){
						$("#addadminModal").modal('hide');
						if(type == "save"){
							$("#usertable > tbody").append("<tr><td>新增</td><td>"+username+"</td><td width='280'>" +
									"<a href='#' class='btn btn-danger'><i class='icon-trash icon-white'></i> 删除</a> "+
									"<a href='#addadminModal' data-toggle='modal' class='btn btn-primary modifyadmin' un='"+username+"'><i class='icon-pencil icon-white'></i> 修改密码</a>" +
									"</td></tr>");
						}
					}
				}
				});
		});

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

	$('#addadminModal').on('hidden', function () {
			$(".userc").removeClass("error");
			$(".pass1c").removeClass("error");
			$(".pass2c").removeClass("error");
			$("#uerrorp").html("");
			$("#pass1p").html("");
			$("#pass2p").html("");
			$("#username").val('');
			$("#password").val('');
			$("#password2").val('');
		})
	
});

</script>
<?php }} ?>