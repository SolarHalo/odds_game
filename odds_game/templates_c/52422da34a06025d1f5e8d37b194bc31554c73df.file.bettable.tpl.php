<?php /* Smarty version Smarty-3.1.13, created on 2013-03-06 23:26:14
         compiled from "D:\gitspace\odds_game\odds_game\templates\bettable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89951376016d1d1f1-03888729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52422da34a06025d1f5e8d37b194bc31554c73df' => 
    array (
      0 => 'D:\\gitspace\\odds_game\\odds_game\\templates\\bettable.tpl',
      1 => 1362487070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89951376016d1d1f1-03888729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bets' => 0,
    'bet' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51376016ecbda8_09315769',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51376016ecbda8_09315769')) {function content_51376016ecbda8_09315769($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['bet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bet']->key => $_smarty_tpl->tpl_vars['bet']->value){
$_smarty_tpl->tpl_vars['bet']->_loop = true;
?>
	<ul class="list-list bg1">
		<?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable(1, null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['bet']->value->odds_name=="平"){?>
		<?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable(3, null, 0);?>
		<?php }elseif($_smarty_tpl->tpl_vars['bet']->value->odds_name=="负"||$_smarty_tpl->tpl_vars['bet']->value->odds_name=="主负"){?>
		<?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable(2, null, 0);?>
		<?php }?>
		<li class="sfp"><font class="bold1<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['bet']->value->odds_name;?>
</font></li>
   		<li class="yzhud"><?php echo $_smarty_tpl->tpl_vars['bet']->value->team_mian_name;?>
</li>
   		<li class="yked"><?php echo $_smarty_tpl->tpl_vars['bet']->value->team_sec_name;?>
</li>
 		<li class="peil"><?php echo $_smarty_tpl->tpl_vars['bet']->value->bet_odd;?>
</li>
      	<li class="touzje"><?php echo $_smarty_tpl->tpl_vars['bet']->value->bet_vmoney;?>
</li>
     	<li class="shour"><?php echo $_smarty_tpl->tpl_vars['bet']->value->bet_odd*$_smarty_tpl->tpl_vars['bet']->value->bet_vmoney;?>
</li>  
	</ul>
<?php } ?><?php }} ?>