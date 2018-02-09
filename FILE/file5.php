<?php
	header("content-type:text/html;charset=gb2132");
	//1.定位文件全路径
	$file_full_path = 'e:/DownUP/abc.txt';
	if(file_exists($file_full_path)){
		//file_get_contents 做了一个封装处理,底层还是fopen,fread等
		$con_str = file_get_contents($file_full_path);
		$con_str = str_replace("\r\n",'<br>',$con_str);
		echo $con_str;
	}else{
		exit('文件不存在.....');
	}
?>