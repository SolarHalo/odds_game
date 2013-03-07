{{* 引入头部文件 *}}
{{include file='header.tpl'}}
<script type="text/javascript" src="{{$urlroot}}/js/login.js"></script>
</script>

<div class="container"> 
        <div class="tietle">
            <font>登录</font>&nbsp;&or;
        </div>
        <div class="container-left">
        	
        	{{include file=$logintem}}
        	
        </div>
        <!-- left END --> 
    </div>
</div> 

{{* 引入底部文件 *}}
{{include file='footer.tpl'}}