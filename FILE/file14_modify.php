<?php
	//修改文件名
	$file_full_path = '王八.txt';
	//因为文件函数是比较早期的函数,对gbk,gb2312zhichi比较好,因此我们这里需要使用转码iconv函数
	//将'煞笔.txt'的编码转换为gbk或gb2312
	$file_new_full_path = iconv('utf-8','gbk','煞笔.txt');

	if(file_exists($file_full_path)){
		if(rename($file_full_path,$file_new_full_path)){
			echo '修改成功!!';
		}else{
			echo '修改失败';
		}
	}else{
		exit('文件不存在,无法修改文件名!!!');
	}
?>