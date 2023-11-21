<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['precio']) && isset($_POST['dias'])) {
    // Verificar si hay un usuario conectado
    if (isset($_SESSION['login'])) {
        $producto = [
            'id' => $_POST['id'],
            'nombre' => $_POST['nombre'],
            'precio' => $_POST['precio'],
            'dias' => $_POST['dias']
        ];

        // Agregar producto al carrito en la sesión
        $_SESSION['carrito'][] = $producto;
    } else {
        echo "Debes iniciar sesión para agregar productos al carrito";
    }
}

// Redirigir a la página principal
header('Location: deportivos.php');
?>

