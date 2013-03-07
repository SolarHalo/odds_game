
{{foreach $bets as $bet}}
	<ul class="list-list bg1">
		{{$a=1}}
		{{if $bet->odds_name=="平"}}
		{{$a=3}}
		{{elseif $bet->odds_name=="负" or $bet->odds_name=="主负"}}
		{{$a=2}}
		{{/if}}
		<li class="sfp"><font class="bold1{{$a}}">{{$bet->odds_name}}</font></li>
   		<li class="yzhud">{{$bet->team_mian_name}}</li>
   		<li class="yked">{{$bet->team_sec_name}}</li>
   		<li class="shij">{{$bet->bet_time}}</li>
 		<li class="peil">{{$bet->bet_odd}}</li>
      	<li class="touzje">{{$bet->bet_vmoney}}</li>
     	<li class="shour">{{$bet->bet_money}}</li>  
	</ul>
{{/foreach}}