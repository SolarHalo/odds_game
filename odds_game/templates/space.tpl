{{* 引入头部文件 *}}
{{include file='header.tpl'}}
<script type="text/javascript" src="{{$urlroot}}js/ajaxfileupload.js"></script>
<script type="text/javascript" src="{{$urlroot}}js/main.js"></script>
 
<script type="text/javascript" src="{{$urlroot}}js/useropt.js"></script>
<div class="container">  
        <div class="container-left">
        	<div class="user">
            	<div id='cccc' class="user-imge">
                	<img src="{{$spaceuserphoto}}" width="115" height="115" />
                    
                </div>
                <ul>
                	<li id='aaaa'> 
                    	<span > {{$spaceusername}}</span>
                    	
                    </li>
                    <li id='bbbb'>
                    	<!-- <span >{{$username}}</span> -->
                    	
                    </li>
                    <li>
                    	帐号余额:<font>
                    	{{$spaceownmoney}}
                    	</font>金币
                    </li>
                </ul>
                <div class="user-hr">
                	<a href="?spacetype=now&uid={{$spaceuserid}}">正在投注{{$spacetypes}}</a>|<a href="?spacetype=his&uid={{$spaceuserid}}">投注历史</a>
                </div>
            </div>
            {{if $spacetype=="now" or $spacetype=="all"}}
            <div class="sais-list" id="user-list">
            	<span class="tietle-sub">
                	正在投注
                    <a href="?spacetype=now&uid={{$spaceuserid}}">更多</a>
                </span>
                <ul class="list-title">
                    <li class="sfp">胜/负/平</li>
                    <li class="yzhud">主队</li>
                    <li class="yked">客队</li>
                    <!--
                    <li class="shij">时间</li>-->
                    <li class="peil">赔率</li>
                    <li class="touzje">投注金额</li>
                    <li class="shour">押注正确将收入</li> 
                </ul>
               	{{foreach $spacebetsData as $bet}}
					<ul class="list-list bg1">
						{{$a=1}}
						{{if $bet->odds_name=="平"}}
						{{$a=3}}
						{{elseif $bet->odds_name=="负" or $bet->odds_name=="主负"}}
						{{$a=2}}
						{{/if}}
						<li class="sfp"><font class="bold1{{$a}}">{{$bet->odds_name}}</font></li>
				   		<li class="yzhud">{{$bet->team_mian_name}}</li>
				   		<li class="yked">{{$bet->team_sec_name}}</li>
				   		<!--
				   		<li class="shij">{{$bet->bet_time}}</li>-->
				 		<li class="peil">{{$bet->bet_odd}}</li>
				      	<li class="touzje">{{$bet->bet_vmoney}}</li>
				     	<li class="shour">{{$bet->bet_vmoney*$bet->bet_odd}}</li>  
					</ul>
				{{/foreach}}
            </div>
            {{/if}}
            {{if $spacetype=="his" or $spacetype=="all"}}
            <div class="sais-list" id="user-list">
            	<span class="tietle-sub">
                	投注历史
                    <a href="?spacetype=his&uid={{$spaceuserid}}">更多</a>
                </span>
                <ul class="list-title">
                    <li class="sfp">胜/负/平</li>
                    <li class="yzhud">主队</li>
                    <li class="yked">客队</li>
                    <!--
                    <li class="shij">时间</li>-->
                    <li class="peil">赔率</li>
                    <li class="touzje">投注金额</li>
                    <li class="shour">收入</li> 
                </ul>
                {{foreach $spacebetsHistoryData as $bet}}
					<ul class="list-list bg1">
						{{$a=1}}
						{{if $bet->odds_name=="平"}}
						{{$a=3}}
						{{elseif $bet->odds_name=="负" or $bet->odds_name=="主负"}}
						{{$a=2}}
						{{/if}}
						<li class="sfp"><font class="bold1{{$a}}">{{$bet->odds_name}}</font></li>
				   		<li class="yzhud">{{$bet->team_mian_name}}</li>
				   		<li class="yked">{{$bet->team_sec_name}}</li>
				   		<!--
				   		<li class="shij">{{$bet->bet_time}}</li>-->
				 		<li class="peil">{{$bet->bet_odd}}</li>
				      	<li class="touzje">{{$bet->bet_vmoney}}</li>
				     	<li class="shour">{{$bet->bet_money}}</li>  
					</ul>
				{{/foreach}}
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
            {{/if}}
        </div>
        <!-- left END -->
        <div class="container-right" style="background:none;">  
            <div class="guanz">
            	<span>
                	关注了<br />
					<font>{{$spacesuperStars[0]->total}}</font>人
                </span>
                <div style="height:40px; border-left:1px solid #c1c1c1; width:20px;float:left;">&nbsp;</div>
                <span>
                	关注者<br />
					<font>{{$spacefans[0]->total}}</font>人
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