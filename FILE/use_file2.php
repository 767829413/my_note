<?php
	date_default_timezone_set('PRC');
	//目录名与文件名和路径
	$dir_full_name = 'F:/'.date('Y').'/'.date('m-d');
	$file_name = 'abc1.txt';
	$file_full_path = $dir_full_name.'/'.$file_name;
	//插入内容与条数
	$in_str = 'hello,word!!!'."\r\n";
	$num = 100;
	$con_str = '';
	for($i=0;$i<$num;$i++){
		$con_str .= $in_str;
	}
	if(!is_dir($dir_full_name)){
		//先创建多级目录
		if(mkdir($dir_full_name,0777,true)){
			echo '创建目录成功<br>';
			//创建文件
			file_action:
			if(!file_exists($file_full_path)){
				if(file_put_contents($file_full_path,$con_str)){
					echo '文件操作成功!!';
				}else{
					exit('文件写入失败');
				}
			}else{
				if(file_put_contents($file_full_path,$con_str)){
					//要追加只需加入FILE_APPEND
					echo '文件内容覆盖成功';
				}else{
					die('文件覆盖失败!!');
				}
			}
		}else{
			exit('创建目录失败....');
		}
	}else{
		goto file_action;
	}
?>