<?php /* Smarty version Smarty-3.1.13, created on 2013-02-04 08:55:15
         compiled from "G:\odds_game\odds_game\templates\manager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9384510f70f87c6407-94750815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ea2385ad6a27a67b559bded58e12812c130bec7' => 
    array (
      0 => 'G:\\odds_game\\odds_game\\templates\\manager.tpl',
      1 => 1359968112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9384510f70f87c6407-94750815',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_510f70f88858f3_58283911',
  'variables' => 
  array (
    'urlroot' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510f70f88858f3_58283911')) {function content_510f70f88858f3_58283911($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('m_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
/js/main.js"></script>
<div class="container"> 
        <div class="row"> 
			  <div class="span4">
			  <div class="btn-group">
  <button class="btn">1</button>
  <button class="btn">2</button>
  <button class="btn">3</button>
</div>
			  
			  </div>
			  <div class="span5">这是右面的小布局</div> 
        </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>