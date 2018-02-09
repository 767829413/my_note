<?php
	header("content-type:text/html;charset=utf-8");
	date_default_timezone_set('PRC');
	/*
		获取文件的大小,类型[文件/目录],文件修改,访问,创建时间等信息(两种方式)
	*/
	//1.定义文件路径
	$file_full_path = 'e:/DownUP/abc.txt';
	if(file_exists($file_full_path)){
		//直接使用一组函数来获取文件信息,不需要打开文件
		echo '文件大小:'.filesize($file_full_path);
		echo '<br>文件类型:'.filetype($file_full_path);
		echo '<br>文件创建时间:'.date('Y-m-d H:i:s',filectime($file_full_path));
		echo '<br>文件修改时间:'.date('Y-m-d H:i:s',filemtime($file_full_path));
		echo '<br>文件访问时间:'.date('Y-m-d H:i:s',fileatime($file_full_path));
	}else{
		exit('文件不存在');
	}

?>