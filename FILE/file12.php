<?php
	$file_full_path = 'hello.txt';
	$num = 10;
	$con_str = '';
	if(!file_exists($file_full_path)){
		for($i=0;$i<$num;$i++){
			$con_str .= "hi,girls!!!\r\n";
		}
		file_put_contents($file_full_path,$con_str);
		echo '创建并写入成功';
	}else{
		for($i=0;$i<$num;$i++){
			$con_str .= "你好,大菠萝!!!\r\n";
		}
		file_put_contents($file_full_path,$con_str,FILE_APPEND);
		echo '追加写入成功';
	}
?>