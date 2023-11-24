<?php
/*
ALUMNO: CHRISTIAN ADRIAN PEREIRA GALEANO
ALUMNO: DIEGO LANAGRAN ESCAÑO
ALUMNO: ISMAEL LOPEZ VILLAR 
*/
session_start();
$errorCredenciales = "";

if (isset($_POST['usuario']) && isset($_POST['pass'])) {
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];
    $registro = file('usuarios.txt', FILE_IGNORE_NEW_LINES);

    $loginCorrecto = false;

    foreach ($registro as $linea) {
        list($nombre, $contrasena) = explode('|', $linea);

        if ($usuario == $nombre && $pass == $contrasena) {
            $loginCorrecto = true;
            break;
        }
    }

    if ($loginCorrecto) {
        $_SESSION['login'] = $usuario; // Establece la sesión
        header('Location: index.php');
        exit();
    } else {
        $errorCredenciales = "Credenciales incorrectas";
    }
}

?>