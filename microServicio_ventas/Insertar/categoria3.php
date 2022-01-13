<?php

header('Content-Type: application/json');

require_once("conexion1.php");
require_once("categoria2.php");
$categoria = new Categoria();

$body = json_decode(file_get_contents("php://input"), true);


switch($_GET["op"]){

    case "Insert":
        $datos=$categoria->insert_categoria($body["modelo"],$body["precio"],$body["talla"],$body["marca"],$body["color"]);
        echo "Insert Correcto";
        break;

        case "InsertEm":
            $datos=$categoria->insert_categoria_Em($body["Nombre"],$body["Direccion"],$body["Telefono"],$body["Turno"]);
            echo "Insert Correcto";
            break;

            case "InsertVe":
                $datos=$categoria->insert_categoria_Ve($body["fecha"],$body["empleado_idempleado"],$body["producto_idproducto"]);
                echo "Insert Correcto";
                break;
    }

    ?>