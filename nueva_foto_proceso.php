<?php 

	session_start();
	if(!isset($_SESSION["perfil"])){header('Location: salir.php');}
	
	include "modelos/bbdd/foto.php";
	
	$ultimo_id = nueva_foto($_SESSION["id"], $_POST["comentario"]);
	
	move_uploaded_file($_FILES['archivo']['tmp_name'], "imgs/".$ultimo_id.".jpg");
	
	header('Location: nueva_foto.php');

?>

