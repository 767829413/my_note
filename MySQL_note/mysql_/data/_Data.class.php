<?php
	class _Data{
		public function CreateDT(){
			//1.接收数据库名称
			$tbname=$_REQUEST['tbname'];
			$dbname=$_REQUEST['dbname'];
			$name=$_REQUEST['name'];
			$age=$_REQUEST['age'];
			$sex=$_REQUEST['sex'];
			//2.验证数据
			if(!$tbname || !$dbname){
				exit('有未输入');
			}
			//3.添加数据库;
			//3.1连接数据库
			$link=mysql_connect("www.mrfang.com","root","6217512");
			if(!$link){
				exit("连接不成功,请检查用户名密码以及主机名");
			}
			//3.2设置编码
			mysql_select_db($dbname);
			mysql_query("set names utf8");
			//3.3准备创建数据库的SQL语句
			//采用<<<EEE 填写的内容 EEE;
			$creStu="insert into $tbname(name,age,sex) values
			('$name','$age','$sex');";
			//3.4发送SQL语句
			$res=mysql_query($creStu);
			//3.5判断是否成功
			if(!$res){
				exit("添加失败,请检查配置");
			}{
				echo "成功添加";
			}
			//关闭数据库连接
			mysql_close($link);
			echo "<br/><a href='../database/View1.php'>返回</a>";
		}
		public function DeleteDT(){
			//获取数据库名
			$tbname = $_REQUEST['tbname'];
			$dbname = $_REQUEST['dbname'];
			$id = $_REQUEST['id'];

			if(!$tbname || !$dbname){
				exit('输入出错');
			}
			//1.连接数据库
			$link = mysql_connect("www.mrfang.com","root","6217512");
			if(!$link){
				exit('连接失败,请检查用户名密码以及主机名');
			}
			//2.设置编码
			mysql_select_db($dbname);
			mysql_query("set names utf8");
			//3.准备SQL语句
			$sql1 = "delete from $tbname where id=$id;";
			//4.发送SQL语句到服务器
			$res1 = mysql_query($sql1);
			if(!$res1){
				exit("发送失败,请检查配置");
			}else{
				echo '成功删除';
			}
			//关闭数据库连接
			mysql_close($link);
			echo "<br/><a href='../database/View1.php'>返回</a>";
		}

		public function updateDT(){
			$tbname = $_REQUEST['tbname'];
			$dbname = $_REQUEST['dbname'];
			$id = $_REQUEST['id'];
			$name = $_REQUEST['name'];
			$age = $_REQUEST['age'];
			$sex = $_REQUEST['sex'];
			if(!$tbname || !$dbname || !$id || !$name || !$age || !$sex){
				exit('缺少输入');
			}
			$link = mysql_connect("www.mrfang.com","root","6217512");
			if(!$link){
				exit('连接失败,请检查用户名密码以及主机名');
			}
			mysql_select_db($dbname);
			mysql_query('set names utf8');			
			$sql="update $tbname set name='$name',age='$age',sex='$sex' where id=$id;";
			$res = mysql_query($sql);
			if(!$res){
				exit("修改失败");
			}else{
				echo "修改成功";
			}
			//关闭数据库连接
			mysql_close($link);
			echo "<br/><a href='../database/View1.php'>返回</a>";
		}
		public function emptyDT(){
			//获取数据库名
			$tbname = $_REQUEST['tbname'];
			$dbname = $_REQUEST['dbname'];

			if(!$tbname || !$dbname){
				exit('输入出错');
			}
			//1.连接数据库
			$link = mysql_connect("www.mrfang.com","root","6217512");
			if(!$link){
				exit('连接失败,请检查用户名密码以及主机名');
			}
			//2.设置编码
			mysql_select_db($dbname);
			mysql_query("set names utf8");
			//3.准备SQL语句
			$sql1 = "truncate table $tbname;";
			//4.发送SQL语句到服务器
			$res1 = mysql_query($sql1);
			if(!$res1){
				exit("发送失败,请检查配置");
			}else{
				echo '成功删除';
			}
			//关闭数据库连接
			mysql_close($link);
			echo "<br/><a href='../database/View1.php'>返回</a>";	
		}
	public function showDT(){
		//获取数据库名
			$tbname = $_REQUEST['tbname'];
			$dbname = $_REQUEST['dbname'];
			$id = $_REQUEST['id'];

			if(!$tbname || !$dbname){
				exit('输入出错');
			}
			//1.连接数据库
			$link = mysql_connect("www.mrfang.com","root","6217512");
			if(!$link){
				exit('连接失败,请检查用户名密码以及主机名');
			}
			//2.设置编码
			mysql_select_db($dbname);
			mysql_query("set names utf8");
			//3.准备SQL语句
			$sql1 = "select * from $tbname where id=$id;";
			//4.发送SQL语句到服务器
			$res1 = mysql_query($sql1);
			if(!$res1){
				exit("发送失败,请检查配置");
			}

			//关闭数据库连接
			mysql_close($link);
	}


	
	}
?>