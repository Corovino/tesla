<?php
include_once '../controller/usuario.php';
$usr = new Usuario();
//include_once '../controller/cart.php';
$resultado = [];
header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ( isset($_POST) ) {

        $data =[

            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "telefono" => $_POST['telefono'],
            "cedula" => $_POST['cedula'],
            "correo" => $_POST['correo']
        ];
        

        $resultado = ["estado" => "true"];

        if ( $usr->storeUser( $data['nombre'],$data['apellido'],$data['cedula'],$data['correo'],$data['telefono'] ) )
        {
             return print(json_encode($resultado));
        }

       

    }
}

$resultado = array("estado" => "false");
return print(json_encode($resultado));
?>