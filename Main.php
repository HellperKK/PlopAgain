<?php 
//Appel de la librarie
	include "Src/Base.php";
//Creation de la classe de la page
//~ 	echo "Hello !";
//Creation de l'instance de page
	echo Element::make_title1("Hello world !", ["id"=>"test"])->render();
?>