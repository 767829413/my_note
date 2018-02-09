<?php
	//文件路径设置
	$file_old_path = 'E:/3345.jpg';
	$file_new_path = 'F:/3345.jpg';
	//文件内容保存
	$buffer = '';
	$buffer_size = 1024;
	$con_num = 0;
	$file_size = filesize($file_old_path);
	if(file_exists($file_old_path)){
		if($fp = fopen($file_old_path,'r')){
			while(!feof($fp) || $con_num < $file_size){
				$buffer .= fread($fp,$buffer_size);
				$con_num += $buffer_size;
			}
			fclose($fp);
			$con_num = 0;
			if(!($fp = fopen($file_new_path,'w'))){
				exit('文件操作失败');
			}
			fwrite($fp,$buffer); 
			fclose($fp);
			echo '文件转存成功';
		}else{
			exit('文件打开失败!!');
		}
	}else{
		exit('文件不存在!!!...');
	}
?>