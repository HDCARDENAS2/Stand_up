$('#slider div:gt(0)').hide();


var hiden_duracion = document.getElementsByName('hiden_duracion[]')[0].value;
var interval = hiden_duracion*1000;

var timing =function(){
    var timer = setInterval(function(){

    	var maximoElementos = $("input[name=maximoElementos]").val();
    	var posicionTemporal = $("input[name=posicionTemporal]").val();
  
    	posicionTemporal++;

    	if(posicionTemporal==maximoElementos){
    		posicionTemporal=0;
    	}

    	var hiden_duracion = document.getElementsByName('hiden_duracion[]')[posicionTemporal].value;
    	interval=hiden_duracion*1000;

    	$("input[name=posicionTemporal]").val(posicionTemporal);
    	
    	 $('#slider div:first-child').fadeOut(0)
         .next('div').fadeIn(1000)
         .end().appendTo('#slider');

         clearInterval(timer);
         timing();
        
    },interval);
}
timing();