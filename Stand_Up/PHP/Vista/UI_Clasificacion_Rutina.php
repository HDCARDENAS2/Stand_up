<?php
require_once('../Config/header.php');

/*
 * @Autor Melissa Minotta
 * @Mail  melissaminotta@gmail.com
 * @Name UI_Clasificacion.Rutina
 * @Date 31/10/2016
 *
 * 
 */

class UI_Clasificacion {

	/*
 * @Autor Melissa Minotta
 * @Mail  melissaminotta@gmail.com
 * @Name UI_Clasificacion.Rutina
 * @Date 31/10/2016
 *
 * 
 */
	
	function DibujarTablaClasificacion($array,$id){
		$tpl_clasificacion = new SmartyExt();
		$tpl_clasificacion->assign("clasificacion_rutina",$array);
		$tpl_clasificacion->assign("id_tabla",$id);
		return $tpl_clasificacion->fetch('../../html/plantillas/Tabla_Clasificacion.tpl.html');
	}
}

?>