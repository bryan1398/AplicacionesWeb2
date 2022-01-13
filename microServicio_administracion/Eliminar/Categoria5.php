<?php

header('Content-Type: application/json');

require_once("conexion2.php");
require_once("categoria3.php");
$categoria = new Categoria();

$body = json_decode(file_get_contents("php://input"), true);

switch($_GET["op"]){

    case "Delete":
        $datos=$categoria->delete_categoria($body["IDproducto"]);
        echo json_encode("Delete Correcto");
        break;

        case "Delete2":
            $datos=$categoria->delete_categoria2($body["IDempleado"]);
            echo json_encode("Delete Correcto");
            break;

            case "Delete3":
                $datos=$categoria->delete_categoria3($body["IDventa"]);
                echo json_encode("Delete Correcto");
                break;
    }

?>