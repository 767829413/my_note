<?php

/*********************************************************

对于php文件来说:
	php( html css javascript php脚本 flash 等等..)

	1.php文件本身放在服务器的
	2.php文件中不同的内容在不同的地方执行
	
*********************************************************/




/*******************http协议**************************************

	1.http协议是建议在 TCP/IP 协议基础之上的;
	2.我们的 web 开发(只要涉及到数据的传输)都是依赖于 http 协议;
	3. http 协议全称---超文本传输协议;


http 协议的--请求(request)

基本结构:

	请求行
	消息头

	消息实体

	举例:
	GET /test/hello.html HTTP/1.1	
	[表示发送的是get请求,请求资源是/test/hello.html]
	Accept:(*)/*	
	[表示客户端可以接受任何数据类型]
	Refere: http://localhost:80/test/abc.html
	[1.表示我是从哪里来]
	Accept-Language:zh-cn
	[页面语言]
	User-Agent: Mozilla/4.0
	[告诉服务器我的浏览器版本还有操作系统]
	Accept-Encoding: gzip, deflate
	[表示接受什么样的数据压缩格式]
	Host: localhost:80
	[告诉主机是谁	80是端口]
	Connection: Keep-Alive
	[表示不要立即断掉我们的请求]


	

现在我想知道,客户端究竟给服务器端发送的内容是什么   


如果我这个 mynote8.php 不希望192.168.1.33这个用户访问


在服务器端,我们可以通过一个与定义的全局数组 $_SERVER 来获取我们需要的信息:

重要的有:
	HTTP_HOST:		[获取主机名]
	REMOTE_ADDR:	[访问该页面的ip]	
	DOCUMENT_ROOT:	[可以获取apache的主目录]
	REQUEST_URI:	[可以获取请求的资源名]

-----------------案例----------------------------------------------
	//print_r($_SERVER);
	foreach($_SERVER as $key=>$val){
		echo $key.":".$val."<br/>";
	}
	//可以指定去除访问该页面的ip
	echo "朋友你的ip是:".$_SERVER['REMOTE_ADDR'];

	if($_SERVER['REMOTE_ADDR']=="127.0.0.1"){
		//跳转到一个警告页面
		//header("Location:http://www.baidu.com");
		header("Location:note8.php");
	}

---------------------------------------------------------------------




----------------请求的种类------------------------------------------

http请求有两种主要的方式:

<1>get
<2>post

都是用于向服务器发送数据


-------------------- get 与 post 的区别---------------------------

1.从安全性看, get 请求的数据会显示在 地址栏上, post请求的数据,放在http 协议的消息体中;
--------------------------------案例-------------------------------
	<form action="mynote7.php" method="post">
	i:<input type="text" name="name"/>
	<input type="submit" value="提交"/>
	</form>
-------------------------------------------------------------------
2.从可以提交数据的大小看:
	2.1: http 协议本身没有限制数据的大小
	2.2: 浏览器在对 get 和 post 请求做限制, get 请求数据是2k+35		,post 请求没有限制
------------------------------------------------------------------


3.get 请求可以更好的添加到收藏夹


*****************************************************************/

//----------实际使用一些http 请求	,完成一个防盗链的练习---------
/*
function judge(){
				//获取REFERER
			if(isset($_SERVER['HTTP_REFERER'])){
		//取出来
		//判断$_SERVER['HTTP_REFERER']是不是以 指定URL	开始->函数
				if(strpos($_SERVER['HTTP_REFERER'],"DefenderView.php")==47){
				//	header("Location:important.php");
				
				}else{
					header("Location:/MrFangWEB/note/note8.php");
					exit();
				}
			}else{
				header("Location:/MrFangWEB/note/note8.php");
				exit();
			}

*/



/*******************************************************************
!!!!  http  不是固定的,是根据实际情况变化的,比如REFEER

*******************************************************************/


/*************************http响应**************************************

简单定义:一个http响应代表服务器给浏览器回送的数据,同时告诉浏览器应当怎样处理数据.

1.基本结构:

状态行
消息头信息
						<--空行

实体信息

快速入门:

HTTP/1.1 200 OK		[200 OK 表示客户端请求成功]
Server:Microsoft-IIS/5.0	[表示告诉浏览器 服务器的情况]
Date: Thu, 13 Jul 2000 05:46:53 GMT	[告诉浏览器请求这个页面的时间]
Content-Length:2291		[回送的数据有2291个字节]
Content-Type:text/html		[文档类型]
Cache-control:private		[缓存]



对状态码的说明

基本结构:
	格式: HTTP版本号 状态码 原因叙述<CRLF>
	举例: HTTP/1.1 200 OK

状态码用于表示服务器对请求的的处理结果,它是一个三位的十进制数,响应状态码分为5类,如下:
100~199-------表示接受请求,要求客户端继续提交下一次请求才能完成整个过程
200~299-------表示成功接受请求并已经完成处理工程,常用200
300~399-------为完成请求,客户进一步细化请求,比如:请求的资源已经移动了一个新地址,常用302,304
400~499-------客户端请求有错误,常用404
500~599-------服务端出现错误,常用500


---------举例说明 http 响应的实际应用

---302状态码

比如我们现在希望访问 http.php 页面,让其自动重定向到http1.php

基本用法

<?php
	header("Location: 文件名.php");
	header("Location: http://www.baidu.com");
?>

细节: 302 状态码也可以让其跳转到外网;


---404状态码

404 一般是说你要访问的页面不存在


---304状态码

使用案例:
<?php

	echo "hello";
	echo "<img src='/MrFangWEB/img/1/2.jpg'>";

?>

上面说明了 304 表示服务器告诉浏览器,你上次接受的资源没有改动,无需我再次发送

*************HTTP响应(比较详细)*************************
	Location: http://www.baidu.com/index.php	[重定向]
	Server: apache	[我是什么服务器,版本是什么]
	Content-Encoding: gzip	[内容编码支持 gzip 的压缩算法]
	Content-Length: 80	[返回数据大小]
	Content-language: zh-cn	[语言]
	Content-Type: text/html; charset=GB2312;	[文本类型]
	Last-Modified: Tue, 11 Jul 2000 18:23:51 GTM	[表示浏览器请求的资源最新时间]
	Refresh: 1;url=http://www.baidu.com	[告诉浏览器,间隔1秒,重定向到baidu--案例如下]
	Content-Disposition: attachment; filename=aaa.php	[]
	Transfer-Encoding: chunked
	Set-Cooking:SS=QQ=5Lb_nQ; path=/search	[讲cook时讲解]
---	Expires: -1				-|
---	Cache-Control: no-cache	-|=>[共同控制要不要缓存该页面(应对浏览器版本不同问题)]
---	Pragma: no-cache		-|
	Connection: close/Keep-Alive
	Date: Tue, 11 Jul 2000 18:23:51 GMT


---------------------Refresh演示案例-----------------------
//演示如何通过http响应控制浏览器间隔一定时间去跳转(重定向),


页面一
<?php
	<?php

	//header("Refresh:3;url=http://www.baidu.com");
	echo "不要着急啊!!精彩大片三秒后开始!!!!!";
	header("Refresh:3;url=http://www.mrfang.com/note/http1.php");

?>

页面二

<?php

//	echo "你好啊????";
	header("Location: http://www.sohu.com");

?>


//--------演示如何通过http 响应控制页面缓存(默认情况下,页面会被浏览器缓存,不同浏览器的缓存时间不同)
***************************************************************
<?php
	//通过header来禁用缓存(ajax)

	header("Expires: -1");
	header("Cache-Control: no-cache");
	header("Pragma: no-cache");


	echo "hello!cache";

?>
****************************************************************

-------------http响应头 实际应用,文件下载------------------

下载文件需要的响应头:
[返回的文件形式]
header("Content-type: application/octet-stream");
[按照字节大小返回]
header("Accept-Ranges: bytes");
[返回文件大小]
header("Accept-Length: $file_size");
[客户端的弹出的对话框名称对应的文件名]
header("Content-Disposition: attachment; filename=".$file_name)


----------实际响应头下载应用代码如下------------------------------
---限制文件大小与类型,校验下载文件

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

-----------------------------------------------------------------------

练习在G:/MrFangWEB/note/Object下

*************************************************************/







	

?>

