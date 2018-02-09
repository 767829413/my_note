<?php
	//删除目录
	//删除一级目录
	$dir_full_path = 'F:/test2';
	if(!is_dir($dir_full_path)){
		exit('目录不存在,无法删除');
	}else{
		if(rmdir($dir_full_path)){
			echo '删除成功...';
		}else{
			exit('删除失败!!');
		}
	}
?>