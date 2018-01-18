<!DOCYTYPE html>
<html>
<head>
 <meta charset='utf-8'/>
 <title>提交表名</title>
</head>
<body>
 <form action='View4.php' method='post'>
	表名:<input type='text' name='tbname'/>
	<input type="hidden" name='dbname' value="<?php echo $_REQUEST['dbname']; ?>">
	<input type='submit' value='确认'/>
 
 </form>
</body>
</html>
