<?php

require_once("c:/laragon/www/PHP/Biblioteca-PHP/Controllers/PersonaController.php");
$obj = new PersonaController();
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$n_documento = $_POST['n_documento'];

$obj->guardar($nombre, $apellido, $edad, $n_documento);