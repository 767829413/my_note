<?php
	//获取所有数据库的信息
	//1.连接数据库
	$link = mysqli::real_connect("www.mrfang.com","root","6217512");
	if(!$link){
		exit('连接失败,请检查用户名密码以及主机名');
	}
	//2.设置编码
	mysqli::send_query('set names utf8');
	//3.准备SQL语句
	$sql1 = "show databases;";
	//4.发送SQL语句
	$res1 = mysqli::send_query($sql1);
	if(!$res1){
		exit('发送失败,检查配置语句');
	}
	//5.解析结果集资源;
	//定义一个空变量(数组)存储循环数组
	$acc=array();
	while($row1 = mysqli_fetch_assoc($res1)){
		$acc[]=$row1;	
	}
?>