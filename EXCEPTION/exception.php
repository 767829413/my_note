<?php
	function test($name1,$name2) {
		$res1 = test1($name1);
		$res2 = test2($name2);
		if($res1 && $res2) {
			echo '成功';
		}else{
			echo '失败';
		}
	}
	function test1($name) {
		if($name == 'admin1') {
			return true;
		}else{
			return false;
		}
	}
	function test2($name) {
		if($name == 'admin2') {
			return true;
		}else{
			return false;
		}
	}

	test('admin','admin2');
?>