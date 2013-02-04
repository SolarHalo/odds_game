/*******
 * 全局变量
 */

var mybet = {};

/**
 * 页面初始化
 */
$(document).ready(function(){
	//加载当前事件数据
	
	setInterval(refreashEvents, 15*60*1000);
	//getAllEvents();
	
	$(".betbutton").live('click', betevent);
	
	$(".dele").live("click", deleteMyBet);
	
	$(".betmoney").live("keyup", caculateMoney);
	
	$("#deleteAll").click( deleteAllBet);
	
	$("#betnow").click(betNow);
	
});

function refreashEvents(){
	$("#refreashTitle").show();
	getAllEvents();
}

/**
 * 获取当前事件数据.
 */
function getAllEvents(){
	$.ajax({
		'url': 'ajaxeventopt.php',
		'data': {'method': 'getAllEvent'},
		'success': function(data){
			$(".bg1").remove();
			$("#refreashTitle").after(data);
			$("#refreashTitle").hide();
			for(var id in mybet){
				if(mybet[id]){
					for(var k in mybet[id]){
						$("#eventid_" + id).find(k == "主胜" ? ".zhus" : ( k == "平" ? ".ping" : ".zhuf")).children("font").removeClass("bold2").addClass("bold1");
						var odd = $("#eventid_" + id).find(k == "主胜" ? ".zhus" : ( k == "平" ? ".ping" : ".zhuf")).children("font").html();
						mybet[id][k] = odd;
						$("#betev_"+id).find(".gail").html(odd);
					}
				}
			}
		}
	});
}

/**
 * 点击赔率
 */
function betevent(){
	var el = $(this);
	var nodd = el.children("font").html();
	var nteam = el.prevAll(".zhud").html() + " VS " + el.prevAll(".ked").html();
	var bettype = el.hasClass("zhus") ? "主胜" : (el.hasClass("ping") ? "平" : "主负");
	var eventid = el.parent("ul").attr("id").split("_")[1];
	
	if(mybet[eventid]){
		if(mybet[eventid][bettype])
			return;
	}else{
		mybet[eventid] = {};
	}
	
	mybet[eventid][bettype] = {"odd": nodd};
	
	el.children("font").removeClass("bold2").addClass("bold1");
	
	var cl = $(".clumusimple").clone();
	cl.removeClass("clumusimple").css("display", "block").attr("id", "betev_" + eventid);
	cl.find(".duiName").html(nteam);
	cl.find(".bettype").html(bettype);
	cl.find(".gail").html(nodd);
	$("#betpanel").append(cl);
}

/**
 * 删除赌注
 */
function deleteMyBet(){
	var el = $(this);
	var eventid = el.parents(".clumu").attr("id").split("_")[1];
	var bettype = el.nextAll(".bettype").html();
	
	delete mybet[eventid][bettype];
	el.parents(".clumu").remove();
	$("#eventid_" + eventid).find(bettype == "主胜" ? ".zhus" : ( bettype == "平" ? ".ping" : ".zhuf")).children("font").removeClass("bold1").addClass("bold2");
}

/**
 * 输入本金后计算预期返回值。
 */
function caculateMoney(event){
	var om = $("#ownmoney").html();
	if(om == "未登录"){
		$("#beterror").html("您还未登录，请先登录！<br /><a href='login.php'>登录</a>");
		$("#msgPanel").css("display", "block");
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
	$(".betmoney").each(function(){
		betm += Number($(this).val());
	});
	
	if(betm > om){
		$("#beterror").html("您投注的本金超过你的所有积分，不能进行投注！");
		v = String(v).substr(0, String(v).length -1);
		$("#msgPanel").css("display", "block");
		el.val(v);
		return;
	}
	
	var odd = el.parents(".clumu").find(".gail").html();
	var rm = parseFloat(Number(v) * Number(odd)).toFixed(2);
	el.parents(".clumu").find(".rmoney").html(rm);
	
	$("#rmoneycount").html(betm);
}

function deleteAllBet(){
	for(var id in mybet){
		if(mybet[id]){
			for(var k in mybet[id]){
				$("#eventid_" + id).find(k == "主胜" ? ".zhus" : ( k == "平" ? ".ping" : ".zhuf")).children("font").removeClass("bold21").addClass("bold2");
			}
		}
	}
	$("#betpanel").children().remove();
	mybet = {};
}

function betNow(){
	var om = $("#ownmoney").html();
	if(om == "未登录"){
		$("#beterror").html("您还未登录，请先登录！<br /><a href='login.php'>登录</a>");
		$("#msgPanel").css("display", "block");
		$(this).val("");
		return ;
	}
	
	if($("#betpanel").children().length == 0){
		$("#beterror").html("您先选择投注项！");
		$("#msgPanel").css("display", "block");
	}else{
		var noneM = false;
		var betodd = {};
		$("#betpanel").children().each(function(){
			var m = $(this).find(".betmoney").val();
			if(m.length == 0 || m == '0'){
				noneM = true;
				//break;
				return;
			}
			
			var eid = $(this).attr("id").split("_")[1];
			var odd = $(this).find(".gail").html();
			var oddname = $(this).find(".bettype").html();
			if(!betodd[eid]){
				betodd[eid] = {};
			}
			betodd[eid][oddname] = {'odd': odd, 'oddname': oddname, 'betmoney': m};
		});
		
		if(noneM){
			$("#beterror").html("请为要投注的赛事填写本金！");
			$("#msgPanel").css("display", "block");
			return ;
		}
		
		$.ajax({
			'url': 'ajaxeventopt.php',
			'data': {'method': 'betevent', 'betodd' :betodd},
			'success': function(data){
				if(data == "投注已保存成功！"){
					var betm = 0;
					$(".betmoney").each(function(){
						betm += Number($(this).val());
					});
					var om = $("#ownmoney").html();
					om = Number(om) - betm;
					$("#ownmoney").html(om);
					$("#betpanel").children().remove();
				}
				$("#beterror").html(data);
				$("#msgPanel").css("display", "block");
			}
		});
		
		
		
	}
}