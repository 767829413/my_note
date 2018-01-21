<?php
	function arrayMax($array){
		for($i=0;$i<count($array)-1;$i++){
			if($array[$i]<$array[$i+1]){
				$array[$i+1]=$array[$i+1];
			}elseif($array[$i]>=$array[$i+1]){
				$array[$i+1]=$array[$i];
			}
		}
	return $array[count($array)-1];
	}
?>