
<?php
/*
ALUMNO: CHRISTIAN ADRIAN PEREIRA GALEANO
ALUMNO: DIEGO LANAGRAN ESCAÑO
ALUMNO: ISMAEL LOPEZ VILLAR 
*/
session_start();

// Agregar producto al carrito
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['precio']) && isset($_POST['dias'])) {
    // Verificar si hay un usuario conectado
    if (isset($_SESSION['login'])) {
        $producto = [
            'id' => $_POST['id'],
            'nombre' => $_POST['nombre'],
            'precio' => $_POST['precio'],
            'dias' => $_POST['dias'],
            'imagen' => $_POST['imagen']
        ];

        // Agregar producto al carrito en la sesión
        $_SESSION['carrito'][] = $producto;
    } else {
        echo "Debes iniciar sesión para agregar productos al carrito";
    }

    // Redirigir a la página principal después de agregar el producto
    header('Location: deportivos.php');
    exit;
}
?>