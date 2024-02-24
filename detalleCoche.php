<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Christian, Ismael y Diego">
    <link rel="icon" href="img/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/detallesCoche.css">
    <title>RentIDC - Detalles del Coche</title>
</head>

<body>
    <header>
        <?php include('coches.php');
        include('comprobarLogin.php'); ?>
        <figure class="caja1">
            <a href="index.php"><img src="img/logo_cabesa_negro.png" class="logo" alt="RentIDC"></a>
        </figure>
        <nav class="nav">
            <ol>
                <li><a href="index.php"><i class="fa-solid fa-house"></i><b>Inicio</b></a></li>
                <li><a href="deportivos.php" class="active"><i class="fa-solid fa-car active"></i><b>Coches Deportivos</b></a></li>
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
            <div class="detalle-coche">
                <?php
                if (isset($_GET['id']) && !empty($_GET['id'])) {
                    $cocheID = $_GET['id'];

                    $detallesCoche = null;
                    foreach ($coches as $coche) {
                        if ($coche['id'] == $cocheID) {
                            $detallesCoche = $coche;
                            break;
                        }
                    }

                    if ($detallesCoche) {
                        ?>
                        <div class="detalle-coche-container">

                            <img src="<?php echo $detallesCoche['imagen']; ?>" alt="<?php echo $detallesCoche['nombre']; ?>"
                                class="imagen-coche">
                            <div class="detalle-coche-info">
                                <h1>
                                    <?php echo $detallesCoche['nombre']; ?>
                                </h1>
                                <p>
                                    <?php echo $detallesCoche['descripcion']; ?>
                                </p>
                                <p class="precio">Precio:
                                    <?php echo $detallesCoche['precio']; ?> €/dia
                                </p>

                                <form action="carrito.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $detallesCoche['id']; ?>">
                                    <input type="hidden" name="nombre" value="<?php echo $detallesCoche['nombre']; ?>">
                                    <input type="hidden" name="precio" value="<?php echo $detallesCoche['precio']; ?>">
                                    <input type="hidden" name="imagen" value="<?php echo $detallesCoche['imagen']; ?>">
                                    <input type="hidden" name="logo" value="<?php echo $detallesCoche['logo']; ?>">

                                    <label for="dias">Días de Alquiler:</label>
                                    <input type="number" id="dias" name="dias" min="1" value="1">

                                    <button type="submit" name="agregarAlCarrito2" class="btn-reservar">Reservar</button>
                                </form>
                            </div>
                        </div>
                        <?php
                    } else {
                        echo "<p>No se encontró el producto.</p>";
                    }
                } else {
                    echo "<p>ID de producto no válido.</p>";
                }
                ?>
            </div>
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