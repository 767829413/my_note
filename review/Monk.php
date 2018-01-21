<?php
	class Monk{
		private $name;
		private $age;
		private $sex;
		private $skill;
/*
		private function sort_Arr(&$arr){
			for($i = 1;$i < count($arr);$i++){
				$in_num = $arr[$i];
				$dw_num = $i-1;
				while($dw_num >=0 && $arr[$dw_num] > $in_num){
					$arr[$dw_num+1] = $arr[$dw_num];
					$dw_num--;
				}
				$arr[$dw_num+1] = $in_num;
			}
		}

		private function merge_Arr($arr1,$arr2){
			$res = $arr1 + $arr2;
			return $res;
		}

		private function find_Num($arr,$num){
			for($i = 0;$i < count($arr);$i++){
				if($arr[$i] == $num){
					$res = $i;
					break;
				}else{
					$res = -1;
				}
			}
			return $res;
		}

		public function __call($name,$val){
			if($name == "play"){
				if(count($val) == 1){
					$this->sort_Arr($val[0]);
					echo "<br/>和尚Monk完成了数组排序任务!<br/>";
					return $val[0];
				}
				if(count($val) == 2){
					if(is_array($val[1])){
						echo "<br/>和尚Monk完成了数组合并任务!<br/>";
						return $this->merge_Arr($val[0],$val[1]);
					}else{
						echo "<br/>和尚Monk完成了数组查找任务!<br/>";
						return $this->find_Num($val[0],$val[1]);
					}
				}
			}
		}

**********************************************************************************/
		static function sort_Arr(&$arr){
			for($i = 1;$i < count($arr);$i++){
				$in_num = $arr[$i];
				$dw_num = $i-1;
				while($dw_num >=0 && $arr[$dw_num] > $in_num){
					$arr[$dw_num+1] = $arr[$dw_num];
					$dw_num--;
				}
				$arr[$dw_num+1] = $in_num;
			}
		}

		static function merge_Arr($arr1,$arr2){
			$res = $arr1 + $arr2;
			return $res;
		}

		static function find_Num($arr,$num){
			for($i = 0;$i < count($arr);$i++){
				if($arr[$i] == $num){
					$res = $i;
					break;
				}else{
					$res = -1;
				}
			}
			return $res;
		}

		static function __callstatic($name,$val){
			if($name == "play"){
				if(count($val) == 1){
					self::sort_Arr($val[0]);
					echo "<br/>和尚Monk完成了数组排序任务!<br/>";
					return $val[0];
				}
				if(count($val) == 2){
					if(is_array($val[1])){
						echo "<br/>和尚Monk完成了数组合并任务!<br/>";
						return self::merge_Arr($val[0],$val[1]);
					}else{
						echo "<br/>和尚Monk完成了数组查找任务!<br/>";
						return self::find_Num($val[0],$val[1]);
					}
				}
			}
		}
	}

	$m = new Monk();
	$arr1 = array(0,8,4,6,7,3,1);
	$arr2 = array(1,2,3,4);
	$arr3 = array(6,7,8,9,11,12,13);
	$arr1 = Monk::play($arr1);
	echo "<pre>";
	var_dump($arr1);
	var_dump(Monk::play($arr2,$arr3));
	var_dump($arr1);
	echo '<br/>要找的数下标是:'.Monk::play($arr3,11);

?>