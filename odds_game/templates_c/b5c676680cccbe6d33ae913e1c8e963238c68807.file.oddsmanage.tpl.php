<?php /* Smarty version Smarty-3.1.13, created on 2013-01-23 16:03:51
         compiled from "G:\odds_game\odds_game\templates\admin\oddsmanage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:351650feae793db310-68809628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5c676680cccbe6d33ae913e1c8e963238c68807' => 
    array (
      0 => 'G:\\odds_game\\odds_game\\templates\\admin\\oddsmanage.tpl',
      1 => 1358957029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '351650feae793db310-68809628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_50feae794c2cc5_21695369',
  'variables' => 
  array (
    'events' => 0,
    'key' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50feae794c2cc5_21695369')) {function content_50feae794c2cc5_21695369($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php echo $_smarty_tpl->getSubTemplate ('admin/topnav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container-fluid">
	<div class="row"> 
		<div class="span9"> 
	 
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
						<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['event']->key;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['event']->value->sport_subtype_name;?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['event']->value->team_mian_name;?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['event']->value->team_sec_name;?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['event']->value->event_time;?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['event']->value->event_result;?>
</td>
							<td>
								<a href="#deladminModal" data-toggle="modal" class="btn btn-danger deladmin" un="<?php echo $_smarty_tpl->tpl_vars['event']->value->team_main_name;?>
"><i class="icon-trash icon-white"></i> 删除</a>
  							</td>
						</tr>
						<?php } ?>
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


<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>