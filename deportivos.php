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
        include('coches.php');
        ?>
        <figure class="caja1">
            <a href="index.php"><img src="img/logo_cabesa_negro.png" class="logo"></a>
        </figure>
        <nav class="nav">
            <ol>
                <li><a href="index.php"><i class="fa-solid fa-house"></i><b>Inicio</b></a></li>
                <li><a href="deportivos.php"><i class="fa-solid fa-car"></i><b>Coches Deportivos</b></a></li>
                <li><a href="nosotros.php"><i class="fa-regular fa-id-badge"></i><b>Sobre nosotros</b></a></li>
                <li><a href="resumenReserva.php"><i class="fa-solid fa-car-side"></i><b>Reservas pendientes</b></a></li>
                <li><a href="cerrarSesion.php"><i class="fa-solid fa-right-from-bracket"></i><b>Cerrar sesión |
                            <?php echo $_SESSION['login']; ?>
                        </b></a></li>
            </ol>
        </nav>
    </header>
    <main>
        <section class="grid">
            <div class="productos">
                <?php foreach ($productos as $producto) { ?>
                    <form action="" method="post">
                        <figure class="producto">
                            <img src="<?php echo $producto['imagen']; ?>" class="imagenCoche">
                            <figcaption class="producto-info">
                                <h1 class="nombre">
                                    <?php echo $producto['nombre']; ?>
                                </h1>
                                <p class="precio">
                                    <?php echo $producto['precio']; ?>€/dia
                                </p>
                            </figcaption>
                            <div class="productoOpciones">
                                <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
                                <input type="hidden" name="nombre" value="<?php echo $producto['nombre']; ?>">
                                <input type="hidden" name="precio" value="<?php echo $producto['precio']; ?>">
                                <input type="hidden" name="imagen" value="<?php echo $producto['imagen']; ?>">
                                <input type="hidden" name="logo" value="<?php echo $producto['logo']; ?>">
                                <label for="dias">Dias:</label>
                                <input type="text" id="dias" name="dias" value="1" class="dias" pattern="[0-9]*">
                                <button type="submit" name="agregarAlCarrito" class="addCarro"><i
                                        class="fa-solid fa-cart-plus"></i></button>
                            </div>
                        </figure>
                    </form>
                <?php } ?>
            </div>
            <aside id="carro">
                <?php if (isset($_SESSION['login'])) { ?>
                    <h2>Reservas pendientes:</h2>
                    <?php if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) { ?>
                        <form method="post" action="">
                            <button type="submit" name="vaciarCarrito" onclick="return confirm('¿Estas seguro que quieres vaciar el carrito?')" class="vaciarCarro">Vaciar Carrito</button>
                        </form>
                        <?php foreach ($_SESSION['carrito'] as $key => $producto) { ?>
                            <div class="reserva">
                                <img src="<?php echo $producto['logo']; ?>" alt="<?php echo $producto['nombre']; ?>"
                                    class="logoCoches">
                                <div class="info">
                                    <span class="nombre">
                                        <?php echo $producto['nombre']; ?>
                                    </span>
                                    <div class="precio">
                                        <span>Días:
                                            <?php echo $producto['dias']; ?>
                                        </span>
                                        <span>Total:
                                            <?php echo $producto['precio'] * $producto['dias']; ?> €
                                        </span>
                                    </div>
                                </div>
                                <form method="post" action="">
                                    <button type="submit" name="eliminarProducto" onclick="return confirm('¿Estas seguro que quieres eliminar el producto?')" class="eliminarProd" value="<?php echo $key; ?>">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        <?php } ?>
                        <form method="post" action="resumenReserva.php">
                            <button type="submit" name="confirmarReserva" id="confirmarReserva">Ver resumen</button>
                        </form>
                    <?php } else { ?>
                        <p>No tienes ninguna reserva pendiente</p>
                    <?php } ?>
                <?php } else { ?>
                    <p>Debes iniciar sesión para ver tus reservas</p>
                <?php } ?>
            </aside>

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