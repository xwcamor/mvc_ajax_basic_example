<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Profesores</title>
</head>
<body>
    <h2>Lista de Profesores</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>
        <?php foreach ($datos as $profesor) { ?>
        <tr>
            <td><?= $profesor["id"] ?></td>
            <td><?= $profesor["nombre"] ?></td>
            <td><?= $profesor["apellido"] ?></td>
        </tr>
        <?php } ?>
    </table>

    
</body>
</html>
