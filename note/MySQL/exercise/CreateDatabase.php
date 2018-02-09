<?php
	//1.接收数据库名称
	$dbname=$_REQUEST['dbname'];
	//2.验证数据
	if(!$dbname){
		exit('数据库名不能为空');
	}
	//3.添加数据库;
	//3.1连接数据库
	$link=mysql_connect("www.mrfang.com","root","6217512");
	if(!$link){
		exit("连接不成功,请检查用户名密码以及主机名");
	}
	//3.2设置编码
	mysql_query("set names utf8");
	//3.3准备创建数据库的SQL语句
	$cre1="create database $dbname charset utf8;";
	//3.4发送SQL语句
	$res1=mysql_query($cre1);
	//3.5判断是否成功
	if(!$res1){
		exit("发送失败,请检查配置");
	}{
		echo "成功创建";
	}
	//关闭数据库连接
	mysql_close($link);
?>
