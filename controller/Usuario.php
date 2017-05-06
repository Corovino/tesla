<?php

include '../config/conexion.php';
/**
* 
*/
class Usuario extends Conexion
{
	

	public function __construct()
	{
		//$this->con = Conexion::conectar();
		parent::__construct();
		
	}

	public function getAllUsers()
	{
	     try {


            $result = $this->con->query('SELECT * FROM usuarios');

            $users = $result->fetch_all(MYSQLI_ASSOC);         
            return $users; 
	     	
	     	
	     } catch (Exception $e) {

	     	 die($ex->getMessage());
	     	
	     }
	     
	     $this->con = null;
	}

	public function storeUser( $nombre,$apellido, $cedula, $correo, $telefono  )
	{
		  
		  $response = false;

          if (isset($nombre) ) {

          	  $sql = "INSERT INTO usuarios (nombre, apellido , cedula, correo, tele ) VALUES ( '$nombre','$apellido','$cedula','$correo','$telefono')";
          	  
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

}


?>