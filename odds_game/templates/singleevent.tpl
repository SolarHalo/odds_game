{{* 引入头部文件 *}}
{{include file='header.tpl'}}
<link href="style/jquery-impromptu.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="{{$urlroot}}/js/ajaxsingleevent.js"></script>
<script type="text/javascript" src="{{$urlroot}}/js/excanvas.min.js"></script>
<script type="text/javascript" src="{{$urlroot}}/js/jquery.flot.js"></script>
<script type="text/javascript" src="{{$urlroot}}/js/jquery.flot.pie.js"></script>
<script type="text/javascript" src="{{$urlroot}}/js/jquery-impromptu.js"></script>
<style>

 .tickLabel 
        {
            color:white;
        }
 </style>
<div id="box">
    <div class="container">  
        <div class="container-left">
        	<div class="peilvtitle">
            	<span>赛事：{{$event->sport_subtype_name}}</span>
                <span>{{$event->team_mian_name}} VS {{$event->team_sec_name}}
                	<p class="saishitime">开赛时间：{{$event->event_time}}</p>
                </span>
            </div>
            <div class="sais-list" id="user-list">
            	<span class="tietle-sub">
                	当前赔率 
                </span> 
                <span id="ownmoney" style="display:none;">{{$ownmoney}}</span>
                {{foreach $betStatistics as $key=>$betStatistic}}
                <ul class="list-list bg1">
                    <li class="w1"><font class="{{if $betStatistic->odds_name == '主胜'}}bold11{{elseif $betStatistic->odds_name == '主平'}}bold12{{else}}bold13{{/if}} betname">{{$betStatistic->odds_name}}</font>&nbsp;&nbsp;<span class="bet_odd">{{$betStatistic->bet_odd}}</span></li>
                    <li class="w2"> <p>共 {{$betStatistic->sumUser}} 人购买&nbsp;&nbsp;总金额{{$betStatistic->sumVmoney}}</p></li>
                    <li class="w3">输入本金&nbsp;<input type="text" class="tcinput" un="{{$event->event_id}}"/></li>
                    <li class="w4">
	                                                     预计返还本金： <font class="rmoney">0</font> 
	                    <a href="javascript:void(0);"  class="touz-bot" un="{{$event->event_id}}">投注</a>
                    </li>  
                </ul>
                {{/foreach}}
            </div>
            <div class="sais-list" id="user-list">
            	<span class="tietle-sub">
                	赔率走势图 
                </span>
	            <div id="betline" style="width: 600px;height:200px; text-align: center; margin:25px;"></div>
            </div>
            <div class="sais-list" id="user-list">
            	<span class="tietle-sub">
                	用户投注比例
                </span>
	            <div id="betpie" style="width: 600px;height:200px; text-align: center; margin:5px ;"></div>
            </div>
        </div>
        <!-- left END --> 
        <div class="container-right" style="margin-top:5px; padding-top:8px;">
            <span class="cont-r-title-l">我关注的用户</span> 
            <div id="watcheduserbet" class="guanzhu_index-list_box" style="position:relative;">
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){

	var data = {{$oddsdata}};

	var datas = {{$betStatisticspie}};
	
	betline(data);

	betpie(datas);
	
});

</script>

{{* 引入底部文件 *}}
{{include file='footer.tpl'}}

