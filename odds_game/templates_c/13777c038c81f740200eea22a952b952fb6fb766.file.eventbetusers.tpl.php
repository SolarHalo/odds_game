<?php /* Smarty version Smarty-3.1.13, created on 2013-03-23 00:09:10
         compiled from "D:\workspace4php\odds_game\odds_game\templates\admin\eventbetusers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4186514c815637af80-90106965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13777c038c81f740200eea22a952b952fb6fb766' => 
    array (
      0 => 'D:\\workspace4php\\odds_game\\odds_game\\templates\\admin\\eventbetusers.tpl',
      1 => 1363968545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4186514c815637af80-90106965',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_514c81563821a5_39242545',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514c81563821a5_39242545')) {function content_514c81563821a5_39242545($_smarty_tpl) {?><!-- 投注用户列表窗口 -->
<div class="modal hide fade" id="eventbetusersModal" >
    <div class="modal-header">
      <a class="close" data-dismiss="modal">×</a>
      <h3 id="wintitle">投注用户列表</h3>
    </div>
	<div class="modal-body">
		<table id="userbettable" class="table table-striped table-bordered table-condensed span9" style="font-size: 16px;">
			<caption class="well">投注用户列表</caption>
			<thead>
				<tr>
					<th>#</th>
					<th>用户</th>
					<th>投注金额</th>
					<th>赔率</th>
					<th>投注名称</th>
					<th>投注时间</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">

$(document).ready(function(){
	$(".eventbetusers").click(function(){
			var table1 = document.getElementById("userbettable");
			deleteAllRow(table1);
			var event_id = $(this).attr("un");
			$.ajax({
				'url': 'ajaxoddsmanageop.php',
				'data': {'method': 'getEventUserBet', 'event_id': event_id},
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
<?php }} ?>