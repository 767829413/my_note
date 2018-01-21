<?php
	header("content_type:text/html;charset=utf-8");
	date_default_timezone_set("PRC");
	echo "<pre>";
	echo date("Y-m-d s:u")."<br/>";
	for($i=0;$i<=100;$i++){
		for($j=0;$j<=100;$j++){
			for($k=0;$k<=100;$k++){
				if($i+$j+$k==100 and (5*$i+3*$j+$k/3)==100){
					echo "公鸡是".$i."只,母鸡是".$j."只,小鸡是".$k."只<br/>";
				}
			}
		}
	}
	echo date("Y-m-d s:u")."<br/>";
/*	for($i=0;$i<=100;$i++){
		for($j=0;$j<=100-$i;$j++){
			for($k=0;$k<=100-$i-$j;$k++){
				if($i+$j+$k==100 and (5*$i+3*$j+$k/3)==100){
					echo "公鸡是".$i."只,母鸡是".$j."只,小鸡是".$k."只<br/>";
				}
			}
		}
	}
*/
?>