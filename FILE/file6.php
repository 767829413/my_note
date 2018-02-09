<?php
	header("content-type:text/html;charset=utf-8");
	//读取ini文件

	//定义配置文件路径
	$file_full_path = 'config.ini';
	$arr = parse_ini_file($file_full_path);

	echo '<pre>';
	var_dump($arr);
	echo '<br>user = '.$arr['user'];
	echo '<br>pwd = '.$arr['pwd'];
	echo '<br>dbname = '.$arr['dbname'];
	echo '<br>port = '.$arr['port'];
?>