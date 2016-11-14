<?php
require_once('../Config/CoreAjax.php');
require_once('../Modelo/GestionArea_Laboral.php');
session_start();
	/** Se crea el objetos */
	$ajax					= new CoreAjax();
	$obj_gestion_area_laboral	= new GestionArea_Laboral();
	
	//Validacion de session
	if( $_SESSION["usuario_valido"] == 1){
	
	/** Datos de la vista */
	$forma = $_POST;
	
	/** Logica */
	$descripcion	= $forma['descripcion'];
	if(!$obj_gestion_area_laboral->fn_insertar_area_laboral ( $descripcion, $ajax )){
		$ajax->setError("No se pudo insertar el registro.");
	}
	
	}else{
		$ajax->setError("Usuario no valido en la session.");
	}
	
	/** Retorno objeto ajax */
	$ajax->RetornarJSON();
	
?>