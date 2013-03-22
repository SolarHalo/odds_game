<?php /* Smarty version Smarty-3.1.13, created on 2013-03-23 00:09:10
         compiled from "D:\workspace4php\odds_game\odds_game\templates\admin\eventhistoryscore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4747514c815639a5e0-81952269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '308a12e04fdd61d5d0f1fa635ccf961254dc3e34' => 
    array (
      0 => 'D:\\workspace4php\\odds_game\\odds_game\\templates\\admin\\eventhistoryscore.tpl',
      1 => 1363968545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4747514c815639a5e0-81952269',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_514c81563e69a1_50001101',
  'variables' => 
  array (
    'eventResults' => 0,
    'key' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514c81563e69a1_50001101')) {function content_514c81563e69a1_50001101($_smarty_tpl) {?><!-- 历史比分窗口 -->
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
<!--						<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['eventResults']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
<!--  							<td>-->
<!--  							</td>-->
<!--						</tr>-->
<!--						<?php } ?>-->
<!--					</tbody>-->
<!--				</table>-->
<!--    -->
<!--   </div>-->
<!--	</div> -->
<!--</div>-->

<?php }} ?>