<?php
	header("content_type:text/html;charset=utf-8");
//解析一个文件的步骤
	//1.创建一个DOMDocument对象,表示解析文档
	$xml_doc = new DOMDocument();
	//2.指定加载那个xml,解析哪个文件
	$xml_doc->load("../XML/class_dom.xml");
	//3.获取你关心的节点
		//获取所有学生节点信息(DOMNodeList)
		$stus = $xml_doc->getElementsByTagName("学生");
	//4.遍历
	for($i=0;$i<$stus->length;$i++){
		//取出学生节点
		echo $stus->item($i)->getElementsByTagName('名字')->item(0)->nodeValue."的年龄是".$stus->item($i)->getElementsByTagName('年龄')->item(0)->nodeValue.",对他的描叙是".$stus->item($i)->getElementsByTagName('介绍')->item(0)->nodeValue."<br/>";
	}
?>