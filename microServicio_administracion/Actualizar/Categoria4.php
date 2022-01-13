<?php

header('Content-Type: application/json');

require_once("conexion1.php");
require_once("categoria2.php");
$categoria = new Categoria();

$body = json_decode(file_get_contents("php://input"), true);

switch($_GET["op"]){

    case "Update":
        $datos=$categoria->update_categoria($body["IDproducto"],$body["modelo"],$body["precio"],$body["talla"],$body["marca"],$body["color"]);
        echo json_encode("Update Correcto");
        break;

        case "Update2":
            $datos=$categoria->update_categoria2($body["IDempleado"],$body["Nombre"],$body["Direccion"],$body["Telefono"],$body["Turno"]);
            echo json_encode("Update Correcto");
            break;
    }

?>