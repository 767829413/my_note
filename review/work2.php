<?php
	class BankAccount{
		protected $accountnumber;
		private static $password;
		private static $balance;
		private static $cnum = 1;

		public function __construct($accountnumber,$password = '123456',$balance = 0.0){
			$this->accountnumber = $accountnumber;
			self::$password = $password;
			self::$balance = $balance;
			echo "欢迎登陆,当前余额为".self::$balance.'<br/>';
		}

		public function saveMoney($password,$number){
			if(self::$cnum > 3){
				die('密码错误过多,不能操作');
			}
			if($password !== self::$password){
				self::$cnum += 1;
				echo '密码错误<br/>';
				return;
			}
			if(!is_numeric($number) || $number < 0){
				die('存入金额错误<br/>');
			}
			self::$balance += $number;
			echo "存款成功当前账户为".$this->accountnumber."的余额是:".self::$balance.'<br/>';
		}
		public function getMoney($password,$number){
			if(self::$cnum > 3){
				die('密码错误过多,不能操作');
			}
			if($password !== self::$password){
				self::$cnum += 1;
				echo '密码错误<br/>';
				return;
			}
			if(!is_numeric($number) || $number > self::$balance ||  $number < 0){
				die('取出金额有错误<br/>');
			}
			self::$balance -= $number;
			echo "取款成功当前账户为".$this->accountnumber."的余额是:".self::$balance."<br/>";
		}
		public function query($password){
			if(self::$cnum > 3){
				die('密码错误过多,不能操作');
			}
			if($password !== self::$password){
				self::$cnum += 1;
				echo '密码错误<br/>';
				return;
			}
			echo "当前账户为".$this->accountnumber."的余额是:".self::$balance."<br/>";
		}
		public function changePwd($password,$number){
			if(self::$cnum > 3){
				die('密码错误过多,不能操作');
			}
			if($password !== self::$password){
				self::$cnum += 1;
				echo '密码错误<br/>';
				return;
			}
			if(!is_numeric($number)){
				die('设置密码必须为数字');
			}
			self::$password = $number;
			echo "当前账户为".$this->accountnumber."的密码修改成功,当前密码为".self::$password."<br/>";
		}
	}

	$account = new BankAccount('767829413','6217512',100);
	$account->saveMoney('6217512','100');
	$account->getMoney('6217512','50');
	$account->query('6217512');
	$account->changePwd('6217512','116345234');
	$account->changePwd('621751','116345234');
	$account->changePwd('621751','116345234');
	$account->changePwd('621751','116345234');
	$account->changePwd('621751','116345234');
	$account->changePwd('621751','116345234');
	$account->changePwd('621751','116345234');
	$account->changePwd('621751','116345234');

?>