<?php
	//创建多级目录f:/test2/aaa/bbb/ccc/ddd
	$dir_full_path = 'f:/test2/aaa/bbb/ccc/ddd';
	if(!is_dir($dir_full_path)){
		//在默认情况下,我们的目录只能一级一级的创建
		//如果需要创建多级目录,则需要使用
		//mkdir($dir_full_path,0777,ture);
		//在windows下mode 0777 会被忽略,只在linux下有用
		if(mkdir($dir_full_path,0777,true)){
			echo '创建目录成功';
		}else{
			exit('创建目录失败...');
		}
	}else{
		exit('该目录已经存在');
	}
?>