<?php
	require_once('Dog.class.php');
	$dog1 = new Dog('小黑',3,'肉骨头');
	$dog2 = new Dog('小白',3,'红烧肉');
	$dog3 = new Dog('小黄',3,'排骨');
	$str1 = serialize($dog1);
	$str2 = serialize($dog2);
	$str3 = serialize($dog3);
	
	$dir_path = 'f:/dog';
	$file_name1 = '/dog1.txt';
	$file_name2 = '/dog2.txt';
	$file_name3 = '/dog3.txt';
	if(getObject($dir_path,$file_name3,$str3)){
		echo '操作成功';
	}
	function getObject($dir_path,$file_name,$str){
		$file_path = $dir_path.$file_name;
		if(!file_exists($dir_path)){
			if(!mkdir($dir_path)){
				die('创建'.$dir_path.'文件夹失败!!');
			}
		}
		if($fp = fopen($file_path,'w')){
			if(!fwrite($fp,$str)){
				die('写入失败!!');
			}
		}else{
			die('操作失败!!');
		}
		return true;
	}

?>