<?php /* Smarty version Smarty-3.1.13, created on 2013-03-06 23:32:11
         compiled from "D:\gitspace\odds_game\odds_game\templates\admin\userhistorybet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207425137617b28ece5-95900110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7db8530f39558a1ef6dda46cad8f7fced54887bb' => 
    array (
      0 => 'D:\\gitspace\\odds_game\\odds_game\\templates\\admin\\userhistorybet.tpl',
      1 => 1362487070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207425137617b28ece5-95900110',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5137617b2e9161_52146201',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5137617b2e9161_52146201')) {function content_5137617b2e9161_52146201($_smarty_tpl) {?><div class="modal hide fade " id="userhistorybetModal" >
    <div class="modal-header ">
      <a class="close" data-dismiss="modal">×</a>
      <h3 id="wintitle">投注历史记录</h3>
    </div>
	<div class="modal-body">
	    <table id="userhistorybettable" class="table table-striped table-bordered table-condensed" style="font-size: 16px;">
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
				</table>
	</div>
</div>



<script type="text/javascript">

$(document).ready(function(){
	
	$(".userhistorybet").click(function(){
		var useremail = $(this).attr("un");
		var table1 = document.getElementById("userhistorybettable");
		//清空表格数据先
		deleteAllRow(table1);
		$.ajax({
			'url': 'ajaxoddsmanageop.php',
			'data': {'method': 'getUserHistoryBet', 'useremail': useremail},
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
//		var rownum = table.rows.length;
		var rownum = $("#userhistorybettable").find("tr").length;
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
})

</script><?php }} ?>