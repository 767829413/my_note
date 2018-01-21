<?php
/************************************************************************
	header('content-type:text/html;charset=utf-8');
	//单例模式

	//这是一个操作数据库的工具类
	final class DaoMysqli{
		//定义需要的属性
		//MySQL数据库的连接
		private $mysqli_link;
		//$instance 是一个静态属性,表示DaoMysql的一个对象实例
		private static $instance = null;

		//构造方法
		private function __construct($host, $user, $pw){
			//这里只连接一次数据库,节省资源
			$this->mysqli_link = mysqli_connect($host, $user, $pw);
		}
		//写一个静态方法,通过这个静态方法来创建对象实例
		public static function getSingleton($host, $user, $pw){
			//通过getSingleton 静态方法来创建对象
			//如何控制只能 new 一次
			if(self::$instance == null){
				self::$instance = new DaoMysqli($host, $user, $pw);
				if(!self::$instance){
					die("连接失败:".mysqli_connect_error());
				}
			}
			return self::$instance;
		}
		//阻止clone
		private function __clone(){
		}
	}
**************************************************************************/
	header('content-type:text/html;charset=utf-8');
	//单例模式

	//这是一个操作数据库的工具类
	final class DaoMysqli{
		//定义需要的属性
		//MySQL数据库的连接
		private $mysqli_link;
		//$instance 是一个静态属性,表示DaoMysql的一个对象实例
		private static $instance = null;

		//构造方法
		private function __construct($host, $user, $pw){
			//这里只连接一次数据库,节省资源
			$this->mysqli_link = mysqli_connect($host, $user, $pw);
		}
		//写一个静态方法,通过这个静态方法来创建对象实例
		public static function getSingleton($host, $user, $pw){
			//通过getSingleton 静态方法来创建对象
			//如何控制只能 new 一次
			//instanceof : 是类型运算符, 它用于判断某个变量是否是某个类的对象实例
			if(!self::$instance instanceof self){
				return self::$instance = new self($host, $user, $pw);
				if(!self::$instance){
					die("连接失败:".mysqli_connect_error());
				}
			}
			return self::$instance;
		}
		//阻止clone
		private function __clone(){
		}
	}


?>