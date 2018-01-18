<?php
	header("content_type:text/html;charset=utf-8");
	//事务的控制
	//目标是从id是100的-1000,id号200的+1000
	$mysqli = new MySQLi('www.mrfang.com','root','6217512','itbull');
	if(mysqli_connect_error()){
		exit('连接错误');
	}
	//准备SQL语句
	$sql1 = "UPDATE `account` SET money = money-1000 WHERE id = 100;";
	$sql2 = "UPDATE `account` SET money = money2+1000 WHERE 1d = 200;";

	//开启事务

	$mysqli->query("start transaction;");
	
	//加入事务控制
	$res1 = $mysqli->query($sql1);
	
	$res2 = $mysqli->query($sql2);

	if(!$res1 || !$res2){
		echo '有sql语句执行失败,回滚!!';
		$mysqli->query('rollback;');
	}else{
		
		$mysqli->query('commit;');
	}
	


	$mysqli->close();
	
?>