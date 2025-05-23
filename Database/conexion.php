<?php
class Database{
    private string $host = "localhost";
    private string $database = "biblioteca";
    private string $user = "root";
    private string $password = "";

    public function conexion() {
        try {
            $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->database,$this->user,$this->password);
            return $PDO;
        } catch(PDOException $e){
            return $e->getMessage();
        }
    }
}