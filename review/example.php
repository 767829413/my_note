<?php
	header('content-type:text/html;charset=utf-8');

		class A {
			private $num1 = '100';
			protected $num2 = '200';
			public $num3 = '300';

			public function show1(){
				echo "<br/> num3 = ".$this->num3;
			}
			protected function show2(){
				echo "<br/> num2 = ".$this->num2;
			}
			protected function show3(){
				echo "<br/> num1 = ".$this->num1;
			}
		}

		class B extends A {
			private $num1 = '1';
			protected $num2 = '2';
			public $num3 = '3';

			public function show1(){
				echo "num3 = ".$this->num3;
				parent::show1();
			}
			public function show2(){
				echo "num2 = ".$this->num2;
				parent::show2();
			}
			public function show3(){
				echo "num1 = ".$this->num1;
				parent::show3();
			}
		}
		$b = new B();
		$b->show1();	//3 3
		echo "<br/>";
		$b->show2();	//2 2
		echo "<br/>";
		$b->show3();	//1 100

/*********************************
由上面的代码可以看出,当子类去访问父类属性时,parent::父类方法(
		$this->属性名;
	)
如果这个属性被子类继承,则输出子类的值,如果没有继承则输出父类的值
*********************************/
?>