<?php
	//DAOMySQLi.class.php
	
	//完成对MySQL数据库操作
	//开发类
	//1. 定类名
	//2. 定成员属性
	//3. 定成员方法 [查询,DML操作]
	//final防止继承
	final class DAOMySQLi {

		// 将成员属性以下划线_开头是一种风格,老外比较喜欢
		//主机名
		private $_host;
		//用户名
		private $_user;
		//密码
		private $_pwd;
		//数据库名
		private $_dbname;
		//端口
		private $_pork;
		//字符集
		private $_charset;

		//因为是单例模式
		// $_instance 表示 DAOMySQLi的一个对象实例
		private static $_instance; 

		//有MySQLi连接[对象]
		private $_mysqli;

		private function __construct(array $option) {

			//初始化MySQL数据库连接信息
			$this->initInValues($option);

			//初始化MySQL连接配置
			$this->init_MySQLi();
		}

		private function initInValues(array $option) {
			//验证数据
			$this->_host = isset($option['host'])? $option['host'] : '';
			$this->_user = isset($option['user'])? $option['user'] : '';
			$this->_pwd = isset($option['pwd'])? $option['pwd'] : '';
			$this->_dbname = isset($option['dbname'])? $option['dbname'] : '';
			$this->_pork = isset($option['pork'])? $option['pork'] : '';
			$this->_charset = isset($option['charset'])? $option['charset'] : '';

			if(!$this->_host || !$this->_user || !$this->_pwd || !$this->_dbname || !$this->_pork || !$this->_charset) {
				exit('参数传入有误!');
			}
		}

		private function init_MySQLi() {
			//初始化我们的 _mysqli
			$this->_mysqli = new MySQLi($this->_host,$this->_user,$this->_pwd,$this->_dbname,$this->_pork);

			if($this->_mysqli->connect_errno) {
				die('连接失败,错误信息是:'.$this->_mysqli->connect_error);
			}

			//设置字符集
			$this->_mysqli->set_charset($this->_charset);
		}

		//定义一个静态方法

		public static function getSingleton(array $option) {
			//判断是否有对象实例
			if(!self::$_instance instanceof self) {
				//创建一个对象实例
				self::$_instance = new self($option);
			}
			return self::$_instance;
		}

		//防止克隆
		private function __clone() {}

		//编写一个成员方法完成对数据库的表的查询
		public function fetch_all($sql) {
			
			//定义一个空数组
			$arr = array();

			if($res = $this->_mysqli->query($sql)) {
				//返回$res对象返回给调用者
				//问题1:一般情况下希望将结果对象尽快释放
				//问题2:对象能干的就让对象干,返回的尽量是数组
				//解决思路:
				//1.结果集$res数据传给数组$arr
				//直接使用while($arr[] = $res->fetch_assoc())会导致传回来一个null值
				while($row = $res->fetch_assoc()) {
					$arr[] = $row;
				}
				//2.释放$res
				$res->close();
				//3.返回数组
				return $arr;
			}else {
				die('获取失败,SQL语句是'.$sql.'<br/>失败原因是'.$this->_mysqli->error);
			}
			
		}

		//编写一个方法,完成对表的DML操作

		public function query($sql) {
			if($this->_mysqli->query($sql)) {
				$id = $this->_mysqli->insert_id;
				//一旦关闭mysqli连接,剩下的方法将无法正确执行
				//$this->_mysqli->close();
				return $id;
			}else{
				die('操作失败,SQL语句是'.$sql.'<br/>失败原因是'.$this->_mysqli->error);
			}
			
		}
		//获取单条记录成员方法
		public function fetch_one($sql) {
			//定义一个空数组
			$arr = array();

			if($res = $this->_mysqli->query($sql)) {
				if($arr = $res->fetch_assoc()) {
					//释放$res,$_mysqli
					$res->close();
					//返回数组
					return $arr;
				}else{
					exit('获取失败,失败的原因是:'.$this->_mysqli->error);
				}		
			}else {
				die('查询失败,SQL语句是'.$sql.'<br/>失败原因是'.$this->_mysqli->error);
			}
		}
		
		public function close_link() {
			$this->_mysqli->close();
		}
	}	
?>