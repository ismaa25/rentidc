<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Christian, Ismael y Diego">
    <link rel="icon" href="img/favicon-16x16.png">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/inicio.css">
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
                <li><a href="resumenReserva.php"><i class="fa-solid fa-car-side"></i><b>Reservas pendientes</b></a></li>
                <li><a href="cerrarSesion.php"><i class="fa-solid fa-right-from-bracket"></i><b>Cerrar sesión | <?php echo $_SESSION['login'];?></b></a></li>
            </ol>
        </nav>
    </header>
    <main>
        <section id="caj1">
            <article class="art1">
                <video src="video/anuncio1.mp4" autoplay loop class="video"></video>
            </article>
            <article class="art2">
                <br>
                <p class="p1"><b>La experiencia de un coche de lujo a tus pies</b></p>
                <p class="p2">Una agencia de aquiler de coches de lujo en toda España,Portugal,Francia y Suiza</p>
                <br>
            </article>
            <article>
                <article class="box1">
                    <figure class="cj1">
                        <img src="img/mercedesp.png" class="foto1">
                        <p><b>Mercedes Benz AMG G36</b></p>
                        <p>Un automovil todoterreno fabricado en 1978 por mercedes benz,
                            es considerado por muchos el mejor todoterreno del mercado,
                            se utiliza ampliamente como vehiculo militar.
                        </p>
                    </figure>
                </article>
                <article class="box2">
                    <figure class="cj2">
                        <img src="img/bentleyp.png" class="foto2">
                        <p><b>Bentley GT V8</b></p>
                        <p>Se presento por primera vez en 2012 en america del norte 
                            ,el coche tiene un motor v8 biturbo de 4 litros y 3994cc
                            tambien es capaz de alcanzar la velocidad de 309km/h
                        </p>
                    </figure>
                </article>
                <article class="box3">
                    <figure class="cj3">
                        <img src="img/rols4p.jpg" class="foto3">
                        <p><b>Rolls-Royce Ghost</b></p>
                        <p>Un coche de lujo fabricado por Rolls-Royce Motors Cars 
                            nombrado "Ghost" en honor al Fastama de plata, Siendo su primera 
                            fabricación en 1906 y anunciado en 2009 en Shanghái
                        </p>
                    </figure>
                </article>
            </article>
        </section>
    </main>
    <footer id="pie">
        <p>&copy;Propiedad de RentIDC</p>
        <p><a href="https://site.educa.madrid.org/ies.villablanca.madrid/">IES Villablanca</a></p>
        <p><a href="mailto:asirtfg@gmail.com">Contacto</a></p>
        <p><a href="nosotros.php#art1">Ubicación</a></p> 
    </footer>
</body>
</html>