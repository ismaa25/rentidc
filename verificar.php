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

    foreach ($registro as $linea) {
        list($nombre, $contrasena) = explode('|', $linea);

        if ($usuario == $nombre && $pass == $contrasena) {
            // Establecer una cookie para el ID del usuario
            setcookie('usuario_id', $usuario, time() + (30 * 24 * 60 * 60), '/'); // Caduca en 30 días

            // Establecer la sesión para el usuario
            $_SESSION['login'] = $usuario;

            header('Location: index.php');
            exit();
        }
    }

    $errorCredenciales = "Credenciales incorrectas";
}


?>