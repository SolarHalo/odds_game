<?php /* Smarty version Smarty-3.1.13, created on 2013-03-16 21:53:30
         compiled from "D:\gitspace\odds_game\odds_game\templates\space.tpl" */ ?>
<?php /*%%SmartyHeaderCode:619751446c582a3044-20495560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dca7211c10fb6815de53bc2ab7ae0f38df86febd' => 
    array (
      0 => 'D:\\gitspace\\odds_game\\odds_game\\templates\\space.tpl',
      1 => 1363442000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '619751446c582a3044-20495560',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51446c588697b7_17483133',
  'variables' => 
  array (
    'urlroot' => 0,
    'spaceuserphoto' => 0,
    'spaceusername' => 0,
    'username' => 0,
    'spaceownmoney' => 0,
    'spaceuserid' => 0,
    'spacetypes' => 0,
    'spacetype' => 0,
    'spacebetsData' => 0,
    'bet' => 0,
    'a' => 0,
    'spacebetsHistoryData' => 0,
    'spacesuperStars' => 0,
    'spacefans' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51446c588697b7_17483133')) {function content_51446c588697b7_17483133($_smarty_tpl) {?>
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
                	<img src="<?php echo $_smarty_tpl->tpl_vars['spaceuserphoto']->value;?>
" width="115" height="115" />
                    
                </div>
                <ul>
                	<li id='aaaa'> 
                    	<span > <?php echo $_smarty_tpl->tpl_vars['spaceusername']->value;?>
</span>
                    	
                    </li>
                    <li id='bbbb'>
                    	<!-- <span ><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span> -->
                    	
                    </li>
                    <li>
                    	帐号余额:<font>
                    	<?php echo $_smarty_tpl->tpl_vars['spaceownmoney']->value;?>

                    	</font>金币
                    </li>
                </ul>
                <div class="user-hr">
                	<a href="?spacetype=now&uid=<?php echo $_smarty_tpl->tpl_vars['spaceuserid']->value;?>
">正在投注<?php echo $_smarty_tpl->tpl_vars['spacetypes']->value;?>
</a>|<a href="?spacetype=his&uid=<?php echo $_smarty_tpl->tpl_vars['spaceuserid']->value;?>
">投注历史</a>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['spacetype']->value=="now"||$_smarty_tpl->tpl_vars['spacetype']->value=="all"){?>
            <div class="sais-list" id="user-list">
            	<span class="tietle-sub">
                	正在投注
                    <a href="?spacetype=now&uid=<?php echo $_smarty_tpl->tpl_vars['spaceuserid']->value;?>
">更多</a>
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
 $_from = $_smarty_tpl->tpl_vars['spacebetsData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
            <?php if ($_smarty_tpl->tpl_vars['spacetype']->value=="his"||$_smarty_tpl->tpl_vars['spacetype']->value=="all"){?>
            <div class="sais-list" id="user-list">
            	<span class="tietle-sub">
                	投注历史
                    <a href="?spacetype=his&uid=<?php echo $_smarty_tpl->tpl_vars['spaceuserid']->value;?>
">更多</a>
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
 $_from = $_smarty_tpl->tpl_vars['spacebetsHistoryData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
					<font><?php echo $_smarty_tpl->tpl_vars['spacesuperStars']->value[0]->total;?>
</font>人
                </span>
                <div style="height:40px; border-left:1px solid #c1c1c1; width:20px;float:left;">&nbsp;</div>
                <span>
                	关注者<br />
					<font><?php echo $_smarty_tpl->tpl_vars['spacefans']->value[0]->total;?>
</font>人
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