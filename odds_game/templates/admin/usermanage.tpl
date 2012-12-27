{{* 引入头部文件 *}}
{{include file='admin/header.tpl'}}

{{* 引入导航文件 *}}
{{include file='admin/topnav.tpl'}}
<div class="container-fluid">
	<div class="row">
		<div class="span3 well">
			<ul class="nav nav-list">
			  <li class="nav-header">用户管理</li>
			  <li {{if $mgtype == 'user'}}class="active"{{/if}}><a href="usermanage.php?type=user">注册用户管理</a></li>
			  <li {{if $mgtype == 'admin'}}class="active"{{/if}}><a href="usermanage.php?type=admin">后台管理员</a></li>
			</ul>
		</div>
		<div class="span12">
			{{*引入不同用户的管理模板*}}
			{{include file=$managetpl}}		
		</div>
	</div>

</div>


{{* 引入底部文件 *}}
{{include file='admin/footer.tpl'}}
