<?php
//我们一个计算+,-,*,/的代码集合----->函数	
//1.function 是一个关键字---不可修改
//2. jisuan-----函数名(由程序员设定)
//3.$i,$n,$oper---函数的参数列表(形参)
	function jiSuan($i,$n,$oper){
//$res存放运算结果
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
//--下面的return语句表示返回一个结果
		return $res;
	}
?>