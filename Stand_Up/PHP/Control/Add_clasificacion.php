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
$descripcion   = $forma['descripcion'];



if(!$o_gestion_clasificacion->fn_insertar_clasificacion($descripcion,$ajax)){
	$ajax->setError("No se pudo insertar la Rutina area.");
}

}else{
	$ajax->setError("Usuario no valido en la session.");
}

//retorno objeto ajax
$ajax->RetornarJSON();

?>