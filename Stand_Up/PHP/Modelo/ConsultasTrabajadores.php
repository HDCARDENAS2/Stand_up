<?php

require_once('/../Config/ConexionBD.php');

/*
 * @Autor Hernan Dario Cardenas
 * @Mail  dropimax@gmail.com
 * @Name ConsultasEmpleados
 * @Date 29/10/2016
 *
 * Esta clase contine las consultas de Empleados
 */

class ConsultasTrabajadores {
	
	/*
	 * @Autor Hernan Dario Cardenas
	 * @Mail  dropimax@gmail.com
	 * @Name fn_consulta_empleados
	 * @Date 29/10/2016
	 * 
	 * Esta funcion consulta todos los empleados
	 */
	function fn_consulta_empleados($bd = null){
		
		$array = null;
        
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
		   //Sentecia
		   $bd->setSentencia('select * from trabajadores' );
		   //Se ejecuta la sentencia
		   if($bd->Ejecutar()){
		     	$array = $bd->getResutados();
		   }
	   
		}
		//Errores
		if($bd->Errores()){
			$bd->printErrores('ConsultasEmpleados::fn_consulta_empleados');
		}
		//Cierre de conexion
		$bd->Cerrar();
		
		return $array;
		
	}
	
	/*
	 * @Autor Hernan Dario Cardenas
	 * @Mail  dropimax@gmail.com
	 * @Name fn_consulta_empleado
	 * @Date 29/10/2016
	 *
	 * Esta funcion consulta un empleado
	 */
	function fn_consulta_empleado($codigo,$bd = null){
	
		$array = null;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
		    //Sentecia
			$bd->setSentencia('select * from trabajadores where idtrabajadores=?');
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
