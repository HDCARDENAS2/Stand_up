<?php

require_once('/../Config/ConexionBD.php');

/*
 * @Autor Melissa Minotta
 * @Mail  melissaminotta@gmail.com
 * @Name UI_Clasificacion.Rutina
 * @Date 31/10/2016
 *
 * 
 */

class ConsultasClasificacion {
	
/*
 * @Autor Melissa Minotta
 * @Mail  melissaminotta@gmail.com
 * @Name UI_Clasificacion.Rutina
 * @Date 31/10/2016
 *Consulta todas las clasificacion de rutina
 * 
 */
	function fn_consulta_clasificacion($bd = null){
		
		$array = null;
        
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
		   //Sentecia
		   $bd->setSentencia('select * from clasificacion_rutina' );
		   //Se ejecuta la sentencia
		   if($bd->Ejecutar()){
		     	$array = $bd->getResutados();
		   }
	   
		}
		//Errores
		if($bd->Errores()){
			$bd->printErrores('ConsultasClasificacion::fn_consulta_clasificacion');
		}
		//Cierre de conexion
		$bd->Cerrar();
		
		return $array;
		
	}
	
/*
 * @Autor Melissa Minotta
 * @Mail  melissaminotta@gmail.com
 * @Name UI_Clasificacion.Rutina
 * @Date 31/10/2016
 *Consulta todas las clasificacion de rutina
 * 
 */
	function fn_consulta_clasificaciones($codigo,$bd = null){
	
		$array = null;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
		    //Sentecia
			$bd->setSentencia('select * from clasificacion_rutina where idclasificacion_rutina=?');
			//Parametros
			$bd->setParametro($codigo);
			//Se ejecuta la sentencia
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		//Errores 
		if($bd->Errores()){
			$bd->printErrores('ConsultasClasificacion::fn_consulta_clasificacion');
		}
	    //Cierre de conexion
		$bd->Cerrar();
	
		return $array;
	
	}
	
	
	
}
?>
