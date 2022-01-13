<?php

class Categoria extends Conectar{
    public function update_categoria($IDproducto,$modelo,$precio,$talla,$marca,$color){
$conectar= parent::conexion();
parent::set_names();
$sql="UPDATE producto set
modelo = ?,
precio = ?,
talla = ?,
marca = ?,
color = ?
WHERE
IDproducto = ?";

$sql=$conectar->prepare($sql);
$sql->bindValue(1, $modelo);
$sql->bindValue(2, $precio);
$sql->bindValue(3, $talla);
$sql->bindValue(4, $marca);
$sql->bindValue(5, $color);
$sql->bindValue(6, $IDproducto);
$sql->execute();
return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);


}
public function update_categoria2($IDempleado,$Nombre,$Direccion,$Telefono,$Turno){
    $conectar= parent::conexion();
    parent::set_names();
    $sql="UPDATE empleado set

    Nombre = ?,
    Direccion = ?,
    Telefono = ?,
    Turno = ?
    WHERE
    IDempleado= ?";
        
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1, $Nombre);
    $sql->bindValue(2, $Direccion);
    $sql->bindValue(3, $Telefono);
    $sql->bindValue(4, $Turno);
    $sql->bindValue(5, $IDempleado);
    $sql->execute();
    return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        
    
  }
}

?>