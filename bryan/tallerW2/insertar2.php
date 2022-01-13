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
mysqli_query($conexion, "insert into t_alumnos (alum_cedula, alum_nombres, alum_correo, alum_nivel) values 
                                               ('$_REQUEST[txtcedula]',                           
                                               '$_REQUEST[txtnombres]',
                                               '$_REQUEST[txtcorreo]',
                                               '$_REQUEST[txtnivel]')") or die("problemas en insertar......".mysqli_error($conexion));

mysqli_close($conexion);
echo "!Datos guardados exitosamente!";

?>
            
</body>
</html>

                      





