
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
		subir_archivo();
        //peticion ajax
		var respuesta = Ajax('forma_rutinas',
				             '../Control/Add_rutinas.php');
		
		if(respuesta != null){
			//subir_archivo();
			alert('La Rutina se inserto correctamente');
			//submit forma
			forma_registro_rutinas.submit();
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

	function subir_archivo(){
		console.log("subir archivo");
	    var formData = new FormData($('form')[0]);
	    $.ajax({
	        url: '../../PHP/upload.php',  
	        type: 'POST',
	        xhr: function() {  
	            var myXhr = $.ajaxSettings.xhr();
	            if(myXhr.upload){ 
	                myXhr.upload.addEventListener('progress',progressHandlingFunction, false); 
	            }
	            return myXhr;
	        },
	        //Ajax events
	        //beforeSend: beforeSendHandler,
	        success: completeHandler,
	        //error: errorHandler,
	        // Form data
	        data: formData,
	        //Options to tell jQuery not to process data or worry about content-type.
	        cache: false,
	        contentType: false,
	        processData: false
	    });

	}

	function completeHandler(data){
		console.log(data);
		$("#url_imagen").val(data['respuesta']);
	}