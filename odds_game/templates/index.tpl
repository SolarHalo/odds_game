{{* 引入头部文件 *}}
{{include file='header.tpl'}}
<script type="text/javascript" src="{{$urlroot}}/js/main.js"></script>
<div class="container"> 
        <div class="tietle">
            <font>足球</font>&nbsp;&or;
        </div>
        <div class="container-left">
            <div class="sais-list">
                <ul class="list-title">
                    <li class="sais">赛事</li>
                    <li class="changc">场次</li>
                    <li class="shij">时间</li>
                    <li class="zhud">主队</li>
                    <li class="ked">客队</li>
                    <li class="zhus">主胜</li>
                    <li class="ping">平</li>
                    <li class="zhuf">主负</li>
                </ul>
                
                <div id="refreashTitle" style=" padding: 5px; background-color: #DDDDDD; display: none;"><img alt="" src="{{$urlroot}}/images/loading.gif">正在刷新数据...</div>
                
                {{include file='eventtable.tpl'}}
                
            </div>
        </div>
        <!-- left END -->
       
        <div class="container-right">
        	<span class="cont-r-title-l mt50">
            	&nbsp;投注项
            </span>
            <span class="cont-r-title-r mt50">
            	赔率&nbsp;&nbsp;赢/位置&nbsp;
            </span>
            <span id="ownmoney" style="display: none;">{{$ownmoney}}</span>
            
            <div class="clumu clumusimple" style="display: none;">
            	<span class="bordtop">&nbsp;</span>
                <div class="duim">
                	<a href="javascript:void(0)" class="dele">删除</a>
                    <span class="duiName">
                    	诺丁汉森林队&nbsp;<font>3-2</font>
                    </span>
                    <span class="bettype">胜负</span>
                    <span class="gail">26.00</span>
                </div>
                <div class="benj">
                	本金
                    <form>
                    	<input type="text" class="inp-text betmoney" />
                    </form>
                    预期返还&nbsp;&nbsp;<font class="rmoney">0.00</font>
                    <br />
                    <span style="padding-left:40px; color:#bbb;">最高投金</span>
                </div>
                <span class="bordbot">&nbsp;</span>
            </div>
            
            <div id="betpanel">
            
            
            </div>
            
          
            <div class="clumu fudong">
           
                <span class="bordtop" >&nbsp;</span>
	            <div class="zongje">总投注金额:<font id="rmoneycount">000.00</font></div> 
	            <div class="touz">
	            	<a id="deleteAll" href="javascript:void(0);" class="q-delt">全部删除</a>
	                <a id="betnow" href="javascript:void(0);" class="touz-bot">投注</a>
	            
	            </div>
	            <div id="msgPanel"   style="display: none;"> 
                  <p id="beterror" class="tis">如选项被加亮显示，则此项不能串成过关投注</p> 
                </div>
	             <span class="bordbot" >&nbsp;</span> 
            </div>
        </div>
        
            {{include file='ranking.tpl'}}
        
     </div>
</div>

{{* 引入底部文件 *}}
{{include file='footer.tpl'}}