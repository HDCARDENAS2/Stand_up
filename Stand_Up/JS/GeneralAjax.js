

function Ajax(forma,url){
	
	var resultado = null;
	
	$.ajax({
		url : url+"",
		type : "post",
		data : $('#'+forma).serialize(),
		dataType : "json",
		async : false,
		success : function(response) {
			try {
				if(!ErrorManagger(response.errors)){
					resultado = response;
				}
			} catch (e) {
				var errorMsg = "[AjaxException resultado ] Se han presentado los siguientes problemas:\n";
				errorMsg += "Error Javascript --> " + e.toString();
				Console.log(response+"\n"+e.toString());
				alert(errorMsg);
			}
		},
		error : function(response){
			ErrorManagger(response.errors);
		}
	});
	
	return resultado;
}

function ErrorManagger(errores) {
	
	var flag = 1;
	
	if (errores != null) {
		var err = '';
		err = 'Ocurrieron los siguientes problemas: ' + "\n" + "\n";
		var cantErrors = errores.length;
		for (i = 0; i < cantErrors; i++) {
			err = err + '- ' + errores[i] + "\n";
		}
		alert(err);
		flag = 0;
	}

	if(flag == 1){
		return false;
	}else{
		return true;
	}
	 
}

function subirArchivo(formData){
	console.log("subirArchivo");
	var resultado = null;
 	$.ajax({
	        url: '../../PHP/upload.php',  
	        type: 'POST',
	        async : false,
	        xhr: function() {  
	            var myXhr = $.ajaxSettings.xhr();
	            if(myXhr.upload){ 
	                //myXhr.upload.addEventListener('progress',progressHandlingFunction, false); 
	            }
	            return myXhr;
	        },
	        //Ajax events
	        //beforeSend: beforeSendHandler,
	        success: function(data){
	        	resultado = data;
		
	        },
	        //error: errorHandler,
	        // Form data
	        data: formData,
	        //Options to tell jQuery not to process data or worry about content-type.
	        cache: false,
	        contentType: false,
	        processData: false
	    });
 	return  resultado;

}


