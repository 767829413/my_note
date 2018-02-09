<?php
	header("content-type:text/html;charset=gb2132");
	//1.定位文件全路径
	$file_full_path = 'e:/DownUP/abc.txt';
	if(file_exists($file_full_path)){
		$fp = fopen($file_full_path,'r');
		//设置缓冲(逻辑缓存)
		$buffer = '';
		$buffer_size = 1024;
		$con_str = '';
		//开始一次读取$buffer_size,循环读取
		//!feof($fp)如果没有到文件的结束位置,就继续读取
		while(!feof($fp)) {
			$buffer = fread($fp,$buffer_size);
			//可以对buffer内容进行处理
			$con_str .= $buffer;
		}
		fclose($fp);
		//替换换行(''不会解析\)
		$con_str = str_replace("\r\n",'<br>',$con_str);
		$con_str = str_replace("\n",'<br>',$con_str);
		echo $con_str;
	}else{
		exit('文件不存在.....');
	}
?>