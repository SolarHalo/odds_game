<?php /* Smarty version Smarty-3.1.13, created on 2013-03-03 16:37:51
         compiled from "G:\odds_game\odds_game\templates\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2580351337c5f59c9c8-58726421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f7eae61e040358732b77d30daf3b1b511f257d3' => 
    array (
      0 => 'G:\\odds_game\\odds_game\\templates\\register.tpl',
      1 => 1362240575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2580351337c5f59c9c8-58726421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urlroot' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51337c5f688193_24885358',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51337c5f688193_24885358')) {function content_51337c5f688193_24885358($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
/js/register.js"></script>

<div class="container"> 
        <div class="tietle">
            <font>注册</font>&nbsp;&or;
        </div>
        <div class="container-left">
			<div class="login">
				<p class="title-p">加入爱博！你可以进行免费博彩联系，熟悉博彩的流程，<br />与博彩高手可以交流！</p>
             	<form>
           	  		<div class="loginioc">
                        <ul>
                            <li class="mail-ioc">邮箱</li>
                            <li class="pass-ioc">密码</li> 
                            <li class="y-pass-ioc">确认密码</li>
                            <li class="yanz-ioc">验证码</li>
                        </ul>
                    </div> 
                    <div class="clumu2">
                        <span class="bordtop2">&nbsp;</span> 
                            <table class="login-table">
                                <tr>
                                    <td><input id="email" type="text" class="login-inp" /></td>
                                </tr>
                                <tr>
                                    <td><input id="password1" type="password" class="login-inp" /></td>
                                </tr>
                                <tr>
                                    <td><input id="password2" type="password" class="login-inp" /></td>
                                </tr>
                                <tr>
                                    <td><input id="checkicon" type="text" class="yanz" /><a href="javascript:void(0)"><img src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
/checknum_session.php" /></a></td>
                                </tr>
                                <tr style=" height:30px;">
                                    <td style="color:#a0a1a1;"><input id="readNotic" type="checkbox"/>&nbsp;&nbsp;已经阅读并同意<a href="#" style="color:#a0a1a1;text-decoration:underline;"><爱博服务条款></a></td>
                                </tr> 
                            </table>
                            <div class="api" id="login-bot"> 
                                <hr size="1" style="color:#CCC"/>
                                <input  id="registerBt" type="button" value="加入" class="login-but login-bg2" disabled="disabled" />
                            </div>
                        <span class="bordbot2">&nbsp;</span>
                    </div>
                    <div class="logintext">
                        <ul>
                            <li id="emailIc" class="mail-ioc">邮箱</li>
                            <li id="pass1Ic" class="pass-ioc">密码</li> 
                            <li id="pass2Ic" class="y-pass-ioc">确认密码</li>
                            <li id="codeIc" class="yanz-ioc">验证码</li>
                        </ul>
                    </div>		
				</form> 
			</div> 
        </div>
        <!-- left END --> 
    </div>
</div>

<div id="infoMsg" >ddddd</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>