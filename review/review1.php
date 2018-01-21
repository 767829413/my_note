<?php
	function aaa($n){
		if($n==1 || $n == 2){
			return 1;
		}
		return aaa($n-1) + aaa($n-2);
	}
	echo aaa(5);
?>