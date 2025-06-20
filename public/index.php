<?php

$controllerName = isset($_GET["controller"]) ? $_GET["controller"] . "Controller" : "EstudianteController";
$action = isset($_GET["action"]) ? $_GET["action"] : "index";

// Construir la ruta del controlador
$controllerFile = "../app/controllers/" . $controllerName . ".php";

// Verificar si el archivo del controlador existe antes de incluirlo
if (file_exists($controllerFile)) {
    require_once $controllerFile;
} else {
    die("Error: El controlador '$controllerName' no existe.");
}

// Verificar si la clase del controlador y la acción existen
if (class_exists($controllerName) && method_exists($controllerName, $action)) {
    $controller = new $controllerName();
    $controller->$action();
} else {
    die("Error: Método '$action' no encontrado en '$controllerName'.");
}
?>
