<?php
/**
 * 开发要求：
 * get传参数1个，为eventid，获取赛事相关内容展示。
 * 
 * ajax投注，可参考主页投注方式，传送urlajaxeventopt.php， 参数格式为：{'method': 'betevent', 'betodd' :betodd}，
 * 其中betodd 格式为： betodd[eid][oddname] = {'odd': odd, 'oddname': oddname, 'betmoney': m}
 * betodd为二维数组，eid为eventid，oddname为主胜或负，内容为odd倍率，betmoney投注金额
 */
include "../configs/load.php";

$smarty->display("singleevent.tpl");

?>