<?php


	include_once "config.php";


	function nueva_foto($id_usu, $comentario){	
	
		$mbd = new PDO('mysql:host='.SERVIDOR_BBDD.';dbname='.BBDD, USER_BBDD, PASSWORD_BBDD);
		$sql = "INSERT INTO fotos (id_usuario, comentario) VALUES (?,?)";
		$mbd->prepare($sql)->execute([$id_usu, $comentario]);
		return $mbd->lastInsertId();
		
    }


	function listado_fotos_por_usuario($id_usuario){

		$mbd = new PDO('mysql:host='.SERVIDOR_BBDD.';dbname='.BBDD, USER_BBDD, PASSWORD_BBDD);
		$sql = "SELECT * FROM fotos WHERE id_usuario = " . $id_usuario;
		$comentarios = $mbd->query($sql);
		$array = $comentarios->fetchAll(PDO::FETCH_ASSOC);
		return $array;
		
	}
	
	
?>