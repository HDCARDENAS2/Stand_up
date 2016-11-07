$(document).ready(function() {

	$('#button').click(subir_archivo);

	function subir_archivo(){

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

	function progressHandlingFunction(e){
	    if(e.lengthComputable){
	        $('progress').attr({value:e.loaded,max:e.total});
	    }
	}

	function completeHandler(data){
		console.log(data);
	}

});