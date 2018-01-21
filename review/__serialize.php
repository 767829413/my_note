<?php
	class Dog{
		public $name;
		protected $age;
		private $food;

		public function __construct($name,$age,$food){
			$this->name = $name;
			$this->age = $age;
			$this->food = $food;
		}
		//如果我们没有写__sleep 默认将所有属性序列化
		public function __sleep(){
			//echo "<br/> __sleep";
			//程序员可以在这里决定那些属性被序列化
			return array("name","age","food");
		}
		public function __wakeup(){
			echo "<br/> __wakeup";
			//程序员可以在这里决定： 对某些属性进行初始化，或改变，同时主要是为了恢复资源，比如连接数据库等等
			$this->name = "藏獒";
		}
	}

	$dog = new Dog('哮天犬',300,"骨头");

	$dog_str = serialize($dog);
	echo "<pre>";
	var_dump($dog_str);

	$dog_obj = unserialize($dog_str);
	var_dump($dog_obj);
?>