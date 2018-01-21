<?php
	header("content-type:text/html;charset=utf-8");
	//反射机制的再次接触
	//反射机制的基本介绍：php5及以上版本具有完整的反射API，添加了对类，接口，函数，方法和扩展进行反向工程的能力，此外，反射API提供了方法来取出函数，类，方法中的文档注释
	//反射机制的使用场景
	//1.写底层框架（比如TP框架的一个控制器调度原理）
	//2.扩展类的功能
	//3.管理大量的未知类

	//反向代理调用：使用反射机制代理调用某个对象方法

	class Dog{
		public $name;
		protected $food;
		private $lover;

		public function __construct($name,$food,$lover){
			$this->name = $name;
			$this->food = $food;
			$this->lover = $lover;
		}

		public function cry($sound){
			echo "<br/>小狗的叫声是".$sound.",小狗的名字是".$this->name.",喜欢的食物是".$this->food.",喜欢隔壁的".$this->lover;
		}
	}

//	$dog = new Dog("小土狗","牛肉","小白猫");	
//	$dog->cry("汪汪汪");
/***********使用反射机制来实现代理调用***************/
	//1.创建一个ReflectionClass对象['Dog']【就是这个Dog类的对象实例】
	$reflection_obj = new ReflectionClass("Dog");
	//2.创建一个Dog对象实例，不使用传统的new Dog
	$cat = $reflection_obj->newInstance("小土狗","牛肉","小白猫");
	echo "<pre>";
//	var_dump($cat);
	//3.得到反射方法cry
	$reflection_method_cry = $reflection_obj->getMethod("cry");
//	var_dump($reflection_method_cry);
	//4.通过反射方法代理调用cry
	$reflection_method_cry->invoke($cat,"汪汪汪");



	


?>