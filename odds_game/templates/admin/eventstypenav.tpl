<ul class="nav nav-tabs">
	<li {{if $eventcurrentnav == 'current'}}class="active"{{/if}}><a href="{{$domainname}}admin/oddsmanage.php?type=current" >当前赛事</a></li>
	<li {{if $eventcurrentnav == 'history'}}class="active"{{/if}}><a href="{{$domainname}}admin/oddsmanage.php?type=history" >结束赛事</a></li>
	<li {{if $eventcurrentnav == 'updatescore'}}class="active"{{/if}}><a href="{{$domainname}}admin/oddsmanage.php?type=updatescore" >修改比分</a></li>
</ul>