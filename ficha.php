<?php 
	session_start();
	if(!isset($_SESSION["perfil"])){header('Location: salir.php');}

	include "modelos/api.php";
	include "modelos/bbdd/perfil.php";
	include "modelos/bbdd/comentario.php";

	$ficha = $_GET["num_ficha"];
	$data_convertido = datos_recurso($ficha);
	$comentarios = listado_comentarios_por_recurso($ficha);

	// Buscar el tráiler en YouTube
	$trailer_url = obtener_trailer($data_convertido["Title"]);

	include "vistas/ficha.htm"; 
?>
