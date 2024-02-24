<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <meta name="author" content="Christian, Ismael y Diego">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Nuevo Usuario</title>
</head>
<body>
   
    <header>
        <h1>RentIDC</h1>
    </header>
        <main>
            <section>
                <article>
                <form action="validarNuevo.php" method="post">
                    <h3>Agregar usuario</h3>
                    <input type="text" name="ausuario" id="ausuario" placeholder="Usuario" required>
                    <br>
                    <input type="password" name="apass" id="apass" placeholder="Contraseña" required>
                    <br>
                    <br>
                    <button type="submit" class="btnLogin">Confirmar registro <i class="fa-solid fa-user-plus"></i></button>
                    <div class="crearCuenta">
                        <hr class="my-4">
                        <p class="pCuenta">¿Tienes una cuenta?</p>
                        <a href="login.php" class="btnRegistro" role="button">Inicia sesion<i
                                class="fa-solid fa-right-to-bracket"></i></a>
                    </div>
                </form>
                </article>
            </section>
        </main>
</body>
</html>