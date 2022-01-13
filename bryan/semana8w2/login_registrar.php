<?php
$conn = new mysqli("localhost","root","", "loginw2s8");
if($conn-> connect_error){
    echo"No hay conexion: (".$conn->connect_error.")".$conn->connect_error;
}
 
$nombre=$_POST['txtusuario'];
$pass=$_POST['txtpassword'];
if(isset($_POST['btnregistrar'])){
    $pass_fuerte=password_hash($pass,PASSWORD_DEFAULT);
    $queryregistrar= "insert into login (usu, pass) values ('$nombre','$pass_fuerte')";


    if(mysqli_query($conn,$queryregistrar)){
        echo"<script>alert('Usuario registrado: $nombre'); window.location='index1.html'</script>";
    }else{
        echo"Error:".$queryregistrar."<br>".mysqli_error($conn);
    }
}
if(isset($_POST['btnlogin'])){
    $queryusuario=mysqli_query($conn, "select * from login where usu='$nombre'");
    $nr = mysqli_num_rows($queryusuario);
    $buscarpass = mysqli_fetch_array($queryusuario);

    if(($nr == 1) && (password_verify($pass,$buscarpass['pass']))) {
        echo"Bienvenido: $nombre";
    }else{
        echo"<script>alert('Usuario o contraseña incorrecto: $nombre'); window.location='index1.html'</script>";
    }
}
?>