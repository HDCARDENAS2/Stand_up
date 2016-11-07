<?php
require_once('../Config/CoreAjax.php');
require_once('../Modelo/GestionArea_Laboral.php');
	
	/** Se crea el objetos */
	$ajax					= new CoreAjax();
	$obj_gestion_area_laboral	= new GestionArea_Laboral();
	
	/** Datos de la vista */
	$forma = $_POST;
	
	/** Logica */
	$descripcion	= $forma['descripcion'];
	if(!$obj_gestion_area_laboral->fn_insertar_area_laboral ( $descripcion, $ajax )){
		$ajax->setError("No se pudo insertar el registro.");
	}
	/** Retorno objeto ajax */
	$ajax->RetornarJSON();
	
?>