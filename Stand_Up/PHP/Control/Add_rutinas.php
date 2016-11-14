<?php
require_once('../Config/CoreAjax.php');
require_once('../Modelo/GestionRutinas.php');
//Se crea el objetos
$ajax                  = new CoreAjax();
$o_gestion_rutina = new GestionRutinas();
//Datos de la vista
$forma = $_POST;



$duracion   = $forma['duracion'];
$descripcion   = $forma['descripcion'];
$url_imagen   = $forma['url_imagen'];
$idclasificacion_rutina = $forma['idclasificacion_rutina'];
if(!$o_gestion_rutina->fn_insertar_rutina($duracion, $url_imagen, $descripcion, $idclasificacion_rutina, $ajax)){
	$ajax->setError("No se pudo insertar la Rutina.");
}


//retorno objeto ajax
$ajax->RetornarJSON();
?>