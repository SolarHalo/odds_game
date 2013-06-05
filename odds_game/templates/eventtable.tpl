{{$a = 0}}
{{foreach $events as $event}}
	{{if $a==0 or $a!=substr($event->event_time,0,10)}} 
		{{$a={{substr($event->event_time,0,10)}}}}
			<ul class="bg1">
			 <li><font color="white"> {{substr($event->event_time,0,10)}}</font></li>
			</ul>
		<ul id="eventid_{{$event->event_id}}" class="list-list bg1"> 
			<li class="sais">{{$event->sport_subtype_name}}</li>
			<li class="shij">{{$event->event_time|truncate:16:"":TRUE}}</li>
			<li class="zhud">{{$event->team_mian_name}}</li>
			<li class="ked">{{$event->team_sec_name}}</li>
			<li class="changc"><a href="{{$urlroot}}singleevent.php?eventid={{$event->event_id}}" ><img src="images/i-icon.png"  class="eventiconbt" rel="singleeventmsg.php?eventid={{$event->event_id}}" /></a></li>
			<li class="zhus betbutton"><font class="bold2">{{$event->victory}}</font></li>
			<li class="ping betbutton"><font class="bold2">{{$event->planish}}</font></li>
			<li class="zhuf betbutton"><font class="bold2">{{$event->fail}}</font></li>
		</ul>
	 {{else}} 
		 <ul id="eventid_{{$event->event_id}}" class="list-list bg1"> 
			<li class="sais">{{$event->sport_subtype_name}}</li>
			<li class="shij">{{$event->event_time|truncate:16:"":TRUE}}</li>
			<li class="zhud">{{$event->team_mian_name}}</li>
			<li class="ked">{{$event->team_sec_name}}</li>
			<li class="changc"><a href="{{$urlroot}}singleevent.php?eventid={{$event->event_id}}" ><img src="images/i-icon.png"  class="eventiconbt" rel="singleeventmsg.php?eventid={{$event->event_id}}" /></a></li>
			<li class="zhus betbutton"><font class="bold2">{{$event->victory}}</font></li>
			<li class="ping betbutton"><font class="bold2">{{$event->planish}}</font></li>
			<li class="zhuf betbutton"><font class="bold2">{{$event->fail}}</font></li>
		</ul>
	 {{/if}}

{{/foreach}}
