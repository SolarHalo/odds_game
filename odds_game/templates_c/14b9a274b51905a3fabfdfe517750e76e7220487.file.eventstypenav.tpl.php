<?php /* Smarty version Smarty-3.1.13, created on 2013-03-06 23:32:14
         compiled from "D:\gitspace\odds_game\odds_game\templates\admin\eventstypenav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134415137617ea96089-50222296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14b9a274b51905a3fabfdfe517750e76e7220487' => 
    array (
      0 => 'D:\\gitspace\\odds_game\\odds_game\\templates\\admin\\eventstypenav.tpl',
      1 => 1362487070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134415137617ea96089-50222296',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'eventcurrentnav' => 0,
    'domainname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5137617eae5003_37222224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5137617eae5003_37222224')) {function content_5137617eae5003_37222224($_smarty_tpl) {?><ul class="nav nav-tabs">
	<li <?php if ($_smarty_tpl->tpl_vars['eventcurrentnav']->value=='current'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['domainname']->value;?>
admin/oddsmanage.php?type=current" >当前赛事</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['eventcurrentnav']->value=='history'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['domainname']->value;?>
admin/oddsmanage.php?type=history" >结束赛事</a></li>
</ul><?php }} ?>