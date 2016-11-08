<?php

require_once('/../Config/ConexionBD.php');

/**
 * @autor	Cesar Rodriguez
 * @mail	crodriguez@gmail.com
 * @date	29/10/2016
 */

class GestionHorarios {
	
	/**
	 * @autor	Cesar Rodriguez
	 * @mail	crodriguez@gmail.com
	 * @date	29/10/2016
	 * @desc	Esta funcion consulta todos los horarios
	 */
	function fn_consulta_horarios( $bd = null ){
		
		$array = null;
        
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
		   //Sentecia
		   $bd->setSentencia('select * from horarios where cod_estado = 1' );
		   //Se ejecuta la sentencia
		   if($bd->Ejecutar()){
		     	$array = $bd->getResutados();
		   }
	   
		}
		//Errores
		if($bd->Errores()){
			$bd->printErrores('GestionHorarios::fn_consulta_horarios');
		}
		//Cierre de conexion
		$bd->Cerrar();
		return $array;
	}
	
	/**
	 * @autor	Cesar Rodriguez
	 * @mail	crodriguez@gmail.com
	 * @date	29/10/2016
	 * @desc	Esta funcion consulta un horario por id
	 */
	function fn_consulta_horario( $codigo, $bd = null ){
	
		$array = null;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
		    //Sentecia
			$bd->setSentencia('select * from horarios where id_horarios=? where cod_estado = 1');
			//Parametros
			$bd->setParametro($codigo);
			//Se ejecuta la sentencia
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		//Errores
		if($bd->Errores()){
			$bd->printErrores('GestionHorarios::fn_consulta_horarios');
		}
	    //Cierre de conexion
		$bd->Cerrar();
	
		return $array;
	
	}

	/** @Autor	Cesar Rodriguez
	 *  @Mail	crodriguez@gmail.com
	 *  @Date   05/11/2016
	 *  @Name   fn_insertar_horarios
	 */
	 
	function fn_insertar_horarios($dia_inicio,$dia_fin, $hora, $ajax = null,$bd = null){
	
		$repuesta = false;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
			//Sentecia
			$bd->setSentencia('INSERT INTO horarios (dia_inicio,dia_fin, hora_ejecucion) VALUES(?,?,?);');
			//Parametros
			$bd->setParametro($dia_inicio);
			$bd->setParametro($dia_fin);	
			$bd->setParametro($hora);
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
			$bd->printErrores('fn_insertar_horarios::fn_consulta_horarios',$ajax);
		}
		//Cierre de conexion
		$bd->Cerrar();
	
		return $repuesta;
	
	}
	
	
	/** @Autor	Cesar Rodriguez
	 *  @Mail	crodriguez@gmail.com
	 *  @Date   05/11/2016
	 *  @Name   fn_update_horariosBD
	 */
	
	function fn_update_horariosBD($codigo,$dia_inicio,$dia_fin,$hora,$ajax = null,$bd = null){
	
		$repuesta = false;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
			//Sentecia
			$bd->setSentencia('UPDATE horarios SET dia_inicio=?,dia_fin=?,hora_ejecucion=? WHERE id_horarios=?;');
			//Parametros
			$bd->setParametro($dia_inicio);
			$bd->setParametro($dia_fin);
			$bd->setParametro($hora);
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

	/** @Autor	Cesar Rodriguez
	 *  @Mail	crodriguez@gmail.com
	 *  @Date   05/11/2016
	 *  @Name   fn_delete_horariosBD
	 */
	
	function fn_delete_horariosBD($codigo, $ajax = null,$bd = null){
	
		$repuesta = false;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
			//Sentecia
			$bd->setSentencia('DELETE FROM horarios WHERE id_horarios=?;');
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

	function diasSemana(){
		$dias = ["lunes", "martes", "miercoles", "jueves","viernes", "sabado", "domingo"];
		return $dias;
	}
}
?>
