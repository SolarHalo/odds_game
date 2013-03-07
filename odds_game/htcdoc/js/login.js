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

