<?php
	header("content_type:text/html;charset=utf-8");
	//1.接收数据
	$stu_id = isset($_REQUEST['id']) && is_numeric($_REQUEST['id']) && strpos($_REQUEST['id'],'.') === false ? $_REQUEST['id'] : '';
	$stu_name = isset($_REQUEST['name']) ? $_REQUEST['name'] : '';
	$chinese = isset($_REQUEST['chinese']) && is_numeric($_REQUEST['chinese']) ? $_REQUEST['chinese'] : '';
	$math = isset($_REQUEST['math']) && is_numeric($_REQUEST['math']) ? $_REQUEST['math'] : '';
	$english = isset($_REQUEST['english']) && is_numeric($_REQUEST['english']) ? $_REQUEST['english'] : '';
	
	if(!$stu_id || !$stu_name || !$chinese || !$math || !$english){
		exit("输入的数据格式有问题! <a href='../view/insertStuUI.html'>返回重新添加</a>");
	}
	
	//2.添加任务 ==>1.连接数据库  
	class foo_mysqli extends mysqli {
		public function __construct($host,$user,$pass,$db){
			parent::__construct($host,$user,$pass,$db);
			if(mysqli_connect_error()) {
				exit('连接错误,请检查mysql用户信息');
			}
		}
	}
	$conn = new foo_mysqli('www.fang.com','root','123','stu_info');
	//2.添加SQL语句
	$sql = "insert into `stu_grade`(id,name,chinese,english,math) values 
	('$stu_id','$stu_name','$chinese','$english','$math');";

	if($conn->query($sql)) {
		//成功
		require_once('insertOk.php');
	}else {
		//失败
		require_once('insertError.php');
	}



?>