<?php

require_once('/../Config/ConexionBD.php');

/**
 * @autor	Melissa Minotta
 * @mail	melissaminotta@gmail.com
 * @date	31/10/2016
 */

class GestionClasificacion_Rutina {
	
	/**
	 * @autor	Melissa Minotta
	 * @mail	melissaminotta@gmail.com
	 * @name	fn_consulta_clasificacion
	 * @date	31/10/2016
	 * @desc	Consulta todas las clasificacion de rutina
	 */
	function fn_consulta_clasificacion( $bd = null ){
		
		$array = null;
		
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
		   //Sentecia
		   $bd->setSentencia('select * from clasificacion_rutina where cod_estado = 1' );
		   //Se ejecuta la sentencia
		   if($bd->Ejecutar()){
		     	$array = $bd->getResutados();
		   }
		}
		//Errores
		if($bd->Errores()){
			$bd->printErrores('GestionClasificacion::fn_consulta_clasificacion');
		}
		//Cierre de conexion
		$bd->Cerrar();
		
		return $array;
	}
	
	/**
	 * @autor	Melissa Minotta
	 * @mail	melissaminotta@gmail.com
	 * @name	fn_consulta_clasificaciones
	 * @date	31/10/2016
	 * @desc	Consulta todas las clasificacion de rutina por codigo
	 */
	function fn_consulta_clasificaciones( $codigo, $bd = null ){
	
		$array = null;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
		    //Sentecia
			$bd->setSentencia('select * from clasificacion_rutina where id_clasificacion=? and cod_estado = 1');
			//Parametros
			$bd->setParametro($codigo);
			//Se ejecuta la sentencia
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		//Errores 
		if($bd->Errores()){
			$bd->printErrores('GestionClasificacion::fn_consulta_clasificacion');
		}
	    //Cierre de conexion
		$bd->Cerrar();
	
		return $array;
	}
}
?>
