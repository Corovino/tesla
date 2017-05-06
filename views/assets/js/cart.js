var Cart =(function(){

  var cartData = function()
  {
  	  var data = {
  	  	"marca":$('input[name=marca]').val(),
  	  	"modelo":$('input[name=modelo]').val(),
  	  	"placa":$('input[name=placa]').val(),
  	  	"capacidad":$('input[name=capacidad]').val()
  	  	
  	  }
  	  
  	  $.ajax({
  	  	
  	  	url: 'routeCart.php',
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
  	 "cart" : function(){
  	 	cartData();
  	 }
  }

}());