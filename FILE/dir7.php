<?php
	//定义文件分隔符,保持兼容
	define('DS',DIRECTORY_SEPARATOR);
	//删除整个目录
	$dir_fath_src = 'F:/hspweb2/index.php';
	$dir_fath_new = 'E:/index.txt';
	if(copy_all($dir_fath_src,$dir_fath_new)){
		echo '拷贝成功!!';
	}else{
		exit('拷贝失败!!');
	}
	//$dir_fath_src表示源目录,$dir_fath_new表示目标目录
	function copy_all($src,$new){
		if(is_dir($src)){
			//创建目标目录
			if(mkdir($src)){
				//sacdir 就是获取到该目下所有文件与目录名,返回一个数组
				copy_file:
				$object = scandir($src);
				if(count($object) > 0){
					foreach($object as $val){
						if($val != '.' && $val != '..'){
							if(is_dir($src.DS.$val)){
								copy_all($src.DS.$val,$new.DS.$val);
							}else{
								copy($src.DS.$val,$new.DS.$val);
							}
						}
					}
				}
			}else{
				goto copy_file;
			}
			return true;
		}elseif(is_file($src)){
			return copy($src,$new);
		}else{
			return false;
		}
	}
		
?>