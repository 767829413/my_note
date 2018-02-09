<?php
	class Database{
		public function charMF(){
			//获取数据库名
			$dbname=isset($_REQUEST['dbname']) ? $_REQUEST['dbname'] : '';
			if(!$dbname){
				exit('数据库名没有输入');
			}
			//1.连接数据库
			$link = mysql_connect("www.mrfang.com","root","6217512");
			if(!$link){
				exit('连接失败,请检查用户名密码以及主机名');
			}
			//2.设置编码
			mysql_query('set names utf8');
			//3.准备SQL语句
			$sql = "show charset;";
			//4.发送SQL语句到服务器
			$res = mysql_query($sql);
			//设置一个接受的空数组
			$accept=array();
			while($accept[] = mysql_fetch_assoc($res)){
			}
			return	$accept;

		}
		public function CreateDB(){
			//1.接收数据库名称
			$dbname=$_REQUEST['dbname'];
			//2.验证数据
			if(!$dbname){
				exit('数据库名不能为空');
			}
			//3.添加数据库;
			//3.1连接数据库
			$link=mysql_connect("www.mrfang.com","root","6217512");
			if(!$link){
				exit("连接不成功,请检查用户名密码以及主机名");
			}
			//3.2设置编码
			mysql_query("set names utf8");
			//3.3准备创建数据库的SQL语句
			$cre="create database $dbname charset utf8;";
			//3.4发送SQL语句
			$res=mysql_query($cre);
			//3.5判断是否成功
			if(!$res){
				exit("发送失败,请检查配置");
			}{
				echo "成功创建";
			}
			//关闭数据库连接
			mysql_close($link);

			echo "<br/><a href='View1.php'>返回</a>";
		}
		public function DropDB(){
			//获取数据库名
			$dbname=$_REQUEST['dbname'];
			if(!$dbname){
				exit('数据库名没有输入');
			}
			//1.连接数据库
			$link = mysql_connect("www.mrfang.com","root","6217512");
			if(!$link){
				exit('连接失败,请检查用户名密码以及主机名');
			}
			//2.设置编码
			mysql_query('set names utf8');
			//3.准备SQL语句
			$sql1 = "drop database $dbname;";
			//4.发送SQL语句到服务器
			$res1 = mysql_query($sql1);
			if(!$res1){
				exit("发送失败,请检查配置");
			}else{
				echo '成功删除';
			}
			//关闭数据库连接
			mysql_close($link);
			
			echo "<br/><a href='View1.php'>返回</a>";
		}
		public function AlterDB(){
			$dbname=isset($_REQUEST['dbname'])? $_REQUEST['dbname'] : '';
			$char=isset($_REQUEST['charset']) ? $_REQUEST['charset'] : '';
			$coll=isset($_REQUEST['collate']) ? $_REQUEST['collate'] : '';
			if(!$dbname || !$char || !$coll){
				exit('数据库名没有输入');
			}
			$link = mysql_connect("www.mrfang.com","root","6217512");
			if(!$link){
				exit('连接失败,请检查用户名密码以及主机名');
			}
			mysql_query('set names utf8');
			$sql="alter database $dbname charset $char collate $coll;";
			$res = mysql_query($sql);
			if(!$res){
				exit("修改失败");
			}else{
				echo "修改成功";
			}
			//关闭数据库连接
			mysql_close($link);

			echo "<br/><a href='View1.php'>返回</a>";
		}


	
	}
?>