<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="CHRISTIAN PEREIRA GALEANO">
    <meta name="author" content="DIEGO LANAGRAN ESCAÑO">
    <meta name="author" content="ISMAEL LOPEZ VILLAR">
    <link rel="icon" href="img/favicon-16x16.png">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/deportivos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>RentIDC</title>
</head>
<body>
    <header>
        <?php
            session_start();

            // Verificar si existe una cookie de carrito
            if (!isset($_SESSION['carrito']) && isset($_COOKIE['carrito'])) {
                // Recuperar el carrito de la cookie y almacenarlo en la sesión
                $_SESSION['carrito'] = unserialize($_COOKIE['carrito']);
            }

            // Verificar si se ha enviado una solicitud para vaciar el carrito
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['vaciarCarrito']) && $_POST['vaciarCarrito'] === '1') {
                // Vaciar el carrito en la sesión y eliminar la cookie
                $_SESSION['carrito'] = [];
                setcookie('carrito', '', time() - 3600, '/');
                
                // Redirigir al usuario a la misma página después de vaciar el carrito
                header('Location: deportivos.php');
                exit;
            }            

            // Guardar el carrito en la cookie al finalizar la sesión
            if (isset($_SESSION['carrito'])) {
                $carrito_serializado = serialize($_SESSION['carrito']);
                setcookie('carrito', $carrito_serializado, time() + (30 * 24 * 60 * 60), '/');
            }
        ?>

        <figure class="caja1">
            <a href="index.php"><img src="img/logo_cabesa_negro.png" class="logo"></a>   
        </figure>
        <nav class="nav">
            <ol>
                <li><a href="index.php"><i class="fa-solid fa-house"></i><b>Inicio</b></a></li>
                <li><a href="deportivos.php"><i class="fa-solid fa-car"></i><b>Coches Deportivos</b></a></li>
                <li><a href="nosotros.php"><i class="fa-regular fa-id-badge"></i><b>Sobre nosotros</b></a></li>
                <li><a href=".php"><i class="fa-solid fa-location-arrow"></i><b>Reservas</b></a></li>
                <li><a href="cerrarSesion.php"><i class="fa-solid fa-right-from-bracket"></i><b>Cerrar sesión</b></a></li>
            </ol>
        </nav>
    </header>
    <main>
        <section>
            <article class="grid">
                <form action="agregar_carrito.php" method="post">
                    <figure>
                        <img src="img/lambo.jpeg">
                        <p>Alquiler Lamborghini Huracán 2000€/dia</p>
                        <input type="hidden" name="id" value="1">
                        <input type="hidden" name="nombre" value="Lamborghini Huracán">
                        <input type="hidden" name="precio" value="2000">
                        <label for="dias">Dias:</label>
                        <input type="number" name="dias" value="1" min="1">
                        <input type="submit" value="Añadir al Carrito">
                    </figure>
                </form>
                <form action="agregar_carrito.php" method="post">
                    <figure>
                        <img src="img/porche.jpeg">
                        <p>Alquiler Porsche GT3 1200€/dia</p>
                        <input type="hidden" name="id" value="2">
                        <input type="hidden" name="nombre" value="Porsche GT3">
                        <input type="hidden" name="precio" value="1200">
                        <label for="dias">Dias:</label>
                        <input type="number" name="dias" value="1" min="1">
                        <input type="submit" value="Añadir al Carrito">
                    </figure>
                </form>
                <form action="agregar_carrito.php" method="post">
                    <figure>
                        <img src="img/ferrari.jpg">
                        <p>Alquiler Ferrari F430 F1 1700€/dia</p>
                        <input type="hidden" name="id" value="3">
                        <input type="hidden" name="nombre" value="Ferrari F430">
                        <input type="hidden" name="precio" value="1700">
                        <label for="dias">Dias:</label>
                        <input type="number" name="dias" value="1" min="1">
                        <input type="submit" value="Añadir al Carrito">
                    </figure>
                </form>
                <form action="agregar_carrito.php" method="post">
                    <figure>
                        <img src="img/mustang.jpg">
                        <p>Alquiler Ford Mustang 5.0 Cabrio 800€/dia</p>
                        <input type="hidden" name="id" value="4">
                        <input type="hidden" name="nombre" value="Ford Mustang">
                        <input type="hidden" name="precio" value="800">
                        <label for="dias">Dias:</label>
                        <input type="number" name="dias" value="1" min="1">
                        <input type="submit" value="Añadir al Carrito">
                    </figure>
                </form>
                <form action="agregar_carrito.php" method="post">
                    <figure>
                        <img src="img/bmw.jpeg">
                        <p>Alquiler BMW M4 769€/dia</p>
                        <input type="hidden" name="id" value="5">
                        <input type="hidden" name="nombre" value="BMW M4">
                        <input type="hidden" name="precio" value="769">
                        <label for="dias">Dias:</label>
                        <input type="number" name="dias" value="1" min="1">
                        <input type="submit" value="Añadir al Carrito">
                    </figure>
                </form>
                <form action="agregar_carrito.php" method="post">
                    <figure>
                        <img src="img/audi.jpg">
                        <p>Alquiler Audi RS 890€/dia</p>
                        <input type="hidden" name="id" value="6">
                        <input type="hidden" name="nombre" value="Audi RS">
                        <input type="hidden" name="precio" value="890">
                        <label for="dias">Dias:</label>
                        <input type="number" name="dias" value="1" min="1">
                        <input type="submit" value="Añadir al Carrito">
                    </figure>
                </form>
            </article>
            <article class="carro">
                <aside id="carrito-lateral">
                    <h2>Carrito de Compras</h2>
                    <form method="post" action="">
                        <ul>
                            <?php
                            // Verificar si hay un usuario conectado
                            if (isset($_SESSION['login'])) {
                                // Mostrar los elementos en el carrito lateral
                                if (isset($_SESSION['carrito'])) {
                                    foreach ($_SESSION['carrito'] as $producto) {
                                        echo "<li>{$producto['nombre']} - {$producto['precio']}€ - Dias: {$producto['dias']}</li>";
                                    }
                                } else {
                                    echo "<li>El carrito está vacío</li>";
                                }
                            } else {
                                echo "<li>Debes iniciar sesión para ver tu carrito</li>";
                            }
                            ?>
                        </ul>
                        <button type="submit" name="vaciarCarrito" value="1">Vaciar Carrito</button>
                    </form>
                </aside>
            </article>
        </section>
    </main>
    <footer></footer>
</body>
</html>