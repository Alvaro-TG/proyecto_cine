<?php


	include_once "config.php";


	function perfil_un_usuario($id){	
	
		$mbd = new PDO('mysql:host='.SERVIDOR_BBDD.';dbname='.BBDD, USER_BBDD, PASSWORD_BBDD);
		$sql = "SELECT * FROM perfiles WHERE id='" . $id ."'";
		$perfiles = $mbd->query($sql);
		$perfil = $perfiles->fetch(PDO::FETCH_ASSOC);
		return $perfil["nombre"];
		
    }


	function listado_perfiles(){	
	
		$mbd = new PDO('mysql:host='.SERVIDOR_BBDD.';dbname='.BBDD, USER_BBDD, PASSWORD_BBDD);
		$sql = "SELECT * FROM perfiles";
		$perfiles = $mbd->query($sql);
		$listado_perfiles = $perfiles->fetchAll(PDO::FETCH_ASSOC);
		return $listado_perfiles;
		
    }


?>