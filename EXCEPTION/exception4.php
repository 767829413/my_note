<?php
	function checkNum($val) {
		if($val > 200) {
			throw new Exception('输入值过大');
		}elseif($val < 50 || $val >= 0) {
			throw new Exception('输入值过小');
		}else{
			echo '输入正常';
		}
	}
	//定义一个PHP默认异常处理器
	function my_exception($e) {
		echo '我是你定义的顶级异常处理器,你不捕获我来捕获,异常原因:'.$e->getMessage();
	}
	//修改PHP默认的顶级异常处理器
	set_exception_handler('my_exception');
	try{
		checkNum(0);
	}catch(Exception $e){
		//可以不处理,继续抛出,则由PHP默认的异常处理器来处理
		//也可以自己定义一个PHP默认的异常处理器
		throw $e;
	}
?>