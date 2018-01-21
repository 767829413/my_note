<?php
	function arr($array,$switch){
		if($switch=="max"){
			for($i=0;$i<count($array)-1;$i++){
				if($array[$i]<$array[$i+1]){
					$array[$i+1]=$array[$i+1];
				}elseif($array[$i]>=$array[$i+1]){
					$array[$i+1]=$array[$i];
				}
			}
		}elseif($switch=="min"){
			for($i=0;$i<count($array)-1;$i++){
				if($array[$i]<$array[$i+1]){
					$array[$i+1]=$array[$i];
				}elseif($array[$i]>=$array[$i+1]){
					$array[$i+1]=$array[$i+1];
				}
			}		
		}
		return $array[count($array)-1];
	}

?>