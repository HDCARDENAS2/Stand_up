<?php

require_once('../Config/header.php');

class UI_Clasificacion_Rutina {

	/**
	 * @autor	Melissa Minotta
	 * @mail	melissaminotta@gmail.com
	 * @date	31/10/2016
	 */	
	function DibujarTablaClasificacionRutina( $array, $id , $obj_html, $lista_estados ){
		$tpl_clasificacion = new SmartyExt();
		$tpl_clasificacion->assign( "clasificacion_rutina", $array );
		$tpl_clasificacion->assign( "id_tabla", $id );
		$tpl_clasificacion->assign( "obj_html", $obj_html );
		//no se si va la descipcion ahi no creo
		$tpl_clasificacion->assign( "lista_estados", $lista_estados );
		return $tpl_clasificacion->fetch('../../HTML/Plantillas/Tabla_ClasificacionRutina.tpl.html');
	}
}

?>