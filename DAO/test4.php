<?php
	header("content_type:text/html;charset=utf-8");
	echo '<pre>';
	require_once ('DAOMySQLi.class.php');
	
	//连接数据库的参数
	$option_arr = array(
		'host' => 'localhost',
		'user' => 'root',
		'pwd' => '123',
		'dbname' => 'aaa',
		'pork' => 3306,
		'charset' => 'utf8'
	);
	
	//获取到DAOMySQLi的对象实例
	$dao1 = DAOMySQLi::getSingleton($option_arr);
	
	$sql = 'SELECT * FROM `user1`;';
	$sql1 = "insert into `user1` values(null,'日向雏田',md5('123456'),'hyrz@qq.com','2017-01-02',16);";
	$id = $dao1->query($sql1);
	echo '操作成功,操作的id是:'.$id.'<br/>';		
	$user = $dao1->fetch_all($sql);
	var_dump($user);
	$dao1->close_link();

?>