<?php
/*
ALUMNO: CHRISTIAN ADRIAN PEREIRA GALEANO
ALUMNO: DIEGO LANAGRAN ESCAÑO
ALUMNO: ISMAEL LOPEZ VILLAR 
*/
session_start();

// Verificar si existe una cookie de carrito para este usuario
if (isset($_COOKIE['usuario_id']) && isset($_COOKIE['carritoUsuario' . $_COOKIE['usuario_id']])) {
    // Recuperar el carrito de la cookie y almacenarlo en la sesión
    $_SESSION['carrito'] = unserialize($_COOKIE['carritoUsuario' . $_COOKIE['usuario_id']]);
}

// Verificar si se ha enviado una solicitud para vaciar el carrito
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['vaciarCarrito'])) {
        // Vaciar el carrito en la sesión y eliminar la cookie del carrito
        $_SESSION['carrito'] = [];
        setcookie('carritoUsuario' . $_COOKIE['usuario_id'], '', time() - 3600, '/');
        // Redirigir al usuario a la misma página
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }

    // Eliminar producto del carrito
    if (isset($_POST['eliminarProducto'])) {
        $indice = $_POST['eliminarProducto'];
        if (isset($_SESSION['carrito'][$indice])) {
            unset($_SESSION['carrito'][$indice]);
            // Actualizar la cookie del carrito
            $carrito_serializado = serialize($_SESSION['carrito']);
            setcookie('carritoUsuario' . $_COOKIE['usuario_id'], $carrito_serializado, time() + (30 * 24 * 60 * 60), '/');
        }
        // Redirigir al usuario a la misma página después de eliminar el producto
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }

    // Agregar producto al carrito
    if (isset($_POST['agregarAlCarrito'])) {
        $id = $_POST['id'];
        $dias = $_POST['dias'];
        $encontrado = false;

        // Buscar el producto en el carrito
        foreach ($_SESSION['carrito'] as $key => $producto) {
            if ($producto['id'] === $id) {
                // Si el producto ya está en el carrito, actualizar los días
                $_SESSION['carrito'][$key]['dias'] += $dias;
                $encontrado = true;
                break;
            }
        }

        // Si el producto no está en el carrito, agregarlo
        if (!$encontrado) {
            $_SESSION['carrito'][] = [
                'id' => $_POST['id'],
                'nombre' => $_POST['nombre'],
                'precio' => $_POST['precio'],
                'imagen' => $_POST['imagen'],
                'dias' => $_POST['dias'],
                'logo' => $_POST['logo']
            ];
        }

        // Guardar el carrito en la cookie
        $carrito_serializado = serialize($_SESSION['carrito']);
        setcookie('carritoUsuario' . $_COOKIE['usuario_id'], $carrito_serializado, time() + (30 * 24 * 60 * 60), '/');
    }



}
?>