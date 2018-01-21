<?php
	header("content-type:text/html;charset=utf-8");
	require_once("homework.php");
	$school = new School("网络大学","互联网接入即可上学");
	$student = new Student("小明",19,$school);
	$student_str = serialize($student);
	file_put_contents("G:/PHPLog/studentInfo.log",$student_str);
	
?>