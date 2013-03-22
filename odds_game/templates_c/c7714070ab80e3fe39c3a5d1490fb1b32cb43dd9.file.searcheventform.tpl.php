<?php /* Smarty version Smarty-3.1.13, created on 2013-03-23 00:09:10
         compiled from "D:\workspace4php\odds_game\odds_game\templates\admin\searcheventform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22396514c8156205710-37922520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7714070ab80e3fe39c3a5d1490fb1b32cb43dd9' => 
    array (
      0 => 'D:\\workspace4php\\odds_game\\odds_game\\templates\\admin\\searcheventform.tpl',
      1 => 1363968545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22396514c8156205710-37922520',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_514c8156211289_27874524',
  'variables' => 
  array (
    'eventcurrentnav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514c8156211289_27874524')) {function content_514c8156211289_27874524($_smarty_tpl) {?><!-- 搜索表单 -->
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