<?php /* Smarty version Smarty-3.1.13, created on 2013-03-06 23:32:14
         compiled from "D:\gitspace\odds_game\odds_game\templates\admin\oddsmanage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:276075101e560e49f21-84995612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ff7184ff00432bc92b2defe30c63f65c8093808' => 
    array (
      0 => 'D:\\gitspace\\odds_game\\odds_game\\templates\\admin\\oddsmanage.tpl',
      1 => 1362487070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '276075101e560e49f21-84995612',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5101e5612dc8d7_67368001',
  'variables' => 
  array (
    'eventcurrentnav' => 0,
    'domainname' => 0,
    'events' => 0,
    'key' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5101e5612dc8d7_67368001')) {function content_5101e5612dc8d7_67368001($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php echo $_smarty_tpl->getSubTemplate ('admin/topnav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php echo $_smarty_tpl->getSubTemplate ('admin/eventstypenav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('admin/searcheventform.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('admin/eventdisplay.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!--<div class="nav-collapse collapse navbar-responsive-collapse">-->
<!--	 <ul class="nav">-->
<!--	   <li <?php if ($_smarty_tpl->tpl_vars['eventcurrentnav']->value=='currentevent'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['domainname']->value;?>
eventdisplay.php?type=current" >当前赛事</a></li>-->
<!--	   <li <?php if ($_smarty_tpl->tpl_vars['eventcurrentnav']->value=='historyevent'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['domainname']->value;?>
/admin/eventdisplay.php?type=history" >历史赛事</a></li>-->
<!--	 </ul>-->
<!--</div>-->

<!--<div class="container-fluid">-->
<!--	<div class="row"> -->
<!--		<div class="span9"> -->
<!--	 -->
<!--		       <table id="usertable" class="table table-striped table-bordered table-condensed span9" style="font-size: 16px;">-->
<!--					<thead>-->
<!--						<tr>-->
<!--							<th>#</th>-->
<!--							<th>类别</th>-->
<!--							<th>主队</th>-->
<!--							<th>客队</th>-->
<!--							<th>开赛时间</th>-->
<!--							<th>比分</th>-->
<!--							<th>操作</th>-->
<!--						</tr>-->
<!--					</thead>-->
<!--					<tbody>-->
<!--						<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['event']->key;
?>-->
<!--						<tr>-->
<!--							<td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>-->
<!--							<td><?php echo $_smarty_tpl->tpl_vars['event']->value->sport_subtype_name;?>
</td>-->
<!--							<td><?php echo $_smarty_tpl->tpl_vars['event']->value->team_mian_name;?>
</td>-->
<!--							<td><?php echo $_smarty_tpl->tpl_vars['event']->value->team_sec_name;?>
</td>-->
<!--							<td><?php echo $_smarty_tpl->tpl_vars['event']->value->event_time;?>
</td>-->
<!--							<td><?php echo $_smarty_tpl->tpl_vars['event']->value->event_result;?>
</td>-->
<!--							<td>-->
<!--								<a href="#deladminModal" data-toggle="modal" class="btn btn-danger deladmin" un="<?php echo $_smarty_tpl->tpl_vars['event']->value->team_main_name;?>
"><i class="icon-trash icon-white"></i> 删除</a>-->
<!--  							</td>-->
<!--						</tr>-->
<!--						<?php } ?>-->
<!--					</tbody>-->
<!--				</table>-->
<!--    -->
<!--   </div>-->
<!--	</div> -->
<!--</div>-->
<script type="text/javascript">

//$(document).ready(function(){
//	 
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
//
//	 
//	
//});

</script>


<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>