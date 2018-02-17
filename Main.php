<?php 
//Appel des libraries
	include "Src/Base.php";
	include "Src/Page.php";
//Creation de la classe de la page
//~ 	echo "Hello !";
//Creation de l'instance de page
	new class() extends Page{
		function init(){
			$titre = Element::make_title1("Hello world !");
			$texte = Element::make_paragraph("I am juste saying hello to you, so...");
			$this->content = Element::make_div([$titre, $texte, $titre]);
		}
	};
//~ 	echo Element::make_title1("Hello world !", ["id"=>"test"])->render();
?>