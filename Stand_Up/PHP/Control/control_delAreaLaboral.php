<?php
require_once('../Config/CoreAjax.php');
require_once('../Modelo/GestionTrabajadores.php');
require_once('../Modelo/GestionArea_Laboral.php');
	
	session_start();

	/** Se crea el objetos */
	$ajax                  = new CoreAjax();
	$obj_gestion_trabajador	= new GestionTrabajadores();
	$obj_gestion_area_laboral	= new GestionArea_Laboral();
	
	/** Validacion de session */
	if( $_SESSION["usuario_valido"] == 1){
		
		/** Datos de la vista */
		$forma = $_POST;
		
		$index		= $forma['index_select_tabla'];
		$id_tabla	= $forma['id_tabla'];

		if( $index != "" && $id_tabla != "" ){
			$cod_area	= $forma['id_area_laboral_'.$id_tabla][$index];
			$array	= $obj_gestion_trabajador->fn_consulta_trabajadorByArea( $cod_area );
			
			if( count($array) > 0 ){
				$ajax->setError("Imposible borrar. Hay registros que aún dependen del area laboral.");
			} else {
				if(!$obj_gestion_area_laboral->fn_delete_area_laboral( $cod_area, $ajax )){
					$ajax->setError("No se pudo eliminar el horario.");
				}
			}
		} else {
			$ajax->setError("El codigo index o tabla id esta vacio.");
		}
	
	} else {
		$ajax->setError("Usuario no valido en la session.");
	}
	
	/** retorno objeto ajax */
	$ajax->RetornarJSON();
?>


