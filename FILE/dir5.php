<?php
	//统计某个目录下所有文件和子文件夹大小
	$dir_name = '../';
	echo gerDirSize($dir_name);
	function gerDirSize($dir_name){
		//定义一个变量,初始化为0
		$dir_size = 0;
		//打开目录
		$dir_handle = opendir($dir_name);
		while(false !== ($file_name = readdir($dir_handle))){
			//拼接该文件全路径
			$file_path = $dir_name.$file_name;
			//排除.与..
			if($file_name != '.' && $file_name != '..'){
				//判断是否是目录
				if(is_dir($file_path)){
					$dir_size += gerDirSize($file_path.'/');
				}else{
					$dir_size += filesize($file_path);	
				}
			}
		}
		closedir($dir_handle);
		return $dir_size;
	 }
?>