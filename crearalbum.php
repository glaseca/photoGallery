<?php
	$usuario = $_POST["user"];
	$album = $_POST["album"];
	
	echo "Usuario: " . $usuario . "<br />\n";
	echo "Nuevo &aacute;lbum: " . $album . "<br />\n";
	if($_POST["fecha"]!=NULL){
		$fecha = $_POST["fecha"];
		echo "Fecha: " . $fecha . "<br />\n";
	}
	if($_POST["descripcion"]!=NULL){
		$descripcion = $_POST["descripcion"];
		echo "Descripci&oacute;n: " . $descripcion . "<br />\n";
	}
	if($_POST["pais"]!=NULL){
		$pais = $_POST["pais"];
		echo "Pa&iacute;s: " . $pais . "<br />\n";
	}
?>