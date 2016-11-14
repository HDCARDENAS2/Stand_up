<?php
require_once('../Config/CoreAjax.php');
require_once('../Modelo/GestionTrabajadores.php');
	
	session_start();

	/** Se crea el objetos */
	$ajax					= new CoreAjax();
	$obj_gestion_trabajador	= new GestionTrabajadores();
	
	/** Validacion de session */
	if( $_SESSION["usuario_valido"] == 1){

		/** Datos de la vista */
		$forma = $_POST;
		
		$index      = $forma['index_select_tabla'];
		$id_tabla   = $forma['id_tabla'];
		
		if( $index != "" && $id_tabla != "" ){
			
			$codigo	= $forma['id_trabajador_'.$id_tabla][$index];
			
			if(!$obj_gestion_trabajador->fn_delete_trabajadores( $codigo, $ajax )){
				$ajax->setError("No se pudo eliminar el trabajador.");
			}
		
		} else {
			$ajax->setError("El codigo index o tabla id esta vacio.");
		}
	}else{
		$ajax->setError("Usuario no valido en la session.");
	}
	
	/** Retorno objeto ajax */
	$ajax->RetornarJSON();
?>


