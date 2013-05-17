<div id="loginwindow" class="tcbox01">
	<a href="javascript:void(0);" id="wclosebt" class="clos">x</a>
	<div class="login">
         <p id='loginmsg' class="title-p">您还没有登录</p>
         <form>
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
                            <td><input id="email" type="text" class="login-inp" /></td>
                        </tr>
                        <tr>
                            <td><input id="password" type="password" class="login-inp" /></td>
                        </tr>
                        <tr>
                            <td style="color:#a0a1a1;"><input id="holdlogin" type="checkbox"/>&nbsp;&nbsp;记住登录状态<a href="#" style="color:#a0a1a1; float:right; text-decoration:underline;">忘记密码</a></td>
                        </tr>
                         <tr>
                            <td><input id="loginbt" type="button" value="登录爱博" class="login-but" /><br />
                                <a href="#" style="color:#979797; font-size:14px; display:inline-block; margin:10px 0;">快速注册</a>
                            </td>
                        </tr>
                    </table> 
                <span class="bordbot2">&nbsp;</span>
            </div>
         </form>
        <div class="api">
        	<p class="title-p">快速登录</p>
            <hr size="1" style="color:#CCC"/>
            <a href="{{$tencenturl}}"><img src="images/QQlogin.gif" /></a>
            <a href="{{$sinaauthurl}}"><img src="images/weibologin.gif" /></a>
        </div>
	</div> 
</div>

<script type="text/javascript">

$("#loginbt").click(function(){
	ajaxlogin();
});

$("#password").keydown(function(e){
	if(e.keyCode == 13){
		ajaxlogin();
	}
});


$("#wclosebt").click(function(){$("#loginwindow").remove();});


function ajaxlogin(){
	var email = $("#email").val();
	var passwd = $("#password").val();
	var holdl = !!($("#holdlogin").attr("checked"))

	if(email == '' || passwd == ''){
		$("#loginmsg").html("请输入用户名密码！");
	}

	$.ajax({
		'url': 'ajaxlogin.php',
		'data': {'email':email,'password':passwd, 'holdlogin': holdl},
		'type': 'post',
		'dataType':'json',
		'success': function(data){
		
			if(data.code == "success"){
				$("#loginwindow").remove();
				$("#trybutton").after(data.msg);
				$("#trybutton").remove();
				islogin = true;
				 $("#ownmoney").html(data.money);
			}else{
				$("#loginmsg").html(data.msg);
			}
		}
	});
}

</script>