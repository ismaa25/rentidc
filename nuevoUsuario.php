<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Nuevo Usuario</title>
</head>
<body>
    <?php
        include("validarNuevo.php");
    ?> 
    <header>
        <h1>RentIDC</h1>
    </header>
    <body>
        <main>
            <section>
                <article>
                <form action="#" method="post">
                    <h3>Agregar usuario</h3>
                    <input type="text" name="ausuario" id="ausuario" placeholder="Usuario">
                    <br>
                    <input type="password" name="apass" id="apass" placeholder="Contraseña">
                    <br>
                    <input type="submit" value="Agregar">
                </form>
                </article>
            </section>
        </main>
    </body>
</body>
</html>