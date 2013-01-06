{{* 引入头部文件 *}}
{{include file='admin/header.tpl'}}
<script type="text/javascript">
function beforeSubmit(){
	var user = $("#username").val();
	var pass = $("#password").val();
	if(user.length == 0 || pass.length == 0){
		$("#errorp").html("请先输入用户名密码!");
		return false;
	}else {
		return true;
	}
}
</script>
<div class="container">
	<div class="loginPanel">
	<legend>系统登录</legend>
		<form class="form-horizontal" method="post" onsubmit="return beforeSubmit();">
			<div class="control-group">
				<label class="control-label" for="username">用户名</label>
				<div class="controls">
					<input type="text" id="username" name="username" placeholder="用户名">
					<span id="errorp" class="help-inline" style="color:red;">{{if $error == true}}用户名或密码错误!{{/if}}</span>
				</div>
			</div>
			<div class="control-group"><label class="control-label"
				for="password">密码</label>
			<div class="controls"><input type="password" id="password" name="password"
				placeholder="密码"></div>
			</div>
			<div class="control-group">
			<div class="controls">
			<button type="submit" class="btn btn-primary">登录</button>
			</div>
			</div>
		</form>
	</div>
	
</div>

{{* 引入底部文件 *}} {{include file='admin/footer.tpl'}}
