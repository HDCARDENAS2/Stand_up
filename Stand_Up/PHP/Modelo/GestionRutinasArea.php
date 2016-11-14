<?php

require_once('../Config/ConexionBD.php');

class GestionRutinasArea {

	/** @Autor	Hernan dario Cardenas
	 *  @Mail	dropimax@gmail.com
	 *  @Date   05/11/2016
	 *  @Name   fn_consulta_rutinasarea
	 */
	function fn_consulta_rutinasareas( $bd = null ){
		$array = null;

		if($bd == null){
			$bd = new ConexionBD();
		}

		if($bd->iniciar()){
			/** Sentencia */
			$bd->setSentencia('select * from rutinas_area');
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		/** En caso de errores */
		if($bd->Errores()){
			$bd->printErrores('GestionRutinasArea::fn_consulta_rutinasarea');
		}

		$bd->Cerrar();
		return $array;
	}
       
	/** @Autor	Hernan dario Cardenas
	 *  @Mail	dropimax@gmail.com
	 *  @Date   05/11/2016
	 *  @Name   fn_consulta_rutinasarea
	 */
     
     function fn_consulta_rutinasarea($codigo,$bd = null){
	
		$array = null;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
		    //Sentecia
			$bd->setSentencia('select * from rutinas_area where id_rutinas_area=? and cod_estado=1');
			//Parametros
			$bd->setParametro($codigo);
			//Se ejecuta la sentencia
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		//Errores 
		if($bd->Errores()){
			$bd->printErrores('GestionRutinasArea::fn_consulta_rutinasarea');
		}
	    //Cierre de conexion
		$bd->Cerrar();
	
		return $array;
	
	}
	
	
	/** @Autor	Hernan dario Cardenas
	 *  @Mail	dropimax@gmail.com
	 *  @Date   05/11/2016
	 *  @Name   fn_insertar_rutinasarea
	 */
	 
	function fn_insertar_rutinasarea($cod_area,$cod_rutina,$ajax = null,$bd = null){
	
		$repuesta = false;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
			//Sentecia
			$bd->setSentencia('INSERT INTO rutinas_area (id_area_laboral,id_rutinas) VALUES(?,?);');
			//Parametros
			$bd->setParametro($cod_area);
			$bd->setParametro($cod_rutina);	
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
			$bd->printErrores('GestionRutinasArea::fn_insertar_rutinasarea',$ajax);
		}
		//Cierre de conexion
		$bd->Cerrar();
	
		return $repuesta;
	
	}
	
	
	/** @Autor	Hernan dario Cardenas
	 *  @Mail	dropimax@gmail.com
	 *  @Date   05/11/2016
	 *  @Name   fn_update_rutinasarea
	 */
	
	function fn_update_rutinasarea($codigo,$cod_area,$cod_rutina,$cod_estado,$ajax = null,$bd = null){
	
		$repuesta = false;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
			//Sentecia
			$bd->setSentencia('UPDATE rutinas_area SET id_area_laboral=?,id_rutinas=?,cod_estado=? WHERE id_rutinas_area=?;');
			//Parametros
			$bd->setParametro($cod_area);
			$bd->setParametro($cod_rutina);
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
			$bd->printErrores('GestionRutinasArea::fn_update_rutinasarea', $ajax);
		}
		//Cierre de conexion
		$bd->Cerrar();
	
		return $repuesta;
	
	}
}

