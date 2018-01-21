<?php
	header("content_type:text/html;charset=utf-8");
	echo "<pre>";
	//$num表示DOM中学生的序号,$url表示XML文件的地址,$fnode表示父节点,$snode表示父节点下的子节点
	function getStu($num,$url,$fnode,$snode) {
		$xml_doc = new DOMDocument();
		$xml_doc->load($url);
		if($num>=$xml_doc->getElementsByTagName('学生')->length){
			exit("输入错误,学生数最大是".$xml_doc->getElementsByTagName('学生')->length."<br/>");
		}
		$stu1_name = $xml_doc->getElementsByTagName($fnode)->item($num)->getElementsByTagName($snode)->item(0)->nodeValue;
		return $stu1_name;
	}
		function getStuNum($url,$node) {
			$xml_doc = new DOMDocument();
			$xml_doc->load($url);
			return $xml_doc->getElementsByTagName($node)->length;
		}
/*	//1.首先创建DOMDocumen对象
	$xml_doc = new DOMDocument();
	//2.指定解析(加载)的xml文件
	$xml_doc->load("../XML/class_dom.xml");
	//3.获得第一个学生的姓名;
	$stus = $xml_doc->getElementsByTagName('学生');
	var_dump($stus);
	echo "<br/>一共有:".$stus->length."个学生<br>";
	//4.选中第一个学生
	$stu1 = $stus->item(0);
	//5.取出名字
//	$stu1->getElementsByTagName('名字');
//	var_dump($stu1->getElementsByTagName('名字')->item(0));
	$stu1_names = $stu1->getElementsByTagName('名字');
	echo "学生1的名字是:".$stu1_names->item(0)->nodeValue;
*/
//	$fnode = '学生';
//	$snode = '名字';
//	$num = 2;
//	$url = "../XML/class_dom.xml";
//	echo '第'.$num.'号的学生的'.$snode.'是:'.getStu($num,$url,$fnode,$snode)."<br/>";
//-------还可以做一个类,创建个对象来干-----------
?>
<html>
<head>
<title>学生信息表</title>
</head>
<body>
<h2>学生信息表</h2>
<table border="1px">
<tr>
<th>姓名</th><th>年龄</th><th>介绍</th>
</tr>
<?php  for($i=0;$i<getStuNum("../XML/class_dom.xml",'学生');$i++) { ?>
<tr>
<td><?php echo getStu($i,"../XML/class_dom.xml",'学生','名字'); ?></td><td><?php echo getStu($i,"../XML/class_dom.xml",'学生','年龄'); ?></td><td><?php echo getStu($i,"../XML/class_dom.xml",'学生','介绍'); ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>