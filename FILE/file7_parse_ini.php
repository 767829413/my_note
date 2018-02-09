<?php
	$file_path = 'config.ini';
	function my_parse_ini_file($file_path){
		function getFileContent($file_path){
			if(!file_exists($file_path)){
				exit('文件不存在');
			}
			$fp = fopen($file_path,'r');
			$buffer = '';
			while(!feof($fp)){
				$buffer .= fgets($fp);
				$buffer = str_replace("\r\n",' ',$buffer);
				$buffer = str_replace("=",' ',$buffer);
			}
			fclose($fp);
			return $buffer;
		}
		$buffer = getFileContent($file_path);
		$buffer = explode(' ',$buffer);
		for($i=0;$i<count($buffer);$i++){
			if($i%2 == 0){
				$arr[$buffer[$i]] = $buffer[$i+1];
			}
		}
		return $arr;
	}
	var_dump(my_parse_ini_file($file_path));
	echo '<br>';
	var_dump(parse_ini_file($file_path));
?>