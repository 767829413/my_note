<?php
	require_once('Dog.class.php');
	$dir_path = 'f:/dog';
	function getObject($dir_path){
		if(file_exists($dir_path)){
			if(is_dir($dir_path)){
				if(!$dir_handle = opendir($dir_path)){
					die('打开文件夹失败!!');
				}
				$arr = array();
				while(false !== $file_name = readdir($dir_handle)){
					if($file_name != '.' && $file_name != '..'){
						$file_path = $dir_path.'/'.$file_name;
						if(!$fp = fopen($file_path,'r')){
							die('打开文件失败');
						}
						if(!$str = fread($fp,filesize($file_path))){
							var_dump($str);
							die('读取数据内容失败');
						}
						$arr[] = unserialize($str);
					}
				}
			}
		}else{
			die('该文件不存在...');
		}
		return $arr;
	}
	echo '<pre>';
	var_dump(getObject($dir_path));
?>