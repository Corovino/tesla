<?php
include_once 'config.php';
class Conexion
{


    protected $con;


    public function __construct()
    {
    	 $this->con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME); 

        if ( $this->con->connect_errno ) 
        { 
            echo "Fallo al conectar a MySQL: ". $this->con->connect_error; 
            return;     
        } 

        $this->con->set_charset(DB_CHARSET); 
    
    }



    /**
     * Conexión a la base datos
     *
     * @return PDO
     */
   /* public static function conectar()
    {
        try {

            $cn = new PDO("mysql:host=localhost;dbname=exiware", "root", "root");

            return $cn;

        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }*/
}
