<?php
require_once __DIR__ . "/../models/Profesor.php";


class ProfesorController {
    public function index() {
        $profesor = new Profesor();
        $datos = $profesor->obtenerTodos();
        require_once __DIR__ . "/../views/profesores.php";

    }

    public function agregar() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];

            $profesor = new Profesor();
            $profesor->agregar($nombre, $apellido);

            header("Location: /public/index.php?controller=Profesore&action=index");
        }
    }
}
?>
