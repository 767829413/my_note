<?php
	header("content-type:text/html;charset=utf-8");
	require_once("homework.php");
	$str = file_get_contents("G:/PHPLog/studentInfo.log");
	$stu_obj = unserialize($str);
	echo "<pre>";
	var_dump($stu_obj);
?>