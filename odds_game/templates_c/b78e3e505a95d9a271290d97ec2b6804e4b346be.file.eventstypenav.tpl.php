<?php /* Smarty version Smarty-3.1.13, created on 2013-03-23 00:09:10
         compiled from "D:\workspace4php\odds_game\odds_game\templates\admin\eventstypenav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32367514c81561aed37-34377137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b78e3e505a95d9a271290d97ec2b6804e4b346be' => 
    array (
      0 => 'D:\\workspace4php\\odds_game\\odds_game\\templates\\admin\\eventstypenav.tpl',
      1 => 1363968545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32367514c81561aed37-34377137',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_514c81561eb512_76141454',
  'variables' => 
  array (
    'eventcurrentnav' => 0,
    'domainname' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514c81561eb512_76141454')) {function content_514c81561eb512_76141454($_smarty_tpl) {?><ul class="nav nav-tabs">
	<li <?php if ($_smarty_tpl->tpl_vars['eventcurrentnav']->value=='current'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['domainname']->value;?>
admin/oddsmanage.php?type=current" >当前赛事</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['eventcurrentnav']->value=='history'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['domainname']->value;?>
admin/oddsmanage.php?type=history" >结束赛事</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['eventcurrentnav']->value=='updatescore'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['domainname']->value;?>
admin/oddsmanage.php?type=updatescore" >修改比分</a></li>
</ul><?php }} ?>