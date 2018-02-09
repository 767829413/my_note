<?php
	//演示下载一个图片	
	//如果文件是中文的,如何解决中文乱码问题

	$file_name="可爱的小花猫.jpg";

	//原因: php 文件函数比较古老,需要对中文转码,不识别UTF-8,识别 gb2312(高版本中可能会解决该问题???)

	$file_name=iconv("utf-8","gb2312",$file_name);

//	$file_path="/MrFangWEB/img/1/".$file_name;

	//如果希望使用绝对路径(推荐使用绝对路径,速度快)!!!!!!
	$file_path=$_SERVER['DOCUMENT_ROOT']."/img/1/".$file_name;
	$file_dir=$_SERVER['DOCUMENT_ROOT']."/img/1/";
	
	

	//1.打开文件

	if(!file_exists($file_path)){	//file_exists()是无法解析中文文件是否存在的
		echo "哈哈哈";
		die('没有找到该文件');
	}
	
	//填写$file_name 不行, $file_path才行
	$fp=fopen($file_path,"r");	//两个参数都要填

	//获取文件大小
	//算文件大小不需要传入文件的指针$fp,传入$file_name即可(其它语言可能需要指针)
	$file_size=filesize($file_path);
	//限制文件下载类型---echo strpbrk($file_name,'.jpg');
	if(strpbrk($file_name,'.jpg')=='.txt'){
		echo "<script language='javascript'>
			window.alert('不是会员还想下图片???')
		</script>";
		die("就不能充点钱吗!!!");
	}
	
	//控制下载文件的大小
	if($file_size>30){
		echo "<script language='javascript'>
			window.alert('请提升您的用户权限')
		</script>";
		die("不是会员还想下这么大的文件,TMD!!!");
	}

	//[返回的文件形式]
	header("Content-type: application/octet-stream");
	//[按照字节大小返回]
	header("Accept-Ranges: bytes");
	//[返回文件大小单位]
	header("Accept-Length: $file_size");
	//[客户端的弹出的对话框名称对应的文件名]
	//这一步写错会导致下载页面本身!!!!!!!!!!!!!!!!!
	header("Content-Disposition: attachment; filename=".$file_name);

	//向客户端回送数据;
	
	$bsize=1024;
	//为了下载的安全,最好设置一个文件字节计数器
	$file_count=0;
	//用于判断文件是否结束
	while(!feof($fp) && ($file_size-$file_count)>0 ){
		//把部分数据回送给浏览器
		$file_date=fread($fp,$bsize);
		$file_count+=$bsize;
		echo $file_date;
	}

	//关闭文件
	fclose($fp);
	

?>


