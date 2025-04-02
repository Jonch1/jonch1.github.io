<?php
session_start();
global $conn;
require "conexion.php";

try {

    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    }

    $sql = "DELETE FROM Usuarios WHERE username = :username";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    session_destroy();
    header("Location: CuentaEliminada.html");


}catch(PDOException $e){
    echo $e->getMessage();
}

?>