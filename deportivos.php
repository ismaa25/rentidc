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
            include('carrito.php');       
        ?>

        <figure class="caja1">
            <a href="index.php"><img src="img/logo_cabesa_negro.png" class="logo"></a>   
        </figure>
        <nav class="nav">
            <ol>
                <li><a href="index.php"><i class="fa-solid fa-house"></i><b>Inicio</b></a></li>
                <li><a href="deportivos.php"><i class="fa-solid fa-car"></i><b>Coches Deportivos</b></a></li>
                <li><a href="nosotros.php"><i class="fa-regular fa-id-badge"></i><b>Sobre nosotros</b></a></li>
                <li><a href="cerrarSesion.php"><i class="fa-solid fa-right-from-bracket"></i><b>Cerrar sesión | <?php echo $_SESSION['login'];?></b></a></li>
            </ol>
        </nav>
    </header>
    <main>
        <section>
            <article class="grid">
                <form action="" method="post">
                    <figure>
                        <img src="img/lambo.jpeg">
                        <p>Alquiler Lamborghini Huracán 2000€/dia</p>
                        <input type="hidden" name="id" value="1">
                        <input type="hidden" name="nombre" value="Lamborghini Huracán">
                        <input type="hidden" name="precio" value="2000">
                        <input type="hidden" name="imagen" value="img/logoCoches/logoLAMBO.png">
                        <label for="dias">Dias:</label>
                        <input type="number" name="dias" value="1" min="1" id="caja">
                        <br>
                        <input type="submit" name="agregarAlCarrito" value="Añadir" id="carrito">
                    </figure>
                </form>
                <form action="" method="post">
                    <figure>
                        <img src="img/porche.jpeg">
                        <p>Alquiler Porsche GT3 1200€/dia</p>
                        <input type="hidden" name="id" value="2">
                        <input type="hidden" name="nombre" value="Porsche GT3">
                        <input type="hidden" name="precio" value="1200">
                        <input type="hidden" name="imagen" value="img/logoCoches/logoPORSCHE.png">
                        <label for="dias">Dias:</label>
                        <input type="number" name="dias" value="1" min="1"  id="caja" >
                        <br>
                        <input type="submit" name="agregarAlCarrito" value="Añadir" id="carrito">
                    </figure>
                </form>
                <form action="" method="post">
                    <figure>
                        <img src="img/ferrari.jpg">
                        <p>Alquiler Ferrari F430 F1 1700€/dia</p>
                        <input type="hidden" name="id" value="3">
                        <input type="hidden" name="nombre" value="Ferrari F430">
                        <input type="hidden" name="precio" value="1700">
                        <input type="hidden" name="imagen" value="img/logoCoches/logoFERRARI.png">
                        <label for="dias">Dias:</label>
                        <input type="number" name="dias" value="1" min="1"  id="caja">
                        <br>
                        <input type="submit" name="agregarAlCarrito" value="Añadir" id="carrito">
                    </figure>
                </form>
                <form action="" method="post">
                    <figure>
                        <img src="img/mustang.jpg">
                        <p>Alquiler Ford Mustang 5.0 Cabrio 800€/dia</p>
                        <input type="hidden" name="id" value="4">
                        <input type="hidden" name="nombre" value="Ford Mustang">
                        <input type="hidden" name="precio" value="800">
                        <input type="hidden" name="imagen" value="img/logoCoches/logoMUSTANG.png">
                        <label for="dias">Dias:</label>
                        <input type="number" name="dias" value="1" min="1"  id="caja">
                        <br>
                        <input type="submit" name="agregarAlCarrito" value="Añadir" id="carrito">
                    </figure>
                </form>
                <form action="" method="post">
                    <figure>
                        <img src="img/bmw.jpeg">
                        <p>Alquiler BMW M4 769€/dia</p>
                        <input type="hidden" name="id" value="5">
                        <input type="hidden" name="nombre" value="BMW M4">
                        <input type="hidden" name="precio" value="769">
                        <input type="hidden" name="imagen" value="img/logoCoches/logoBMW.png">
                        <label for="dias">Dias:</label>
                        <input type="number" name="dias" value="1" min="1"  id="caja">
                        <br>
                        <input type="submit" name="agregarAlCarrito" value="Añadir" id="carrito">
                    </figure>
                </form>
                <form action="" method="post">
                    <figure>
                        <img src="img/audi.jpg">
                        <p>Alquiler Audi RS 890€/dia</p>
                        <input type="hidden" name="id" value="6">
                        <input type="hidden" name="nombre" value="Audi RS">
                        <input type="hidden" name="precio" value="890">
                        <input type="hidden" name="imagen" value="img/logoCoches/logoAUDI.png">
                        <label for="dias">Dias:</label>
                        <input type="number" name="dias" value="1" min="1"  id="caja">
                        <br>
                        <input type="submit" name="agregarAlCarrito" value="Añadir" id="carrito">
                    </figure>
                </form>
            </article>
            <article class="carro">
                <aside id="carrito-lateral">
                    <h2>Reservas Pendientes</h2>
                    <form method="post" action="">
                        <ul>
                            <?php
                            if (isset($_SESSION['login'])) {
                                if (isset($_SESSION['carrito'])) {
                                    foreach ($_SESSION['carrito'] as $key => $producto) {
                                        echo "<li class='listaCompra'><img src='{$producto['imagen']}' alt='{$producto['nombre']}' class='logoCoches'> {$producto['nombre']} - {$producto['precio']}€ - Dias: {$producto['dias']} <button type='submit' name='eliminarProducto' class='eliminarProd' value='$key'><i class='fas fa-trash-alt'></i></button></li>";
                                    }
                                } else {
                                    echo "<li>El carrito está vacío</li>";
                                }
                            } else {
                                echo "<li>Debes iniciar sesión para ver tu carrito</li>";
                            }
                            ?>
                        </ul>
                    </form>
                    <form method="post" action="">
                        <button type="submit" name="vaciarCarrito" id="fcarrito">Vaciar Carrito</button>
                    </form>
                </aside>
            </article>
        </section>
    </main>
    <footer id="pie2">
        <p>&copy;Propiedad de RentIDC</p>
        <p><a href="https://site.educa.madrid.org/ies.villablanca.madrid/">IES Villablanca</a></p>
        <p><a href="mailto:asirtfg@gmail.com">Contacto</a></p>
        <p><a href="nosotros.php#art1">Ubicación</a></p> 
    </footer>
</body>
</html>