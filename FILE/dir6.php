<?php
	//删除整个目录
	$dir_fath = 'F:/hspweb';
	gerDirSize($dir_fath);
	echo '删除成功!!';
	function gerDirSize($dir_path){
		//打开目录
		if(($dir_handle = opendir($dir_path))){
			//遍历目录
			while(false !== ($file_name = readdir($dir_handle))){
				//排除.与..
				if($file_name != '.' && $file_name != '..'){
					//拼接该文件全路径
					$file_path = $dir_path.'/'.$file_name;
					//判断是否是目录
					if(is_dir($file_path)){
						gerDirSize($file_path);
					}else{
						if(!unlink($file_path)){
							exit('删除文件'.$file_path.'出错<br>');
						}
					}
				}
			}
			closedir($dir_handle);
			//删除本目录
			if(!rmdir($dir_path)){
				exit('删除文件夹'.$dir_path);
			}
		}else{
			exit('文件夹打开失败!!!');
		}
	 }
?>