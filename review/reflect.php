<?php
	header("content_type:text/html;charset=utf-8");
	//反射技术：当我们echo $对象  时，输出该对象的属性，成员方法等等信息
	//举个例子说明----------
	class Cat{
		public $name;
		protected $food;
		private $lover;

		public function __construct($name,$food,$lover){
			$this->name = $name;
			$this->food = $food;
			$this->lover = $lover;
		}
		public function showInfo(){
			echo "<br/>哈哈哈";
		}
		public function __tostring(){
			echo "<br/>__tostring";
			//返回类的相关信息，比如类名，所有成员方法，成员属性等等
			//初步接触反射机制（可以获取该类的所有信息）ReflectionClass(反射类)
			
			echo '<br/><pre>';
			//1.先创建一个反射对象,也就是说一个类本身也可以看做一个对象（一切皆对象）；
			$reflection_obj = new ReflectionClass($this);
			var_dump($reflection_obj);
			//2.通过反射对象获取该类的相关信息 【我是一个面向对象的程序员】
			//（1）类名
			echo "<br/>类名是".$reflection_obj->getName();
			//（2）获得所有的成员方法
			echo "<br/>成员方法".var_dump($reflection_obj->getMethods());
			//（3）获得所有属性
			echo "<br/>所有成员属性是".var_dump($reflection_obj->getProperties());

			return '';
		}
	}

	$cat = new Cat("小花猫","鱼肉","小白猫");

	echo $cat;

?>