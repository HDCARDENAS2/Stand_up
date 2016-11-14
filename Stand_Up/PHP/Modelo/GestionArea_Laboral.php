<?php

require_once('../Config/ConexionBD.php');

class GestionArea_Laboral {
	
	/** @Autor	Raphael Lara
	 *  @Mail	lara_d_kli@hotmail.com
	 */
	function fn_consulta_areas_laboral( $bd = null ){
		$array = null;

		if($bd == null){
			$bd = new ConexionBD();
		}

		if($bd->iniciar()){
			/** Sentencia */
			$bd->setSentencia('select * from area_laboral' );
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		/** En caso de errores */
		if($bd->Errores()){
			$bd->printErrores('GestionAreaLaboral::fn_consulta_areas_laboral');
		}

		$bd->Cerrar();
		return $array;
	}
	
	/** @Autor	Raphael Lara
	 *  @Mail	lara_d_kli@hotmail.com
	 */
	function fn_consulta_area_laboral ( $codigo, $bd = null ){
		$array = null;

		if($bd == null){
			$bd = new ConexionBD();
		}

		if($bd->iniciar()){
			/** Sentencia */
			$bd->setSentencia('select * from area_laboral where id_area_laboral=?');
			$bd->setParametro($codigo);
				
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		/** En caso de errores */
		if($bd->Errores()){
			$bd->printErrores('GestionAreaLaboral::fn_consulta_area_laboral');
		}

		$bd->Cerrar();
		return $array;

	}
	
	/** @autor	Raphael Lara
	 *  @mail	lara_d_kli@hotmail.com
	 *  @date   05/11/2016
	 */
	function fn_insertar_area_laboral ( $descripcion, $ajax = null, $bd = null ){
	
		$repuesta = false;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		
		if($bd->iniciar()){
			/** Sentecia */
			$bd->setSentencia('INSERT INTO area_laboral ( descripcion ) VALUES(?);');
			/** Parametros */
			$bd->setParametro($descripcion);
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
			$bd->printErrores('GestionArea_Laboral::fn_insertar_area_laboral', $ajax);
		}
		/** Cierre de la conexion */ 
		$bd->Cerrar();
	
		return $repuesta;
	}
	
	/** @autor	Raphael Lara
	 *  @mail	lara_d_kli@hotmail.com
	 *  @date   05/11/2016
	 */
	function fn_update_area_laboral( $cod_area_laboral, $descripcion, $cod_estado, $ajax = null, $bd = null ){
	
		$repuesta = false;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		
		if($bd->iniciar()){
			/** Sentecia */
			$bd->setSentencia('UPDATE area_laboral SET descripcion=?, cod_estado=? WHERE id_area_laboral=?;');
			/** Parametros */
			$bd->setParametro($descripcion);
			$bd->setParametro($cod_estado);
			$bd->setParametro($cod_area_laboral);
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
			$bd->printErrores('GestionArea_Laboral::fn_update_area_laboral', $ajax);
		}
		/** Cierre de la conexion */ 
		$bd->Cerrar();
		
		return $repuesta;
	}
	
	/** @autor	Raphael Lara
	 *  @mail	lara_d_kli@hotmail.com
	 *  @date   05/11/2016
	 */
	function fn_delete_area_laboral( $cod_area_laboral, $ajax = null, $bd = null ){
		
		$repuesta = false;
		
		if($bd == null){
			$bd = new ConexionBD();
		}
		
		if($bd->iniciar()){
			/** Sentecia */
			$bd->setSentencia('DELETE FROM area_laboral WHERE id_area_laboral=?;;');
			/** Parametros */
			$bd->setParametro($cod_area_laboral);
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
			$bd->printErrores('GestionArea_Laboral::fn_delete_area_laboral', $ajax);
		}
		/** Cierre de la conexion */ 
		$bd->Cerrar();
	
		return $repuesta;
	}
}

?>