<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{$urlroot}}/style/style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="{{$urlroot}}/js/jquery-1.8.0.min.js"></script> 
<title>iBo123</title>
</head>
<div id="box">
	<div id="head">
    	 <div class="toplogo">
         	<a href="{{$urlroot}}">
            	<img src="{{$urlroot}}/images/logo_ibo123.gif" class="fl"  title="IBO123.COM"/>
            </a>
            <a href="{{$urlroot}}">
            	<img src="{{$urlroot}}/images/text-logo.gif" class="fl"  title="爱博游戏中心" style="padding:5px 0 0 125px;"/>
            </a>
          
          {{if $ownmoney eq '未登录' }}
		    <a href="{{$urlroot}}/login.php" class="sw-but">
            	立即试玩
            </a>
            {{else}} 
            <div class="user_colum">
            	欢迎你 : <font>{{$username}}</font><br />
				<a href="{{$urlroot}}/manager.php">管理中心</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="logout.php">退出</a>
            </div>
          {{/if}}
	     
            
         </div>
         <ul class="nav">
         	<li><a href="http://www.ibo123.com">首页</a></li>
         	
            <li {{if $mainmenu eq 'gamecenter' }} class="xz" {{/if}}><a href="{{$urlroot}}">游戏中心</a></li>
            <li {{if $mainmenu eq 'latestupdate' }} class="xz" {{/if}}><a href="{{$urlroot}}/latestupdate.php">最新动态</a></li>
            <li {{if $mainmenu eq 'help' }} class="xz" {{/if}}><a href="#">帮助</a></li>
         </ul>
    </div>