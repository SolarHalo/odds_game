{{* 引入头部文件 *}}
{{include file='header.tpl'}}

<script type="text/javascript" src="{{$urlroot}}/js/register.js"></script>

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
                                    <td><input id="checkicon" type="text" class="yanz" /><a href="javascript:void(0)"><img src="{{$urlroot}}/checknum_session.php" /></a></td>
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

{{* 引入底部文件 *}}
{{include file='footer.tpl'}}