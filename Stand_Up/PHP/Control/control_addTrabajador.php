<?php
require_once('../Config/CoreAjax.php');
require_once('../Modelo/GestionTrabajadores.php');
	
	/** Se crea el objetos */
	$ajax					= new CoreAjax();
	$obj_gestion_trabajador	= new GestionTrabajadores();
	
	/** Datos de la vista */
	$forma = $_POST;
	
	/** Logica */
	$nombres		= $forma['nombres'];
	$apellidos		= $forma['apellidos'];
	$correo			= $forma['correo'];
	$area_laboral	= $forma['cmb_area_laboral'];
	
	if(!$obj_gestion_trabajador->fn_insertar_trabajador ( $area_laboral, $nombres, $apellidos, $correo, $ajax )){
		$ajax->setError("No se pudo insertar el registro.");
	}
	/** Retorno objeto ajax */
	$ajax->RetornarJSON();
	
?>