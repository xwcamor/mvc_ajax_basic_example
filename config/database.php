<?php

class Database {
    private static $host = "localhost";
    private static $dbname = "escuela";
    private static $username = "root";  // Cambia esto si tienes otro usuario
    private static $password = "";  // Si tienes contraseña, ponla aquí
    private static $conn;

    public static function connect() {
        if (!isset(self::$conn)) {
            try {
                self::$conn = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname, self::$username, self::$password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error en la conexión: " . $e->getMessage());
            }
        }
        return self::$conn;
    }
}
?>
