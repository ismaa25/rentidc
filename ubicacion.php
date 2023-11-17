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
    <link rel="stylesheet" href="css/ubicacion.css">
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
           
            <br>
            <article id="art2">
                <p>Nuestro horario es:
                    <br>
                    L a V: 8:00 a 18:00
                    <br>
                    S a D: 8:00 a 15:00
    
                </p>
                <br>
            </article>
            <br>
            <p>Envianos un mensaje para mas información</p>
            <article id="art3">
                <form action="#" id="formulario">
                    <label for="nombre">Nombre:</label>
                    <br>
                    <input type="text" name="nombre" id="nombre">
                    <br>
                    <label for="apellido">Apellido:</label>
                    <br>
                    <input type="text" name="apellido" id="apellido">
                    <br>
                    <label for="email">Correo elecronico:</label>
                    <br>
                    <input type="mail" name="email" id="email">
                    <br>
                    <label for="comentrio">Comentario:</label>
                    <br>
                    <textarea name="" id="" cols="50" rows="6"></textarea>
                    <br>
                    <br>
                    <input type="submit" name="enviar" id="enviar" value="Enviar">
                    <input type="reset" name="borrar" id="borrar" value="Restablecer">
                </form>
            </article>
            <article id="art1">
                <br>
                <p>Nuestra ubicacion es  C/Hermosura,15,19174</p>
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3027.7057896778456!2d-3.320021923083687!3d40.6363698714053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd43b3a2eb435831%3A0xd3e6a980293375e6!2sC.%20Hermosura%2C%2019174%20Valdeaveruelo%2C%20Guadalajara!5e0!3m2!1ses!2ses!4v1699865048510!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <br><br>
            </article>
            <article>
                
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