<?php
global $conn;
include "conexion.php";

try {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

    }

    $password_hashed = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO Usuarios (email, username, password) VALUES (:email, :username, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password_hashed);
    $stmt->execute();

    header("Location: usuarioCreado.html");
    exit();


} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}


?>