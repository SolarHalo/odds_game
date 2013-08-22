{{if $notlogin==true}}
您还没有登录，请先登录才能查看！
{{else}}
{{foreach $userbets as $userbet}}
<div class="clumu guanzhu_yonhu_index-list" style="margin-top:0;">
     <span class="bordtop">&nbsp;</span>
	<div class="guanzhu_yonhu"> 
                	<div>
                    	<img src="{{$urlroot}}/{{$userbet.0->user_photo}}" />
                        <span>{{if $userbet.0->user_name != ''}}{{$userbet.0->user_name}}{{else}}{{$userbet.0->user_email}}{{/if}}</span>
                        <span>金币：{{$userbet.0->bet_vmoney}}</span>
                        <span>经验值：{{$userbet.0->user_exp}}</span>
                    </div>
                     <ul class="top-list guanzhu_touzhu-list">
                     {{foreach $userbet as $userb}}
                        <li><font class="{{if $userb->odds_name == '主胜'}}bold11{{elseif $userb->odds_name == '平'}}bold12{{else}}bold13{{/if}}">{{$userb->odds_name}}</font>&nbsp;&nbsp;<p>{{$userb->team_mian_name}} VS {{$userb->team_sec_name}} </p><p>投注 {{$userb->bet_vmoney}} 金币</p></li> 
                      {{/foreach}}
                    </ul>
	</div>
 <span class="bordbot">&nbsp;</span>
</div>
{{/foreach}}

<script type="text/javascript">

(function($) {
	
	$.fn.watcheduserScroll = function() { 

		var n = 0, m = 0;
		var element, width, intl;
		this.each(function(){
				element = $(this);
				m = element.children().length;
				width = element.children().first().outerWidth();
				if(m>1){
					intl = setInterval(scrollwatched, 5000);
					element.children().mouseenter(function(){
						clearInterval(intl);
						}).mouseleave(function(){
							intl = setInterval(scrollwatched, 5000);
							});
				}
			});   

		function scrollwatched(){
			var le = 0;
			if(n == m-1){
				le = 0;
				n = 0;
			}else{
				n = n+1;
				le = n* width;
			}
			element.animate({
				'left': 0-le
				}, 500);
		};  
	     
	};

	
})(jQuery); 

$("#watcheduserbet").watcheduserScroll();
</script>


{{/if}}