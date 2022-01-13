<?php

class Categoria extends Conectar{
    public function delete_categoria($IDproducto){
$conectar= parent::conexion();
parent::set_names();
$sql="DELETE FROM producto WHERE producto.IDproducto = ?";
$sql=$conectar->prepare($sql);
$sql->bindValue(1, $IDproducto);
$sql->execute();
return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);


    }
    public function delete_categoria2($IDempleado){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="DELETE FROM empleado WHERE  empleado.IDempleado = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $IDempleado);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        
        
            }
            public function delete_categoria3($IDventa){
                $conectar= parent::conexion();
                parent::set_names();
                $sql="DELETE FROM ventas WHERE  ventas.IDventa = ?";
                $sql=$conectar->prepare($sql);
                $sql->bindValue(1, $IDventa);
                $sql->execute();
                return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
                
                
                    }
        }

?>