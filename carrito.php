<?php
/*
ALUMNO: CHRISTIAN ADRIAN PEREIRA GALEANO
ALUMNO: DIEGO LANAGRAN ESCAÑO
ALUMNO: ISMAEL LOPEZ VILLAR 
*/
// Iniciamos la sesion de carrito vacia

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

// Vaciar el carrito en la sesion y eliminar la cookie del carrito
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['vaciarCarrito'])) {
        $_SESSION['carrito'] = [];
        setcookie('carritoUsuario' . $_COOKIE['usuario_id'], '', time() - 3600, '/');
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }

    // Eliminar producto
    if (isset($_POST['eliminarProducto'])) {
        $indice = $_POST['eliminarProducto'];
        if (isset($_SESSION['carrito'][$indice])) {
            unset($_SESSION['carrito'][$indice]);
            // Actualizar la cookie
            $carrito_serializado = serialize($_SESSION['carrito']);
            setcookie('carritoUsuario' . $_COOKIE['usuario_id'], $carrito_serializado, time() + (30 * 24 * 60 * 60), '/');
        }
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }

    // Agregar producto
    if (isset($_POST['agregarAlCarrito']) || isset($_POST['agregarAlCarrito2'])) {
        if (isset($_POST['agregarAlCarrito2'])) {
            session_start();
        }
        
        $id = $_POST['id'];
        $dias = $_POST['dias'];

        // Actualizar dias si el producto ya esta.
        $encontrado = false;
        foreach ($_SESSION['carrito'] as $key => $producto) {
            if ($producto['id'] === $id) {
                $_SESSION['carrito'][$key]['dias'] += $dias;
                $encontrado = true;
                break;
            }
        }

        // Si el producto no esta, se agrega
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

        if (isset($_POST['agregarAlCarrito2'])) {
            header('Location: deportivos.php');
            exit;
        }
    }

}
?>