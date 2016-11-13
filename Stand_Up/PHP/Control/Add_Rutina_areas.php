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
$cod_area   = $forma['cmb_area_new'];
$cod_rutina = $forma['cmb_rutina_new'];
if(!$o_gestion_rutina_area->fn_insertar_rutinasarea($cod_area, $cod_rutina,$ajax)){
	$ajax->setError("No se pudo insertar la Rutina area.");
}

}else{
	$ajax->setError("Usuario no valido en la session.");
}

//retorno objeto ajax
$ajax->RetornarJSON();
?>





