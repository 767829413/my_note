<?php
	function addUser($name) {
		if($name !== 'admin1') {
			//添加error,抛出异常
			throw new Exception('添加失败');	
		}
	}
	function updateUser($name) {
		if($name !== 'admin2') {
			throw new Exception('修改失败');
		}
	}
	function user_action($name1,$name2) {
		addUser($name1);
		updateUser($name2);
		echo '成功';
	}
	//使用异常机制
	try{
		echo '可以使用<br>';
		user_action('admin1','admin');
		echo '可以执行,没有异常';
	}catch(Exception $e){
		echo '<br/>操作失败,失败原因:'.$e->getMessage();
	}
?>