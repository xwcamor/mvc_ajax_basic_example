<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Estudiantes</title>
</head>
<body>
    <h2>Lista de Estudiantes</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>
        <?php foreach ($datos as $estudiante) { ?>
        <tr>
            <td><?= $estudiante["id"] ?></td>
            <td><?= $estudiante["nombre"] ?></td>
            <td><?= $estudiante["apellido"] ?></td>
        </tr>
        <?php } ?>
    </table>

    
</body>
</html>
