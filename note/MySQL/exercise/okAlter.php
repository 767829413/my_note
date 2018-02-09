<?php
	$dbname=isset($_REQUEST['dbname'])? $_REQUEST['dbname'] : '';
	$char=isset($_REQUEST['charset']) ? $_REQUEST['charset'] : '';
	$coll=isset($_REQUEST['collate']) ? $_REQUEST['collate'] : '';
	if(!$dbname || !$char || !$coll){
		exit('数据库名没有输入');
	}
	$link = mysql_connect("www.mrfang.com","root","6217512");
	if(!$link){
		exit('连接失败,请检查用户名密码以及主机名');
	}
	mysql_query('set names utf8');
	$sql="alter database $dbname charset $char collate $coll;";
	$res = mysql_query($sql);
	if(!$res){
		exit("修改失败");
	}else{
		echo "修改成功";
	}
?>