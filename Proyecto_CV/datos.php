<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre['nombre'] = $_POST['nombre'];
    $telefono['telefono'] = $_POST['telefono'];
    $correo['correo'] = $_POST['correo'];
}
?>

<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>Tus datos</title>
        </head>
    <body>
        <h1>Información introducida:</h1>
        <ul>
            <li><strong>Nombre:</strong> <?php echo $nombre; ?></li>
            <li><strong>DNI:</strong> <?php echo $telefono; ?></li>
            <li><strong>Edad:</strong> <?php echo $correo; ?></li>
        </ul>
    </body>
</html>