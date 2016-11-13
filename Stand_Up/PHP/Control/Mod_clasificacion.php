<?php
require_once('../Config/CoreAjax.php');
require_once('../Modelo/GestionClasificacion_Rutina.php');
session_start();
//Se crea el objetos
$ajax                  = new CoreAjax();
$o_gestion_clasificacion = new GestionClasificacion_Rutina();
//Validacion de session
if( $_SESSION["usuario_valido"] == 1){
//Datos de la vista
$forma = $_POST;
//logica
$index      = $forma['index_select_tabla'];
$id_tabla   = $forma['id_tabla'];

if($index != "" && $id_tabla != ""){

	$codigo     = $forma['id_clasificacion'.$id_tabla][$index];
	$descripcion = $forma['descripcion'.$id_tabla][$index];
	$cod_estado = $forma['cod_estado'.$id_tabla][$index];
	
	if(!$o_gestion_clasificacion->fn_update_clasficacion($codigo,$descripcion,$cod_estado,$ajax)){
		$ajax->setError("No se pudo modificar la Clasificacion.");
	}
	
}else{
	$ajax->setError("El codigo index o tabla id esta vacio.");
}

}else{
	$ajax->setError("Usuario no valido en la session.");
}

//retorno objeto ajax
$ajax->RetornarJSON();
?>