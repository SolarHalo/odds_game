<?php /* Smarty version Smarty-3.1.12, created on 2013-01-14 13:11:16
         compiled from "E:\gisrespository\personal\php\php\odds_game\odds_game\templates\admin\topnav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2829550f403f4dabfc0-61723692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f92a0a090e9114edff3514969eb910e0908a2b7' => 
    array (
      0 => 'E:\\gisrespository\\personal\\php\\php\\odds_game\\odds_game\\templates\\admin\\topnav.tpl',
      1 => 1358167367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2829550f403f4dabfc0-61723692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currentnav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f403f4dd2e99_72646260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f403f4dd2e99_72646260')) {function content_50f403f4dd2e99_72646260($_smarty_tpl) {?><div class="navbar">
  <div class="navbar-inner">
    <div class="container">
 
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
 
      <!-- Be sure to leave the brand out there if you want it shown -->
      <a class="brand" href="#">爱博博彩</a>
 
      <!-- Everything you want hidden at 940px or less, place within here -->
      <div class="nav-collapse collapse navbar-responsive-collapse">
	       <ul class="nav">
	       		<li <?php if ($_smarty_tpl->tpl_vars['currentnav']->value=='index'){?>class="active"<?php }?>><a href="index.php" >首页</a></li>
	       		<li <?php if ($_smarty_tpl->tpl_vars['currentnav']->value=='usermanage'){?>class="active"<?php }?>><a href="usermanage.php" >用户管理</a></li>
	       </ul>
      </div>
 
    </div>
  </div>
</div><?php }} ?>