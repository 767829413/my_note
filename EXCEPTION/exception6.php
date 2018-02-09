<?php
	try{
		$i = 8/0;
	}catch(Exception $e){
		echo 'ok<br/>';
		echo $e->getMessage();
	}
?>