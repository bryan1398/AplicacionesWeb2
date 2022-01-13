<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$conexion= mysqli_connect("localhost","root","","basew2") or die("problemas de conexion");

$registro = mysqli_query($conexion, "select * from t_alumnos where alum_cedula= '$_REQUEST[txtcedula]'") or die
("problemas en la busqueda.... ".mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registro)){

    echo"Nombre:" , $reg['alum_nombres'], "<br> <br>";
    echo"Correo:" , $reg['alum_correo'], "<br> <br>";
    echo"Nivel: ";
    switch ($reg['alum_nivel']){

        case 1: 
            echo"Primero";
            break;
        case 2: 
            echo"Segundo";
            break;
        case 3: 
            echo"Tercero";
            break;
    }
}else{
    echo"no existe dato...";
}
mysqli_close($conexion);
?>

</body>
</html>