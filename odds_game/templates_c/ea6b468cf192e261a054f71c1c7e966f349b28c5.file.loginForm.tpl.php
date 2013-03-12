<?php /* Smarty version Smarty-3.1.13, created on 2013-03-12 12:57:13
         compiled from "G:\odds_game\odds_game\templates\loginForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28726513f2629a32bc1-83297313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea6b468cf192e261a054f71c1c7e966f349b28c5' => 
    array (
      0 => 'G:\\odds_game\\odds_game\\templates\\loginForm.tpl',
      1 => 1362665326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28726513f2629a32bc1-83297313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'othererror' => 0,
    'tencenturl' => 0,
    'sinaauthurl' => 0,
    'loginInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_513f2629b35ed7_21694447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513f2629b35ed7_21694447')) {function content_513f2629b35ed7_21694447($_smarty_tpl) {?><div class="login">
<p><?php echo $_smarty_tpl->tpl_vars['othererror']->value;?>
</p>
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
                                	<a href="register.php" style="color:#979797; font-size:14px; display:inline-block; margin:10px 0;">快速注册</a>
								</td>
                            </tr>
                        </table>
                        <div class="api">
                        	<hr size="1" style="color:#CCC"/>
                        	<a id="qqLoginBtn" href="<?php echo $_smarty_tpl->tpl_vars['tencenturl']->value;?>
"><img src="images/QQlogin.gif" /></a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['sinaauthurl']->value;?>
" ><img src="images/weibologin.gif" /></a>
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