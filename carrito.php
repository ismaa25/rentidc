<?php
session_start();

// Verificar si existe una cookie de carrito
if (!isset($_SESSION['carrito']) && isset($_COOKIE['carrito'])) {
    // Recuperar el carrito de la cookie y almacenarlo en la sesión
    $_SESSION['carrito'] = unserialize($_COOKIE['carrito']);
}

// Verificar si se ha enviado una solicitud para vaciar el carrito
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['vaciarCarrito'])) {
    // Vaciar el carrito en la sesión y eliminar la cookie
    $_SESSION['carrito'] = [];
    setcookie('carrito', '', time() - 3600, '/');
    
    // Redirigir al usuario a la misma página después de vaciar el carrito
    header('Location: deportivos.php');
    exit;
}            

// Guardar el carrito en la cookie al finalizar la sesión
if (isset($_SESSION['carrito'])) {
    $carrito_serializado = serialize($_SESSION['carrito']);
    setcookie('carrito', $carrito_serializado, time() + (30 * 24 * 60 * 60), '/');
}
// Eliminar producto del carrito
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['eliminarProducto'])) {
    // Eliminar el producto del carrito utilizando el índice directamente
    unset($_SESSION['carrito'][$_POST['eliminarProducto']]);

    // Actualizar la cookie
    $carrito_serializado = serialize($_SESSION['carrito']);
    setcookie('carrito', $carrito_serializado, time() + (30 * 24 * 60 * 60), '/');
    
    // Redirigir al usuario a la misma página después de eliminar el producto
    header('Location: deportivos.php');
    exit;
}
// Agregar producto al carrito
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['agregarAlCarrito'])) {
    $producto = [
        'id' => $_POST['id'],
        'nombre' => $_POST['nombre'],
        'precio' => $_POST['precio'],
        'imagen' => $_POST['imagen'],
        'dias' => $_POST['dias'],
    ];

    // Agregar el producto al carrito en la sesión
    $_SESSION['carrito'][] = $producto;

    // Guardar el carrito en la cookie
    $carrito_serializado = serialize($_SESSION['carrito']);
    setcookie('carrito', $carrito_serializado, time() + (30 * 24 * 60 * 60), '/');
}
?>