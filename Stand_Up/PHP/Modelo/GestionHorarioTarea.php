<?php

require_once('/../Config/ConexionBD.php');

/**
 * @autor	Luis Leon
 * @mail	leon9326@gmail.com
 * @date	31/10/2016
 */

class GestionHorarioTarea {
	
	/**
	 * @autor	Luis Leon
	 * @mail	leon9326@gmail.com
	 * @date	31/10/2016
	 * @desc	Trae todos los horarios tareas
	 */
	function fn_consulta_horario_tareas ( $bd = null ){
		
		$array = null;
        
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
		   //Sentecia
		   $bd->setSentencia('select * from horario_tarea where cod_estado = 1' );
		   //Se ejecuta la sentencia
		   if($bd->Ejecutar()){
		     	$array = $bd->getResutados();
		   }
	   
		}
		//Errores
		if($bd->Errores()){
			$bd->printErrores('GestionHorarioTarea::fn_consulta_horario_tareas');
		}
		//Cierre de conexion
		$bd->Cerrar();
		
		return $array;
		
	}
	
	/**
	 * @autor	Luis Leon
	 * @mail	leon9326@gmail.com
	 * @date	31/10/2016
	 * @desc	Trae los horarios tareas por codigo
	 */
	function fn_consulta_horario_tarea ( $codigo, $bd = null ){
	
		$array = null;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
		    //Sentecia
			$bd->setSentencia('select * from horario_tarea where id_horario_tarea=? and cod_estado = 1');
			//Parametros
			$bd->setParametro($codigo);
			//Se ejecuta la sentencia
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		//Errores 
		if($bd->Errores()){
			$bd->printErrores('GestionHorarioTarea::fn_consulta_horario_tarea');
		}
	    //Cierre de conexion
		$bd->Cerrar();
	
		return $array;
	
	}
}
?>
