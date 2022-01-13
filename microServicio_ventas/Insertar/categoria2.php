<?php

class Categoria extends Conectar{
    public function insert_categoria($modelo,$precio,$talla,$marca,$color){
$conectar= parent::conexion();
parent::set_names();
$sql="INSERT INTO producto(IDproducto,modelo,precio,talla,marca,color) VALUES (NULL,?,?,?,?,?);";
$sql=$conectar->prepare($sql);
$sql->bindValue(1, $modelo);
$sql->bindValue(2, $precio);
$sql->bindValue(3, $talla);
$sql->bindValue(4, $marca);
$sql->bindValue(5, $color);
$sql->execute();
return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);


    }
    public function insert_categoria_Em($Nombre,$Direccion,$Telefono,$Turno){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="INSERT INTO empleado (IDempleado,Nombre,Direccion,Telefono,Turno) VALUES (NULL,?,?,?,?);";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $Nombre);
        $sql->bindValue(2, $Direccion);
        $sql->bindValue(3, $Telefono);
        $sql->bindValue(4, $Turno);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        
        
            }
            public function insert_categoria_Ve($fecha,$empleado_idempleado,$producto_idproducto){
                $conectar= parent::conexion();
                parent::set_names();
                $sql="INSERT INTO ventas(IDventa,fecha,empleado_idempleado,producto_idproducto) VALUES (NULL,?,?,?);";
                $sql=$conectar->prepare($sql);
                $sql->bindValue(1, $fecha);
                $sql->bindValue(2, $empleado_idempleado);
                $sql->bindValue(3, $producto_idproducto);
                $sql->execute();
                return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
                    }
}


?>