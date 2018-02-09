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
	$sql1 = "insert into `user1` values(null,'王尼玛',md5('123456'),'wnm@qq.com','2016-01-02',16);";
	$sql2 = "SELECT name,email from `user1` where birthday < '2017-01-01';";
	
	if($dao1->query($sql)) {
		echo "执行成功<br/>";
	}
	$user_list = $dao1->fetch_all($sql);
	
	foreach($user_list as $user) {
		var_dump($user);
	}

?>