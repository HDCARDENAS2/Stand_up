<?php

require_once('../Config/ConexionBD.php');

class GestionHorarioTareas {

	/** @Autor	Luis Leon
	 *  @Mail	leon9326@gmail.com
	 *  @Date   07/11/2016
	 *  @Name   fn_consulta_horariotareas
	 */
	function fn_consulta_horariotareas( $bd = null ){
		$array = null;

		if($bd == null){
			$bd = new ConexionBD();
		}

		if($bd->iniciar()){
			/** Sentencia */
			$bd->setSentencia('select * from horario_tarea');
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		/** En caso de errores */
		if($bd->Errores()){
			$bd->printErrores('GestionHorarioTareas::fn_consulta_horariotareas');
		}

		$bd->Cerrar();
		return $array;
	}
       
	/** @Autor	Luis Leon
	 *  @Mail	leon9326@gmail.com
	 *  @Date   07/11/2016
	 *  @Name   fn_consulta_horariotarea
	 */
     
     function fn_consulta_horariotarea($codigo,$bd = null){
	
		$array = null;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
		    //Sentecia
			$bd->setSentencia('select * from horario_tarea where id_horario_tarea=? and cod_estado=1');
			//Parametros
			$bd->setParametro($codigo);
			//Se ejecuta la sentencia
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		//Errores 
		if($bd->Errores()){
			$bd->printErrores('GestionHorarioTareas::fn_consulta_horariotarea');
		}
	    //Cierre de conexion
		$bd->Cerrar();
	
		return $array;
	
	}
	
	
	/** @Autor	Luis Leon
	 *  @Mail	leon9326@gmail.com
	 *  @Date   07/11/2016
	 *  @Name   fn_consulta_horariotarea
	 */
	 
	function fn_insertar_horariotarea($cod_horario,$cod_rutina,$ajax = null,$bd = null){
	
		$repuesta = false;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
			//Sentecia
			$bd->setSentencia('INSERT INTO horario_tarea (id_horarios,id_rutinas) VALUES(?,?);');
			//Parametros
			$bd->setParametro($cod_horario);
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
			$bd->printErrores('fn_insertar_horariotarea::fn_consulta_horariotarea',$ajax);
		}
		//Cierre de conexion
		$bd->Cerrar();
	
		return $repuesta;
	
	}
	
	
	/** @Autor	Luis Leon
	 *  @Mail	leon9326@gmail.com
	 *  @Date   07/11/2016
	 *  @Name   fn_update_horariotarea
	 */
	
	function fn_update_horariotarea($codigo,$cod_horario,$cod_rutina,$cod_estado,$ajax = null,$bd = null){
		
	
		$repuesta = false;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
			//Sentecia
			$bd->setSentencia('UPDATE horario_tarea SET id_horarios=?,id_rutinas=?,cod_estado=? WHERE id_horario_tarea=?;');
			//Parametros
			$bd->setParametro($cod_horario);
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
			$bd->printErrores('fn_update_horariotarea::fn_consulta_horariotarea',$ajax);
		}
		//Cierre de conexion
		$bd->Cerrar();
	
		return $repuesta;
	
	}

function fn_delete_horariotarea($codigo, $ajax = null,$bd = null){
	
		$repuesta = false;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
			//Sentecia
			$bd->setSentencia('DELETE FROM horario_tarea WHERE id_horario_tarea=?;');
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
			$bd->printErrores('fn_delete_horariotarea::fn_consulta_horarios',$ajax);
		}
		//Cierre de conexion
		$bd->Cerrar();
	
		return $repuesta;
	
	}

	

}

