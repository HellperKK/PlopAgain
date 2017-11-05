<?php 	

	class MonoElement {
		function __construct() {
			$this->id = "";
			$this->classe = "";
		}
	}
	
	class SimpleElement extends MonoElement{ 
		function __construct($test) {
			$this->value = $test;
			$this->id = "";
			$this->classe = "";
		}
	}
	class ComplexElement{
		function __construct(){
			$this->value = [];
		}
	}
?>