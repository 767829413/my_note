<?php

	function jiSuan($i,$n,$oper){
		$res=0;
		switch($oper){
			case "+":
				$res=$i+$n;
				break;
			case "-":
				$res=$i-$n;
				break;
			case "*":
				$res=$i*$n;
				break;
			case "/":
				$res=$i/$n;
				break;
			case "%":
				$res=$i%$n;
				break;
			default:
				echo "error";
				break;
		}
		return $res;
	}

	$q=12;
	$b=45;
	$type='+';

	$p=jiSuan($q,$b,$type);
	echo"结果是=$p";
?>