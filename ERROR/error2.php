<?php
	header("content_type:text/html;charset=utf-8");
	function my_error($errno,$error){
		echo '<br/>错误号是:'.$errno;
		echo '<br/>错误信息是:'.$error;
	}
	set_error_handler('my_error',E_ALL);
/*	$fp = fopen('bbb.txt','r');
	echo 'ok';*/
	class a {
		private $a = 10;
	}
	$q = new a;
	echo $q->a;
?>