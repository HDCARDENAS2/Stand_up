<?php
require_once('../Config/CoreAjax.php');
require_once('../Modelo/GestionRutinas.php');
//Se crea el objetos
$ajax                  = new CoreAjax();
$o_gestion_rutina = new GestionRutinas();
//Datos de la vista
$forma = $_POST;
//logica

$index      = $forma['index_select_tabla'];
$id_tabla   = $forma['id_tabla'];


if($index != "" && $id_tabla != ""){
	$codigo     = $forma['idrutinas_'.$id_tabla][$index];
	$duracion   = $forma['duracion_'.$id_tabla][$index];
	$idclasificacion_rutina = $forma['idclasificacion_rutina_'.$id_tabla][$index];
	//$ajax->setError("No se pudo modificar la Rutina area.".$codigo);
	
	
	
	if(!$o_gestion_rutina->fn_update_rutinasBD($codigo,$duracion,$idclasificacion_rutina,$ajax)){
		$ajax->setError("No se pudo modificar la Rutina.");
	}
	
	
}else{
	$ajax->setError("El codigo index o tabla id esta vacio.");
}

//retorno objeto ajax
$ajax->RetornarJSON();
?>