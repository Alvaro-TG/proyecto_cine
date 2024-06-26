<?php 

	session_start();
	if(!isset($_SESSION["perfil"])){header('Location: salir.php');}
	
	include "modelos/bbdd/perfil.php";
	include "modelos/bbdd/foto.php";

	$fotos = listado_fotos_por_usuario($_SESSION["id"]);
	
	include "vistas/fotos.htm"; 

?>


	
	
