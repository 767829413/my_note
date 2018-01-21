<?php
	header("content-type:text/html;charset=utf-8");
/**************************************************
	//内置标准类--如果我们希望把一些数据，以对象的属性方式存储，同时我们又不想定义一个类，可以考虑PHP的内置标准类stdClass[standard标准]
	//PHP的内置标准类 stdClass ，是系统默认提供的，不需要程序员去创建，而是直接使用就ok

	$obj = new stdClass;
	$obj->name = "beijing";
	$obj->age = 99;
	$obj->address = "shanghaiRod";
	echo "<pre>";
	var_dump($obj);
***************************************************/
/**************************************************
//其它数据类型转换为对象和对象转数组的说明
//在我们的开发中，有时会看到有人将基本数据类或数组转换为对象
	//------数组转换对象举例说明
	$person = array("name" => "qiaofeng","job" => "boos","skill" => "attack eighteen hard","house" => array("name" => "daliao","price" => 1000));
	$person_obj = (object)$person;

	echo "<pre>";
	var_dump($person_obj);
	echo $person_obj->name;
	echo $person_obj->house['name'];

**************************************************/
/*************************************************
	//基本数据类型转对象
	$apple_num = 20;
	$apple_obj = (object)$apple_num;
	echo "<pre>";
	var_dump($apple_obj);
	echo $apple_obj->scalar;
**************************************************/

/**************************************************
	//对象转数组
	
	class Cat{
		public $name = "小花猫";
		public $age = 5;
		protected $price = 155;
		private $lover = "小白猫";
		public function __set(){
		}
		public function __get(){
		}

	}

	$cat = new Cat;
	$cat->job = "love";
	echo "<pre>";
	var_dump($cat);

//	$cat_arr = (array)$cat;
//	$arr = $cat_arr;
	//对象即使转换为数组后，私有或受保护的对象任然不能访问
//	echo "<pre>";
//	var_dump($cat_arr);
	 
//	echo "<br/>小花猫喜欢的是".$cat_arr["Catlover"];
//	echo "<br/>小花猫的价格是".$cat_arr["*price"];

***************************************************/
//---------------对象序列化与反序列化
//所谓对象序列化是指： 将一个对象转换成一个字符串， 这个字符串包括 属性名， 属性值， 属性类型，和该对象对应的类名，简单说就是把一个对象的数据与数据类型转换成字符串.
//--------实际需求：要求将一个对象保存到文件中（freeze 冷冻）
	//-------------对象序列化
	class Cat{
		public $name;
		protected $age;
		private $food;

		public function __construct($name,$age,$food){
			$this->name = $name;
			$this->age = $age;
			$this->food = $food;
		}
	}

	$cat = new Cat("机器猫",100,"铜锣烧");
	//将 $cat 这个对象保存到文件中,在保存对象前，需要将对象序列化
	//通过serialize()序列化后的对象 O:3:"Cat":3:{s:4:"name";s:9:"机器猫";s:6:" * age";i:100;s:9:"铜锣烧";}
	file_put_contents("G:/PHPLog/test.log",serialize($cat));

//	echo "ok";
	 //-------------------对象反序列化
	 //反序列化就是： 将一个由对象序列化的字符串，重新恢复成对应的对象。

//代码说明：unserialize.php
?>