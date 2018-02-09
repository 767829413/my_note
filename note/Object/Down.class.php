<?php
	class Down{
		//对函数的说明文档
		//参数说明	$file_sub_path 下载文件子文件夹路径-->"/xx/xxx/"
		public function file_down($file_sub_dir){
			$name=$_REQUEST['img'];
			$file_name=$name;
			$file_name=iconv("utf-8","gb2312",$file_name);
			$file_path=$_SERVER['DOCUMENT_ROOT'].$file_sub_dir.$file_name;
			
			if(!file_exists($file_path)){	
				echo "呵呵...";
				die('没有找到该文件');
			}	

			$fp=fopen($file_path,"r");	

			$file_size=filesize($file_path);

/*			if(strpbrk($file_name,'.jpg')=='.jpg'){
				echo "<script language='javascript'>
				window.alert('不是会员还想下图片???')
				</script>";
				die("就不能充点钱吗!!!");
			}*/
	
	//控制下载文件的大小
/*			if($file_size>30){
				echo "<script language='javascript'>
				window.alert('请提升您的用户权限')
				</script>";
				die("不是会员还想下这么大的文件,TMD!!!");
			}*/

			header("Content-type: application/octet-stream");
			header("Accept-Ranges: bytes");
			header("Accept-Length: $file_size");
			header("Content-Disposition: attachment; filename=".$file_name);
			
			$bsize=1024;
			$file_count=0;
			while(!feof($fp) && ($file_size-$file_count)>0 ){
				$file_date=fread($fp,$bsize);
				$file_count+=$bsize;
				echo $file_date;
			}
			fclose($fp);
		}
	}
	

?>