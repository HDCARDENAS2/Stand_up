
/**
 * Esta funcion registra rel horario
 *
 * @author Cesar Rodriguez
 *         @email crodriguez@gmail.com
 *         @date 05/11/2016
 * @access public
 */

function fn_registrar_horarios(){
	
	var dia_inicio = $("#dia_inicio").val();
	var dia_fin  = $("#dia_fin").val();
	var hora   = $("#hora").val();
	
	var mensaje = "";
	
	if(dia_inicio == ""){
		mensaje +="Seleccione un dia de inicio.\n";
	}
	
    if(dia_fin == ""){
        mensaje +="Selecione un dia de fin.\n";
	}

	if(hora == ""){
        mensaje +="Selecione la hora.\n";
	}
	
	if(mensaje == ""){
        //peticion ajax
		var respuesta = Ajax('forma_registro_horarios',
				             '../Control/Add_horarios.php');
		
		if(respuesta != null){
			alert('El horario se inserto correctamente');
			//submit forma
			forma_registro_horarios.submit();
		}	
	}else{
		alert(mensaje);
	}
	
}

/**
 * Esta funcion modifica el horario
 *
 * @author Cesar Rodriguez
 *         @email crodriguez@gmail.com
 *         @date 05/11/2016
 * @access public
 */

function fn_update_horarios(elemento,id){
	
	elemento--;
	$("#index_select_tabla").val(elemento);
	$("#id_tabla").val(id);
	console.log("actualizar");
    //peticion ajax
	var respuesta = Ajax('forma_tabla_horarios',
			             '../Control/Mod_horarios.php');
	
	if(respuesta != null){
		alert('El horario fue modificada correctamente');
	}	

}

/**
 * Esta funcion elimina el horario
 *
 * @author Cesar Rodriguez
 *         @email crodriguez@gmail.com
 *         @date 05/11/2016
 * @access public
 */

function fn_delete_horario(elemento,id){
	
	elemento--;
	$("#index_select_tabla").val(elemento);
	$("#id_tabla").val(id);
	console.log("actualizar");
    //peticion ajax
	var respuesta = Ajax('forma_tabla_horarios',
			             '../Control/Del_horarios.php');
	
	if(respuesta != null){
		alert('el horario fue eliminado correctamente');
	}	

}