<?php
	//opendir与readdir/closedir的基本使用
	function get_dir_info($dir_full_path){
		if(is_dir($dir_full_path)){
			//打开目录
			$dir_handle = opendir($dir_full_path);
			//开始遍历该目录
			while(!(false === ($file_name = readdir($dir_handle)))){
				if($file_name != '.' && $file_name != '..'){
					if(is_dir($dir_full_path.'/'.$file_name)){
						echo '<br/>'.$file_name.'是一个目录';
						get_dir_info($dir_full_path.'/'.$file_name);
					}elseif(is_file($dir_full_path.'/'.$file_name)){
						echo '<br/>'.$file_name.'是一个文件';
					}else{
						echo '<br/>'.$file_name.'不是一个正常的目录或文件!!!';
					}
				}
			}
			//关闭目录
			closedir($dir_handle);
		}else{
			exit('该文件不是目录,无法打开..');
		}
	}
	$dir_full_path = 'F:./';
	get_dir_info($dir_full_path);
?>	
