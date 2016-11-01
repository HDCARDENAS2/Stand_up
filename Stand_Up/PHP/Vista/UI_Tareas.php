<?php
require_once('../Config/header.php');

/*
 * @Autor Luis Leon
 * @Mail  leon9326@gmail.com
 * @Name UI_Tareas
 * @Date 31/10/2016
 *
 * Esta clase contienes los metodo de Tareas
 */

class UI_Tareas {

	/*
	 * @Autor Luis Leon
	 * @Mail  leon9326@gmail.com
	 
	 * Esta dibuja una plantilla de las Tareas
	 */
	
	function DibujarTablaTareas($array,$id){
		$tpl_tarea = new SmartyExt();
		$tpl_tarea->assign("tareas",$array);
		$tpl_tarea->assign("id_tabla",$id);
		return $tpl_tarea->fetch('../../html/plantillas/Tabla_Tareas.tpl.html');
	}
}

?>