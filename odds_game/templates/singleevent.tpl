{{* 引入头部文件 *}}
{{include file='header.tpl'}}
<link href="style/bootstrap.min.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="{{$urlroot}}/js/ajaxsingleevent.js"></script>
<script type="text/javascript" src="{{$urlroot}}/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="{{$urlroot}}/js/jscharts.js"></script>

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
                    <li class="w1"><font class="bold11">{{$betStatistic->odds_name}}</font>&nbsp;&nbsp;<span class="bet_odd">{{$betStatistic->bet_odd}}</span></li>
                    <li class="w2"> <p>共 {{$betStatistic->sumUser}} 人购买&nbsp;&nbsp;总金额{{$betStatistic->sumVmoney}}</p></li>
                    <li class="w3">输入本金&nbsp;<input type="text" class="tcinput" /></li>
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
                <div id="graph"></div>
            </div>
        </div>
        <!-- left END --> 
    </div>
</div>

<div class="modal hide fade" id="MsgModal" >
	<div class="modal-header">
      <a class="close" data-dismiss="modal">×</a>
      <h3 id="wintitle">友情提醒</h3>
    </div>
	<div class="modal-body">
		 <p id="beterror4s"></p>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	var data = {{$oddsdata}};
	
	var voods = new Array();
	var poods = new Array();
	var foods = new Array();
	
	var v = 0;
	var p = 0;
	var f = 0;

	for (var d in data){
		for(var k in data[d]){
			if(k=="victory"){
				voods[v] = [v,parseFloat(data[d][k])];
				v++;
			}
			else if(k=="planish"){
				
				poods[p] = [p,parseFloat(data[d][k])];
				p++;
			}
			else if(k=="fail"){
				foods[f] = [f,parseFloat(data[d][k])];
				f++;
			}
		}
	}

	var myChart = new JSChart('graph', 'line');
	var flag = false;
	if(voods.length>1){
		myChart.setDataArray(voods,'line_1');
		myChart.setLabelY([voods[0][1], '主胜']);
		flag = true;
	}
	if(poods.length>1){
		myChart.setDataArray(poods,'line_2');
		myChart.setLabelY([poods[0][1], '平']);
		flag = true;
	}
	if(foods.length>1){
		myChart.setDataArray(foods,'line_3');
		myChart.setLabelY([foods[0][1], '主负']);
		flag = true;
	}
	if(flag){
		myChart.draw();
	}
});
</script>

