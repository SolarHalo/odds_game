/**
 * 页面初始化
 */
$(document).ready(function(){
	//加载当前事件数据
	
//	setInterval(refreashEvents, 15*60*1000);
//	//getAllEvents();
//	
//	$(".betbutton").live('click', betevent);
//	
//	$(".dele").live("click", deleteMyBet);
//	
//	$(".betmoney").live("keyup", caculateMoney);
//	
//	$("#deleteAll").click( deleteAllBet);
	
	$(".touz-bot").click(betNow);
	
	$(".tcinput").live("keyup", caculateMoney);
	
});
function betNow(event){
	$("#beterror4s").html("");
//	$(this).attr("href","javascript:void(0);");
//	$(this).removeAttr("data-toggle","modal");
	
	var om = $("#ownmoney").html();
	if(om == "未登录"){
		$(this).attr("href","#MsgModal");
		$(this).attr("data-toggle","modal");
		$("#beterror4s").html("您还未登录，请先登录！<br /><a href='login.php'>登录</a>");
		$(this).val("");
		return ;
	}else{
//		$("#beterror4s").html("");
//		$(this).attr("href","javascript:void(0);");
//		$(this).removeAttr("data-toggle","modal");
	}
	
	var parent = $(this).parents(".list-list");
	
	var noneM = false;
	var m = parent.find(".tcinput").val();
	if(m.length == 0 || m == '0'){
		noneM = true;
	}
	if(noneM){
		$(this).attr("href","#MsgModal");
		$(this).attr("data-toggle","modal");
		$("#beterror4s").html("请为要投注的赛事填写本金！");
		return ;
	}else{
//		$("#beterror4s").html("");
//		$(this).attr("href","javascript:void(0);");
//		$(this).removeAttr("data-toggle","modal");
	}
	
	var betodd = {};
	var eid = $(this).attr("un");
	var oddname = parent.find(".bold11").text();
	var odd= parent.find(".bet_odd").text();
	if(!betodd[eid]){
		betodd[eid] = {};
	}
	betodd[eid][oddname] = {'odd': odd, 'oddname': oddname, 'betmoney': m};
	
	$.ajax({
		'url': 'ajaxeventopt.php',
		'data': {'method': 'betevent','betodd' :betodd},
		'success': function(data){
			data = data.split(":::");
			if(data[0].trim() == "error"){
				alert(data[1]);
			}else{
				window.location.href="singleevent.php?eventid="+eid;
			}
		},
	});
}

/**
 * 输入本金后计算预期返回值。
 */
function caculateMoney(event){
	
	$("#beterror4s").html("");
	
	var om = $("#ownmoney").html();
	if(om == "未登录"){
		$("#MsgModal").modal();
		$("#beterror4s").html("您还未登录，请先登录！<br /><a href='login.php'>登录</a>");
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
		$("#MsgModal").modal();
		$("#beterror4s").html("您投注的本金超过你的所有积分，不能进行投注！");
		v = String(v).substr(0, String(v).length -1);
		el.val(v);
		return;
	}
	
	var odd = el.parents(".list-list").find(".bet_odd").html();
	var rm = parseFloat(Number(v) * Number(odd)).toFixed(2);
	el.parents(".list-list").find(".rmoney").html(rm);
	
}

