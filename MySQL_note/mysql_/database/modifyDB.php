<?php
	//获取数据库名
	$dbname=isset($_REQUEST['dbname']) ? $_REQUEST['dbname'] : '';
	if(!$dbname){
		exit('数据库名没有输入');
	}
	//1.连接数据库
	$link = mysql_connect("www.mrfang.com","root","6217512");
	if(!$link){
		exit('连接失败,请检查用户名密码以及主机名');
	}
	//2.设置编码
	mysql_query('set names utf8');
	//3.准备SQL语句
	$sql = "show charset;";
	//4.发送SQL语句到服务器
	$res = mysql_query($sql);
	//设置一个接受的空数组
	$accept=array();
	while($accept[] = mysql_fetch_assoc($res)){
	}
?>