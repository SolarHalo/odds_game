<div class="container-right" style="margin-top:5px; padding-top:8px;">
            <span class="toptitle">排行榜</span>
            <ul id="rankingt" class="top-tabl">
                <li class="xzbg" data="week"><a href="#">周榜</a></li>
                <li data="month"><a href="#">月榜</a></li>
                <li data="total"><a href="#">总榜</a></li>
            </ul>
<div id="rankingc" class="clumu" style="margin-top:0;">
                <span class="bordtop">&nbsp;</span>
                <ul class="top-list" data="week">
                {{foreach $weekranks as $rank}}
                    <li>{{$rank->rank}}.<span>{{if $rank->user_name != ''}}{{$rank->user_name}}{{else}}{{$rank->user_email}}{{/if}}</span>
                    <font>{{$rank->user_vmoney}}</font>分</li>
                {{/foreach}}
                </ul>
                
                <ul class="top-list" style="display: none;" data="month">
                {{foreach $monthranks as $rank}}
                    <li>{{$rank->rank}}.<span>{{if $rank->user_name != ''}}{{$rank->user_name}}{{else}}{{$rank->user_email}}{{/if}}</span>
                    <font>{{$rank->user_vmoney}}</font>分</li>
                {{/foreach}}
                </ul>
                
                <ul class="top-list"  style="display: none;" data="total">
                {{foreach $totalranks as $rank}}
                    <li>{{$rank->rank}}.<span>{{if $rank->user_name != ''}}{{$rank->user_name}}{{else}}{{$rank->user_email}}{{/if}}</span>
                    <font>{{$rank->user_vmoney}}</font>分</li>
                {{/foreach}}
                </ul>
                <span class="bordbot">&nbsp;</span>
            </div>
</div>
            
<script type="text/javascript">

$(document).ready(function(){

	$("#rankingt li").click(function(){
			$("#rankingt li").removeClass("xzbg");
			$(this).addClass("xzbg");
			var data = $(this).attr("data");

			$("#rankingc ul").css('display', "none");
			$("#rankingc ul[data='"+data+"']").css('display', "block");
		});
	
});

</script>