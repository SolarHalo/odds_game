function bsubmit(){
	var email = $("#email").val();
	var password = $("#password").val();
	
	var emailPat=/^(.+)@(.+)$/;
	if(!emailPat.test(email)){
		alert("请输入正确的邮箱！");
		return false;
	}
	
	if(password.length == 0){
		alert("请输入密码！");
		return false;
	}
	return true;
}

function sinaLogin(){
	window.open('https://api.weibo.com/oauth2/authorize?client_id=995123813&response_type=code&redirect_uri=http://www.ibo123.com/odds_game/htcdoc/sinalogin.php','','height=500,width=611,scrollbars=yes,status =yes');
}