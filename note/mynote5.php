<?php
date_default_timezone_set('Asia/shanghai');
//******排序是程序员的基本功**********
/*
---所谓排序就是对一组数据,按照某个顺序排列的过程
***排序分两大类:
一.外部排序:因数据量太大,借助外部存储或文件进行排序
二.内部排序:将数据调入内存进行排序
------<1>冒泡法------------
------<2>选择排序法--------
------<3>插入排序法--------
------<4>快速排序法--------

(1)交换式排序法:通过数据值比较之后,依据判断规则对数据位置进行交换,以达到排序的目的.
1.冒泡排序法[Bubble sort]
2.快速排序法[Quick  sort]
------------------------------
<1>冒泡排序法:
**基本思想:像气泡一样,大的就上去,小的就下来(从大到小与从小到大都可以)
*/
//-------案例说明----------
//	$arr=array(1,2,3,4,5,6,7,8);
//	$temp=0;	//这是中间变量
	//把上述数组从小大排序
	//外层循环
/*	for($i=0;$i<count($arr)-1;$i++){
		for($j=0;$j<count($arr)-1-$i;$j++){

			//if为真说明前面的数比后面的数大,交要交换
			if($arr[$j]>$arr[$j+1]){
				$temp=$arr[$j];
				$arr[$j]=$arr[$j+1];
				$arr[$j+1]=$temp;
			}
		}
	}
	//输出数组
	print_r($arr);*/
//封装上诉案例为用户自定义函数
/*	function bubble_Sort(&$myarr){	//采用地址符--&后,就直接将函数返回值赋予了所需排序的数组
		$temp=0;
		for($i=0;$i<count($myarr)-1;$i++){
			for($j=0;$j<count($myarr)-1-$i;$j++){
				if($myarr[$j]>$myarr[$j+1]){
					$temp=$myarr[$j+1];
					$myarr[$j+1]=$myarr[$j];
					$myarr[$j]=$temp;
				}
			}
		}
//		return $myarr;
	}
	$arr=array(0,5,-1);
//	$arr1=array(5,0,-1);
//	$arr=bubble_Sort($arr); //采用return就需要在函数调用完成后,将函数返回值赋予所需排序的数组,function bubble_Sort(&$myarr)--------------不需要地址符------&
	bubble_Sort($arr);
	print_r($arr);*/
//---------上面的案例可以看出:
//-----数组默认传递的是值,不是地址!!!!!!!!!!---------
/*
------------选择排序法--------------------------

*/
//********案例----------
/*	$arr=array(5,4,8,7,6,9,2,1,3);
	$temp=0;
	for($i=0;$i<count($arr)-1;$i++){
		$myMin=$arr[$i];
		$minIndex=$i;
		for($j=$i+1;$j<count($arr);$j++){
			if($myMin>$arr[$j]){
				$myMin=$arr[$j];
				$minIndex=$j;
			}
		}
		$temp=$arr[$i];
		$arr[$i]=$arr[$minIndex];
		$arr[$minIndex]=$temp;

	}

	
	print_r($arr);*/
/*------------插入排序法--------------------------*/
//个人理解是将数组中的第一个数看作有序的,分别将数组中第其它的数与之比较,大于就在前面,小于就在后面,然后将比较后的数当作有序数组,重复开始上面动作,直至排序完成
//	$arr=array(541,8,56,460.1,46,-4,-215,8974,-695,6.23,-9999.1);
//	$temp=0;
/*------------------------------------*
	for($i=1;$i<count($arr);$i++){	//|
		for($j=0;$j<$i;$j++){		//|
			if($arr[$j]>$arr[$i]){	//|
				$temp=$arr[$i];		//| 
				$arr[$i]=$arr[$j];	//|
				$arr[$j]=$temp;		//|
			}						//|
		}							//|
	}								//|
*-------------------------------------*/
//--------插入排序---------
/*	for($i=1;$i<count($arr);$i++){	 //将需要插入的元素插入合适的位置
		$insert=$arr[$i];
		$b=$i-1;
		while($b>=0 && $insert<$arr[$b]){	//将后面假设的无序数组按顺序选出一个值与假的前面有序数组进行找位置
			$arr[$b+1]=$arr[$b];
			$b--;
		}
		if($i != ($b+1)){
			$arr[$b+1]=$insert;
		}
	}*/
//---------冒泡排序-------------(优化)
/*	$flag=false;
	for($i=0;$i<count($arr)-1;$i++){  //最外层for()对应找多少次最大(或最小)的数并抛出
		for($j=0;$j<count($arr)-1-$i;$j++){ //内层for()对应是找出最大(或最小)的数
			if($arr[$j]>$arr[$j+1]){
				$temp=$arr[$j];
				$arr[$j]=$arr[$j+1];
				$arr[$j+1]=$temp;
				$flag=true;
			}
		}
		if(!$flag){
			//说明数组有序
			echo '数组已经有序!!';
			break;
		}
		$flag=false;
	}*/
//----------选择排序-------------------
/*	for($i=0;$i<count($arr)-1;$i++){	//外部for()进行数组外置的交换
		$min=$arr[$i];
		$down=$i;
		for($j=$i+1;$j<count($arr);$j++){	//内部for()不参与数组元素位置的交换
			if($min>$arr[$j]){
				$min=$arr[$j];
				$down=$j;
			}
		}
		$temp=$arr[$i];
		$arr[$i]=$arr[$down];
		$arr[$down]=$temp;	
	}*/
//	print_r($arr);
//---从效率上看,冒泡的效率小于选择选择排序法小于插插入排序法
//----冒泡排序法<选择排序法<插入排序法--------
//--效率需要考虑时间和空间综合因素-------
//----(快速排序法牺牲空间提升时间)------
/***************查找************************/
//-------<1>.顺序查找---------------
/*顺序查找:对某个数组按照顺序,一个一个比较,然后找到需要的数据*/
//--------案例(要求从一个数组中查一个数,找到了就打印下标,如果找不到就输出查无此数)--------------
	$arr=array(46,90,900,0,46,-1);
/*	function searchOrder(&$arr,$findValue){
		$flag=false;
		foreach($arr as $key=>$val){
			if($val==$findValue){
				echo '找到了,下标为'.$key.'<br/>';
				$flag=true;
//				break;
			}
		}
		if(!$flag){
			echo 'sorry!!查无此数';
		}
	}*/
/*	function searchOrder(&$arr,$findValue){
		$flag=false;
		for($i=0;$i<count($arr);$i++){
			if($findValue==$arr[$i]){
				echo "查询的数存在,下标为$i".'<br/>';
				$flag=true;
//				break;
			}
		}
		if(!$flag){
			echo "查无此数,可以打打飞机咯!!!";
		}
	}
	$find=46;
	echo date('Y-n-d G:i:s')."<br/>";
	echo searchOrder($arr,$find);
	echo date('Y-n-d G:i:s')."<br/>";*/
/*	function searchOrder(&$arr,$findValue){
		$flag=false;
		$a=round((0+count($arr)-1)/2);
		if($findValue>=$arr[$a]){
			for($i=$a;$i<count($arr)-1;$i++){
				if($findValue==$arr[$i]){
					echo "已找到,该数下标是$i"."<br/>";
					$flag=true;
//					break;
				}
			}
		}elseif($findValue<$arr[$a]){
			for($i=0;$i<$a;$i++){
				if($findValue==$arr[$i]){
					echo "已找到,该数下标是$i"."<br/>";
					$flag=true;
//					break;
				}
			}
		}
		if(!$flag){
			echo "查无此数,去你妈逼!!!"."<br/>";
		}
	}
	$arr=array(1,90,900,999,1234,86);
	$findValue=999;
	echo date('Y-n-d G:i:s')."<br/>";
	searchOrder($arr,$findValue);
	echo date('Y-n-d G:i:s');*/
//-------<2>.二分查找法!!!!!!!!!!!!!!---------------
/*二分查找的应用的重要前提!!!----------所要查找的数组是一个有序的数组,如果该数组不会有序的,则必须先排序,再查找!!!!!!!!!!!!*/
//首先找到数组的中间数,然后与要查找的数进行比较,如果小于要查找的数就向右查找,如果大于要查找的数就向左边查找.如果恰好等于,中间数为所查找的数!!	
//*************案例讲解*****************
/*	function searchOrder(&$arr,$findValue,$left,$right){
		if($left>$right){
			echo "该数不存在!!";
			return;
		}
		$middle=round(($left+$right)/2);
		if($findValue>$arr[$middle]){
			searchOrder($arr,$findValue,$middle+1,$right);
		}elseif($findValue<$arr[$middle]){
			searchOrder($arr,$findValue,$left,$middle-1);
		}else{
			echo "找到了,该数下标为$middle"."<br/>";
		}
	}
	$arr=array(1,90,900,999,1234,8699);
	$findValue=8699;
	$left=0;
	$right=count($arr)-1;
	searchOrder($arr,$findValue,$left,$right);*/
/************多维数组(主要说二维数组)********************/
//-----------二维数组的基本语法--------------------
/*	$arr=array(array(1,2,3),array(4,5,6),array(7,8,9));
//	print_r($arr);
	$arr1[0]=array(1,0);
-----二维数组可以用于类似于横纵坐标交叉的程序,比如地图等等-----*/
//-----二维数组在内存中存在的形式------------------------
//	$arr=array(array(1,2,3),array(4,5,6),array(7,8,9));
//	echo $arr[0][2];
/******************入门案例*******************/
/*	$arr=array(
	array(0,0,0,0,0,0,1),
	array(0,0,1,0,0,0,1),
	array(0,2,0,3,0,0,8888,2/5),
	array(0,0,0,0,0,0,)
	);
	for($i=0;$i<count($arr);$i++){
		for($j=0;$j<count($arr[$i]);$j++){
			echo $arr[$i][$j]."&nbsp;";
		}
		echo "<br/>";
	}
//---希望访问3----
	echo $arr[2][3];*/
//------二维数组矩阵转置------------
/*	$arr=array(
	array(1,2,3,4,5),
	array(6,7,8,9,10),
	array(1,6,9,6,9),
	array(2,5,3,2,6),
	array(0,1,3,5,8)
	);
	for($i=0;$i<count($arr[$i])-1;$i++){
		for($j=0;$j<count($arr);$j++){
			echo $arr[$j][$i]."&nbsp;";
		}
		echo "<br/>";
	}*/
	
?>