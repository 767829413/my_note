<?php
	header("content_type:text/html;charset=utf-8");
	//获取学生信息-->查询数据库,获取信息即可
	class foo_mysqli extends mysqli {
		public function __construct($host,$user,$pass,$db){
			parent::__construct($host,$user,$pass,$db);
			if(mysqli_connect_error()) {
				exit('连接错误,请检查mysql用户信息');
			}
		}
	}
	$conn = new foo_mysqli('www.fang.com','root','123','stu_info');
	//2.添加查询SQL语句
	$sql = "select * from `stu_grade`;";
	if(!$conn->query($sql)) {
		exit('查询出错,请检查SQL语句!');
	}
	$res = $conn->query($sql);
	//为了让后面模板显示所有数据
	//只需将$row 封装到 数据
	$stu_list = array();
	while($row = $res->fetch_assoc()) {
		$stu_list[] = $row;
	}
	//尽量使用绝对路径,不容易报错
	//相对路径要把握好
	require_once('../view/showStu.html');

?>



