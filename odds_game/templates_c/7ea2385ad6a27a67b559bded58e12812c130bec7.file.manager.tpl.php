<?php /* Smarty version Smarty-3.1.13, created on 2013-03-07 15:54:57
         compiled from "G:\odds_game\odds_game\templates\manager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78395136049811b1f1-94538195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ea2385ad6a27a67b559bded58e12812c130bec7' => 
    array (
      0 => 'G:\\odds_game\\odds_game\\templates\\manager.tpl',
      1 => 1362671636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78395136049811b1f1-94538195',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_513604982b1af6_52852507',
  'variables' => 
  array (
    'urlroot' => 0,
    'userphoto' => 0,
    'userid' => 0,
    'username' => 0,
    'ownmoney' => 0,
    'types' => 0,
    'type' => 0,
    'betsData' => 0,
    'bet' => 0,
    'a' => 0,
    'betsHistoryData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513604982b1af6_52852507')) {function content_513604982b1af6_52852507($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
js/ajaxfileupload.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
js/main.js"></script>
 
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
js/useropt.js"></script>
<div class="container">  
        <div class="container-left">
        	<div class="user">
            	<div id='cccc' class="user-imge">
                	<img src="<?php echo $_smarty_tpl->tpl_vars['userphoto']->value;?>
" width="115" height="115" />
                    <a href="javascript:userOpt.modifyPhoto('cccc','<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
');" style='float: left;'>修改头像</a>
                </div>
                <ul>
                	<li id='aaaa'> 
                    	<span > <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>
                    	<span ><a href="javascript:userOpt.modifyName('aaaa','<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
');">修改昵称</a></span>
                    </li>
                    <li id='bbbb'>
                    	<!-- <span ><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span> -->
                    	<span><a href="javascript:userOpt.modifyPassword('bbbb','<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
');">修改密码</a></span>
                    </li>
                    <li>
                    	帐号余额:<font>
                    	<?php echo $_smarty_tpl->tpl_vars['ownmoney']->value;?>

                    	</font>金币
                    </li>
                </ul>
                <div class="user-hr">
                	<a href="?type=now">正在投注<?php echo $_smarty_tpl->tpl_vars['types']->value;?>
</a>|<a href="?type=his">投注历史</a>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['type']->value=="now"||$_smarty_tpl->tpl_vars['type']->value=="all"){?>
            <div class="sais-list" id="user-list">
            	<span class="tietle-sub">
                	正在投注
                    <a href="?type=now">更多</a>
                </span>
                <ul class="list-title">
                    <li class="sfp">胜/负/平</li>
                    <li class="yzhud">主队</li>
                    <li class="yked">客队</li>
                    <!--
                    <li class="shij">时间</li>-->
                    <li class="peil">赔率</li>
                    <li class="touzje">投注金额</li>
                    <li class="shour">押注正确将收入</li> 
                </ul>
               	<?php  $_smarty_tpl->tpl_vars['bet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['betsData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bet']->key => $_smarty_tpl->tpl_vars['bet']->value){
$_smarty_tpl->tpl_vars['bet']->_loop = true;
?>
					<ul class="list-list bg1">
						<?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable(1, null, 0);?>
						<?php if ($_smarty_tpl->tpl_vars['bet']->value->odds_name=="平"){?>
						<?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable(3, null, 0);?>
						<?php }elseif($_smarty_tpl->tpl_vars['bet']->value->odds_name=="负"||$_smarty_tpl->tpl_vars['bet']->value->odds_name=="主负"){?>
						<?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable(2, null, 0);?>
						<?php }?>
						<li class="sfp"><font class="bold1<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['bet']->value->odds_name;?>
</font></li>
				   		<li class="yzhud"><?php echo $_smarty_tpl->tpl_vars['bet']->value->team_mian_name;?>
</li>
				   		<li class="yked"><?php echo $_smarty_tpl->tpl_vars['bet']->value->team_sec_name;?>
</li>
				   		<!--
				   		<li class="shij"><?php echo $_smarty_tpl->tpl_vars['bet']->value->bet_time;?>
</li>-->
				 		<li class="peil"><?php echo $_smarty_tpl->tpl_vars['bet']->value->bet_odd;?>
</li>
				      	<li class="touzje"><?php echo $_smarty_tpl->tpl_vars['bet']->value->bet_vmoney;?>
</li>
				     	<li class="shour"><?php echo $_smarty_tpl->tpl_vars['bet']->value->bet_vmoney*$_smarty_tpl->tpl_vars['bet']->value->bet_odd;?>
</li>  
					</ul>
				<?php } ?>
            </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['type']->value=="his"||$_smarty_tpl->tpl_vars['type']->value=="all"){?>
            <div class="sais-list" id="user-list">
            	<span class="tietle-sub">
                	投注历史
                    <a href="?type=his">更多</a>
                </span>
                <ul class="list-title">
                    <li class="sfp">胜/负/平</li>
                    <li class="yzhud">主队</li>
                    <li class="yked">客队</li>
                    <!--
                    <li class="shij">时间</li>-->
                    <li class="peil">赔率</li>
                    <li class="touzje">投注金额</li>
                    <li class="shour">收入</li> 
                </ul>
                <?php  $_smarty_tpl->tpl_vars['bet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['betsHistoryData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bet']->key => $_smarty_tpl->tpl_vars['bet']->value){
$_smarty_tpl->tpl_vars['bet']->_loop = true;
?>
					<ul class="list-list bg1">
						<?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable(1, null, 0);?>
						<?php if ($_smarty_tpl->tpl_vars['bet']->value->odds_name=="平"){?>
						<?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable(3, null, 0);?>
						<?php }elseif($_smarty_tpl->tpl_vars['bet']->value->odds_name=="负"||$_smarty_tpl->tpl_vars['bet']->value->odds_name=="主负"){?>
						<?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable(2, null, 0);?>
						<?php }?>
						<li class="sfp"><font class="bold1<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['bet']->value->odds_name;?>
</font></li>
				   		<li class="yzhud"><?php echo $_smarty_tpl->tpl_vars['bet']->value->team_mian_name;?>
</li>
				   		<li class="yked"><?php echo $_smarty_tpl->tpl_vars['bet']->value->team_sec_name;?>
</li>
				   		<!--
				   		<li class="shij"><?php echo $_smarty_tpl->tpl_vars['bet']->value->bet_time;?>
</li>-->
				 		<li class="peil"><?php echo $_smarty_tpl->tpl_vars['bet']->value->bet_odd;?>
</li>
				      	<li class="touzje"><?php echo $_smarty_tpl->tpl_vars['bet']->value->bet_vmoney;?>
</li>
				     	<li class="shour"><?php echo $_smarty_tpl->tpl_vars['bet']->value->bet_money;?>
</li>  
					</ul>
				<?php } ?>
                <!--
               	<ul class="list-list bg1">
                    <li class="sfp"><font class="bold11">胜</font></li>
                    <li class="yzhud">牛卡尔斯</li>
                    <li class="yked">曼城</li>
                    <li class="peil">2.35</li>
                    <li class="touzje">800</li>
                    <li class="shour">6000</li>  
                </ul>
                <ul class="list-list bg2">
                    <li class="sfp"><font class="bold12">负</font></li>
                    <li class="yzhud">牛卡尔斯</li>
                    <li class="yked">曼城</li>
                    <li class="peil">2.35</li>
                    <li class="touzje">800</li>
                    <li class="shour">6000</li> 
                </ul> 
                <ul class="list-list bg1">
                    <li class="sfp"><font class="bold13">平</font></li>
                    <li class="yzhud">牛卡尔斯</li>
                    <li class="yked">曼城</li>
                    <li class="peil">2.35</li>
                    <li class="touzje">800</li>
                    <li class="shour">6000</li>  
                </ul>
                <ul class="list-list bg2">
                    <li class="sfp"><font class="bold11">胜</font></li>
                    <li class="yzhud">牛卡尔斯</li>
                    <li class="yked">曼城</li>
                    <li class="peil">2.35</li>
                    <li class="touzje">800</li>
                    <li class="shour">6000</li> 
                </ul> 
                -->
            </div>
            <?php }?>
        </div>
        <!-- left END -->
        <div class="container-right" style="background:none;">  
            <div class="guanz">
            	<span>
                	关注了<br />
					<font>216</font>人
                </span>
                <div style="height:40px; border-left:1px solid #c1c1c1; width:20px;float:left;">&nbsp;</div>
                <span>
                	关注者<br />
					<font>216</font>人
                </span>
            </div>
            <div class="top-guanz">
            	<span class="fl">热门关注</span>
                <ul class="fl">
                	<li>
                    	<a href="#"><img src="images/uerimge.jpg"/></a>
                    </li>
                    <li>
                    	<a href="#"><img src="images/uerimge.jpg"/></a>
                    </li>
                    <li>
                    	<a href="#"><img src="images/uerimge.jpg"/></a>
                    </li>
                    <li>
                    	<a href="#"><img src="images/uerimge.jpg"/></a>
                    </li>
                    <li>
                    	<a href="#"><img src="images/uerimge.jpg"/></a>
                    </li>
                    <li>
                    	<a href="#"><img src="images/uerimge.jpg"/></a>
                    </li>
                </ul>
            </div>
        </div> 
 </div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>