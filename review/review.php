<?php
	
//	$arr=array(1,2,3,4,5,6,7,8);

/*	$temp=0;
	for($k=0;$k<count($arr)-1;$k++){
		$flag=false;
		for($i=0;$i<count($arr)-1;$i++){
			if($arr[$i]>$arr[$i+1]){
				$temp=$arr[$i];
				$arr[$i]=$arr[$i+1];
				$arr[$i+1]=$temp;
				$flag=true;
			}
		}
		if(!$flag){
			//没有进入循环,有序
			echo '已经有序<br/>';
			break;
		}
		$flag=false;
	}*/

/*	for($i=0;$i<count($arr);$i++){
		$min=$arr[$i];
		$m=$i;
		for($j=$i+1;$j<count($arr);$j++){
			if($min>$arr[$j]){
				$min=$arr[$j];
				$m=$j;
			}
		}
		$temp=$arr[$i];
		$arr[$i]=$arr[$m];
		$arr[$m]=$temp;
	}*/

/*	for($i=1;$i<count($arr);$i++){
		$a=$arr[$i];
		$b=$i-1;
		while($b>=0 && $a<$arr[$b]){
			$arr[$b+1]=$arr[$b];
			$b--;
		}
		$arr[$b+1]=$a;
	}*/


//	print_r($arr);


//	$arr=array(7,8,5,4,2,6,55,88,99);	

/*	function serach(&$arr,$n){
		$flag=false;
		for($i=0;$i<count($arr);$i++){
			if($n==$arr[$i]){
				echo "找到了,下标是:".$i;
				$flag=true;
			}
		}
		if(!$flag){
				echo "没有你需要的数";
				
			}
	}*/
/*	function sorting(&$arr){
		for($i=1;$i<count($arr);$i++){
			$a=$arr[$i];
			$b=$i-1;
			while($b>=0 && $a<$arr[$b]){
				$arr[$b+1]=$arr[$b];
				$b--;
			}
			$arr[$b+1]=$a;
		}
	}

	function hardSerach(&$arr,$find,$left,$right){
		$middle=round(($left+$right)/2);
		if($left>$right){
			echo "该数组无此数";
			break;
		}
		if($find>$arr[$middle]){
			hardSerach($arr,$find,$middle+1,$right);
		}elseif($find<$arr[$middle]){
			hardSerach($arr,$find,$left,$middle-1);
		}else{
			echo "找到了,下标是:".$middle;
		}
	}
	sorting($arr);
	print_r($arr);
	$left=0;
	$right=count($arr)-1;
	hardSerach($arr,99,$left,$right);*/

/*
	$arr=array(
		array(1,0,0,0,0,2),
		array(0,1,0,0,2,0),
		array(0,0,1,2,0,0),
		array(0,0,2,1,0,0),
		array(0,2,0,0,1,0)
	);
	for($i=0;$i<count($arr[0]);$i++){
		for($j=0;$j<count($arr);$j++){
			echo $arr[$j][$i]."&nbsp";
		}
		echo "<br/>";
	}
	
*/
/*
	class A{
		public $a;
		public $b;
		private function aa($d){
			echo "aa";	
		}
	}

	class B extends A{
		public function aa(){
			echo "bb";
		}
	}
	$as=new B();
	$as->aa();
*/
/*
	interface iAble{
	public function aa();
	}

	class A implements iAble{
		public function aa(){
		}
	}
*/
/*
	function a($a,$b){
		$c=date("Y-n-d G-i-s")."错误号:".$a."错误原因:".$b;
		echo $b;
	}
		function a1($a,$b){
		date_default_timezone_set('Asia/Shanghai');
		$c=date("Y-n-d G-i-s")."错误号:".$a."错误原因:".$b;
		echo $b;
		error_log($c."\r\n",3,"myerr.txt");
	}

	set_error_handler('a1',E_USER_ERROR);
//	set_error_handler('a',E_USER_WARNING);
	
	if(file_exists("a.txt")){
		$fp=fopen("a.txt","r");
	}else{
		trigger_error("卧槽,特么没有文件",E_USER_ERROR);
	}

	echo "ok";
*/

	class Df extends Exception{
	
	}

	function AAAA($cc){
		echo "高处不胜寒".$cc->getMessage();
	}

	set_exception_handler('AAAA');


	try{
			a(1000);
			b(9);
			echo "继续啊";
	
	}catch(Df $e){
		echo "失败的信息=".$e->getMessage()."<br/>";
		echo "失败的信息在:".$e->getLine()."行"."<br/>";
//		throw $e;
	}
	
	function a($a){
		if($a<100 && $a>0){
			echo "ok";
		}else{
			throw new Df("输入的数大于100或小于0");
		}
	}

	function b($a){
		if($a<10 && $a>0){
			echo "ok";
		}else{
			throw new Df("输入的数大于10或小于0");
		}
	}


?>