<?php
/*******************************************************************************
	//配置文件
	//配置网站目录结构
	//1.网站根目录
	define('ROOT',substr(str_replace('\\','/',__DIR__),0,-6));
	//2.网站样式目录
	define('ROOT_STYLE', ROOT .'style'. '/');
	//3.数据库操作目录
	define('ROOT_LIB', ROOT .'lib'. '/');
	//4.网站模版文件目录
	define('ROOT_TEMPS', ROOT .'temps'. '/');
	define('ROOT_TIMPS_ADMIN', ROOT .'temps/admin'. '/');
	define('ROOT_TIMPS_HOME', ROOT .'temps/home'. '/');
//	echo ROOT_LIB;

********************************************************************************/
/*//	在别的php文件中引入模版
	//1.引入首页模版
	require_once(ROOT_TEMPS_HOME."模版文件名");
	
	
*/
	$a = "哈哈哈哈";
	var_dump($a);
?>