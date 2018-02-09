<?php
	header('Content-Type:text/html;charset=utf-8');
	date_default_timezone_set('PRC');
	echo '<pre>';
	/*
		获取文件的大小,类型[文件/目录],文件修改,访问,创建时间等信息(两种方式)
	*/
	//1.定位文件全路径
	$file_full_path = 'e:/DownUP/abc.txt';
	
	//2.判断文件是否存在
	if(file_exists($file_full_path)) {
		//3.打开该文件
		/*
			fopen :打开一个文件或URL,获得文件指针(资源)
			@param string $file_full_path 文件路径
			@param string 'r' 以只读的方式打开
			@return $fp 文件指针(资源) stream
		*/
		$fp = fopen($file_full_path,'r');
		$file_info_arr = fstat($fp);
		//var_dump($file_info_arr);
		echo '文件的信息是:'.'<br>文件的创建时间是:'.date('Y-m-d H:i:s',$file_info_arr['ctime']).'<br>文件的修改时间是:'.date('Y-m-d H:i:s',$file_info_arr['mtime']).'<br>文件的访问时间是:'.date('Y-m-d H:i:s',$file_info_arr['atime']);
		//在php文件编程中,不是打开文件就表示访问,而是通过php程序来操作
		//touch()函数
		touch($file_full_path);
	}else{
		exit('文件不存在....');
	}
	fclose($fp);
?>