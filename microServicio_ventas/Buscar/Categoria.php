<?php
//tabla producto buscar todo
class Categoria extends Conectar{
    public function get_categoria(){
$conectar= parent::conexion();
parent::set_names();
$sql="SELECT * FROM producto";
$sql=$conectar->prepare($sql);
$sql->execute();
return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
//tabla producto buscar ID
    public function get_categoria_x_id($IDproducto){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM producto WHERE IDproducto =?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $IDproducto);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }  
    //tabla almacen
    public function get_categoria_2(){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM almacen";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    } 
    // tabla empleado buscar todo       
    public function get_categoria_3(){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM empleado";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    } 
    // tabla empleado buscar ID 
    public function get_categoria_3_id($IDempleado){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM empleado WHERE IDempleado =?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $IDempleado);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    //tabla ventas buscar todo
    public function get_categoria_4(){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM ventas";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }  
}


?>