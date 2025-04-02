<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">

<header class="bg-blue-600 text-white py-4">
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold text-center">PÁGINAS JONCHETE</h1>
    </div>
</header>

<div class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class="w-full max-w-sm bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Bienvenido <?php echo $_SESSION['username']; ?>!!</h2>
        <p>Selecciona la opcion que consideres oportuna:</p>
        <p class = "text-center mt-5 underline font-bold"><a href = "logout.php">Cerrar sesión</a></p>
        <p class = "text-center mt-5 underline font-bold"><a href = "delete.php">Eliminar mi cuenta</a></p>
    </div>
</div>

<footer class="bg-gray-800 text-white p-4">
    <div class="container mx-auto px-4 text-center">
        <p>&copy; 2025 Mi Sitio Web. Todos los derechos reservados.</p>
    </div>
</footer>


</body>

</html>