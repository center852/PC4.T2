<?php

$ubicacion = "Pierola 313";
$titulo = "Speed and Life";
$message = "Porfavor no envie mas de 2 veces su email";
?> 


<!DOCTYPE php>
<html lang="en">
<head>

     <title>SOBRE NOSOTROS</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE CARGA -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand"> <?php echo $titulo; ?>  </a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li class="active"><a href="index.php">INICIO </a></li>
                         <li><a href="fleet.php">LO ULTIMO </a></li>
                         <li><a href="offers.php">OFERTAS </a></li>
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ACERCA DE <span class="caret"></span></a>
                              
                              <ul class="dropdown-menu">
                                   <li><a href="about-us.php">SOBRE NOSOTROS </a></li>
                                   <li><a href="team.php">EL EQUIPO </a></li>

                              </ul>
                         </li>
                         <li><a href="contact.html">CONTACTANOS</a></li>
                    </ul>
               </div>

          </div>
     </section>

     <section>
          <div class="container">
               <div class="text-center">
                    <h1>SOBRE NOSOTROS</h1>
               </div>
          </div>
     </section>

     <section class="section-background">
          <div class="container">
               <div class="row">
                    <div class="col-md-offset-1 col-md-4 col-xs-12 pull-right">
                         <img src="images/about-1-720x720.jpg" class="img-responsive img-circle" alt="">
                    </div>

                    <div class="col-md-7 col-xs-12">
                         <div class="about-info">
                              <h2>Speed and Life Company.</h2>

                              <figure>
                                   <figcaption>
                                        <p>Establecida en 1967, Speed and Life Company está comprometida a convertirse en un compañero de vida en automóviles y servicios 
                                             asociados. La compañía lidera Speed and Life Motor Group, una estructura de negocio innovadora capaz de mover recursos desde el 
                                             acero fundido hasta autos terminados. Hyundai Motor tiene 8 plantas de fabricación, 7 centros de diseño y técnicos alrededor del 
                                             mundo y el 2015 vendió 4,96 millones de autos globalmente. Con más de 110.000 empleados en todo el mundo, Hyundai Motor continúa
                                              mejorando su línea de productos con modelos locales y se preocupa de fortalecer su liderazgo en tecnologías limpias, comenzando con 
                                              el primer vehículo de celdas de hidrógeno de producción masiva, el Tucson Fuel Cell y con IONIQ, el primer modelo en el mundo con 
                                              tres sistemas de propulsión eléctrica.</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <section>
          <div class="container">
               <div class="row">
                    <div class="col-md-4 col-xs-12">
                         <img src="images/about-2-720x720.jpg" class="img-responsive img-circle" alt="">
                    </div>

                    <div class="col-md-offset-1 col-md-7 col-xs-12">
                         <div class="about-info">
                              <h2>Automotores Gildemeister </h2>

                              <figure>
                                   <figcaption>
                                        <p>Esta compañía fue fundada en 1986 para manejar la distribución de vehículos Speed and Life . Al comienzo la marca  era 
                                             prácticamente desconocida. Actualmente, es uno de los mayores  importadores de vehículos del mundo y durante los últimos años 
                                             siempre ha ocupado los primeros lugares de participación de mercado.
                                             Su concepto de distribución es mixto, basado en una combinación de concesionarios independientes y sucursales propias, 
                                             involucrando 62 salas de exhibición, 45 servicios técnicos y 53 locales de repuestos.</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <section class="section-background">
          <div class="container">
               <div class="row">
                    <div class="col-md-12 col-sm-12">
                         <div class="text-center">

                              <p class="lead">En Automotores Gildemeister S.A Perú, manejamos la distribución de vehículos Hyundai desde el año 2003 y 
                                   operamos nuestra característica combinación de sucursales propias y concesionarios independientes la que totaliza 36 salas de ventas, 29 servicios técnicos y salas de venta de repuestos, siendo uno de los 3 principales importadores de vehículos.</p>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Ubicanos en</h2>
                              </div>
                              <address>
                                   <p> <?php echo $ubicacion; ?> <br>Arequipa, Perú, Yanahuara </p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2020 Speed an Life </p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contactanos </h2>
                              </div>
                              <address>
                                   <p>+51 944 181 006</p>
                                   <p><a href="mailto:contact@company.com">speedandlife@company.com</a></p>
                              </address>

                              <div class="footer_menu">
                                   <h2>Links</h2>
                                   <ul>
                                        <li><a href="index.html">Inicio</a></li>
                                        <li><a href="about-us.html">Acerca de</a></li>
                                        <li><a href="terms.html">terminos & Condiciones</a></li>
                                        <li><a href="contact.html">Contactanos</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>trabaja con nosotros</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="#" method="get">
                                             <input type="email" class="form-control" placeholder="Ingresa tu correo" name="email" id="email" required>
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Enviar">
                                        </form>
                                        <span><sup>*</sup> <?php echo $message; ?> </span>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>