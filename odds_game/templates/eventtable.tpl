{{foreach $events as $event}}
<ul id="eventid_{{$event->event_id}}" class="list-list bg1">
	<li class="sais">{{$event->sport_subtype_name}}</li>
	<li class="changc"> </li>
	<li class="shij">{{$event->event_time}}</li>
	<li class="zhud">{{$event->team_mian_name}}</li>
	<li class="ked">{{$event->team_sec_name}}</li>
	<li class="zhus betbutton"><font class="bold2">{{$event->victory}}</font></li>
	<li class="ping betbutton"><font class="bold2">{{$event->planish}}</font></li>
	<li class="zhuf betbutton"><font class="bold2">{{$event->fail}}</font></li>
</ul>
{{/foreach}}
