<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="CHRISTIAN PEREIRA GALEANO">
    <meta name="author" content="DIEGO LANAGRAN ESCAÑO">
    <meta name="author" content="ISMAEL LOPEZ VILLAR">
    <link rel="icon" href="img/favicon-16x16.png">
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/deportivos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>RentIDC</title>
</head>
<body>
    <?php
        include('comprobarLogin.php');
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
                <li><a href="ubicacion.php"><i class="fa-solid fa-location-arrow"></i><b>Ubicacion</b></a></li>
                <li><a href="cerrarSesion.php"><i class="fa-solid fa-right-from-bracket"></i><b>Cerrar sesión</b></a></li>
            </ol>
        </nav>
    </header>
    <main>
        <section id="caja2">
            <article class=art1>
                <br>
                <figure class="f1">
                    <img src="img/lambo.jpeg">
                    <br>
                    <p>Alquiler Lamborghini Huracán 2000€/dia</p>
                    <input type="submit" value="Añadir">
                </figure>
                <br>
                <figure class="f2">
                    <img src="img/porche.jpeg">
                    <p>Alquiler Porsche GT3 1200€/dia</p>
                    <input type="submit" value="Añadir">
                </figure>
                <br>
                <figure class="f3">
                    <img src="img/ferrari.jpg">
                    <p>Alquiler Ferrari F430 F1 1700€/dia</p>
                    <input type="submit" value="Añadir">
                </figure>
                <br>
                <figure class="f4">
                    <img src="img/mustang.jpg">
                    <p>Alquiler Ford Mustang 5.0 Cabrio 800€/dia</p>
                    <input type="submit" value="Añadir">
                </figure>
                <br>
                <figure class="f5">
                    <img src="img/bmw.jpeg">
                    <p>Alquiler BMW M4 769€/dia</p>
                    <input type="submit" value="Añadir">
                </figure>
                <br>
                <figure class="f6">
                    <img src="img/audi.jpg">
                    <p>Alquiler Audi RS 890€/dia</p>
                    <input type="submit" value="Añadir">
                </figure>
            </article>
        </section>
    </main>
    <footer></footer>
</body>
</html>