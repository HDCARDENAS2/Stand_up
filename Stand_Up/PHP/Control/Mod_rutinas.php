<?php
require_once('../Config/CoreAjax.php');
require_once('../Modelo/GestionRutinas.php');
session_start();
//Se crea el objetos
$ajax                  = new CoreAjax();
$o_gestion_rutina = new GestionRutinas();
//Validacion de session
if( $_SESSION["usuario_valido"] == 1){
//Datos de la vista
$forma = $_POST;
//logica

$index      = $forma['index_select_tabla'];
$id_tabla   = $forma['id_tabla'];

if($index != "" && $id_tabla != ""){
	
	$codigo     = $forma['id_rutinas_'.$id_tabla][$index];
	$url_imagen = $forma['url_imagen_'.$id_tabla][$index];
	$duracion   = $forma['duracion_'.$id_tabla][$index];
	$descripcion   = $forma['des_rutina_'.$id_tabla][$index];
	$clasificacion = $forma['clasificacion_'.$id_tabla][$index];
	//$ajax->setError("No se pudo modificar la Rutina area.".$codigo);
	
		
	if(!$o_gestion_rutina->fn_update_rutinasBD($codigo,$url_imagen,$duracion,$descripcion,$clasificacion,$ajax)){
		$ajax->setError("No se pudo modificar la Rutina.");
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