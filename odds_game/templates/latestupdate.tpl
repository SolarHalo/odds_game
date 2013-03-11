{{* 引入头部文件 *}}
<script
	type="text/javascript" src="{{$urlroot}}/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
	$(document).ready(
			function(){
				var prompt = "<div class=\"alert\">  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>  <strong>Warning!</strong> 关注成功.</div>";
				$(".guanzhu").live('click',function(){
					var superStar = $(this).attr("superStar");
					var fans = $(this).attr("fans");
					if(fans){
						$.ajax({
							'url': 'ajaxuserfollow.php',
							'data': {'method': 'followUser', 'fans': fans,'superStar':superStar},
							'success': function(data){
								if(data.trim()  == "success"){
									$(".newdt a[superStar='"+superStar+"'][fans='"+fans+"']").attr("class","guanzhu-Y");
									//alert($(".newdt a[superStar='"+superStar+"'][fans='"+fans+"']").text());
									$(".newdt a[superStar='"+superStar+"'][fans='"+fans+"']").text("取消关注");
								}else if(data.trim() == "error"){
								}
							}
							});
					}else{
						window.location.href="/login.php";
					}
				});


				$(".guanzhu-Y").live('click',function(){
					var superStar = $(this).attr("superStar");
					var fans = $(this).attr("fans");
						$.ajax({
							'url': 'ajaxuserfollow.php',
							'data': {'method': 'unFollowUser', 'fans': fans,'superStar':superStar},
							'success': function(data){
								if(data.trim() == "error"){
								}else if(data.trim() == "success"){
									$(".newdt a[superStar='"+superStar+"'][fans='"+fans+"']").attr("class","guanzhu");
									$(".newdt a[superStar='"+superStar+"'][fans='"+fans+"']").text("关注");
								}
							}
							});
				});

						
			
	});
	
</script>
{{include file='header.tpl'}}
<div class="container">
	<div class="container-left">
		<span class="newdt-title">他们正在投注</span>
		<div class="user">
			{{foreach $latestBets as $ke=>$latestBet}}
			<div class="newdt">
				<div class="user-imge">
					<img
						src="{{if $latestBet->user_photo}}{{$urlroot}}{{$latestBet->user_photo}}{{else}}images/uerimge.jpg{{/if}}"
						width="80" height="80" />
				</div>
				<div class="new-touzhu">
					<font color="#FEF10D">{{if
						$latestBet->user_name}}{{$latestBet->user_name}}{{else}}{{$latestBet->user_email}}{{/if}}</font>于{{$latestBet->bet_time}}<br />
					<span>投注了<font color="#FEF10D">{{$latestBet->bet_vmoney}}</font>金币
						购买<a href="#">{{$latestBet->team_mian_name}} VS
							{{$latestBet->team_sec_name}}</a>{{$latestBet->odds_name}}</span>
					<br /> <span>获胜将收入：{{$latestBet->bet_vmoney*$latestBet->bet_odd}}金币</span>
				</div>
				{{if $latestBet->watchid}}
				<a href="#" class="guanzhu-Y" superStar="{{$latestBet->user_id}}"
					fans="{{$userid}}">取消关注</a>
					{{else}}
				<a href="#" class="guanzhu" superStar="{{$latestBet->user_id}}"
					fans="{{$userid}}">关注</a>
					{{/if}}
			</div>
			{{/foreach}}
		</div>
	</div>
	<!-- left END -->
</div>
</div>
</body>
</html>
