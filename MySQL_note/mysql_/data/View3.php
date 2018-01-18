<!DOCYTYPE html>
<html>
<head>
 <meta charset='utf-8'/>
 <title></title>
</head>
<body>
 <form action='View4.php' method='post'>
	姓名:<input type='text' name='name'/><br/>
	年龄:<input type='text' name='age'/><br/>
	性别:<input type='radio' name='sex' value='男'/>男
		 <input type='radio' name='sex' value='女'/>女<br/>
	<input type="hidden" name="dbname" value="<?php echo $_REQUEST['dbname']; ?>"/>
	<input type="hidden" name="tbname" value="<?php echo $_REQUEST['tbname']; ?>"/>
	<input type='submit' value='确认'/>
 
 </form>
</body>
</html>
