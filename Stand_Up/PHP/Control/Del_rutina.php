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
	$codigo     = $forma['id_rutinas_'.$id_tabla][$index];
	
	if(!$o_gestion_rutina->fn_delete_rutinasBD($codigo, $ajax)){
		$ajax->setError("No se puede eliminar la rutina.");
	}
	
}else{
	$ajax->setError("El codigo index o tabla id esta vacio.");
}
//retorno objeto ajax
$ajax->RetornarJSON();
?>


