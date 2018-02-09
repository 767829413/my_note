<?php
	//创建一个文件,写入内容是10句hello,world
	$file_full_path = 'hi.txt';
	if(!file_exists($file_full_path)){
		//创建文件并判断是否成功
		if($fp = fopen($file_full_path,'w')){
			$con_str = '';
			$num= 10;
			for($i=0;$i<10;$i++){
				//双引号才会转义,单引号无作用
				$con_str .= "hello,word\r\n";
			}
			//将内容写入文件
			fwrite($fp,$con_str);
			//关闭文件指针
			fclose($fp);
			echo '写入成功';
		}else{
			exit('创建失败!!....');
		}
	}else{
		exit('<br>文件已经存在,无法创建....');
	}
?>