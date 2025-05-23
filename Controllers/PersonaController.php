<?php 

class PersonaController{
    private $model;

    public function __construct() {
        require_once("c:/laragon/www/PHP/Biblioteca-PHP/Models/PersonaModel.php");
        $this->model = new PersonaModel();
    }

    public function guardar($nombre, $apellido, $edad, $n_documento){
        $id = $this->model->crearPersona($nombre, $apellido, $edad, $n_documento);
        return ($id!=false)? header("Location:show.php?id=" .$id) : header("Location:create.php");
    }
}