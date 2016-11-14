<?php
require_once('../Config/CoreAjax.php');
require_once('../Modelo/GestionTrabajadores.php');
session_start();
	/** Se crea el objetos */
	$ajax					= new CoreAjax();
	$obj_gestion_trabajador	= new GestionTrabajadores();
	//Validacion de session
	if( $_SESSION["usuario_valido"] == 1){
	/** Datos de la vista */
	$forma = $_POST;
	
	/** Logica */
	$index      = $forma['index_select_tabla'];
	$id_tabla   = $forma['id_tabla'];
	
	if($index != "" && $id_tabla != ""){
		$codigo		= $forma['id_trabajador_'.$id_tabla][$index];
		$nombres	= $forma['nombres_'.$id_tabla][$index];
		$apellidos	= $forma['apellidos_'.$id_tabla][$index];
		$correo		= $forma['correo_'.$id_tabla][$index];
		
		$cod_area	= $forma['cmb_area_laboral_trabajador_'.$id_tabla][$index];
		$cod_estado	= $forma['cmb_estado_trabajador_'.$id_tabla][$index];
		
		if(!$obj_gestion_trabajador->fn_update_trabajador( $codigo, $cod_area, $nombres, $apellidos, $correo, $cod_estado, $ajax )){
			$ajax->setError("No se modifico el registro.");
		}
		
	}else{
		$ajax->setError("El codigo index o tabla id esta vacio.");
	}
	
	}else{
		$ajax->setError("Usuario no valido en la session.");
	}
	/** retorno objeto ajax */
	$ajax->RetornarJSON();
	
?>