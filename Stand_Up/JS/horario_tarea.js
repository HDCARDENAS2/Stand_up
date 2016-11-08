
/**
 * Esta funcion registra horairo tarea
 *
 * @author Luis Leon
 *         @email leon9326@gmail.com
 *         @date 07/11/2016
 * @access public
 */

function fn_registrar_horario_tarea(){
	
	var cmb_rutina = $("#id_rutina").val();
	var cmb_horario   = $("#id_horario").val();
	
	var mensaje = "";
	
	if(cmb_rutina == ""){
		mensaje +="Seleccione una rutina.\n";
	}
	
    if(cmb_horario == "" || cmb_horario == null ){
        mensaje +="Selecione un horario.\n";
	}
	
	if(mensaje == ""){
        //peticion ajax
		var respuesta = Ajax('forma_registro_horario_tarea',
				             '../Control/Add_horario_tarea.php');
		
		if(respuesta != null){
			alert('El horario tarea se inserto correctamente');
			//submit forma
			forma_registro_horario_tarea.submit();
		}	
	}else{
		alert(mensaje);
	}
	
}


/**
 * Esta funcion actualiza un horairo tarea
 *
 * @author Luis Leon
 *         @email leon9326@gmail.com
 *         @date 07/11/2016
 * @access public
 */

function fn_udapte_horario_tarea(elemento,id){
	
	elemento--;
	$("#index_select_tabla").val(elemento);
	$("#id_tabla").val(id);
	
    //peticion ajax
	var respuesta = Ajax('forma_tabla_horario_tarea',
			             '../Control/Mod_horario_tarea.php');
	
	if(respuesta != null){
		alert('El horario tarea fue modificado correctamente');
	}	

}

function fn_delete_horario_tarea(elemento,id){

	elemento--;
	$("#index_select_tabla").val(elemento);
	$("#id_tabla").val(id);
	
    //peticion ajax
	var respuesta = Ajax('forma_tabla_horario_tarea',
			             '../Control/Del_horario_tarea.php');
	
	if(respuesta != null){
		alert('El horario tarea fue eliminado correctamente');
	}		

}