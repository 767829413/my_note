<?php
	header("content_type:text/html;charset=utf-8");
	//traits的理解
	//实际需求--对代码的复用性有着显著的提高
	//案例展示 traits 技术
/**********************************************************	
	trait my_code{
		function getSum($n1,$n2){
			return $n1 + $n2;
		}
		function getSub($n1,$n2){
			return $n1 - $n2;
		}
		function getMax($n1,$n2,$n3){
			return max($n1,$n2,$n3);
		}
	}

	class A{
	}
	class B extends A{
		use my_code;	//引入trait 代码段
	}
	class C extends A{
		use my_code;
	}
	class D extends A{
	}
	class E{
		use my_code;
	}
	$a = new A;
	$b = new B;
	$c = new C;
	$e = new E;
	$d = new D;
//	echo $a->getSum(10,30);
	echo "<br/>";
	echo $b->getSum(10,30);
	echo "<br/>";
	echo $c->getSum(10,30);
	echo "<br/>";
//	echo $d->getSum(10,30);
	echo "<br/>";
	echo $e->getSum(10,30);
	echo "<br/>";
//	echo $a->getMax(10,30,1000);
	echo "<br/>";
	echo $b->getMax(1,5,9);
	echo "<br/>";
	echo $c->getMax(2,4,6);
	echo "<br/>";
//	echo $d->getMax(10,30,100);
	echo "<br/>";
	echo $e->getMax(7,6,2);
	echo "<br/>";
*********************************************************/
//-------------traits 技术的细节说明---------------
//1.方法发生重写时的优先级是当前子类的方法优先级大于trait 方法优先级大于基类方法
//2.当子类继承基类方法，同时又use了trait 中方法，子类继承的基类方法名与use的trait 方法名相同时，发生方法重写，以trait 方法优先级高
//------举例
/*********
	trait func_code{
		function abc(){
			echo "来自trait 的方法";
		}
	}
	class A{
		function abc(){
			echo "来自基类 的方法";
		}	
	}
	class B extends A{
		use func_code;
		function abc(){
			echo "来自子类 的方法";
		}
	}

	$b = new B();
	$b->abc();
*******************/
?>