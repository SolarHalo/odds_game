<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
 
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
 
      <!-- Be sure to leave the brand out there if you want it shown -->
      <a class="brand" href="#">爱博博彩</a>
 
      <!-- Everything you want hidden at 940px or less, place within here -->
      <div class="nav-collapse collapse navbar-responsive-collapse">
	       <ul class="nav">
	       		<li {{if $currentnav == 'index'}}class="active"{{/if}}><a href="index.php" >首页</a></li>
	       		<li {{if $currentnav == 'usermanage'}}class="active"{{/if}}><a href="usermanage.php" >用户管理</a></li>
	       </ul>
      </div>
 
    </div>
  </div>
</div>