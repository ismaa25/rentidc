<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Christian, Ismael y Diego">
    <link rel="icon" href="img/favicon-16x16.png">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/resumenReserva.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>RentIDC - Resumen de Reserva</title>
</head>

<body>
    <?php
    include("comprobarLogin.php");
    include("carrito.php");
    include("confirmarReserva.php");
    ?>
    <header>
        <figure class="caja1">
            <a href="index.php"><img src="img/logo_cabesa_negro.png" class="logo"></a>
        </figure>
        <nav class="nav">
            <ol>
                <li><a href="index.php"><i class="fa-solid fa-house"></i><b>Inicio</b></a></li>
                <li><a href="deportivos.php"><i class="fa-solid fa-car"></i><b>Coches Deportivos</b></a></li>
                <li><a href="nosotros.php"><i class="fa-regular fa-id-badge"></i><b>Sobre nosotros</b></a></li>
                <li><a href="resumenReserva.php" class="active"><i class="fa-solid fa-car-side active"></i><b>Reservas pendientes</b></a></li>
                <li><a href="cerrarSesion.php"><i class="fa-solid fa-right-from-bracket"></i><b>Cerrar sesión |
                            <?php echo $_SESSION['login']; ?>
                        </b></a></li>
            </ol>
        </nav>
    </header>
    <main>
        <section>
            <h2>Resumen de la reserva</h2>

            <?php
            $totalReserva = 0;
            if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
                ?>
                <table>
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Modelo</th>
                            <th>Precio por día</th>
                            <th>Días</th>
                            <th>Total parcial</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($_SESSION['carrito'] as $key => $producto) { ?>
                            <tr>
                                <td><img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>"></td>
                                <td>
                                    <?php echo $producto['nombre']; ?>
                                </td>
                                <td>
                                    <?php echo $producto['precio']; ?> €
                                </td>
                                <td>
                                    <?php echo $producto['dias']; ?>
                                </td>
                                <td>
                                    <?php echo $producto['precio'] * $producto['dias']; ?> €
                                </td>
                                <td class="celdaBorrar">
                                <form method="post" action="">
                                    <button type="submit" name="eliminarProducto"
                                        onclick="return confirm('¿Estas seguro que quieres eliminar el coche?')"
                                        class="btnBorrar" value="<?php echo $key; ?>">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </button>
                                </form>
                                </td>
                                <?php $totalReserva += $producto['precio'] * $producto['dias']; ?>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td colspan="5" class="textReserva">Total de la reserva:</td>
                            <td><span class="totalReserva">
                                    <?php echo $totalReserva; ?> €
                                </span></td>
                        </tr>
                    </tbody>
                </table>
                <form method="post">
                    <button type="submit" onclick="return confirm('¿Estas seguro que quieres eliminar todas las reservas?')" name="eliminarReserva">Eliminar reservas</button>
                </form>
                <form method="post" action="">
                    <div class="fContacto">
                        <h2>Datos de contacto</h2>
                        <div class="fInput">
                            <div class="gForm">
                                <label for="nombre">Nombre:</label>
                                <input type="text" id="nombre" name="nombre" required>
                            </div>
                            <div class="gForm">
                                <label for="email">Correo electrónico:</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="gForm">
                                <label for="telefono">Teléfono:</label>
                                <input type="tel" id="telefono" name="telefono" required>
                            </div>
                        </div>
                    </div>

                    <button type="submit" name="realizarReserva">Solicitar reserva</button>
                </form>

            <?php } else { ?>
                <p>No tienes reservas pendientes, mira nuestros coches disponibles <a href="deportivos.php">aqui</a>.</p>
            <?php } ?>
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