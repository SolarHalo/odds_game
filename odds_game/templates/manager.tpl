{{* 引入头部文件 *}}
{{include file='header.tpl'}}
<script type="text/javascript" src="{{$urlroot}}js/ajaxfileupload.js"></script>
<script type="text/javascript" src="{{$urlroot}}js/main.js"></script>
 
<script type="text/javascript" src="{{$urlroot}}js/useropt.js"></script>
<div class="container">  
        <div class="container-left">
        	<div class="user">
            	<div id='cccc' class="user-imge">
                	<img src="{{$userphoto}}" width="115" height="115" />
                    <a href="javascript:userOpt.modifyPhoto('cccc','{{$userid}}');" style='float: left;'>修改头像</a>
                </div>
                <ul>
                	<li id='aaaa'>
                    	<span > {{$username}}</span>
                    	<span ><a href="javascript:userOpt.modifyName('aaaa','{{$userid}}');">修改昵称</a></span>
                    </li>
                    <li id='bbbb'>
                    	<!-- <span >{{$username}}</span> -->
                    	<span><a href="javascript:userOpt.modifyPassword('bbbb','{{$userid}}');">修改密码</a></span>
                    </li>
                    <li>
                    	帐号余额:<font>
                    	{{$ownmoney}}
                    	</font>金币
                    </li>
                </ul>
                <div class="user-hr">
                	<a href="#">正在投注</a>|<a href="#">投注历史</a>
                </div>
            </div>
            <div class="sais-list" id="user-list">
            	<span class="tietle-sub">
                	正在投注
                    <a href="#">更多</a>
                </span>
                <ul class="list-title">
                    <li class="sfp">胜/负/平</li>
                    <li class="yzhud">主队</li>
                    <li class="yked">客队</li>
                    <li class="peil">赔率</li>
                    <li class="touzje">投注金额</li>
                    <li class="shour">押注正确将收入</li> 
                </ul>
                {{$bets=$betsData}}
               	{{include file='bettable.tpl'}}
            </div>
            <div class="sais-list" id="user-list">
            	<span class="tietle-sub">
                	投注历史
                    <a href="#">更多</a>
                </span>
                <ul class="list-title">
                    <li class="sfp">胜/负/平</li>
                    <li class="yzhud">主队</li>
                    <li class="yked">客队</li>
                    <li class="peil">赔率</li>
                    <li class="touzje">投注金额</li>
                    <li class="shour">收入</li> 
                </ul>
                {{$bets=$betsHistoryData}}
                {{include file='bettable.tpl'}}
                
                <!--
               	<ul class="list-list bg1">
                    <li class="sfp"><font class="bold11">胜</font></li>
                    <li class="yzhud">牛卡尔斯</li>
                    <li class="yked">曼城</li>
                    <li class="peil">2.35</li>
                    <li class="touzje">800</li>
                    <li class="shour">6000</li>  
                </ul>
                <ul class="list-list bg2">
                    <li class="sfp"><font class="bold12">负</font></li>
                    <li class="yzhud">牛卡尔斯</li>
                    <li class="yked">曼城</li>
                    <li class="peil">2.35</li>
                    <li class="touzje">800</li>
                    <li class="shour">6000</li> 
                </ul> 
                <ul class="list-list bg1">
                    <li class="sfp"><font class="bold13">平</font></li>
                    <li class="yzhud">牛卡尔斯</li>
                    <li class="yked">曼城</li>
                    <li class="peil">2.35</li>
                    <li class="touzje">800</li>
                    <li class="shour">6000</li>  
                </ul>
                <ul class="list-list bg2">
                    <li class="sfp"><font class="bold11">胜</font></li>
                    <li class="yzhud">牛卡尔斯</li>
                    <li class="yked">曼城</li>
                    <li class="peil">2.35</li>
                    <li class="touzje">800</li>
                    <li class="shour">6000</li> 
                </ul> 
                -->
            </div>
        </div>
        <!-- left END -->
        <div class="container-right" style="background:none;">  
            <div class="guanz">
            	<span>
                	关注了<br />
					<font>216</font>人
                </span>
                <div style="height:40px; border-left:1px solid #c1c1c1; width:20px;float:left;">&nbsp;</div>
                <span>
                	关注者<br />
					<font>216</font>人
                </span>
            </div>
            <div class="top-guanz">
            	<span class="fl">热门关注</span>
                <ul class="fl">
                	<li>
                    	<a href="#"><img src="images/uerimge.jpg"/></a>
                    </li>
                    <li>
                    	<a href="#"><img src="images/uerimge.jpg"/></a>
                    </li>
                    <li>
                    	<a href="#"><img src="images/uerimge.jpg"/></a>
                    </li>
                    <li>
                    	<a href="#"><img src="images/uerimge.jpg"/></a>
                    </li>
                    <li>
                    	<a href="#"><img src="images/uerimge.jpg"/></a>
                    </li>
                    <li>
                    	<a href="#"><img src="images/uerimge.jpg"/></a>
                    </li>
                </ul>
            </div>
        </div> 
 </div>
{{* 引入底部文件 *}}
{{include file='footer.tpl'}}