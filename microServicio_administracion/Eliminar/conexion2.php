<?php

class Conectar{

    protected function Conexion(){

try {
$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=ventas_zapatos","root","");
return $conectar;

} catch (Exception $e){

        print "¡Error BD!: " . $e->getMessage() . "<br/>";
        die();
}
}

public function set_names(){

    return $this->dbh->query("SET NAMES 'utf8'");
}
}

?>