<?php
	header('content-type:text/html;charset=utf-8');
	interface iUsb{
		public const A = 111;	//接口中属性只能是常量,但不能用protected,private修饰,默认是public的
		public function connect();	//接口中方法不能有方法体包括{}!!!接口中所有方法都是abstract方法,但是在接口中不能用abstract修饰,道理上也讲不通
		//接口中所有方法都必须公开public
	}
	interface iAdd{
		public function add();	
	}
	interface iSuper extends iUsb,iAdd {	//接口可以继承接口,而且可以继承多个接口
	}
	class Iphone implements iUsb,iAdd {	//某个类可以实现多个接口,接口名用,隔开
		public function connect(){	//某个类实现接口必须把接口中所有方法实现!!!
			echo "连接电脑";
		}
		public function add(){
			echo "添加设备";
		}
	}

	class Ilike implements iSuper {	
		public function connect(){
			echo "连接电脑";
		}
		public function add(){
			echo "添加设备";
		}
	}
	//借口不能实例化
//	$i = new iUsb();
	$i = new Iphone();
	echo Iphone::A;
	$like = new Ilike();
	echo Ilike::A;
	class Test {
	}
//	interface iTest extends Test {	//接口不能继承类!!!!!!!!!!
//	}
	class YTest extends Ilike implements iUsb,iAdd {
		public function connect(){	//某个类实现接口必须把接口中所有方法实现!!!
			echo "连接999电脑";
		}
		public function add(){
			echo "添加999设备";
		}
	}
	$test =new YTest();
	$test->connect();
	$test->add();
?>