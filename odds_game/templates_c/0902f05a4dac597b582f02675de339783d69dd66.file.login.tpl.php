<?php /* Smarty version Smarty-3.1.12, created on 2013-01-25 07:00:28
         compiled from "E:\gisrespository\personal\php\php\odds_game\odds_game\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13733510227b480e201-22164261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0902f05a4dac597b582f02675de339783d69dd66' => 
    array (
      0 => 'E:\\gisrespository\\personal\\php\\php\\odds_game\\odds_game\\templates\\login.tpl',
      1 => 1359097083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13733510227b480e201-22164261',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510227b4848b38_17748055',
  'variables' => 
  array (
    'urlroot' => 0,
    'logintem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510227b4848b38_17748055')) {function content_510227b4848b38_17748055($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
/js/login.js"></script>
<div class="container"> 
        <div class="tietle">
            <font>登录</font>&nbsp;&or;
        </div>
        <div class="container-left">
        	
        	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['logintem']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        	
        </div>
        <!-- left END --> 
    </div>
</div> 


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>