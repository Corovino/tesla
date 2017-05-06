<?php
include_once '../controller/cart.php';
$car = new Cart();
//include_once '../controller/cart.php';
$resultado = [];
//header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ( isset($_POST) ) {

        $data =[

            "marca" => $_POST['marca'],
            "modelo" => $_POST['modelo'],
            "placa" => $_POST['placa'],
            "capacidad" => $_POST['capacidad']
            
        ];
        

        $resultado = ["estado" => "true"];

        if ( $car->storeCart( $data['marca'],$data['modelo'],$data['placa'],$data['capacidad'] ) )
        {
             return print( json_encode($resultado) );
        }

       

    }
}

$resultado = array("estado" => "false");
return print(json_encode($resultado));
?>