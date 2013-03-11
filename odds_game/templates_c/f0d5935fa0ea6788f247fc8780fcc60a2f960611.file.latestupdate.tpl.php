<?php /* Smarty version Smarty-3.1.13, created on 2013-03-11 17:03:24
         compiled from "D:\gitspace\odds_game\odds_game\templates\latestupdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1217151375e20228667-29411485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0d5935fa0ea6788f247fc8780fcc60a2f960611' => 
    array (
      0 => 'D:\\gitspace\\odds_game\\odds_game\\templates\\latestupdate.tpl',
      1 => 1362992601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1217151375e20228667-29411485',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51375e20431520_44149953',
  'variables' => 
  array (
    'urlroot' => 0,
    'latestBets' => 0,
    'latestBet' => 0,
    'userid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51375e20431520_44149953')) {function content_51375e20431520_44149953($_smarty_tpl) {?>
<script
	type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
/js/jquery-1.8.0.min.js"></script>
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
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
	<div class="container-left">
		<span class="newdt-title">他们正在投注</span>
		<div class="user">
			<?php  $_smarty_tpl->tpl_vars['latestBet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['latestBet']->_loop = false;
 $_smarty_tpl->tpl_vars['ke'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['latestBets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['latestBet']->key => $_smarty_tpl->tpl_vars['latestBet']->value){
$_smarty_tpl->tpl_vars['latestBet']->_loop = true;
 $_smarty_tpl->tpl_vars['ke']->value = $_smarty_tpl->tpl_vars['latestBet']->key;
?>
			<div class="newdt">
				<div class="user-imge">
					<img
						src="<?php if ($_smarty_tpl->tpl_vars['latestBet']->value->user_photo){?><?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
<?php echo $_smarty_tpl->tpl_vars['latestBet']->value->user_photo;?>
<?php }else{ ?>images/uerimge.jpg<?php }?>"
						width="80" height="80" />
				</div>
				<div class="new-touzhu">
					<font color="#FEF10D"><?php if ($_smarty_tpl->tpl_vars['latestBet']->value->user_name){?><?php echo $_smarty_tpl->tpl_vars['latestBet']->value->user_name;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['latestBet']->value->user_email;?>
<?php }?></font>于<?php echo $_smarty_tpl->tpl_vars['latestBet']->value->bet_time;?>
<br />
					<span>投注了<font color="#FEF10D"><?php echo $_smarty_tpl->tpl_vars['latestBet']->value->bet_vmoney;?>
</font>金币
						购买<a href="#"><?php echo $_smarty_tpl->tpl_vars['latestBet']->value->team_mian_name;?>
 VS
							<?php echo $_smarty_tpl->tpl_vars['latestBet']->value->team_sec_name;?>
</a><?php echo $_smarty_tpl->tpl_vars['latestBet']->value->odds_name;?>
</span>
					<br /> <span>获胜将收入：<?php echo $_smarty_tpl->tpl_vars['latestBet']->value->bet_vmoney*$_smarty_tpl->tpl_vars['latestBet']->value->bet_odd;?>
金币</span>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['latestBet']->value->watchid){?>
				<a href="#" class="guanzhu-Y" superStar="<?php echo $_smarty_tpl->tpl_vars['latestBet']->value->user_id;?>
"
					fans="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
">取消关注</a>
					<?php }else{ ?>
				<a href="#" class="guanzhu" superStar="<?php echo $_smarty_tpl->tpl_vars['latestBet']->value->user_id;?>
"
					fans="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
">关注</a>
					<?php }?>
			</div>
			<?php } ?>
		</div>
	</div>
	<!-- left END -->
</div>
</div>
</body>
</html>
<?php }} ?>