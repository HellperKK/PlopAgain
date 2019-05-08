<?php
//Appel des libraries
	include "Src/Base.php";
	include "Src/Page.php";
//Creation de la classe de la page
//~ 	echo "Hello !";
//Creation de l'instance de page
	new class() extends Page{
		function init(){
			$titre = Element::title1("Hello world !");
			$texte = Element::paragraph("I am juste saying hello to you, so...");
			$this->content = Element::div([$titre, $texte, Element::br() ,$titre]);
		}
	};
echo Element::title1("Hello world !", ["id"=>"test"])->render();
?>
