
function betNow(event){
	var eid = $(this).attr("un");
	var om = $("#ownmoney").html();
	if(om == "未登录"){
		locateToLogin(eid);
		$(this).val("");
		return ;
	}
	
	var parent = $(this).parents(".list-list");
	
	var noneM = false;
	var m = parent.find(".tcinput").val();
	if(m.length == 0 || m == '0'){
		noneM = true;
	}
	if(noneM){
		$.prompt('请为要投注的赛事填写本金！');
		$(this).val("");
		return ;
	}
	var betodd = {};
//	var eid = $(this).attr("un");
	var oddname = parent.find(".betname").text();
	var odd= parent.find(".bet_odd").text();
	if(!betodd[eid]){
		betodd[eid] = {};
	}
	betodd[eid][oddname] = {'odd': odd, 'oddname': oddname, 'betmoney': m};
	$.ajax({
		'url': 'ajaxeventopt.php',
		'data': {'method': 'betevent', 'betodd' :betodd},
		'dataType': 'json',
		'success': function(data){
			if(data.code == "success"){
				window.location.href="singleevent.php?eventid="+eid;
			}else{
				$.prompt(""+data.msg);
			}
		},
		'error':function(XMLHttpRequest, textStatus, errorThrown){
			$.prompt(textStatus);
		}
	});
}

/**
 * 输入本金后计算预期返回值。
 */
function caculateMoney(event){
	
	var om = $("#ownmoney").html();
	var eid = $(this).attr('un');
	if(om == "未登录"){
		locateToLogin(eid);
		$(this).val("");
		return ;
	}
	om = Number(om);
	var el = $(this);
	var v = el.val();
	v = v.replace(/\D/gi,"");
	v = Number(v);
	el.val(v);
	if(v < 0){
		return;
	}
	
	var betm = 0;
	el.each(function(){
		betm += Number($(this).val());
	});
	if(betm > om){
		$.prompt('您投注的本金超过你的所有积分，不能进行投注！');
		$(this).val("");
		v = String(v).substr(0, String(v).length -1);
		el.val(v);
		return;
	}
	
	var odd = el.parents(".list-list").find(".bet_odd").html();
	var rm = parseFloat(Number(v) * Number(odd)).toFixed(2);
	el.parents(".list-list").find(".rmoney").html(rm);
	
}

function locateToLogin(eventid){
	$.prompt("您还未登录，请先登录!", {
		title: "跳转到登录页面?",
		buttons: { "是": true, "否": false },
		submit: function(e,v,m,f){
			if(v){
				var pageto = "singleevent.php?eventid="+eventid;
				window.location = "login.php?redirectUrl="+pageto;
			}
		}
	});
}

//关注的用户
function getWatchedUserbets(){
	$.ajax({
		'url': 'getWathedUserbet.php',
		'success': function(data){
			$("#watcheduserbet").html(data);
		}
	})
}

//当前赔率图
function betline(data){
//var data = {{$oddsdata}};
	
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

	options = {
            // the color theme used for graphs
            grid:{color:'#FFFFFF'},
            legend: {
                show: true,
                noColumns: 1, // number of colums in legend table
                labelFormatter: null, // fn: string -> string
                labelBoxBorderColor: "#ccc", // border color for the little label boxes
                container: null, // container (as jQuery object) to put legend in, null means default on top of graph
                position: "ne", // position of default legend container within plot
                margin:-40, // distance from grid edge to default legend container within plot
                backgroundColor: null, // null means auto-detect
                backgroundOpacity: 0, // set to 0 to avoid background
                sorted: null    // default to no legend sorting
            }
	}
	$.plot("#betline",[{label:"胜",data:voods,lines: { show: true },points: { show: true },color: '#006A4C',},
		             	{label:"平",data:poods,lines: { show: true },points: { show: true },color: '#E8CE35'},
		             	{label:"负",data:foods,lines: { show: true },points: { show: true },color: '#A03B3E'}],
		             	options);

}

//用户投注比例
function betpie(datas){
//	var datas = {{$betStatisticspie}};
	var pieData = [];
	for(var i=0;i<datas.length;i++){
		var statistic = datas[i];
		if("胜"==statistic.odds_name){
			pieData[i]={label: statistic.odds_name, data: statistic.sumUser, color: '#006A4C'};
		}else if("平"==statistic.odds_name){
			pieData[i]={label: statistic.odds_name, data: statistic.sumUser, color: '#E8CE35'};
		}else{
			pieData[i]={label: statistic.odds_name, data: statistic.sumUser, color: '#A03B3E'};
		}
	}
		 $.plot($("#betpie"), pieData,
		           {
		            series: {
		                pie: {
		                    show: true,
		                    radius: 1,
		                    label: {
		                        show: true,
		                        radius: 2 / 3,
		                        formatter: function (label, series) {
		                            return '<div style="font-size:8pt;text-align:center;padding:2px;color:white;">' + label + '<br/>' + series.data[0][1] + '('+Math.round(series.percent)+'%)</div>';

		                        },
		                        threshold: 0.1,
		                    }
		                }
		            },
		            legend: {
		                show: true,
		                backgroundColor:'#FFFFFF',
		                backgroundOpacity: 0,
		                color:'#FFFFFF'
		            },
		        });
}


