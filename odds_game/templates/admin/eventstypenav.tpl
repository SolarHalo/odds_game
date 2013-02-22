<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
		<div class="nav-collapse collapse navbar-responsive-collapse">
			 <ul class="nav">
			   <li {{if $eventcurrentnav == 'current'}}class="active"{{/if}}><a href="{{$domainname}}oddsmanage.php?type=current" >当前赛事</a></li>
			   <li {{if $eventcurrentnav == 'history'}}class="active"{{/if}}><a href="{{$domainname}}/admin/oddsmanage.php?type=history" >结束赛事</a></li>
			 </ul>
		</div>
	  </div>
	</div>
</div>