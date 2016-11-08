
/**
 
 *
 * @author Alex ALvarado
 *         @email alexalvaradomarquez@gmail.com
 *         @date 08/11/2016
 * @access public
 */

function fn_registrar_rutinas(){
	
	var duracion = $("#duracion").val();
	var idclasificacion_rutina  = $("#idclasificacion_rutina").val();
	
	var mensaje = "";
	
	if(duracion == ""){
		mensaje +="Digite la duracion de la rutina.\n";
	}
	
    if(idclasificacion_rutina == ""){
        mensaje +="Selecione la clasificacion de la rutina.\n";
	}

	if(mensaje == ""){
        //peticion ajax
        var formData = new FormData($('form')[0]);
        var imagen = subirArchivo(formData);
        $('#url_imagen').val(imagen);
        
        if(imagen != ""){
			var respuesta = Ajax('forma_rutinas',
					             '../Control/Add_rutinas.php');
			
			if(respuesta != null){
				
				alert('La Rutina se inserto correctamente');
				//submit forma
				forma_rutinas.submit();
			}
		}
	}else{
		alert(mensaje);
	}
	
}

/**
 * Esta funcion modifica rutina area
 *
 * @author Alex ALvarado
 *         @email alexalvaradomarquez@gmail.com
 *         @date 08/11/2016
 * @access public
 */

function fn_update_rutinas(elemento,id){
	
	elemento--;
	$("#index_select_tabla").val(elemento);
	$("#id_tabla").val(id);
	console.log("actualizar");
    //peticion ajax
	var respuesta = Ajax('forma_tabla_rutinas',
			             '../Control/Mod_rutinas.php');
	
	if(respuesta != null){
		alert('La Rutina fue modificada correctamente');
	}	

}
