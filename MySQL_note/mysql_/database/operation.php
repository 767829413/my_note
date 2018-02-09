<?php
	require_once('Database.class.php');
	$d = new Database();
	if($_REQUEST['choice']=="drop"){
		$d->DropDB();
		$a = "display:none";	
	}elseif($_REQUEST['choice']=="modify"){
		$arr=$d->charMF();
		$dbname=$_REQUEST['dbname'];
	}
?>
<!DOCYTYPE html>
<html>
<head>
 <meta charset='utf-8'/>
 <title>提交数据库名</title>
</head>
<body>
 <form style="<?php echo $a; ?>" action='View2.php' method='post'>
	字符集:<select name='charset'>
	<?php foreach($arr as $key => $val){ ?>
	<option value='<?php echo $val['Charset']; ?>'><?php echo $val['Charset']; ?></option>
	<?php }; ?>
	</select>
	校对集:<select name='collate'>
	<?php foreach($arr as $key => $val){ ?>
	<option value='<?php echo $val['Default collation']; ?>'><?php echo $val['Default collation']; ?></option>
	<?php }; ?>
	<input type='hidden' name='dbname' value='<?php echo $dbname; ?>'>
	<input type='submit' value='确认'/>
 
 </form>
</body>
</html>
