<?php
require_once('../Config/CoreAjax.php');
require_once('../Modelo/GestionRutinasArea.php');
session_start();
//Se crea el objetos
$ajax                  = new CoreAjax();
$o_gestion_rutina_area = new GestionRutinasArea();
//Validacion de session
if( $_SESSION["usuario_valido"] == 1){

//Datos de la vista
$forma = $_POST;
//logica
$index      = $forma['index_select_tabla'];
$id_tabla   = $forma['id_tabla'];

if($index != "" && $id_tabla != ""){

	$codigo     = $forma['id_rutinasarea_'.$id_tabla][$index];
	$cod_area   = $forma['cmb_area_rutinasarea_'.$id_tabla][$index];
	$cod_rutina = $forma['cmb_rutina_rutinasarea_'.$id_tabla][$index];
	$cod_estado = $forma['cmb_estado_rutinasarea_'.$id_tabla][$index];
	
	if(!$o_gestion_rutina_area->fn_update_rutinasarea($codigo,$cod_area,$cod_rutina,$cod_estado,$ajax)){
		$ajax->setError("No se pudo modificar la Rutina area.");
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





