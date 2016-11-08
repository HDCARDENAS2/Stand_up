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
	function fn_consulta_clasificaciones( $bd = null ){
		
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
			$bd->printErrores('GestionClasificacion::fn_consulta_clasificaciones');
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
	function fn_consulta_clasificacion( $codigo, $bd = null ){
	
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


function fn_insertar_clasificacion($descripcion,$ajax = null,$bd = null){
		
		
		$repuesta = false;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
			//Sentecia
			$bd->setSentencia('INSERT INTO clasificacion_rutina (descripcion) VALUES(?);');
			//Parametros
			$bd->setParametro($descripcion);
				
			//Se ejecuta la sentencia
			if($bd->Ejecutar()){
				$bd->Commit();
				$repuesta = true;
			}else{
				$bd->RollBack();
			}
		}
		//Errores
		if($bd->Errores()){
			$bd->printErrores('GestionClasificacion::fn_insertar_clasificacion',$ajax);
		}
		//Cierre de conexion
		$bd->Cerrar();
	
		return $repuesta;
	
	}
	
	
	
	function fn_update_clasficacion($codigo,$descripcion,$cod_estado,$ajax = null,$bd = null){
	
		$repuesta = false;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
			//Sentecia
			$bd->setSentencia('UPDATE clasificacion_rutina SET descripcion=?,cod_estado=? WHERE id_clasificacion=?;');
			//Parametros
			$bd->setParametro($descripcion);
			$bd->setParametro($cod_estado);
			$bd->setParametro($codigo);
			//Se ejecuta la sentencia
			if($bd->Ejecutar()){
				$bd->Commit();
				$repuesta = true;
			}else{
				$bd->RollBack();
			}
		}
		//Errores
		if($bd->Errores()){
			$bd->printErrores('fn_update_clasficacion::fn_update_clasficacion',$ajax);
		}
		//Cierre de conexion
		$bd->Cerrar();
	
		return $repuesta;
	
	}
	function fn_delete_clasificaicon($codigo, $ajax = null,$bd = null){
	
		$repuesta = false;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
			//Sentecia
			$bd->setSentencia('DELETE FROM clasificacion_rutina WHERE id_clasificacion=?;');
			//Parametros
			$bd->setParametro($codigo);
			//Se ejecuta la sentencia
			if($bd->Ejecutar()){
				$bd->Commit();
				$repuesta = true;
			}else{
				$bd->RollBack();
			}
		}
		//Errores
		if($bd->Errores()){
			$bd->printErrores('fn_update_horariosBD::fn_consulta_horarios',$ajax);
		}
		//Cierre de conexion
		$bd->Cerrar();
	
		return $repuesta;
	
	}

	

}


?>
