<?php
	//seesion是一种跨页面的存储方式，其他页面进行当前判断
	//接受表单数据
	$pass = "123456";
	$name = "767829413";
	$userName = isset($_POST["username"]) ? $_REQUEST["username"] : '';
	$passWord = isset($_POST["password"]) ? $_REQUEST["password"] : '';
//	if(!$userName && !$passWord){
//		exit("没有输入数据");

//	}else{
		if($userName == $name && $passWord == $pass){
			echo "登录成功";
			session_start();	//开启session功能
			$_SESSION['username'] = $userName;
			$_SESSION['password'] = $passWord;
		}
//	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <meta charset="UTF-8"/>
  <title>ook</title>
 </head>

 <body>
	<h1>余额 ：1元</h1>
  
 </body>
</html>