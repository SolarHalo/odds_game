<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="../js/jquery-1.8.0.min.js" ></script>
<style type="text/css">
body{
	CURSOR: url(./jiantou.jpg);
}
#content{
 	  position: absolute;
      right:300px;
	  top:300px;
}
#float{
     position: absolute;
     width: 89px;
     height: 76px;
     
}
#img{
	border:0;
}
</style>
<script type="text/javascript">
$(function() {
    $(document).mousemove(function(e) {
      //  $("#float").css("left", e.pageX-40).css("top", e.pageY-40);
        $("#float").animate({left:e.pageX-40,top: e.pageY-40},3); 
    });
    $("#float").click(function(e) {
    	$(document).unbind("mousemove"); 
    	$("#float").removeAttr("style");
    	$("#float").animate({right:535,top: 317},5); 
        $("#pic")[0].src = "./jiantou.jpg";
    	
    });
 <body>
<?php
echo  md5("admin"."iboadmin");
    
});
</script>
 
</head>
<body>
  <div id="container">
      <div id="content">
         <img alt="背景图片" src="./bg.jpg" />
      </div>
   <div id="float">
       <img id="pic" alt="鼠标跟随图片" src="./shubiao.jpg" /> 
    </div>
  </div>
</body>
</html>