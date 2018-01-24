<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<img src="../OnlineWord/img/fate_vow.jpg" width="650px"/>
<h1>查询单词</h1>
<form action="control/wordProcess.php" method="post">
请输入英文单词:<input type="text" name="engword"/>
<input type="hidden" name="type" value="query"/>
<input type="submit" value="查询"/><br/>
</form>
<h1>添加单词</h1>
<form action="control/wordProcess.php" method="post">
添加英文单词:<input type="text" name="engword"/><br/>
添加中文注释:<input type="text" name="chword"/>
<input type="hidden" name="type" value="insert"/>
<input type="submit" value="添加"/>
</form>
<h1>删除单词</h1>
<form action="control/wordProcess.php" method="post">
请输入英文单词:<input type="text" name="engword"/>
<input type="hidden" name="type" value="delete"/>
<input type="submit" value="删除"/><br/>
</form>
<h1>更新单词</h1>
<form action="control/wordProcess.php" method="post">
英文单词:<input type="text" name="engword"/><br/>
中文注释:<input type="text" name="chword"/>
<input type="hidden" name="type" value="update"/>
<input type="submit" value="更新"/>
</form>
</head>
</html>