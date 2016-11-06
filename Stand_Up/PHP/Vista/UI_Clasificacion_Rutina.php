<?php

require_once('../Config/header.php');

class UI_Clasificacion_Rutina {

	/**
	 * @autor	Melissa Minotta
	 * @mail	melissaminotta@gmail.com
	 * @date	31/10/2016
	 */	
	function DibujarTablaClasificacionRutina( $array, $id ){
		$tpl_clasificacion = new SmartyExt();
		$tpl_clasificacion->assign( "clasificacion_rutina", $array );
		$tpl_clasificacion->assign( "id_tabla", $id );
		return $tpl_clasificacion->fetch('../../html/plantillas/Tabla_ClasificacionRutina.tpl.html');
	}
}

?>