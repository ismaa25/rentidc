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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>RentIDC</title>
</head>
<body>
    <?php
        include('comprobarLogin.php');
    ?>
    <header>
        <figure="caja1">
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
            <article class="art1">
                <video src="video/anuncio.mp4" autoplay loop class="video"></video>
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
                        <img src="img/mercedes.png" class="foto1">
                    </figure>
                    <p><b></b></p>
                    <p><b></b></p>
                    <p><b></b></p>
                </article>
                <article class="box2">
                    <figure class="cj2">
                        <img src="img/bentley.png" class="foto2">
                    </figure>
                    <p><b></b></p>
                    <p><b></b></p>
                    <p><b></b></p>
                </article>
                <article class="box3">
                    <figure class="cj3">
                        <img src="img/rols4.jpg" class="foto3">
                    </figure>
                    <p><b></b></p>
                    <p><b></b></p>
                    <p><b></b></p>
                </article>
            </article>
            
        </section>
        <section id="caja3">
            <article>
                
            </article>
            <article>
                
            </article>
            <article>
                
            </article>
        </section>
    </main>
    <footer></footer>
</body>
</html>