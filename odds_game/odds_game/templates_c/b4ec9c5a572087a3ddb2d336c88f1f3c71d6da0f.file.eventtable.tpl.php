<?php /* Smarty version Smarty-3.1.12, created on 2013-01-21 13:01:04
         compiled from "E:\gisrespository\personal\php\php\odds_game\odds_game\templates\eventtable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:681550f7fb16810b49-59306946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4ec9c5a572087a3ddb2d336c88f1f3c71d6da0f' => 
    array (
      0 => 'E:\\gisrespository\\personal\\php\\php\\odds_game\\odds_game\\templates\\eventtable.tpl',
      1 => 1358773238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '681550f7fb16810b49-59306946',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f7fb16892095_67017346',
  'variables' => 
  array (
    'events' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f7fb16892095_67017346')) {function content_50f7fb16892095_67017346($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
<ul id="eventid_<?php echo $_smarty_tpl->tpl_vars['event']->value->event_id;?>
" class="list-list bg1">
	<li class="sais"><?php echo $_smarty_tpl->tpl_vars['event']->value->sport_subtype_name;?>
</li>
	<li class="changc"> </li>
	<li class="shij"><?php echo $_smarty_tpl->tpl_vars['event']->value->event_time;?>
</li>
	<li class="zhud"><?php echo $_smarty_tpl->tpl_vars['event']->value->team_mian_name;?>
</li>
	<li class="ked"><?php echo $_smarty_tpl->tpl_vars['event']->value->team_sec_name;?>
</li>
	<li class="zhus betbutton"><font class="bold2"><?php echo $_smarty_tpl->tpl_vars['event']->value->victory;?>
</font></li>
	<li class="ping betbutton"><font class="bold2"><?php echo $_smarty_tpl->tpl_vars['event']->value->planish;?>
</font></li>
	<li class="zhuf betbutton"><font class="bold2"><?php echo $_smarty_tpl->tpl_vars['event']->value->fail;?>
</font></li>
</ul>
<?php } ?>
<?php }} ?>