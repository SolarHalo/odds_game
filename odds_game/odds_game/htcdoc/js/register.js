/**
 * 注册页面js
 */
var checkR = {};

$(document).ready(function(){
	
	$("#email").blur(function(){
		var el = $(this);
		var email = $(this).val();
		var emailPat=/^(.+)@(.+)$/;
		if(!emailPat.test(email)){
			$("#emailIc").addClass("tisioc");
			$("#emailIc").html("请输入正确的邮箱格式！")
			if(!$("#registerBt").hasClass("login-bg2")){
				$("#registerBt").addClass("login-bg2")
			}
			$("#registerBt").attr("disabled", "disabled");
		}else{
			$.ajax({
				'url': "ajaxuseropt.php",
				'data': {'method': 'checkemail', 'email': email},
				'success': function(data){
					if(data == "no"){
						checkR['email'] = true;
						okJoin();
						$("#emailIc").removeClass("tisioc");
						$("#emailIc").html("邮箱可以使用！")
					}else{
						$("#emailIc").addClass("tisioc");
						$("#emailIc").html("邮箱已有人使用！")
						if(!$("#registerBt").hasClass("login-bg2")){
							$("#registerBt").addClass("login-bg2")
						}
						$("#registerBt").attr("disabled", "disabled");
					}
				}
			});
		}
	});
	
	$("#password1").blur(function(){
		var pass = $(this).val();
		if(pass.length < 6){
			$("#pass1Ic").addClass("tisioc");
			$("#pass1Ic").html("密码长度不能少于6位！");
			if(!$("#registerBt").hasClass("login-bg2")){
				$("#registerBt").addClass("login-bg2")
			}
			$("#registerBt").attr("disabled", "disabled");
		}else{
			checkR['pass1'] = true;
			okJoin();
			$("#pass1Ic").removeClass("tisioc");
			$("#pass1Ic").html("密码可以使用！");
		}
	});
	
	$("#password2").blur(function(){
		var pass1 = $("#password1").val();
		var pass2 = $("#password2").val();
		if(pass1 != pass2){
			if(!$("#registerBt").hasClass("login-bg2")){
				$("#registerBt").addClass("login-bg2")
			}
			$("#registerBt").attr("disabled", "disabled");
			$("#pass2Ic").addClass("tisioc");
			$("#pass2Ic").html("与第一次输入的密码不同！");
		}else{
			checkR['pass2'] = true;
			okJoin();
			$("#pass2Ic").removeClass("tisioc");
			$("#pass2Ic").html("密码可以使用！");
		}
	});
	
	$("#checkicon").blur(function(){
		var code = $(this).val();
		if(code.length == 0){
			return;
		}
		$.ajax({
			'url':'ajaxuseropt.php',
			'data': {'method': 'checkcode', 'code': code},
			'success': function(data){
				if(data == "yes"){
					checkR['code'] = true;
					okJoin();
					$("#codeIc").removeClass("tisioc");
					$("#codeIc").html("验证码正确！");
				}else{
					$("#codeIc").addClass("tisioc");
					$("#codeIc").html("验证码不正确！");
					if(!$("#registerBt").hasClass("login-bg2")){
						$("#registerBt").addClass("login-bg2")
					}
					$("#registerBt").attr("disabled", "disabled");
				}
			}
		})
	});
	
	$("#readNotic").click(function(){
		if($(this).attr("checked")){
			checkR['check'] = true;
			okJoin();
		}else{
			if(!$("#registerBt").hasClass("login-bg2")){
				$("#registerBt").addClass("login-bg2")
			}
			$("#registerBt").attr("disabled", "disabled");
		}
	});
	
	$("#registerBt").click(function(){
		var email = $("#email").val();
		var pass = $("#password1").val();
		if(!$("#registerBt").hasClass("login-bg2")){
			$("#registerBt").addClass("login-bg2")
		}
		$("#registerBt").attr("disabled", "disabled");
		$("#registerBt").val("正在加入..");
		$.ajax({
			'url': "ajaxuseropt.php",
			'data': {'method': 'register', 'email': email, 'pass': pass},
			'success': function(data){
				if(data == "yes"){
					$("#infoMsg").html("您已注册成功，获得50分初试积分！")
				}else {
					$("#infoMsg").html("注册失败，请重试！");
				}
				$("#infoMsg").fadeIn().delay(3000).fadeOut();
				$("#registerBt").removeClass("login-bg2");
				$("#registerBt").addClass("login-bg1");
				$("#registerBt").removeAttr("disabled");
				$("#registerBt").val("加入");
				setTimeout("location.replace('index.php')", 3000);
			}
		});
	});
	
});

function okJoin(){
	var r = true;
	var i = 0;
	for(var k in checkR){
		if(k){
			if(!checkR[k]){
				k = false;
				break;
			}
		}
		i++;
	}
	if(i==5 && r){
		$("#registerBt").removeClass("login-bg2");
		$("#registerBt").addClass("login-bg1");
		$("#registerBt").removeAttr("disabled");
	}
}