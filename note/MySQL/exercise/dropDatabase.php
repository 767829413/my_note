<?php
	//获取数据库名
	$dbname=$_REQUEST['dbname'];
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
	$sql1 = "drop database $dbname;";
	//4.发送SQL语句到服务器
	$res1 = mysql_query($sql1);
	if(!$res1){
		exit("发送失败,请检查配置");
	}else{
		echo '成功删除';
	}
?>