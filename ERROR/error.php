<?php
	header("content_type:text/html;charset=utf-8");

	file_exists('aaa1.txt') or die('文件不存在!!!');
	
	echo '文件打开成功';
	
	fclose($fp);
?>