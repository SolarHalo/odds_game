<?php /* Smarty version Smarty-3.1.13, created on 2013-03-23 00:12:04
         compiled from "D:\workspace4php\odds_game\odds_game\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5129514c82d4311a09-12869908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a882f2779318105568ed8123d2b3fcc19ade4a78' => 
    array (
      0 => 'D:\\workspace4php\\odds_game\\odds_game\\templates\\header.tpl',
      1 => 1363967625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5129514c82d4311a09-12869908',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urlroot' => 0,
    'ownmoney' => 0,
    'username' => 0,
    'mainmenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_514c82d43afcf9_71248977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514c82d43afcf9_71248977')) {function content_514c82d43afcf9_71248977($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
style/style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
js/jquery-1.8.0.min.js"></script> 
<title>IBo123 博彩模拟游戏中心</title>
</head>
<BODY>
<div id="box">
	<div id="head">
    	 <div class="toplogo">
         	<a href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
">
            	<img src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
images/logo_ibo123.gif" class="fl"  title="IBO123.COM"/>
            </a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
">
            	<img src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
images/text-logo.gif" class="fl"  title="爱博游戏中心" style="padding:5px 0 0 125px;"/>
            </a>
          
          <?php if ($_smarty_tpl->tpl_vars['ownmoney']->value=='未登录'){?>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
login.php" class="sw-but">
            	立即试玩
            </a>
            <?php }else{ ?> 
            <div class="user_colum">
            	欢迎你 : <font><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</font><br />
				<?php if ($_smarty_tpl->tpl_vars['ownmoney']->value!=''){?>当前金币： <?php echo $_smarty_tpl->tpl_vars['ownmoney']->value;?>
<?php }?> &nbsp <a href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
manager.php">管理中心</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="logout.php">退出</a>
            </div>
          <?php }?>
	     
            
         </div>
         <ul class="nav">
         	<li><a href="http://www.ibo123.com">首页</a></li>
         	
            <li <?php if ($_smarty_tpl->tpl_vars['mainmenu']->value=='gamecenter'){?> class="xz" <?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
">游戏中心</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['mainmenu']->value=='latestupdate'){?> class="xz" <?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
latestupdate.php">最新动态</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['mainmenu']->value=='help'){?> class="xz" <?php }?>><a href="#">帮助</a></li>
         </ul>
    </div><?php }} ?>