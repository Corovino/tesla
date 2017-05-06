var User =(function(){

  var userData = function()
  {
  	  var data = {
  	  	"nombre":$('input[name=nombre]').val(),
  	  	"apellido":$('input[name=apellido]').val(),
  	  	"telefono":$('input[name=telefono]').val(),
  	  	"cedula":$('input[name=cedula]').val(),
  	  	"correo":$('input[name=correo]').val()
  	  }
  	  console.log(data);
  	  $.ajax({
  	  	url: 'routeData.php',
  	  	type: 'POST',
  	  	data: data,
  	  	success:function( data ){

             console.log(data);
             
             //var response = $.parseJSON(data);
             //console.log(response);
             if(data.estado == "true")
             {
                 alert('ok');                 
             }else{
             	alert('fail');
             }
  	  	},
  	  	error:function(xhr, ajaxOptions, thrownError){
  	  		console.log("error"+xhr);
  	  		console.log("error1"+ajaxOptions);
  	  		console.log("error2"+thrownError);
  	  	}
  	  });
  	  
  	  
  	  
  }

  return {
  	 "user" : function(){
  	 	userData();
  	 }
  }

}());