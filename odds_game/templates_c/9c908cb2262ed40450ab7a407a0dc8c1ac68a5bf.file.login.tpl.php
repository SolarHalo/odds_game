<?php /* Smarty version Smarty-3.1.13, created on 2013-03-10 19:45:04
         compiled from "D:\gitspace\odds_game\odds_game\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133751387d3a590351-25996626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c908cb2262ed40450ab7a407a0dc8c1ac68a5bf' => 
    array (
      0 => 'D:\\gitspace\\odds_game\\odds_game\\templates\\login.tpl',
      1 => 1362722221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133751387d3a590351-25996626',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51387d3a6afee6_98542968',
  'variables' => 
  array (
    'urlroot' => 0,
    'logintem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51387d3a6afee6_98542968')) {function content_51387d3a6afee6_98542968($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
/js/login.js"></script>
</script>

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