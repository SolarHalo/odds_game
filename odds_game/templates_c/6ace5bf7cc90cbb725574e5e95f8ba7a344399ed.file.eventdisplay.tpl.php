<?php /* Smarty version Smarty-3.1.13, created on 2013-03-23 00:09:10
         compiled from "D:\workspace4php\odds_game\odds_game\templates\admin\eventdisplay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14341514c8156228287-35143816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ace5bf7cc90cbb725574e5e95f8ba7a344399ed' => 
    array (
      0 => 'D:\\workspace4php\\odds_game\\odds_game\\templates\\admin\\eventdisplay.tpl',
      1 => 1363968545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14341514c8156228287-35143816',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_514c81563609c4_66348655',
  'variables' => 
  array (
    'events' => 0,
    'key' => 0,
    'event' => 0,
    'eventcurrentnav' => 0,
    'page' => 0,
    'startPage' => 0,
    'endPage' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514c81563609c4_66348655')) {function content_514c81563609c4_66348655($_smarty_tpl) {?><div class="container-fluid">
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
							<td class="event_score"><?php echo $_smarty_tpl->tpl_vars['event']->value->event_result;?>
</td>
							<td>
  								<a  href="#eventbetusersModal" data-toggle="modal" class="btn btn-info eventbetusers" un="<?php echo $_smarty_tpl->tpl_vars['event']->value->event_id;?>
"><i class="icon-user icon-white"></i> 投注用户</a>
								<a  href="#eventhistoryscoreModal" data-toggle="modal" class="btn btn-info eventhistoryscore" un="<?php echo $_smarty_tpl->tpl_vars['event']->value->event_id;?>
"><i class="icon-th-list icon-white"></i> 赔率历史</a>
								<?php if ($_smarty_tpl->tpl_vars['eventcurrentnav']->value=='updatescore'){?>
								<a  href="#sethistoryscoreModal" data-toggle="modal" class="btn btn-warning sethistoryeventScore" un="<?php echo $_smarty_tpl->tpl_vars['event']->value->event_id;?>
"><i class="icon-edit icon-white"></i> 设置比分</a>
								<?php }?>
  							</td>
  							<td>
  							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				
				
				<div class="row">
				  <div class="span5">
				<?php if ($_smarty_tpl->tpl_vars['eventcurrentnav']->value=='history'){?>
					<div class="pagination">
					  <ul>
					    <li <?php if ($_smarty_tpl->tpl_vars['page']->value->haspre){?>class="active"<?php }else{ ?>class="disabled"<?php }?>><a href="oddsmanage.php?pageNo=<?php echo $_smarty_tpl->tpl_vars['page']->value->pre;?>
&&type=history" class="active">Prev</a></li>
					  	
					  	<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['endPage']->value+1 - ($_smarty_tpl->tpl_vars['startPage']->value) : $_smarty_tpl->tpl_vars['startPage']->value-($_smarty_tpl->tpl_vars['endPage']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['startPage']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
					    <li <?php if ($_smarty_tpl->tpl_vars['page']->value->pageNo==$_smarty_tpl->tpl_vars['foo']->value){?>class="active"<?php }?>><a href="oddsmanage.php?pageNo=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
&&type=history" ><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
					    <?php }} ?>
					    
					    
					    <li <?php if ($_smarty_tpl->tpl_vars['page']->value->hasnext){?>class="active"<?php }else{ ?>class="disabled"<?php }?>><a href="oddsmanage.php?pageNo=<?php echo $_smarty_tpl->tpl_vars['page']->value->next;?>
&&type=history" class="active">Next</a></li>
					  </ul>
					</div>
	    			
					
				  </div>
				  <div class="span2" style="padding:20px 0 0 0">
				  
					  <div class="input-append">
					    <input id="pageto" type="text" value="<?php echo $_smarty_tpl->tpl_vars['page']->value->pageNo;?>
" class="span1">
			    		<button id="gotoBtn" class="btn btn-primary" onclick="gotoPage()">GO</button>
				      </div>
				  </div>
				  <div class="span5" style="padding:20px 0 0 0">
					  第<?php echo $_smarty_tpl->tpl_vars['page']->value->pageNo;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value->totalpage;?>
页
					 显示<?php echo $_smarty_tpl->tpl_vars['page']->value->startIndex+1;?>
到<?php echo $_smarty_tpl->tpl_vars['page']->value->endIndex;?>
条记录，共<?php echo $_smarty_tpl->tpl_vars['page']->value->totalsize;?>
条记录
				  
				  </div>
				  <?php }?>
				</div>
   		</div>
	</div> 
</div>


<!-- 投注用户列表窗口 -->
<?php echo $_smarty_tpl->getSubTemplate ('admin/eventbetusers.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<!-- 历史比分窗口 -->
<?php echo $_smarty_tpl->getSubTemplate ('admin/eventhistoryscore.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
<?php }} ?>