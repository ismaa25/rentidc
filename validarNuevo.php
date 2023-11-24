<?php
/*
ALUMNO: CHRISTIAN ADRIAN PEREIRA GALEANO
ALUMNO: DIEGO LANAGRAN ESCAÑO
ALUMNO: ISMAEL LOPEZ VILLAR 
*/
    if (isset($_POST['ausuario']) && isset($_POST['apass'])) {
        $ausuario = $_POST['ausuario'];
        $apass = $_POST['apass'];

        // Leer archivo de usuarios
        $fichero_usuarios = file_get_contents('usuarios.txt', FILE_IGNORE_NEW_LINES);

        // Agregar usuario al fichero
        $nuevo_usuario = $ausuario . '|' . $apass;
        $fichero_usuarios .= "\n" . $nuevo_usuario;

        // Agregar usuario a fichero
        file_put_contents('usuarios.txt',$fichero_usuarios);

        // Mensaje de alerta y redireccionamiento
        echo "<script>
                alert('Usuario agregado correctamente');
                window.location.href = 'login.php';
          </script>";

    }
?>