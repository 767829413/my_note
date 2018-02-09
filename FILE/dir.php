<?php
	//创建一级目录
	$file_full_path = 'F:/test';
	//判断有没有该目录
	if(!is_dir($file_full_path)){
		if(mkdir($file_full_path)){
			echo '创建目录成功..';
		}else{
			exit ('创建目录失败!!1');
		}
	}else{
		exit('该目录已经存在.....');
	}
?>