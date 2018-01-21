<?php
/***************************************************
一.查看是否开启了MySQL 函数库功能:
	phpinfo();
二.php操作MySQL的流程:
	1.连接数据库;
		mysql_connect('服务器地址','用户名','密码');
	//	1.连接数据库;mysql_connect函数成功返回资源,失败返回false;
	//	mysql函数库不推荐使用,所有函数使用会报警报错误!!!!!
	$link=mysql_connect('www.mrfang.com','root','6217512');	
		if(!$link){
			exit('连接失败');
		}
	2.选择数据库并设置编码;
		选择数据库: mysql_select_db('数据库名');
		设置通讯编码: mysql_query('set names utf8');
		//	2.选择数据库
			$sel=mysql_select_db('shopping_cart');
				if(!$sel){
					exit('连接失败');
				}
//	设置编码
	mysql_query('set names utf8');

	3.准备SQL语句;
		发生的语句分为三大类:库操作,表操作,数据操作
		//	3.准备SQL语句
	$sql = "select * from list";
	$sql1 = "insert into list(product_name,product_brand,product_number,product_origin,product_price) values('康佳(KONKA) 42英寸全高清液晶电视','康佳(KONKA)',1,'深圳',1999.00);";
	4.发送SQl语句到 MySQL 服务器;
		发送 SQL 语句函数: mysql_query("SQL 语句")
			//	4.发送 SQL 语句到服务器
	$res=mysql_query($sql1);
	if(!$res){
		var_dump('发送失败');
	}else{
		echo $res;
	}
	5.接受返回的结果集资源;
		$res=mysql_query($sql1);
	6.解析结果集资源;
		mysql_fetch_array--从结果集中取出一行作为关联数组,或数字数组,或二者兼有
		mysql_fetch_assoc--从结果集中取得一行作为关联数组
		array mysql_fetch_assoc 返回对应结果集的关联数组,并继续移动内部数据指针
		mysql_num_rows-----取得结果集中行的数目
			//	6.解析结果集资源
					$n=30;

					for($i=0;$i<$n;$i++){
						$row = mysql_fetch_assoc($res);
						if(!$row){
							exit('数据已经全部取出');
						}else{
							foreach($row as $key => $val){
								echo $key.'-->:'.$val.'<br/>';
							}
						}
					}

					while($row = mysql_fetch_assoc($res)){
						foreach($row as $key => $val){
							echo $key.'-->:'.$val.'<br/>';
						}
					}
	7.关闭连接资源;
		mysql_close($连接变量名);
			7.关闭链接资源
				mysql_close($link);
--------------------------上述流程*综合案例-------------------------------------------
//查看是否开启了MySQL 函数库功能	phpinfo();	

	
//	1.连接数据库;mysql_connect函数成功返回资源,失败返回false;
//	mysql函数库不推荐使用,所有函数使用会报警报错误!!!!!
	$link=mysql_connect('www.mrfang.com','root','6217512');	
	if(!$link){
		exit('连接失败');
	}
//	2.选择数据库
	$sel = mysql_select_db('shopping_cart');
		if(!$sel){
		exit('连接失败');
	}
//	设置编码
	mysql_query('set names utf8');

//	3.准备SQL语句
	$sql = "select * from list";
	$sql1 = "insert into list(product_name,product_brand,product_number,product_origin,product_price) values('康佳(KONKA) 42英寸全高清液晶电视','康佳(KONKA)',1,'深圳',1999.00);";

//	4.发送 SQL 语句到服务器
	$res = mysql_query($sql);
//	$res1 = mysql_query($sql1);
	if(!$res){
		var_dump('发送失败');
	}else{
		echo $res.'<br/>';
	}
//	6.解析结果集资源
	$n=30;

	for($i=0;$i<$n;$i++){
		$row = mysql_fetch_assoc($res);
		if(!$row){
			exit('数据已经全部取出');
		}else{
			foreach($row as $key => $val){
				echo $key.'-->:'.$val.'<br/>';
			}
		}
	}

	while($row = mysql_fetch_assoc($res)){
		foreach($row as $key => $val){
			echo $key.'-->:'.$val.'<br/>';
		}
	}
//	7.关闭链接资源
		mysql_close($link);
***************************************************/
/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------
*************************************************************************************

三.库操作

--在该文件的文件夹下php文件有详细说明


四.表操作

------------------------------------------------------------------------------
分页
	说明: 分页是根据limit 获取显示的数据数量现实到网页的一种方式.
	需要: 
		页码
		每页的显示数量
		偏移量: (当前页码-1)*每页显示数量
		limit: 偏移量,数量
		最大页码: ceil(mysql_num_rows()/每页显示最大数量);

		G:/MrFangWEB/mysql 下有自己的详细案例



*******************************总结********************************************
	学的是: php 操作 mysql
	用什么操作: php 的 mysql 扩展函数库
	开启 php 函数扩展库: 在 php.ini 中,搜索mysql相关
	操作流程: 
		1.连接数据库
			$link = mysql_connect();
		2.设置与数据库通讯编码
			mysql_query('set names utf8;');
		3.准备需要的 SQL 语句
			$sql = "需要的 SQL 语句";
		4.发送自己准备的 SQL 语句
			$res=mysql_query($sql);
		5.接受返回的结果集数组或真假值
			mysql_fetch_assoc()
			mysql_num_rows()
			等等
		6.对返回的资源等进行处理与显示
		7.关闭 mysql 连接资源

	以上可以整合为库,表,数据的-------->>>增删查改
		增: 需要一个用户可以填写的表单;
		删: 有一个可以删除内容即可,库和表需要库名与表名;,数据需要id名;
		查: 直接在需要展示的页面中显示获取数据,在解析到相应的位置;
		改: 修改信息的标识符(名称或id),修改内容的表单,把修改的信息提交给操作页面;

************************************************************************************/
	

	


?>

