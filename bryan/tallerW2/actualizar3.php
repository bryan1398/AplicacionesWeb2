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
mysqli_query($conexion, "update t_alumnos set
                        alum_nombres='$_REQUEST[txtnombrenuevo]',
                        alum_correo='$_REQUEST[txtcorreonuevo]'
                        where alum_cedula='$_REQUEST[txtcedula]'")
                        or die("problemas al actualizar..." .mysqli_error($conexion));
echo"actualizacion correcta";

?>

</body>
</html>