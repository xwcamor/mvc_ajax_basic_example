<?php
require_once __DIR__ . "/../models/Estudiante.php";


class EstudianteController {
    public function index() {
        $estudiante = new Estudiante();
        $datos = $estudiante->obtenerTodos();
        require_once __DIR__ . "/../views/estudiantes.php";

    }

    public function agregar() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];

            $estudiante = new Estudiante();
            $estudiante->agregar($nombre, $apellido);

            header("Location: /public/index.php?controller=Estudiante&action=index");
        }
    }
}
?>
