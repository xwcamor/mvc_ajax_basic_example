<?php
require_once __DIR__ . "/../../config/database.php";


class Estudiante {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function obtenerTodos() {
        $query = $this->db->query("SELECT * FROM estudiantes");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function agregar($nombre, $apellido) {
        $query = $this->db->prepare("INSERT INTO estudiantes (nombre, apellido) VALUES (?, ?)");
        return $query->execute([$nombre, $apellido]);
    }
        
}
?>
