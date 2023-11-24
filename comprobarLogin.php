<?php
/*
ALUMNO: CHRISTIAN ADRIAN PEREIRA GALEANO
ALUMNO: DIEGO LANAGRAN ESCAÑO
ALUMNO: ISMAEL LOPEZ VILLAR 
*/
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: login.php'); // Redirige a la página de inicio de sesión
    exit();
}

?>
