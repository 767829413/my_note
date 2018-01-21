<!-- 有问题在关于类的函数调用-->
<?php
	class GirlFriend{
		private $name;
		private $age;
		private $cute;
		private static $instance = null;

		private function __construct($name,$age,$cute){
			$this->name = $name;
			$this->age = $age;
			$this->cute = $cute;
			self::showGirl();
		}
		private function __clone(){
		}
		public static function getSingleton($name,$age,$cute){
			if(!self::$instance instanceof self){
				self::$instance = new self($name,$age,$cute);
			}
//				self::showGirl();
				return self::$instance;
		}
		private function showGirl(){
			echo '女朋友的名字是:'.$this->name.'<br/>女朋友的年龄是:'.$this->age.'<br/>女朋友的颜值是:'.$this->cute.'<br/>';
		}
	}

	$girl1 = GirlFriend::getSingleton('荣荣',26,10);
	$girl2 = GirlFriend::getSingleton('美丽',24,6);

	
	echo "<br/>-----------<br/>";
	var_dump($girl1);
	echo "<br/>-----------<br/>";
	var_dump($girl2);

?>