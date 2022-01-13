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
?>
            <form action="actualizar3.php" method="post">
            su identificacion es:
            <input type="text" name="txtcedula" value="<?php echo $reg['alum_cedula']?>"><br><br><br>   
            ingrese nombres:
            <input type="text" name="txtnombrenuevo" ><br><br><br>
            ingrese correo:
            <input type="text" name="txtcorreonuevo" ><br><br><br>
            <input type="submit" value="Modificar">
        </form>
<?php
}else
echo"no existe alumno";

?>

</body>
</html>