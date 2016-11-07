<?php
require_once('../Config/CoreAjax.php');
require_once('../Modelo/GestionArea_Laboral.php');

	/** Se crea el objetos */
	$ajax					= new CoreAjax();
	$obj_gestion_area_laboral	= new GestionArea_Laboral();
	
	/** Datos de la vista */
	$forma = $_POST;
	
	/** Logica */
	$index      = $forma['index_select_tabla'];
	$id_tabla   = $forma['id_tabla'];
	
	if($index != "" && $id_tabla != ""){
		$codigo		= $forma['id_area_laboral_'.$id_tabla][$index];
		$descripcion= $forma['descripcion_'.$id_tabla][$index];
		
		$cod_estado	= $forma['cmb_estado_area_laboral_'.$id_tabla][$index];
	
		if(!$obj_gestion_area_laboral->fn_update_area_laboral( $codigo, $descripcion, $cod_estado, $ajax )){
			$ajax->setError("No se modifico el registro.");
		}
	
	}else{
		$ajax->setError("El codigo index o tabla id esta vacio.");
	}
	
	/** retorno objeto ajax */
	$ajax->RetornarJSON();

?>