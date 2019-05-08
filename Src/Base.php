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
		public static function paragraph($text, $attr=[]){
			$a = new PlainText($text);
			return new Element("p", true, [$a], $attr);
		}
		public static function title1($text, $attr=[]){
			$a = new PlainText($text);
			return new Element("h1", true, [$a], $attr);
		}
		public static function title2($text, $attr=[]){
			$a = new PlainText($text);
			return new Element("h2", true, [$a], $attr);
		}
		public static function title3($text, $attr=[]){
			$a = new PlainText($text);
			return new Element("h3", true, [$a], $attr);
		}
		public static function title4($text, $attr=[]){
			$a = new PlainText($text);
			return new Element("h4", true, [$a], $attr);
		}
		public static function title5($text, $attr=[]){
			$a = new PlainText($text);
			return new Element("h5", true, [$a], $attr);
		}

		public static function div($content=[], $attr=[]){
			return new Element("div", true, $content, $attr);
		}

		public static function custom($name, $content=[], $attr=[]){
			return new Element($name, true, $content, $attr);
		}

		public static function br($content=[], $attr=[]){
			return new Element("br", false, $content, $attr);
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
				$result = $result . " " . $index . "='" . $item . "'";
			}
			$result = $result . ">";
			if($this->closed){
				foreach($this->content as $item){
					$result = $result . "\n" . $item->render();
				}
				$result = $result . "</" . $this->name . ">";
			}
			return $result;
		}

		function set_attr($name, $value){
			$this->attr[$name] = $value;
		}
	}
?>
