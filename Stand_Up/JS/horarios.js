
/**
 * Esta funcion registra rutina area
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
		var respuesta = Ajax('forma_tabla_horarios',
				             '../Control/Add_horarios.php');
		
		if(respuesta != null){
			alert('La Rutina area se inserto correctamente');
			//submit forma
			forma_registro_rutinas_area.submit();
		}	
	}else{
		alert(mensaje);
	}
	
}

/**
 * Esta funcion modifica rutina area
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
		alert('La Rutina area fue modificada correctamente');
	}	

}