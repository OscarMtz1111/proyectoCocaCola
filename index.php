<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio</title><!--Hace referencia al titulo de la pestaña de la pagina-->
        <link rel="shortcut icon" href="imagenes/favicon.png"><!--Hace referencia al icono de la pestaña de la pagina-->
        <link rel="stylesheet" href="css/normalize.css"><!--Normalizar css para explaradores-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css"><!--Hace un enlace con el archivo CSS-->
        <script src="https://kit.fontawesome.com/18346f9a70.js" crossorigin="anonymous"></script>
        
    </head><!--Finaliza la etiqueta head-->

    <body><!--Inicia el cuerpo de la pagina (informacion visible)-->
        <header>
            <div class="container">
                <a href="index.html">
                    <img src="imagenes/logo.svg" class="logo">
                </a><!--<a></a>Crear enlaces-->
                <nav>
                    <a href="#inicio">Inicio</a>
                    <a href="#nosotros">Nosotros</a>
                    <a href="#servicios">Servicios</a>
                    <a href="#galeria">Galeria</a>
                    <a href="#contactenos">Contactenos</a>
                </nav>
                <a href="" class="hamb"><i class="fa-solid fa-bars"></i></a>
            </div>
        </header><!--Cabecera-->

        <main>
            <!--------------------------------------Inicio---------------------------------------------------->
            <section id="inicio">
                <img src="imagenes/bannerprincipal.jpg" alt="">
                <div class="bloque-inicio">
                    <h1>Bienvenidos a Coca cola</h1>
                    <p>There are many variations of passages of Lorem Ipsum available,
                       but the majority have suffered alteration in some form,
                    </p>
                    <a href="#nosotros" class="boton boton-rojo">Ver más</a>
                </div>
            </section>
            <!------------------------------------------------------------------------------------------>

            <!--------------------------------------Nosostros---------------------------------------------------->
            <section id="nosotros" class="seccion">
                <div class="container">
                    <p>There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form,
                        by injected humour, or randomised words which don't look even slightly believable.
                        If you are going to use a passage of Lorem Ipsum,
                        you need to be sure there isn't anything embarrassing hidden in the middle of text.
                    </p>
                </div>
            </section>
            <!------------------------------------------------------------------------------------------>




            <!---------------------------------Servicios--------------------------------------------------------->
            <section id="servicios" class="seccion">
                <div class="container">
                    <div class="row">

                        <div class="columna columna-33 columna-mobile-100">
                            <div class="bloque-servicio">

                                <div class="bloque-img-servicio cuadrado-perfecto">
                                    <img src="imagenes/servicio1.jpg" alt="">
                                </div>

                                <div class="bloque-contenido-servicio">
                                    <h3>Servicio 1</h3>
                                    <p>
                                        Proin tempor odio eu eros consectetur lobortis eget eu nibh.
                                        Mauris laoreet mauris ac erat volutpat venenatis non id ipsum.
                                        Cras facilisis porttitor consectetur. Vestibulum aliquam efficitur ligula, eu malesuada augue facilisis sed.
                                        Nulla mollis nibh arcu. Vestibulum aliquam tellus blandit nulla efficitur molestie.
                                    </p>
                                    <a href="#" class="boton boton-blanco">Ver más</a>
                                </div>

                            </div>
                        </div>

                        <div class="columna columna-33 columna-mobile-100">
                            <div class="bloque-servicio">

                                <div class="bloque-img-servicio cuadrado-perfecto">
                                    <img src="imagenes/servicio2.jpg" alt="">
                                </div>

                                <div class="bloque-contenido-servicio">
                                    <h3>Servicio 2</h3>
                                    <p>
                                        Proin tempor odio eu eros consectetur lobortis eget eu nibh.
                                        Mauris laoreet mauris ac erat volutpat venenatis non id ipsum.
                                        Cras facilisis porttitor consectetur. Vestibulum aliquam efficitur ligula, eu malesuada augue facilisis sed.
                                        Nulla mollis nibh arcu. Vestibulum aliquam tellus blandit nulla efficitur molestie.
                                    </p>
                                    <a href="#" class="boton boton-blanco">Ver más</a>
                                </div>

                            </div>
                        </div>

                        <div class="columna columna-33 columna-mobile-100">
                            <div class="bloque-servicio">

                                <div class="bloque-img-servicio cuadrado-perfecto">
                                    <img src="imagenes/servicio3.jpg" alt="">
                                </div>

                                <div class="bloque-contenido-servicio">
                                    <h3>Servicio 3</h3>
                                    <p>
                                        Proin tempor odio eu eros consectetur lobortis eget eu nibh.
                                        Mauris laoreet mauris ac erat volutpat venenatis non id ipsum.
                                        Cras facilisis porttitor consectetur. Vestibulum aliquam efficitur ligula, eu malesuada augue facilisis sed.
                                        Nulla mollis nibh arcu. Vestibulum aliquam tellus blandit nulla efficitur molestie.
                                    </p>
                                    <a href="#" class="boton boton-blanco">Ver más</a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>  
            </section>
            <!---------------------------------Servicios--------------------------------------------------------->

            <!---------------------------------Galeria--------------------------------------------------------->
            <section id="galeria">
                <div class="container-fluid">
                    <div class="row">

                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="imagenes/servicio1.jpg" alt="">
                                <h4>Imagen 1</h4>
                            </div>
                        </div>

                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="imagenes/servicio2.jpg" alt="">
                                <h4>Imagen 2</h4>
                            </div>
                        </div>

                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="imagenes/servicio3.jpg" alt="">
                                <h4>Imagen 3</h4>
                            </div>
                        </div>

                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="imagenes/servicio1.jpg" alt="">
                                <h4>Imagen 4</h4>
                            </div>
                        </div>

                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="imagenes/servicio2.jpg" alt="">
                                <h4>Imagen 5</h4>
                            </div>
                        </div>

                        <div class="columna-33 columna-mobile-50">
                            <div class="cuadrado-perfecto">
                                <img src="imagenes/servicio3.jpg" alt="">
                                <h4>Imagen 6</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!------------------------------------------------------------------------------------------>

            <!---------------------------------Contactenos--------------------------------------------------------->
            <section id="contactenos" class="seccion">

                <iframe scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" 
                src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=Xochimilco%20+(Ciudad%20de%20M%C3%A9xico)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" 
                width="520" height="400" frameborder="0"></iframe>

                <div class="container-fluid">
                    <div class="row">

                        <div class="columna columna-41 columna-mobile-100 empujar-58 empujar-mobile-0 sinpadding-mobile">

                            <form action="index.php" method="post">

                                <div class="form-block">
                                    <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                                </div>

                                <div class="form-block">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>

                                <div class="form-block">
                                    <textarea name="mensaje" class="form-control" placeholder="Mensaje"></textarea>
                                </div>

                                <div class="form-block bloque-ultimo">
                                    <input type="submit" value="Enviar" class="boton boton-negro">
                                </div>


                                <!--Codigo necesario php para el envio de archivos-->

                                <?php

                                    if($_SERVER["REQUEST_METHOD"] == "POST"){

                                        $nombre = $_POST["nombre"] ;
                                        $email = $_POST["email"] ;
                                        $mensaje = $_POST["mensaje"] ;

                                        if(isset($nombre)){
                                            if(isset($email)){
                                                if(isset($mensaje)){

                                                    $para = "martinezrufino.1111@gmail.com";
                                                    $asunto = "Esto es una prueba";
                                                    $cuerpo = $nombre."\n".$email."\n".$mensaje;
                                                    $adicional = "From: noreply@jacoboamaru.com";

                                                    mail($para,$asunto,$cuerpo,$adicional);
                                                ?>
                                                    <p>Envio exitoso</p>
                                                <?php

                                                }
                                            }
                                        }
                                    }
                                ?>

                            </form>

                        </div>

                    </div>
                </div>

                
            </section>
            <!------------------------------------------------------------------------------------------>

        </main><!--Cuerpo-->

        <footer class="seccion">
            <div class="container">
                <div class="row">

                    <div class="columna columna-25 columna-mobile-100">
                        <img src="imagenes/logo-blanco.png" class="logo-footer" alt="">
                        <p>
                            Proin tempor odio eu eros consectetur lobortis eget eu nibh.
                            Mauris laoreet mauris ac erat volutpat venenatis non id ipsum.
                        </p>
                    </div>

                    <div class="columna columna-25 columna-mobile-100">
                        <h3>Temas relacionados</h3>
                        <ul>
                            <li><a href="#">Tema1</a></li>
                            <li><a href="#">Tema2</a></li>
                            <li><a href="#">Tema3</a></li>
                        </ul>
                    </div>

                    <div class="columna columna-25 columna-mobile-100">
                        <h3>Datos de contacto</h3>
                        <ul>
                            <li>ing.oscar.martinez@gmail.com</li>
                            <li>5547272179</li>
                            <li>Francisco V. No 51 <br> México, Ciudad de México</li>
                        </ul>
                    </div>

                    <div class="columna columna-25 columna-mobile-100">
                        <h3>Redes Sociales</h3>
                        <ul class="redes">
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="barra-footer">
                &copy; Derechos Reservados - 2023
            </div>
        </footer><!--Pie de pagina-->


        <!------------------------Jquerry-------------------------->


        <script src="js/jquery-3.6.4.min.js"></script>
        <script src="js/funciones.js"></script>
    </body>

</html>