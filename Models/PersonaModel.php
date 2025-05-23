<?php

class PersonaModel{
    private $PDO;

    public function __construct() {
        require_once("c:/laragon/www/PHP/Biblioteca-PHP/Database/conexion.php");
        $con = new Database();
        $this->PDO = $con->conexion();
    }

    public function crearPersona($nombre, $apellido, $edad, $n_documento){
        $stmt = $this->PDO->prepare("INSERT INTO personas VALUES (null, :nombre, :apellido, :edad, :n_documento)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':edad', $edad);
        $stmt->bindParam(':n_documento', $n_documento);

        return ($stmt->execute())? $this->PDO->lastInsertId() : false;
    }
}