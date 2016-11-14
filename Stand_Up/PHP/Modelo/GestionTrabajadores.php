<?php

require_once('../Config/ConexionBD.php');

class GestionTrabajadores {

	/** @autor	Raphael Lara
	 *  @mail	lara_d_kli@hotmail.com
	 */
	function fn_consulta_trabajadores( $bd = null ){
		$array = null;

		if($bd == null){
			$bd = new ConexionBD();
		}

		if($bd->iniciar()){
			/** Sentencia */
			$bd->setSentencia('select * from trabajadores' );
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		/** En caso de errores */
		if($bd->Errores()){
			$bd->printErrores('GestionTrabajadores::fn_consulta_trabajadores');
		}

		$bd->Cerrar();
		return $array;
	}

	/** @autor	Raphael Lara
	 *  @mail	lara_d_kli@hotmail.com
	 */
	function fn_consulta_trabajador ( $codigo, $bd = null ){
		$array = null;

		if($bd == null){
			$bd = new ConexionBD();
		}

		if($bd->iniciar()){
			/** Sentencia */
			$bd->setSentencia('select * from trabajadores where id_trabajadores=?');
			$bd->setParametro($codigo);
				
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		/** En caso de errores */
		if($bd->Errores()){
			$bd->printErrores('GestionTrabajadores::fn_consulta_trabajador');
		}

		$bd->Cerrar();
		return $array;

	}
	
	/** @autor	Raphael Lara
	 *  @mail	lara_d_kli@hotmail.com
	 *  @date   05/11/2016
	 */
	function fn_insertar_trabajador ( $cod_area_laboral, $nombres, $apellidos, $correo, $ajax = null, $bd = null ){
	
		$repuesta = false;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		
		if($bd->iniciar()){
			/** Sentecia */
			$bd->setSentencia('INSERT INTO trabajadores ( id_area_laboral, nombres, apellidos, correo ) VALUES(?,?,?,?);');
			/** Parametros */
			$bd->setParametro($cod_area_laboral);
			$bd->setParametro($nombres);
			$bd->setParametro($apellidos);
			$bd->setParametro($correo);
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
			$bd->printErrores('GestionTrabajadores::fn_insertar_trabajador', $ajax);
		}
		/** Cierre de la conexion */ 
		$bd->Cerrar();
	
		return $repuesta;
	}
	
	/** @autor	Raphael Lara
	 *  @mail	lara_d_kli@hotmail.com
	 *  @date   05/11/2016
	 */
	function fn_update_trabajador( $cod_trabajador, $cod_area_laboral, $nombres, $apellidos, $correo, $cod_estado, $ajax = null, $bd = null ){
	
		$repuesta = false;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		
		if($bd->iniciar()){
			/** Sentecia */
			$bd->setSentencia('UPDATE trabajadores SET id_area_laboral=?, nombres=?, apellidos=?, correo=?, cod_estado=? WHERE id_trabajadores=?;');
			/** Parametros */
			$bd->setParametro($cod_area_laboral);
			$bd->setParametro($nombres);
			$bd->setParametro($apellidos);
			$bd->setParametro($correo);
			$bd->setParametro($cod_estado);
			$bd->setParametro($cod_trabajador);
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
			$bd->printErrores('GestionTrabajadores::fn_update_trabajadores', $ajax);
		}
		/** Cierre de la conexion */ 
		$bd->Cerrar();
		
		return $repuesta;
	}
	
	/** @autor	Raphael Lara
	 *  @mail	lara_d_kli@hotmail.com
	 *  @date   05/11/2016
	 */
	function fn_delete_trabajadores($cod_trabajador, $ajax = null, $bd = null ){
		
		$repuesta = false;
		
		if($bd == null){
			$bd = new ConexionBD();
		}
		
		if($bd->iniciar()){
			/** Sentecia */
			$bd->setSentencia('DELETE FROM trabajadores WHERE id_trabajadores=?;;');
			/** Parametros */
			$bd->setParametro($cod_trabajador);
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
			$bd->printErrores('GestionTrabajadores::fn_delete_trabajadores', $ajax);
		}
		/** Cierre de la conexion */ 
		$bd->Cerrar();
	
		return $repuesta;
	}
	
	/** @autor	Raphael Lara
	 *  @mail	lara_d_kli@hotmail.com
	 *  @date   05/11/2016
	 */
	function fn_consulta_trabajadorByArea( $cod_area_laboral, $ajax = null, $bd = null ){
		
		$array = null;
		
		if($bd == null){
			$bd = new ConexionBD();
		}
		
		if($bd->iniciar()){
			/** Sentecia */
			$bd->setSentencia('SELECT * FROM trabajadores WHERE id_area_laboral=?;');
			/** Parametros */
			$bd->setParametro($cod_area_laboral);
			/** Ejecutamos */
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		/** Errores */
		if($bd->Errores()){
			$bd->printErrores('GestionTrabajadores::fn_consulta_trabajadorByArea', $ajax);
		}
		/** Cierre de la conexion */ 
		$bd->Cerrar();
	
		return $array;
	}
	
}

?>