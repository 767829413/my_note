<?php
	class getDOM {
		protected $xml_url;

		public function __construct($xml_url) {
			$this->setUrl($xml_url);
		}

		protected function setUrl($xml_url) {
			$this->xml_url = $xml_url;
		}

		protected function loadXml() {
			$xml_doc = new DOMDocument();
			$xml_doc->load($this->xml_url);
			return $xml_doc;
		}
		

		protected function getNodeValue($xml_node) {
			$words = $this->loadXml()->getElementsByTagName($xml_node);
			$get_words = array();
			for($i=0;$i<($words->length);$i++) {	
				$get_words[] = $words->item($i)->nodeValue;
			}
			return $get_words;

		}
		
		protected function searchAction($query_word) {
			$en_word = $this->getNodeValue("en");
			$ch_word = $this->getNodeValue("ch");
			$flag = false;
			for($i=0;$i<count($en_word);$i++){
				if($en_word[$i] == $query_word) {
					$flag = true;
					echo $en_word[$i]."的中文意思是".$ch_word[$i];
					break;
				}
			}
			if(!$flag) {
				echo "该单词未收录,请返回添加";
			}
			echo "<br/><a href='../index.php'><br/>返回主界面</a>";
		}
		public function searchWord($query_word) {
			$this->searchAction($query_word);
		}
		
		
		protected function createElement($english,$chinese) {
			$xml_doc = $this->loadXml();
			//判断创建的词条是否重复
			$en_word = $this->getNodeValue("en");
			$ch_word = $this->getNodeValue("ch");
			for($i=0;$i<count($en_word);$i++){
				if($en_word[$i] == $english) {
					if($ch_word[$i] == $chinese) {
						echo "已存在相同单词".$english."<br/><a href='../index.php'>返回主界面</a>";
						die;
					}else{
						echo "前往主界面更新".$english."<a href='../index.php'>返回主界面</a>";
						die;
					}
				}
			}
			//得到根元素
			$root = $xml_doc->getElementsByTagName("words")->item(0);
			//创建word节点
			$word = $xml_doc->createElement("word");
			//创建新的中英节点并给出value
			$word_en = $xml_doc->createElement('en');
			$word_ch = $xml_doc->createElement("ch");
			$word_en->nodeValue = $english;
			$word_ch->nodeValue = $chinese;
			//按照layer挂载
			$word->appendChild($word_en);
			$word->appendChild($word_ch);
			$root->appendChild($word);
			//保存到xml文件中
/*			try {	//致命错误还是麻烦,需要自定义错误处理
				$save = $xml_doc->save($this->xml_url);
				throw new Exception();
			} catch (Exception $e) {      // 捕获异常
				exit("保存错误,文件被使用");
			}
*/				
			

			$save = $xml_doc->save($this->xml_url) ? true : false;
			//提示信息
			if(!$save) {
				exit("添加失败<br/><a href='../index.php'>返回主界面</a>");
			}else{
				echo "添加成功";
				echo "<br/><a href='../index.php'>返回主界面</a>";
			}
		}
		public function insertWord($english,$chinese) {
			$this->createElement($english,$chinese);
		}

		 protected function dropNode($delete_word) {
			//直接调用$this->loadXml()来save会保存失败,方法与函数一样,局域有效,不是全局有效
			$xml_doc = $this->loadXml();
			$word_en = $xml_doc->getElementsByTagName("en");
			$word_ch = $xml_doc->getElementsByTagName("ch");
			$flag = false;

			for($i=0;$i<($word_en->length);$i++) {
				if($word_en->item($i)->nodeValue == $delete_word) {
					$flag = true;
					$a = $word_en->item($i)->parentNode->removeChild($word_en->item($i));
					$b = $word_ch->item($i)->parentNode->removeChild($word_ch->item($i));
					if(!$a || !$b) {
						exit("删除失败<br/><a href='../index.php'>返回主界面</a>");
					}
					break;
				}
			}
			//提示信息
			if(!$flag) {
				exit("该单词没有收录<br/><a href='../index.php'>返回主界面</a>");
			}
			//直接调用$this->loadXml()来save会保存失败,方法与函数一样,局域有效,不是全局有效
			$save = $xml_doc->save($this->xml_url);
			if($save) {
				echo "删除成功,以保存";
			}else{
				echo "保存失败";
			}
			echo "<br/><a href='../index.php'>返回主界面</a>";

		}
		public function deleteWord($delete_word) {
			$this->dropNode($delete_word);
		}

		Protected function setNodeValue($english,$chinese) {
			//使用XPath简单一点
			$xml_doc = $this->loadXml();
			//获得创建的词条
			$en_word = $xml_doc->getElementsByTagName("en");
			$ch_word = $xml_doc->getElementsByTagName("ch");
			$falg = false;
			for($i=0;$i<($en_word->length);$i++) {
				if($en_word->item($i)->nodeValue == $english) {
						$falg = true;
						$ch_word->item($i)->nodeValue = $chinese;
				}
			}
			if(!$falg) {
				exit("单词没有添加<br/><a href='../index.php'>返回主界面</a>");
			}
			$save = $xml_doc->save($this->xml_url);
			if(!$save) {
				die("保存失败,该文件已经被使用<br/><a href='../index.php'>返回主界面</a>");
			}else{
				echo "更新成功,以保存<br/><a href='../index.php'>返回主界面</a>";
			}

		}

		public function updateWord($english,$chinese) {
			$this->setNodeValue($english,$chinese);
		}	
	}
?>