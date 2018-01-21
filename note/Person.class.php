<?php
class Person{
		public $age;
		public $name;
		public function speak(){
			echo "我是一个好人".'<br/>';
		}
		public function jisuan($a=1000){
			$temp=0;
			for($i=1;$i<=$a;$i++){
				$temp+=$i;
			}
			return $temp;	//return究竟到什么地方去? 谁调用就返回给谁
		}
		public function jisuan1($n){
			$temp=0;
			for($i=1;$i<=$n;$i++){
				$temp+=$i;
			}
			return $temp;
		} 
		public function add($a,$b){
			return $a+$b;
		}
		public function findMax($arr){
			$max=$arr[0];
			$down=0;
			for($i=1;$i<count($arr);$i++){
				if($max<$arr[$i]){
					$max=$arr[$i];
					$down=$i;
				}
			}
			$max=$arr[$down];
			return $max;
		}
		public function printImg($n){
			for($i=1;$i<=$n;$i++){
				for($k=1;$k<=$n-$i;$k++){
					echo "&nbsp;";
				}
				for($j=1;$j<=($i-1)*2+1;$j++){
					echo "*";
				}
				echo "<br/>";
			}
		}
	}
?>