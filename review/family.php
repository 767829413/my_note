<?php
	class GrandFather{
		public $name;

		function cry(){
			echo "可以喊叫";
		}
		function run(){
			echo "可以跑";
		}
		function Gsort(&$arr){
			echo "<br/>爷爷的方法<br/>";
			$temp = 0;
			for($i = 0;$i < count($arr);$i++){
				for($j = $i+1;$j < count($arr);$j++){
					if($arr[$i] > $arr[$j]){
						$temp = $arr[$i];
						$arr[$i] = $arr[$j];
						$arr[$j] = $temp;
					}
				}
			}
		}
	}

	class Father extends GrandFather{
		public $work;
		
		private function working(){
			echo "<br/>父亲有工作<br/>";
		}
		function Gsort(&$arr){
			GrandFather::Gsort($arr);
//			Son::Gsort($arr);
			echo "<br/>父亲的方法<br/>";
			for($i = 1;$i < count($arr);$i++){
				$in_num = $arr[$i];
				$dw_num = $i-1;
				while($dw_num >= 0 && $in_num < $arr[$dw_num]){
					$arr[$dw_num+1] = $arr[$dw_num];
					$dw_num--;
					$flag = true;
				}
				if($i !== $dw_num+1){
					$arr[$dw_num+1] = $in_num;
				}
			}
		}
	}

	class Son extends Father{
		public $school;

		function Gsort(&$arr){
			GrandFather::Gsort($arr);
			Father::Gsort($arr);
			echo "<br/>儿子的方法<br/>";
			for($i = 0;$i < count($arr);$i++){
				$min = $arr[$i];
				$dw_num = $i;
				for($j = $i+1;$j < count($arr);$j++){
					if($min > $arr[$j]){
						$dw_num = $j;
					}
				}
				$arr[$i] = $arr[$dw_num];
			}
		}
	}
	$g = new GrandFather();
	$f = new Father();
	$s = new Son();

	$arr = array(2,6,7,1,9,10,55,0);
	echo "<pre>";
//	$g->Gsort($arr);
//	var_dump($arr);
//	$f->Gsort($arr);
//	var_dump($arr);
//	$s->Gsort($arr);
//	var_dump($arr);

?>