<?php
session_start();
session_destroy();
header("Location: login.html"); // Redirige al login
exit();
?>