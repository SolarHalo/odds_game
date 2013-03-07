<?php /* Smarty version Smarty-3.1.13, created on 2013-03-05 14:43:56
         compiled from "G:\odds_game\odds_game\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3898513604ac39b485-65692911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7829d002146fa6adbd568f4005aa393a21cdecb2' => 
    array (
      0 => 'G:\\odds_game\\odds_game\\templates\\login.tpl',
      1 => 1359617439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3898513604ac39b485-65692911',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urlroot' => 0,
    'logintem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_513604ac48e363_48875717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513604ac48e363_48875717')) {function content_513604ac48e363_48875717($_smarty_tpl) {?>
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