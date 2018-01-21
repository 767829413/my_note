<?php
	header("content_type:text/html;charset=utf-8");
	class foo_mysqli extends mysqli {
		public function __construct($host,$user,$pass,$db){
			parent::__construct($host,$user,$pass,$db);
			if(mysqli_connect_error()) {
				exit('连接错误,请检查mysql用户信息');
			}
		}
	}
	$conn = new foo_mysqli('www.fang.com','root','123','stu_info');
	$stu_id = $_REQUEST['id'];
	//2.添加SQL语句
	$sql = "delete from `stu_grade`  where id = '$stu_id';";

	if($conn->query($sql)) {
		//成功
		require_once('delOk.php');
	}else {
		//失败
		require_once('delError.php');
	}
?>