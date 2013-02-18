<?php /* Smarty version Smarty-3.1.13, created on 2013-02-18 16:04:20
         compiled from "G:\odds_game\odds_game\templates\manager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9384510f70f87c6407-94750815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ea2385ad6a27a67b559bded58e12812c130bec7' => 
    array (
      0 => 'G:\\odds_game\\odds_game\\templates\\manager.tpl',
      1 => 1361203445,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9384510f70f87c6407-94750815',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_510f70f88858f3_58283911',
  'variables' => 
  array (
    'urlroot' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510f70f88858f3_58283911')) {function content_510f70f88858f3_58283911($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['urlroot']->value;?>
/js/main.js"></script>
<div class="container">  
        <div class="container-left">
        	<div class="user">
            	<div class="user-imge">
                	<img src="images/uerimge.jpg" width="115" height="115" />
                    <a href="#">修改头像</a>
                </div>
                <ul>
                	<li>
                    	王小二<span><a href="#">修改昵称</a></span>
                    </li>
                    <li>
                    	superyuyue@sina.cn<span><a href="#">修改密码</a></span>
                    </li>
                    <li>
                    	帐号余额:<font>800</font>金币
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
            </div>
            <div class="sais-list" id="user-list">
            	<span class="tietle-sub">
                	正在历史
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