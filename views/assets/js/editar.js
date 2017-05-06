$(document).ready(function(){


$('.edit').on('click',function(){
    var id = $(this).attr('id_edit');
    var data = [];
    $("#id_"+id+" td").each(function(index){
                 data.push($(this).text());
                 
      });
    console.log(data[1]);
    console.log(id);

    var datos = {
        'id': id,
    	'marca' : data[0],
    	'modelo':data[1],
    	'placa':data[2],
    	'capacidad':data[3]
    }
    console.log("d"+datos);
    $.ajax({
    	beforeSend:function(){
    		console.log(datos);
    	},
    	url: 'editCart.php',
    	type: 'POST',
    	data: {
    		    id: id,
    			marca : data[0],
    			modelo:data[1],
    			placa:data[2],
    			capacidad:data[3]
    	},
    	success:function( data ){

             console.log(data);
             
             //var response = $.parseJSON(data);
             //console.log(response);
             if(data.estado == "true")
             {
                 alert('se editaron los datos');                 
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
  	  
   
    
    
});


} );