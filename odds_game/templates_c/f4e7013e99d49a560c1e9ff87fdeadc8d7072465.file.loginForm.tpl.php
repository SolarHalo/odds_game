<?php /* Smarty version Smarty-3.1.12, created on 2013-01-25 07:02:51
         compiled from "E:\gisrespository\personal\php\php\odds_game\odds_game\templates\loginForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2381551022e1b1603b0-49364165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4e7013e99d49a560c1e9ff87fdeadc8d7072465' => 
    array (
      0 => 'E:\\gisrespository\\personal\\php\\php\\odds_game\\odds_game\\templates\\loginForm.tpl',
      1 => 1359097369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2381551022e1b1603b0-49364165',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'loginInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51022e1b197e84_33173577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51022e1b197e84_33173577')) {function content_51022e1b197e84_33173577($_smarty_tpl) {?><div class="login">
             <p class="title-p">登录爱博</p>
             <form onsubmit="return bsubmit();">
             	<div class="loginioc">
                	<ul>
                    	<li class="user-ioc">登录</li>
                        <li class="pass-ioc">密码</li>
                    </ul>
                </div> 
             	<div class="clumu2">
                    <span class="bordtop2">&nbsp;</span>
                    	<table class="login-table">
                        	<tr>
                            	<td><input id="email" type="text" class="login-inp" name="email" /></td>
                            </tr>
                            <tr>
                            	<td><input id="password" type="password" class="login-inp" name="password" /></td>
                            </tr>
                            <tr>
                            	<td style="color:#a0a1a1;"><input type="checkbox"/>&nbsp;&nbsp;记住登录状态<a href="#" style="color:#a0a1a1; float:right; text-decoration:underline;">忘记密码</a></td>
                            </tr>
                             <tr>
                            	<td><input type="submit" value="登录爱博" class="login-but login-bg1" /><br />
                                	<a href="#" style="color:#979797; font-size:14px; display:inline-block; margin:10px 0;">快速注册</a>
								</td>
                            </tr>
                        </table>
                        <div class="api">
                        	<hr size="1" style="color:#CCC"/>
                        	<a href="#"><img src="images/QQlogin.gif" /></a>
                            <a href="#"><img src="images/weibologin.gif" /></a>
                        </div>
                    <span class="bordbot2">&nbsp;</span>
                </div>
                <div class="logintext">
                        <ul>
                            <li id="emailIc" class="mail-ioc"><?php echo $_smarty_tpl->tpl_vars['loginInfo']->value;?>
</li>
                        </ul>
                    </div>	
             </form>
            </div><?php }} ?>