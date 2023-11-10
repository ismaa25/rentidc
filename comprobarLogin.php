<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: login.php'); // Redirige a la página de inicio de sesión
    exit();
}

?>
