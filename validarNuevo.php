<?php
/*
ALUMNO: CHRISTIAN ADRIAN PEREIRA GALEANO
ALUMNO: DIEGO LANAGRAN ESCAÑO
ALUMNO: ISMAEL LOPEZ VILLAR 
*/
    if (isset($_POST['ausuario']) && isset($_POST['apass'])) {
        $ausuario = $_POST['ausuario'];
        $apass = $_POST['apass'];

        $fichero_usuarios = file_get_contents('usuarios.txt', FILE_IGNORE_NEW_LINES);

        $nuevo_usuario = $ausuario . '|' . $apass;
        $fichero_usuarios .= "\n" . $nuevo_usuario;

        file_put_contents('usuarios.txt',$fichero_usuarios);

        echo "<script>
                alert('Usuario agregado correctamente');
                window.location.href = 'login.php';
          </script>";

    }
?>