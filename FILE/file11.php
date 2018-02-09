<?php
	/*
	如果文件不存在,创建一个文件,写入10句'hi,girls',如果已经存在,则写入10句'你好,baby!!!1'
	*/
	$file_full_path = 'hello.txt';
	$con_str1 = "hi,girls!!!\r\n";
	$con_str2 = "你好,baby!!!\r\n";
	function write_contents($file_full_path,$str,$num = 10){
		$con_str = '';
			for($i=0;$i<$num;$i++){
				$con_str .= $str;
			}
			/*
			当文件不存在时们就会先创建后写入,存在的话,就覆盖写入内容
			*/
			file_put_contents($file_full_path,$con_str);
	}
	if(!file_exists($file_full_path)){
		write_contents($file_full_path,$con_str1,$num = 10);
		echo '创建并写入成功';
	}else{
		write_contents($file_full_path,$con_str2,$num = 10);
		echo '覆盖并写入成功';
	}
?>