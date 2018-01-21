<?php
	header("content-type:text/html;charset=utf-8");
/*	abstract class Animal {		//一个类包含抽象方法时必须声明为抽象类
//		abstract public $name;		//不能定义一个抽象属性
		//当一个方法没有办法确定怎么写,只有子类继承后才能实现
		abstract public function cry();	//抽象类可以没有抽象方法
		//抽象方法不可以有方法体,包括{}!!	
		public function run(){		//抽象类可以包含非抽象方法
			echo "可以跑";
		}
	}
	//抽象类的主要价值体现在设计方面,实用性不大,主要让其它类来继承并实现抽象方法
//	$a = new Animal();		//抽象类不能实例化!!!

	abstract class Cat extends Animal {	
//		public function cry(){		//一个类继承了抽象类必须实现所有抽象方法否则它必须声明为抽象类
//			echo "小猫喵喵叫";
//		}
	}
*/
/*
	abstract class DB {
		//连接数据
		abstract protected function connect(array $arr);
		abstract protected function query(array $arr);
		
	}

	class MySQl_DB extends DB {
		protected function connect(array $arr){
			echo "连接MySQL操作";
		}
		protected function query(array $arr){
			echo "查询MySQL操作";
		}
	}

	class Oracle_DB extends DB {
		protected function connect(array $arr){
			echo "连接Oracle操作";
		}
		protected function query(array $arr){
			echo "查询Oracle操作";
		}
	}

	abstract class Test {
		public function test1(){
			echo "test1";
		}
		public static function test2(){
			echo "test2";
		}
	}
	
//	Test::test2();
*/
/*

	abstract class SuperMan {
		protected $name;
		protected $age;
		public function __construct($name,$age){
			$this->name = $name;
			$this->age = $age;
		}
		abstract protected function run();
		abstract protected function fly();
		abstract protected function attack();
	}

	class Spider_Man extends SuperMan {
		public function run(){
			echo "蜘蛛侠在跑";
		}
		public function fly(){
			echo "蜘蛛侠不会飞";
		}
		public function attack(){
			echo "蜘蛛侠喷蜘蛛丝攻击";
		}
	}

	class Batman extends SuperMan {
		public function run(){
			echo "蝙蝠侠在跑";
		}
		public function fly(){
			echo "蝙蝠侠用飞行器";
		}
		public function attack(){
			echo "蝙蝠侠靠高科技攻击";
		}
	}

	class Iron_Man extends SuperMan {
		public function run(){
			echo "钢铁侠在跑";
		}
		public function fly(){
			echo "钢铁侠有飞行装甲";
		}
		public function attack(){
			echo "钢铁侠有战斗装甲攻击";
		}
	}

	$s = new Spider_Man("蜘蛛侠1代",28);
	$b = new Batman('蝙蝠侠1代',30);
	$i = new Iron_Man('钢铁侠1代',35);
	
	$s->run();
	$s->fly();
	$s->attack();
	echo "<br/>";
	$b->run();
	$b->fly();
	$b->attack();
	echo "<br/>";
	$i->run();
	$i->fly();
	$i->attack();
	echo "<br/>";
*/
?>