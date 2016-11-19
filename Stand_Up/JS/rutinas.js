
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
	var descrecipcion  = $("#descripcion").val();
	
	var mensaje = "";
	
	if(duracion == ""){
		mensaje +="Digite la duracion de la descripcion.\n";
	}
	
	if(duracion == ""){
		mensaje +="Digite la duracion de la rutina.\n";
	}
	
    if(idclasificacion_rutina == ""){
        mensaje +="Selecione la clasificacion de la rutina.\n";
	}

    var re = /[0-9]/;

    if(!re.test(duracion)){
    	mensaje +="El campo duracion no es numerico.\n";
    }
    
    re = /[A-Za-z0-9]/;
    
    if(!re.test(descrecipcion)){
    	mensaje +="El campo descripcion no es alfa numerico.\n";
    }
    
    
    if(descrecipcion.length > 200){
    	mensaje +="El campo duracion tiene como maximo 200 caracteres.\n";
    }
    
    if(duracion.length > 11){
    	mensaje +="El campo descripcion tiene como maximo 200 caracteres.\n";
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


function fn_update_rutinas(elemento,id, item){
	
	elemento--;
	$("#index_select_tabla").val(elemento);
	$("#id_tabla").val(id);
	console.log("actualizar");
    //peticion ajax

    var formData = new FormData($('form')[1]);
    console.log(formData);
    var imagen = subirArchivo(formData);
    $('#url_imagen_'+item).val(imagen);
    if(imagen != ""){

		var respuesta = Ajax('forma_tabla_rutinas',
				             '../Control/Mod_rutinas.php');
		
		if(respuesta != null){
			alert('La Rutina fue modificada correctamente');
			forma_tabla_rutinas.submit();
		}	
    }

}

function fn_delete_rutinas(elemento,id, id_row){

	elemento--;
	$("#index_select_tabla").val(elemento);
	$("#id_tabla").val(id);
	
    //peticion ajax
	var respuesta = Ajax('forma_tabla_rutinas',
			             '../Control/Del_rutina.php');
	
	if(respuesta != null){
		alert('La rutina fue eliminada correctamente');
		$("#row_"+id_row).remove();
		///forma_tabla_rutinas.submit();
	}		

}