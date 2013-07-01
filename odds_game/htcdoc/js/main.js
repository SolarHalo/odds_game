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
	
	$("#fastbetbt").click(function(){
		fastbet = !!($(this).attr("checked"));
	});
	
	$("#fbetmoney").keyup(calculateFastMoney);
	
	//$(".eventicon").mouseenter(showsingleeventmsg);
	
	//$(".eventicon").mouseleave(removesingleeventmsg);
	$(".eventiconbt").cluetip({arrows: true, dropShadow: false, ajaxCache: false,showTitle: false,
		width: 420,height: 220,hoverIntent: false,waitImage:false,sticky: true,
		positionBy: 'bottomTop',  mouseOutClose: true, delayedClose: 50});
	
	
	getWatchedUserbets();
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
	
	if(!islogin){
		showLoginWindow();
		return;
	}
	var el = $(this);
	if(fastbet){
		showFastBetWindow(el);
		return;
	}
	
	
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
	
	$("#zongje").css("display", "block");
	
	showMsg("该投注已经加入到投注单，请稍后填写本金进行投注!");
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
	
	//如果已没有批量投注项，隐藏投注金额显示。
	if($("#betpanel").children().length == 0){
		$("#zongje").css("display", "none");
	}
}

/**
 * 输入本金后计算预期返回值。
 */
function caculateMoney(event){
	var om = $("#ownmoney").html();
	if(om == "未登录"){
		$("#beterror").html("您还未登录，请先登录！<br /><a href='login.php'>登录</a>");
		$("#msgPanel").css("display", "block");
		$("#beterror").removeClass("tis tis-G").addClass("tis");
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
		$("#beterror").removeClass("tis tis-G").addClass("tis");
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
	$("#zongje").css("display", "none");
	mybet = {};
}

function betNow(){
	var om = $("#ownmoney").html();
	$("#betnow").removeClass("touz-bot").addClass("touz-bot2");
	$("#betnow").attr("disabled", "disabled");
	if(om == "未登录"){
		$("#beterror").html("您还未登录，请先登录！<br /><a href='login.php'>登录</a>");
		$("#msgPanel").css("display", "block");
		$("#beterror").removeClass("tis tis-G").addClass("tis");
		$(this).val("");
		
		$("#betnow").removeClass("touz-bot2").addClass("touz-bot");
		$("#betnow").removeAttr("disabled");
		return ;
	}
	
	if($("#betpanel").children().length == 0){
		$("#beterror").html("您先选择投注项！");
		$("#msgPanel").css("display", "block");
		$("#beterror").removeClass("tis tis-G").addClass("tis");
		
		$("#betnow").removeClass("touz-bot2").addClass("touz-bot");
		$("#betnow").removeAttr("disabled");
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
			$("#betnow").removeClass("touz-bot2").addClass("touz-bot");
			$("#betnow").removeAttr("disabled");
			return ;
		}
		
		$.ajax({
			'url': 'ajaxeventopt.php',
			'data': {'method': 'betevent', 'betodd' :betodd},
			'dataType': 'json',
			'success': function(data){
				
				
				if(data.code == "success"){
					var betm = 0;
					$(".betmoney").each(function(){
						betm += Number($(this).val());
					});
					var om = $("#ownmoney").html();
					om = Number(om) - betm;
					$("#ownmoney").html(om);
					$("#nowmoney").html(om);
					$("#betpanel").html("");
					
					$("#beterror").removeClass("tis tis-G").addClass("tis-G");
					deleteAllBet();
				}else{
					$("#beterror").removeClass("tis tis-G").addClass("tis");
				}
				$("#beterror").html(data.msg);
				$("#msgPanel").css("display", "block");
				
				
				$("#betnow").removeClass("touz-bot2").addClass("touz-bot");
				$("#betnow").removeAttr("disabled");
			}
		});
		
		
		
	}
}

/**
 * 显示登录窗口
 */
function showLoginWindow(){
	$.ajax({
		'url': 'windowlogin.php',
		'success': function(data){
			$("body").append(data);
			$("#loginwindow").css("top", (window.innerHeight - 350) /2 + $(window).scrollTop() + 195 );
		}
	});
}

/**
 * 显示快速投注窗口
 */
function showFastBetWindow(el){
	var p = el.offset();
	var nodd = el.children("font").html();
	var nteam = el.prevAll(".zhud").html() + " VS " + el.prevAll(".ked").html();
	var bettype = el.hasClass("zhus") ? "主胜" : (el.hasClass("ping") ? "平" : "主负");
	var bettypebg = el.hasClass("zhus") ? "bold11" : (el.hasClass("ping") ? "bold12" : "bold13");
	var eventid = el.parent("ul").attr("id").split("_")[1];
	
	$("#betteamp").html(nteam + "<font class='"+bettypebg+"'>" + bettype + "</font>");
	$("#fbetodd").val(nodd);
	$("#fbeteid").val(eventid);
	$("#fbettype").val(bettype);
	
	$("#fastbetpanel").css({
		'left': p.left ,
		'top' : p.top -90
	});
	$("#fastbetpanel").show();
	
}

/**
 * 快速投注本金返回计算
 */
function calculateFastMoney(){
	var el = $(this);
	var v = el.val();
	v = v.replace(/\D/gi,"");
	v = Number(v);
	el.val(v);
	if(v < 0){
		return;
	}
	
	var odd = $("#fbetodd").val();
	var rm = parseFloat(Number(v) * Number(odd)).toFixed(2);
	
	var om = $("#ownmoney").html();
	om = Number(om);
	if(v > om){
		$("#freturnmoeny").html("金币不足!");
	}else{
		$("#freturnmoeny").html(rm);
	}
}

/**
 * 快速投注
 */
function fastbetOpt(){
	$("#fbetbtn").removeClass("touz-bot").addClass("touz-bot2");
	$("#fbetbtn").attr("disabled", "disabled");
	var om = $("#ownmoney").html();
	om = Number(om);
	
	var eid = $("#fbeteid").val();
	var odd = $("#fbetodd").val();
	var bmoney = $("#fbetmoney").val();
	var bettype = $("#fbettype").val();
	
	if(bmoney == '' || bmoney == '0'){
		$("#fastbetmsg").html("请输入本金！");
		$("#fbetbtn").removeClass("touz-bot2").addClass("touz-bot");
		$("#fbetbtn").removeAttr("disabled");
		return;
	}
	
	if(Number(bmoney) > om){
		$("#fastbetmsg").html("超过总本金！");
		$("#fbetbtn").removeClass("touz-bot2").addClass("touz-bot");
		$("#fbetbtn").removeAttr("disabled");
		return;
	}
	
	var beto = {};
	beto[eid] = {};
	beto[eid][bettype] = {'odd': odd, 'oddname': bettype, 'betmoney': bmoney};
	
	$.ajax({
		'url': 'ajaxeventopt.php',
		'data': {'method': 'betevent', 'betodd': beto},
		'dataType': 'json',
		'success': function(data){
			if(data.code == "success" ){
				closeFBP();
				showMsg("投注已保存成功！");
				$("#ownmoney").html(om- Number(bmoney));
				$("#nowmoney").html(om- Number(bmoney));
			}else{
				$("#fastbetmsg").html(data.msg);
			}
			$("#fbetbtn").removeClass("touz-bot2").addClass("touz-bot");
			$("#fbetbtn").removeAttr("disabled");
		}
	});
}


function closeFBP(){
	$("#fastbetpanel").hide();
}

function showMsg(msg){
	$("#msgbox").html("<p>"+msg+"</p>");
	$("#msgbox").css("top", (window.innerHeight - 350) /2 + $(window).scrollTop() + 195 );
	$("#msgbox").fadeIn().delay(3000).fadeOut();
}

/**
 * 显示单赛事简要信息
 */
function showsingleeventmsg(){
	var el = $(this);
	var eventid = el.html();
	$.ajax({
		'url': 'singleeventmsg.php',
		'data': {'eventid': eventid},
		'success': function(data){
			$('body').append(data);
		}
	})
	
}

function removesingleeventmsg(){
	$(this).nextAll().remove();
}


function getWatchedUserbets(){
	$.ajax({
		'url': 'getWathedUserbet.php',
		'success': function(data){
			$("#watcheduserbet").html(data);
		}
	})
}


String.prototype.trim= function(){  
    // 用正则表达式将前后空格  
    // 用空字符串替代。  
    return this.replace(/(^\s*)|(\s*$)/g, "");  
}

String.prototype.cleanc= function(){  
    // 用正则表达式将前后空格  
    // 用空字符串替代。  
    return this.replace(/(^\W*)|(\W*$)/g, "");  
}