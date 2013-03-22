<?php /* Smarty version Smarty-3.1.13, created on 2013-03-23 00:12:04
         compiled from "D:\workspace4php\odds_game\odds_game\templates\eventtable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30222514c82d43ca103-13724218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4eee9faa2a5df7d361f5cf5eac07078335de92a9' => 
    array (
      0 => 'D:\\workspace4php\\odds_game\\odds_game\\templates\\eventtable.tpl',
      1 => 1363967625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30222514c82d43ca103-13724218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'events' => 0,
    'a' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_514c82d454b177_72001796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514c82d454b177_72001796')) {function content_514c82d454b177_72001796($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:/workspace4php/odds_game/odds_game/lib/Smarty-3.1.13/libs/plugins\\modifier.truncate.php';
?><?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['a']->value==0||$_smarty_tpl->tpl_vars['a']->value!=substr($_smarty_tpl->tpl_vars['event']->value->event_time,0,10)){?> 
		<?php ob_start();?><?php echo substr($_smarty_tpl->tpl_vars['event']->value->event_time,0,10);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable($_tmp1, null, 0);?>
			<ul>
			 <li><font color="white"> <?php echo substr($_smarty_tpl->tpl_vars['event']->value->event_time,0,10);?>
</font></li>
			</ul>
		<ul id="eventid_<?php echo $_smarty_tpl->tpl_vars['event']->value->event_id;?>
" class="list-list bg1"> 
			<li class="sais"><?php echo $_smarty_tpl->tpl_vars['event']->value->sport_subtype_name;?>
</li>
			<li class="changc"><?php echo $_smarty_tpl->tpl_vars['event']->value->event_id;?>
</li>
			<li class="shij"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['event']->value->event_time,16,'',true);?>
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
	 <?php }else{ ?> 
		 <ul id="eventid_<?php echo $_smarty_tpl->tpl_vars['event']->value->event_id;?>
" class="list-list bg1"> 
			<li class="sais"><?php echo $_smarty_tpl->tpl_vars['event']->value->sport_subtype_name;?>
</li>
			<li class="changc"><?php echo $_smarty_tpl->tpl_vars['event']->value->event_id;?>
</li>
			<li class="shij"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['event']->value->event_time,16,'',true);?>
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
	 <?php }?>

<?php } ?>
<?php }} ?>