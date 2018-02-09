<?php
	//创建一个文件,写入内容是10句hello,world
	$file_full_path = 'hi.txt';
	if(file_exists($file_full_path)){
		//判断文件是否存在
		if($fp = fopen($file_full_path,'a')){
			$con_str = '';
			$num= 10;
			for($i=0;$i<10;$i++){
				//双引号才会转义,单引号无作用
				$con_str .= "ABC!!ENGLISH\r\n";
			}
			//将内容写入文件（可安全用于二进制文件）
			fwrite($fp,$con_str);
			//关闭文件指针
			fclose($fp);
			echo '追加写入成功';
		}else{
			exit('追加写入失败!!....');
		}
	}else{
		exit('<br>文件不存在,无法追加写入数据....');
	}
?>