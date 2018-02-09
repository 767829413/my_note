<?php
	date_default_timezone_set('Asia/Shanghai');
	//自定义错误函数
	function my_error($errno,$error) {
		 $error_info = '错误号是:'.$errno.'--错误信息是:'.$error.'--错误时间是:'.date('Y-m-d H:i:s');
		 echo $error_info;
		//保存这个错误信息
		//\r\n表示向文件中输出一个回车换行
		error_log($error_info."\r\n",3,'aaa.txt');
	}
	//指定错误错误级别
	set_error_handler('my_error',E_USER_WARNING);
	//错误触发器
	$age = -11;
	if($age < 0) {
		trigger_error('输入不正常',E_USER_WARNING);
		exit();
	}elseif($age>300) {
		exit('输入不正常');
	}
?>