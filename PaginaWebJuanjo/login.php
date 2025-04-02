<?php
session_start();
global $conn;
include "conexion.php";

    try {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
        }

            $sql = "SELECT * FROM Usuarios WHERE username = :username";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['username'] = $user['username'];
                header("Location: main.php");
                exit();
            } else {
                header("Location: datosIncorrectos.html");

            }

    }catch(PDOException $e){
        echo $e->getMessage();
    }

?>
