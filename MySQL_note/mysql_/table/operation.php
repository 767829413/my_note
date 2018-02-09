<?php
	require_once('Table.class.php');
	$d = new Table();
	if($_REQUEST['choice']=="drop"){
		$d->DropTB();
		$a = "display:none";	
	}elseif($_REQUEST['choice']=="modify"){
		$arr=$d->charMF();
		$dbname=$_REQUEST['dbname'];
	}elseif($_REQUEST['choice']=="search"){
		$d->searchTB();
		$a = "display:none";
	}
?>
<!DOCYTYPE html>
<html>
<head>
 <meta charset='utf-8'/>
 <title></title>
</head>
<body>
 <form style="<?php echo $a; ?>" action='View2.php' method='post'>
	表名:<input type='text' name='new'/>
	<input type="hidden" name='tbname' value="<?php echo $_REQUEST['tbname'] ?>">
	<input type="hidden" name='dbname' value="<?php echo $_REQUEST['dbname'] ?>">
	<input type='submit' value='确认'/>
 
 </form>
</body>
</html>