{{* 引入头部文件 *}}
{{include file='header.tpl'}}
<div class="container">  
        <div class="container-left">
        	<span class="newdt-title">他们正在投注</span>
        	<div class="user">
        	{{foreach $lastbets as $lastbet}}
            	<div class="newdt">
                    <div class="user-imge">
                        <img src="{{if $lastbet->user_photo}}{{$lastbet->user_photo}}{{else}}images/uerimge.jpg{{/if}}" width="80" height="80" /> 
                    </div>
                    <div class="new-touzhu">
                            <font>{{if $lastbet->user_name}}{{$lastbet->user_name}}{{else}}{{$lastbet->user_email}}</font> {{$lastbet->bet_time}}{{/if}}<br />
                            <span>投注了<font color="#FEF10D">{{$lastbet->bet_vmoney}}</font>金币 购买了 {{$lastbet->team_mian_name}} VS {{$lastbet->team_sec_name}}  {{$lastbet->odds_name}}</span> <br />
                            <span>获胜将收入：{{$lastbet->bet_odd*$lastbet->bet_vmoney}}金币</span> 
                    </div>
                    <a href="#" class="guanzhu">关注</a>
                </div> 
              {{/foreach}} 
            </div> 
        </div>
        <!-- left END --> 
    </div>
</div>
</body>
</html>
