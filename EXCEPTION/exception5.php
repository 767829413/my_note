<?php
	//自定义一个异常my_exception
	class my_exception extends Exception {
	}
	class my_exception2 extends Exception {
	}
	function checkNum($val) {
		if($val > 200) {
			throw new my_exception('输入值过大');
		}elseif($val < 50 || $val >= 0) {
			throw new my_exception2('输入值过小');
		}else{
			echo '输入正常';
		}
	}
	try{
		checkNum(0);
	}catch(my_exception $e1) {
		echo '充值模块无法启用,错误原因是:'.$e1->getMessage();
	}catch(my_exception2 $e2) {
		echo '转账模块无法启用,错误原因是:'.$e2->getMessage();
	}finally{
		exit('<br>请返回重新输入');
	}
?>