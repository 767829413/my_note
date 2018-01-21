<html>
<head>
<link rel="stylesheet" type="text/css" href="TY.css"/>
<title>猜拳</title>
<script language="javascript">
	function mychange(obj){
		var val=obj.value;
		var myimagg=document.getElementById("img1");
		if(val=="qt"){
			myimagg.src="/MrFangWEB/img/1.png";
		}else if(val=="jd"){
			myimagg.src="/MrFangWEB/img/3.png";
		}else if(val=="bu"){
			myimagg.src="/MrFangWEB/img/2.png";
		}
	}
</script>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>
<form action="mynote2.php" method="post">
<div class="s1">
手头剪刀布,来一个
<select name="val" onchange="mychange(this);">
<option value="qt">拳头</option>
<option value="bu">布</option>
<option value="jd">剪刀</option><br/>
<input type="submit" value="ok" name="com">
</div>
<div class="s2">
<img src="/MrFangWEB/img/4.png" id="img1"/>
</div>
</form>
</div>
</body>
</html>