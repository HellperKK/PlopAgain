<?php 
	class PlainText{
		function __construct($content=""){
			$this->content = $content;
		}
		function render(){
			return $this->content;
		}
	}
	class Element {
		public static function make_paragraph($text, $attr=[]){
			$a = new PlainText($text);
			return new Element("p", true, [$a], $attr);
		}
		public static function make_title1($text, $attr=[]){
			$a = new PlainText($text);
			return new Element("h1", true, [$a], $attr);
		}
		function __construct($name, $closed=true, $content=[], $attr=[]){
			$this->content = $content;
			$this->attr = $attr;
			$this->closed = $closed;
			$this->name = $name;
		}
		function render(){
			$result = "<" . $this->name;
			foreach($this->attr as $index => $item){
				$result = $result . " " . $index . "=" . $item;
			}
			$result = $result . ">";
			foreach($this->content as $item){
				$result = $result . "\n" . $item->render();
			}
			if($this->closed){
				$result = $result . "</" . $this->name . ">";
			}
			return $result;
		}
	}
?>