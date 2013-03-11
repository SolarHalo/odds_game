<?php /* Smarty version Smarty-3.1.13, created on 2013-03-06 23:26:14
         compiled from "D:\gitspace\odds_game\odds_game\templates\manager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1899451376016a46895-75028105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e892d2c7dd685c69b59788f84f7220c2a5b6c2f9' => 
    array (
      0 => 'D:\\gitspace\\odds_game\\odds_game\\templates\\manager.tpl',
      1 => 1362487070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1899451376016a46895-75028105',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urlroot' => 0,
    'userid' => 0,
    'name' => 0,
    'username' => 0,
    'ownmoney' => 0,
    'betsData' => 0,
    'betsHistoryData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51376016cdb292_14595255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51376016cdb292_14595255')) {function content_51376016cdb292_14595255($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
/js/ajaxfileupload.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
/js/main.js"></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
/js/useropt.js"></script>
<div class="container">  
        <div class="container-left">
        	<div class="user">
            	<div id='cccc' class="user-imge">
                	<img src="images/uerimge.jpg" width="115" height="115" />
                    <a href="javascript:userOpt.modifyPhoto('cccc','<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
');" style='float: left;'>修改头像</a>
                </div>
                <ul>
                	<li id='aaaa'>
                    	<span > <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span>
                    	<span ><a href="javascript:userOpt.modifyName('aaaa','<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
');">修改昵称</a></span>
                    </li>
                    <li id='bbbb'>
                    	<span ><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>
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
                	<a href="#">正在投注</a>|<a href="#">投注历史</a>
                </div>
            </div>
            <div class="sais-list" id="user-list">
            	<span class="tietle-sub">
                	正在投注
                    <a href="#">更多</a>
                </span>
                <ul class="list-title">
                    <li class="sfp">胜/负/平</li>
                    <li class="yzhud">主队</li>
                    <li class="yked">客队</li>
                    <li class="peil">赔率</li>
                    <li class="touzje">投注金额</li>
                    <li class="shour">押注正确将收入</li> 
                </ul>
                <?php $_smarty_tpl->tpl_vars['bets'] = new Smarty_variable($_smarty_tpl->tpl_vars['betsData']->value, null, 0);?>
               	<?php echo $_smarty_tpl->getSubTemplate ('bettable.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
            <div class="sais-list" id="user-list">
            	<span class="tietle-sub">
                	投注历史
                    <a href="#">更多</a>
                </span>
                <ul class="list-title">
                    <li class="sfp">胜/负/平</li>
                    <li class="yzhud">主队</li>
                    <li class="yked">客队</li>
                    <li class="peil">赔率</li>
                    <li class="touzje">投注金额</li>
                    <li class="shour">收入</li> 
                </ul>
                <?php $_smarty_tpl->tpl_vars['bets'] = new Smarty_variable($_smarty_tpl->tpl_vars['betsHistoryData']->value, null, 0);?>
                <?php echo $_smarty_tpl->getSubTemplate ('bettable.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                
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