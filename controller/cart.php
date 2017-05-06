<?php 

include '../config/conexion.php';
/**
* 
*/
class Cart extends Conexion
{
	
	

	function __construct()
	{
		//$this->con = Conexion::conectar();
		parent::__construct();
	}


	public function getAllCart()
	{
			


			$result = $this->con->query('SELECT * FROM vehiculos');

			$users = $result->fetch_all(MYSQLI_ASSOC);  

			return $users; 	
			
			
	}

	public function storeCart($marca,$modelo,$placa,$capacidad)
	{

			  $response = false;

	          if ( isset($marca) ) {

	          	  $sql = "INSERT INTO VEHICULOS (marca, modelo , placa, capacidad ) VALUES ( '$marca','$modelo','$placa',$capacidad)";
	          	  
	          	  $result = mysqli_query( $this->con, $sql );  	
	          	  
	          	  if( $result )
	          	  {
	          	  	 $response = true;
	          	  }else{
	          	  	 $response = false;
	          	  }

	          }
	       
	          return $response;
	}

	public function updateCart($id,$marca,$modelo,$placa,$capacidad)
	{


			          	  $sql = "UPDATE VEHICULOS SET modelo='$modelo', placa='$placa' ,marca='$marca', capacidad='$capacidad'  WHERE id=$id ";
			          	  
			          	  $result = mysqli_query( $this->con, $sql );  	
			          	  
			          	  if( $result )
			          	  {
			          	  	 $response = true;
			          	  }else{
			          	  	 $response = false;
			          	  }

			             return $response;
	}
					 

			          

}
?>