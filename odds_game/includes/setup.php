<?php

// 加载Smarty类文件
require('Smarty.class.php');

//定义Smaryty的文件目录
class Smarty_Ibo extends Smarty {

   function __construct()
   {
        parent::__construct();

        $this->setTemplateDir(BASE_HOME.'templates/');
        $this->setCompileDir(BASE_HOME.'templates_c/');
        $this->setConfigDir(BASE_HOME.'configs/');
        $this->setCacheDir(BASE_HOME.'cache/');
        
        $this->setCompileCheck(true);
        $this->left_delimiter = '{{';
		$this->right_delimiter = '}}';
		
		$this->debugging = true;

		//设置缓存,开发调试时关闭,正式使用时开启
		$this->caching = Smarty::CACHING_OFF;
        //$this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('appname', '爱博博彩');
   }

}
?>