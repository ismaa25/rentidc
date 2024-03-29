<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion | RentIDC</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="author" content="Christian, Ismael y Diego">
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
                    <span class="error">
                        <?php echo $errorCredenciales; ?>
                    </span>
                    <br>
                    <button type="submit" class="btnLogin">Iniciar sesión <i class="fa-solid fa-right-to-bracket"></i></button>
                    <div class="crearCuenta">
                        <hr class="my-4">
                        <p class="pCuenta">¿No tienes una cuenta?</p>
                        <a href="nuevoUsuario.php" class="btnRegistro" role="button">Registrate<i
                                class="fa-solid fa-user-plus"></i></a>
                    </div>
                </form>

            </article>
        </section>
    </main>
</body>

</html>