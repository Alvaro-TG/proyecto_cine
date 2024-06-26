<?php


	include_once "config.php";


	function listado_preferidos(){

		$mbd = new PDO('mysql:host='.SERVIDOR_BBDD.';dbname='.BBDD, USER_BBDD, PASSWORD_BBDD);
		$preferidos = $mbd->query('SELECT * FROM preferidos');
		$array = $preferidos->fetchAll(PDO::FETCH_ASSOC);
		return $array;
		
	}
	

	function nuevo_preferido($id_usu, $id_ficha){	
	
		$mbd = new PDO('mysql:host='.SERVIDOR_BBDD.';dbname='.BBDD, USER_BBDD, PASSWORD_BBDD);
		$sql = "INSERT INTO preferidos (id_usuario, id_recurso) VALUES (?,?)";
		$mbd->prepare($sql)->execute([$id_usu, $id_ficha]);
		
    }


?>