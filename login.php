<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion | RentIDC</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <?php
        include("verificar.php");
    ?> 
    <header>
        <h1>RentIDC</h1>
    </header>
    <main>
        <section>
            <article>
                <form action="#" method="post">
                    <h3>Iniciar sesión</h3>
                    <input type="text" name="usuario" id="usuario" placeholder="Usuario">
                    <br>
                    <input type="password" name="pass" id="pass" placeholder="Contraseña">
                    <br>
                    <span class="error"><?php echo $errorCredenciales; ?></span>
                    <br>
                    <input type="submit" value="LOGIN">
                    <br>
                    <a href="nuevoUsuario.php">Registrate aqui</a> 
                </form>
                
            </article>
        </section>
    </main>
    <footer></footer>
</body>
</html>