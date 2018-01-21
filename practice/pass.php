<?php
	$user=$_REQUEST['user'];
	$word=$_REQUEST['password'];
	if($user=="767829413" && $word==6217512){
		echo '欢迎您!!!';
	}else{
		echo '账号名或密码错误请重新输入';
	}
?>