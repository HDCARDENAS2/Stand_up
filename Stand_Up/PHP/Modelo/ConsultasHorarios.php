<?php

require_once('/../Config/ConexionBD.php');

/*
 * @Autor Cesar Rodriguez
 * @Mail  crodriguez@gmail.com
 * @Name ConsultasEmpleados
 * @Date 29/10/2016
 *
 * Esta clase contine las consultas de Empleados
 */

class ConsultasHorarios {
	
	/*
	 * @Autor Cesar Rodriguez
	 * @Mail  crodriguez@gmail.com
	 * @Name fn_consulta_horarios
	 * @Date 29/10/2016
	 * 
	 * Esta funcion consulta todos los horarios
	 */
	function fn_consulta_horarios($bd = null){
		
		$array = null;
        
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
		   //Sentecia
		   $bd->setSentencia('select * from horarios' );
		   //Se ejecuta la sentencia
		   if($bd->Ejecutar()){
		     	$array = $bd->getResutados();
		   }
	   
		}
		//Errores
		if($bd->Errores()){
			$bd->printErrores('ConsultasEmpleados::fn_consulta_horarios');
		}
		//Cierre de conexion
		$bd->Cerrar();
		
		return $array;
		
	}
	
	/*
	 * @Autor Cesar Rodriguez
	 * @Mail  crodriguez@gmail.com
	 * @Name fn_consulta_empleado
	 * @Date 29/10/2016
	 *
	 * Esta funcion consulta un empleado
	 */
	function fn_consulta_horario($codigo,$bd = null){
	
		$array = null;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
		    //Sentecia
			$bd->setSentencia('select * from horarios where idhorarios=?');
			//Parametros
			$bd->setParametro($codigo);
			//Se ejecuta la sentencia
			if($bd->Ejecutar()){
				$array = $bd->getResutados();
			}
		}
		//Errores
		if($bd->Errores()){
			$bd->printErrores('ConsultasEmpleados::fn_consulta_empleado');
		}
	    //Cierre de conexion
		$bd->Cerrar();
	
		return $array;
	
	}
	
	
	
}
?>
