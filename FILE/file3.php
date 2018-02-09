<?php
	header("content-type:text/html;charset=gb2312");
//	echo '<pre>';
	//读取文件内容并正确的显示在网页上
	//1.当以文件路径
	$file_full_path = 'e:/DownUP/abc.txt';
	if(file_exists($file_full_path)) {
		//2.打开文件
		$fp = fopen($file_full_path,'r');
		//3.获取文件大小
		$file_size = filesize($file_full_path);
		//4.读取内容
		/*
		 fread : 读取一个文件的内容
		 @param stream $fp 表示文件资源
		 @param int $file_size 表示$fp读取多少个字节
		*/
		$content = fread($fp,$file_size);
		//读完文件要及时释放资源
		fclose($fp);
		//说明没有换行的原因: 在windows系统下,换行是\r\n,在linux系统下换行是\n,在网页中换行是<br>
		//函数中必须使用""才能识别\
		$content = str_replace("\r\n",'<br>',$content);
		//替换tab
		$content = str_replace("	",'&nbsp;&nbsp;',$content);
		//兼容性处理,应付linux系统下的文件
		$content = str_replace("\n",'<br>',$content);
		//5.显示在网页
		//如果出现中文乱码,可以考虑使用gb2312
		echo $content;
	}else{
		exit('文件不存在....');
	}
?>