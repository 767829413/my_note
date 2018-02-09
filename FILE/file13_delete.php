<?php
	//删除文件
	$file_full_path = '8989.txt';
	if(file_exists($file_full_path)){
		//删除
		if(unlink($file_full_path)){
			echo '删除成功';
		}else{
			echo '删除失败';
		}
	}else{
		exit('该文件不存在.....');
	}
?>