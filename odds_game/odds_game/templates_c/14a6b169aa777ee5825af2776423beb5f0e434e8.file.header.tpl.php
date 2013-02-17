<?php /* Smarty version Smarty-3.1.13, created on 2013-02-04 08:49:10
         compiled from "G:\odds_game\odds_game\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2005510a20b69eadc2-94889668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14a6b169aa777ee5825af2776423beb5f0e434e8' => 
    array (
      0 => 'G:\\odds_game\\odds_game\\templates\\header.tpl',
      1 => 1359967747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2005510a20b69eadc2-94889668',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_510a20b6a2f923_04114443',
  'variables' => 
  array (
    'urlroot' => 0,
    'ownmoney' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510a20b6a2f923_04114443')) {function content_510a20b6a2f923_04114443($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
/style/style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
/js/jquery-1.8.0.min.js"></script> 
<title>iBo123</title>
</head>
<div id="box">
	<div id="head">
    	 <div class="toplogo">
         	<a href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
">
            	<img src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
/images/logo_ibo123.gif" class="fl"  title="IBO123.COM"/>
            </a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
">
            	<img src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
/images/text-logo.gif" class="fl"  title="爱博游戏中心" style="padding:5px 0 0 125px;"/>
            </a>
          
          <?php if ($_smarty_tpl->tpl_vars['ownmoney']->value=='未登录'){?>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
/register.php">
            	立即试玩
            </a>
            <?php }else{ ?> 
            欢迎你:<?php echo $_smarty_tpl->tpl_vars['username']->value;?>

             <a href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
/manager.php">
            	管理中心  
             </a>
             退出
          <?php }?>
	     
            
         </div>
         <ul class="nav">
         	<li><a href="#">首页</a></li>
            <li class="xz"><a href="#">游戏中心</a></li>
            <li><a href="#">帮助</a></li>
         </ul>
    </div><?php }} ?>