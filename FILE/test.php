<?php
	$file_full_path = 'hi.txt';
	$fp = fopen($file_full_path,'w');
	$str = '菜鸟,你惨了!!!';
	fwrite($fp,$str);
	echo '<h1><font color="red">这样操作,原文件内容清空,只剩下你写入的内容!!</font></h1>';
?>