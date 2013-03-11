<?php /* Smarty version Smarty-3.1.13, created on 2013-03-06 23:32:14
         compiled from "D:\gitspace\odds_game\odds_game\templates\admin\searcheventform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:228225137617eb04499-92048182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e20614dec4f2a1058fa82745576818239d3222e' => 
    array (
      0 => 'D:\\gitspace\\odds_game\\odds_game\\templates\\admin\\searcheventform.tpl',
      1 => 1362487070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '228225137617eb04499-92048182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'eventcurrentnav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5137617eb45554_46788980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5137617eb45554_46788980')) {function content_5137617eb45554_46788980($_smarty_tpl) {?><!-- 搜索表单 -->
<form class="form-inline span=12" action="oddsmanage.php" method="get" >

	<input name="sport_subtype_name" type="text" class="input-small" placeholder="赛事">
  	<input name="team_name" type="text" class="input-small" placeholder="球队名称">
	<input type="text" id="datepicker1" class="uneditable-input" name="starttime" placeholder="开始时间" onClick="WdatePicker()">
  	<input type="text" id="datepicker2" class="uneditable-input" name="endtime" placeholder="结束时间" onClick="WdatePicker()">
	<input name="type" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['eventcurrentnav']->value;?>
">
  	<input type="submit" class="btn btn-primary" value="搜索" class="con-search"><i class="icon-search icon-white"></i>
	
</form>

<?php }} ?>