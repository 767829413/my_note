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
	try{
		checkNum(0);
	}catch(Exception $e){
		echo '错误信息:'.$e->getMessage();
	}
?>