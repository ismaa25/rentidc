<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['realizarReserva'])) {
    $_SESSION['carrito'] = [];
    setcookie('carritoUsuario' . $_COOKIE['usuario_id'], '', time() - 3600, '/');
    echo "<script>alert('La reserva ha sido enviada correctamente. Pronto recibirás una llamada para confirmar los detalles.'); window.location.href = 'resumenReserva.php';</script>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['eliminarReserva'])) {
    $_SESSION['carrito'] = [];
    setcookie('carritoUsuario' . $_COOKIE['usuario_id'], '', time() - 3600, '/');
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>