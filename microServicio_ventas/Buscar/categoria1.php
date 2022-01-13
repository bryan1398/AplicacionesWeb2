<?php

header('Content-Type: application/json');

require_once("conexion.php");
require_once("Categoria.php");
$categoria = new Categoria();


$body =json_decode(file_get_contents("php://input"), true);

switch($_GET["op"]){
/* TABLA PRODUCTO*/
    case "GetPro":
        $datos=$categoria->get_categoria();
        echo json_encode($datos);
        break;

 case "GetPro2":
        $datos=$categoria->get_categoria_x_id($body["IDproducto"]);
        echo json_encode($datos);
        break;
        
/*TABLA EMPLEADO*/
         case "GetEm":
            $datos=$categoria->get_categoria_3();
            echo json_encode($datos);
             break;

             case "GetEm2":
                $datos=$categoria->get_categoria_3_id($body["IDempleado"]);
                echo json_encode($datos);
                 break;
                 /*TABLA VENTAS*/
             case "GetVe":
                $datos=$categoria->get_categoria_4();
                echo json_encode($datos);
                 break;
}

?>