<?php

require_once('../Config/ConexionBD.php');

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
		   $bd->setSentencia("SELECT id_horarios, 
		   						CONCAT(lv_dia_inicio.descripcion,'-',lv_dia_fin.descripcion,' ',hora_ejecucion) AS  label_horario,
		   						dia_inicio, dia_fin,
		   						hora_ejecucion
		   						FROM horarios 
		   						INNER JOIN lista_valores AS lv_dia_inicio ON lv_dia_inicio.valor = horarios.dia_inicio AND lv_dia_inicio.agrupacion = 'DIAS_SEMANA'
		   						INNER JOIN lista_valores AS lv_dia_fin ON lv_dia_fin.valor = horarios.dia_fin AND lv_dia_fin.agrupacion = 'DIAS_SEMANA'
		   						WHERE cod_estado = 1
		   						");
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
			//$bd->printErrores('fn_delete_horariosBD::fn_consulta_horarios',$ajax);
			
		}
		//Cierre de conexion
		$bd->Cerrar();
	
		return $repuesta;
	
	}


	/**
	 * @autor	Cesar Rodriguez
	 * @mail	crodriguez@gmail.com
	 * @date	12/11/2016
	 * @desc	Esta funcion consulta los horarios de la hora programada
	 */
	function fn_consulta_horario_por_hora( $hora, $dia, $bd = null ){
	
		$array = null;
	
		if($bd == null){
			$bd = new ConexionBD();
		}
		//Inicio Conexion
		if($bd->iniciar()){
		    //Sentecia
			$bd->setSentencia("SELECT trabajadores.correo, horarios.id_horarios 
								FROM horarios 
								INNER JOIN horario_tarea ON horario_tarea.id_horarios = horarios.id_horarios 
								INNER JOIN rutinas ON rutinas.id_rutinas = horario_tarea.id_rutinas 
								INNER JOIN rutinas_area ON rutinas_area.id_rutinas = rutinas.id_rutinas 
								INNER JOIN area_laboral ON area_laboral.id_area_laboral = rutinas_area.id_area_laboral 
								INNER JOIN trabajadores ON trabajadores.id_area_laboral = area_laboral.id_area_laboral 
								WHERE hora_ejecucion =? AND ? BETWEEN dia_inicio and dia_fin");
			//Parametros
			$bd->setParametro($hora);
			$bd->setParametro($dia);
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
}
?>
