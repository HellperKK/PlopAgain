<?php 
	class Page{
		function __construct(){
			$this->content = null;
			$this->init();
			echo $this;
		}
		function init(){
			
		}
		function __toString(){
			if($this->content == null){
				return "";
			}
			else{
				return $this->content->render();
			}
		}
	}
?>