<?php

$dbname = "datosUsuarios";
$hostname = "127.0.0.1";
$username = "root";
$password = "1234";

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    echo "Conexion exitosa";

} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>



