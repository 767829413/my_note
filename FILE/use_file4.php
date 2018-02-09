<?php
	//拷贝图片
	$src_full_path = iconv('utf-8','gbk','F:/女孩儿.jpg');
	$new_full_path = iconv('utf-8','gbk','E:/女孩子.jpg');

	if(file_exists($src_full_path)){
		if(copy($src_full_path,$new_full_path)){
			echo '拷贝成功!!';
		}else{
			exit('拷贝失败!!');
		}
	}else{
		exit('文件不存在,无法拷贝.......');
	}
?>