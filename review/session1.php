<?php
	header("content-type:text/html;charset=utf-8");
	$userName = $_REQUEST["username"];
	$passWord = $_REQUEST["password"];
	//开启session
	session_start();
	if($_SESSION["username"] == ""){
		exit("请登录");
	}
?>