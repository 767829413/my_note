<?php
	header("content_type:text/html;charset=utf-8");
	//事务的控制
	//目标是从id是100的-1000,id号200的+1000
	$mysqli = new MySQLi('www.mrfang.com','root','6217512','itbull');
	if(mysqli_connect_error()){
		exit('连接错误');
	}
	//准备SQL语句
	$sql1 = "delete from `stu` where stu_id = 3";
	$sql2 = "UPDATE `class` set num = num-1 where class_id = 2";

	//开启事务

	$mysqli->query("start transaction;");
	
	//加入事务控制
	$res1 = $mysqli->query($sql1);
	
	$res2 = $mysqli->query($sql2);

	if(!$res1 || !$res2){
		echo '有sql语句执行失败,回滚!!';
		$mysqli->query('rollback;');
	}else{
		echo '执行sql语句成功,提交';
		$mysqli->query('commit;');
	}
	$mysqli->close();
	
?>