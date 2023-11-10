<?php
session_start();

// Destruir la sesión
session_destroy();

// Redirigir a la página de inicio de sesión o a cualquier otra página deseada
header('Location: login.php');
exit();
?>
