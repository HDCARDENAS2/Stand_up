<?php

require_once('../Config/ConexionBD.php');

/**
 * @autor	Alex Alvarado
 * @mail	alexalvaradomarquez@gmail.com
 * @date	01/11/2016
 */

class GestionRutinas {

	/**
	 * @autor	Alex Alvarado
	 * @mail	alexalvaradomarquez@gmail.com
	 * @date	01/11/2016
	 * @desc	Esta funcion consulta todas las rutinas
	 */
	function fn_consulta_rutinas( $bd = null ){
		$array = null;

		if($bd == null){
			$bd = new ConexionBD();
		}

		if($bd->iniciar()){
			/** Sentencia */
			$bd->setSentencia('select * from rutinas where cod_estado = 1');
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		/** En caso de errores */
		if($bd->Errores()){
			$bd->printErrores('GestionRutinas::fn_consulta_rutinas');
		}

		$bd->Cerrar();
		
		
		return $array;
	}
        
	/**
	 * @autor	Alex Alvarado
	 * @mail	alexalvaradomarquez@gmail.com
	 * @date	01/11/2016
	 * @desc	Esta funcion consulta una rutina por id
	 */
	 function fn_consulta_rutina( $codigo, $bd = null ){
	
		$array = null;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		
		//Inicio Conexion
		if($bd->iniciar()){
		    //Sentecia
			$bd->setSentencia('select * from rutinas where id_rutina=? and cod_estado = 1');
			//Parametros
			$bd->setParametro($codigo);
			//Se ejecuta la sentencia
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		//Errores 
		if($bd->Errores()){
			$bd->printErrores('GestionRutinas::fn_consulta_rutina');
		}
	    //Cierre de conexion
		$bd->Cerrar();
	
		return $array;
	
	}


	/** @Autor	Alex alvarado
	 *  @Mail	aalvarado@gmail.com
	 *  @Date   05/11/2016
	 *  @Name   fn_insertar_rutinas
	 */
	 
	function fn_insertar_rutina($duracion,$url_imagen, $des_rutina, $id_clasificacion, $ajax = null,$bd = null){
	
		$repuesta = false;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
			//Sentecia
			$bd->setSentencia('INSERT INTO rutinas (des_rutina,id_clasificacion, url_imagen, duracion) VALUES(?,?,?,?);');
			//Parametros
			$bd->setParametro($des_rutina);
			$bd->setParametro($id_clasificacion);
			$bd->setParametro($url_imagen);	
			$bd->setParametro($duracion);
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
			$bd->printErrores('fn_insertar_rutinas::fn_consulta_rutinas',$ajax);
		}
		//Cierre de conexion
		$bd->Cerrar();
	
		return $repuesta;
	
	}

	 function fn_consulta_rutinaByClasificacion( $codigo, $bd = null ){
	
		$array = null;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		
		//Inicio Conexion
		if($bd->iniciar()){
		    //Sentecia
			$bd->setSentencia('select * from rutinas where id_clasificacion=?');
			//Parametros
			$bd->setParametro($codigo);
			//Se ejecuta la sentencia
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		//Errores 
		if($bd->Errores()){
			$bd->printErrores('GestionRutinas::fn_consulta_rutina');
		}
	    //Cierre de conexion
		$bd->Cerrar();
	
		return $array;
	
	}


	function fn_update_rutinasBD( $codigo,$url_imagen,$duracion,$descripcion,$clasificacion,$ajax = null, $bd = null ){
	
		$repuesta = false;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		
		if($bd->iniciar()){
			/** Sentecia des_rutina,id_clasificacion, url_imagen, duracion*/
			$bd->setSentencia('UPDATE rutinas SET url_imagen=?, duracion=?, des_rutina=?, id_clasificacion=? WHERE id_rutinas=?;');
			/** Parametros */
			$bd->setParametro($url_imagen);
			$bd->setParametro($duracion);
			$bd->setParametro($descripcion);
			$bd->setParametro($clasificacion);
			$bd->setParametro($codigo);
			/** Ejecutamos */
			if($bd->Ejecutar()){
				$bd->Commit();
				$repuesta = true;
			}else{
				$bd->RollBack();
			}
		}
		/** Errores */
		if($bd->Errores()){
			$bd->printErrores('GestionRutinas::fn_update_rutinas', $ajax);
		}
		/** Cierre de la conexion */ 
		$bd->Cerrar();
		
		return $repuesta;
	}

	function fn_delete_rutinasBD($codigo, $ajax = null,$bd = null){
	
		$repuesta = false;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
			//Sentecia
			$bd->setSentencia('DELETE FROM rutinas WHERE id_rutinas=?;');
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
			//$bd->printErrores('fn_delete_rutinasBD::fn_consulta_rutinas',$ajax);
		}
		//Cierre de conexion
		$bd->Cerrar();
	
		return $repuesta;
	
	}
}

