<?php
require_once('../Config/CoreAjax.php');
require_once('../Modelo/GestionHorarios.php');
session_start();
//Se crea el objetos
$ajax                  = new CoreAjax();
$o_gestion_horario = new GestionHorarios();
//Validacion de session
if( $_SESSION["usuario_valido"] == 1){
//Datos de la vista
$forma = $_POST;
//logica




$index      = $forma['index_select_tabla'];
$id_tabla   = $forma['id_tabla'];


if($index != "" && $id_tabla != ""){
	$codigo     = $forma['idhorarios_'.$id_tabla][$index];
	
	
	
	if(!$o_gestion_horario->fn_delete_horariosBD($codigo, $ajax)){
		$ajax->setError("No se pudo eliminar el horario.");
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





