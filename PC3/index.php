<?php
$user = "cliente";
$need = "LO QUIERO";
$ubicacion = "Pierola 313";
$titulo = "Speed and Life";
$post = "Aprovecha la gran venta Anual";
$hoy = date("d/m/y");
$message = "Porfavor no envie mas de 2 veces su email";
?> 

<!DOCTYPE php>
<html lang="en">
<head>

     <title> TITULO </title>

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

                    
                    <a href="#" class="navbar-brand"> <?php echo $titulo; ?> </a>
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

     <!-- INICIO -->

     <!-- cambio 1 -->
     <section id="home">
          <div class="row">
               <div class="owl-carousel owl-theme home-slider">
                    <div class="item item-first">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1> <?php echo $post; ?> </h1>
                                        <h3>Si lo quieres, lo tienes</h3>
                                        <a href="fleet.html" class="section-btn btn btn-default">LO ULTIMO EN CARROS</a>
                                   </div>
                              </div>
                         </div>
                    </div>

     <!-- cambio 2 -->
                    <div class="item item-second">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1> <?php echo $post; ?> </h1>
                                        <h3>Si lo quieres, lo tienes</h3>
                                        <a href="fleet.html" class="section-btn btn btn-default">LO ULTIMO EN CARROS</a>
                                   </div>
                              </div>
                         </div>
                    </div>
     
      <!-- cambio 3 -->
                    <div class="item item-third">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1> <?php echo $post; ?></h1>
                                        <h3>Si lo quieres, lo tienes</h3>
                                        <a href="fleet.html" class="section-btn btn btn-default">LO ULTIMO EN CARROS</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     
     <main>

      <!-- SOBRE NOSOTROS -->
          <section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="text-center">
                                   <h2>Speed and Life</h2>

                                   <br>

                                   <p class="lead">La industria automotriz mundial está experimentando cambios cada vez más acelerados, impulsados por un ambiente de negocios volátil, incrementando la competencia y los cambios estructurales, debido a la introducción de tecnologías de vanguardia.

                                        En un momento de cambios e incertidumbre, es crucial crear un conjunto único de fortalezas para superar los desafíos que se presentan y lograr un crecimiento sostenido. Además de desarrollar su capacidad como fabricante global de automóviles logrando un crecimiento cualitativo, Speed and Life continuará invirtiendo en I+D para convertirse en un líder en innovación tecnológica.
                                        
                                        Los avances tecnológicos no solo permitirán que Speed and Life cumpla con las normas de seguridad y medioambientales, sino que también nos permitirá comenzar una nueva era para la industria automovilística.
                                        
                                        Desarrollaremos más carros ecológicos, tales como híbridos, eléctricos y celdas de combustible de hidrógeno. Así mismo, estamos comprometidos con el desarrollo de tecnologías de manejo autónomo, con el fin de mejorar aún más la seguridad y conveniencia de nuestros conductores.</p>
                              </div>
                         </div>
                    </div>
               </div>
          </section>

      <!-- OFERTAS -->
          <section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="section-title text-center">
                                   <h2>OFERTAS <small>Lo ve, lo tiene.</small></h2>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-6">
                              <div class="team-thumb">
                                   <div class="team-image">
                                        <img src="images/offer-1-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="team-info">
                                        <h3>CARRO DE FAMILIA</h3>

                                        <p class="lead"><small>por </small> <strong>$120</strong> <small> cada semana</small></p>

                                   </div>
                                   <div class="team-thumb-actions">
                                        <a href="offers.html" class="section-btn btn btn-primary btn-block"> <?php echo $need; ?> </a>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-6">
                              <div class="team-thumb">
                                   <div class="team-image">
                                        <img src="images/offer-2-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="team-info">
                                        <h3>AUTO PRESTIGIO</h3>

                                        <p class="lead"><small>por </small> <strong>$99</strong> <small>cada semana</small></p>

                                   </div>
                                   <div class="team-thumb-actions">
                                        <a href="offers.html" class="section-btn btn btn-primary btn-block"> <?php echo $need; ?> </a>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-6">
                              <div class="team-thumb">
                                   <div class="team-image">
                                        <img src="images/offer-3-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="team-info">
                                        <h3>SELECCION TOP</h3>

                                        <p class="lead"><small>por </small> <strong>$110</strong> <small>cada semana</small></p>

                                   </div>
                                   <div class="team-thumb-actions">
                                        <a href="offers.html" class="section-btn btn btn-primary btn-block"> <?php echo $need; ?> </a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </section>

      <!-- ULTIMAS PUB -->
          <section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="section-title text-center">

                                   <h2>ULTIMAS PUBLICACIONES</small></h2>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="images/blog-1-720x480.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="courses-date">
                                             <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                             <span title="Date"><i class="fa fa-calendar"></i> <?php echo $hoy; ?>  09:30 </span>
                                             <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                        </div>
                                   </div>

                                   <div class="courses-detail">
                                        <h3><a href="blog-post-details.html">EL USO DE SPEED AND LIFE AYUDÓ A MI VIDA</a></h3>
                                   </div>

                                   <div class="courses-info">
                                        <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">LEER MAS</a>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="images/blog-2-720x480.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="courses-date">
                                             <span title="Author"><i class="fa fa-user"></i> Richard Myers</span>
                                             <span title="Date"><i class="fa fa-calendar"></i> <?php echo $hoy; ?> 09:30</span>
                                             <span title="Views"><i class="fa fa-eye"></i> 178</span>
                                        </div>
                                   </div>

                                   <div class="courses-detail">
                                        <h3><a href="blog-post-details.html">LA MEJOR SELECCION DE AUTOS EN SPEED AND LIFE</a></h3>
                                   </div>

                                   <div class="courses-info">
                                        <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">LEER MAS</a>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="images/blog-3-720x480.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="courses-date">
                                             <span title="Author"><i class="fa fa-user"></i>Elizabeth Smith</span>
                                             <span title="Date"><i class="fa fa-calendar"></i> <?php echo $hoy; ?>  09:30</span>
                                             <span title="Views"><i class="fa fa-eye"></i> 256</span>
                                        </div>
                                   </div>

                                   <div class="courses-detail">
                                        <h3><a href="blog-post-details.html">VIAJAR EN LOS CARROS DE SPEED AND LIFE</a></h3>
                                   </div>

                                   <div class="courses-info">
                                        <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">LEER MAS</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </section>


     <!-- TESTIMONIOS -->
          <section id="testimonial">
               <div class="container">
                    <div class="row">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title text-center">
                                   <h2>Testimonios <small>En todo el Perú</small></h2>
                              </div>


                                   <div class="col-md-4 col-sm-4">
                                        <div class="item">
                                             <div class="tst-image">
                                                  <img src="images/tst-image-2-200x216.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="tst-author">
                                                  <h4>Camila</h4>
                                                  <span> <?php echo $user; ?> </span>
                                             </div>
                                             <p>La mejor compra con respecto a carros que puede hacer es en Speed and Life, definitivamente tienen la mejor opcion para cada persona</p>
                                             <div class="tst-rating">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-md-4 col-sm-4">
                                        <div class="item">
                                             <div class="tst-image">
                                                  <img src="images/tst-image-3-200x216.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="tst-author">
                                                  <h4>Barbie</h4>
                                                  <span><?php echo $user; ?></span>
                                             </div>
                                             <p>Siempre que quiero un modelo aqui lo encuentro, Speed and Life es el mejor lugar para ver Autos hechos Arte</p>
                                             <div class="tst-rating">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-md-4 col-sm-4">
                                        <div class="item">
                                             <div class="tst-image">
                                                  <img src="images/tst-image-4-200x216.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="tst-author">
                                                  <h4>Andrio</h4>
                                                  <span><?php echo $user; ?></span>
                                             </div>
                                             <p>Cada que vengo a esta tienda salgo feliz, su atención es única.</p>
                                             <div class="tst-rating">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                        </div>
                    </div>
               </div>
          </section> 
     </main>

     <!-- CONTACTANOS -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="section-title">
                                   <h2>CONTACTANOS <small> Para una mejor atención</small></h2>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Ingrese su nombre" name="name" required>
                    
                                   <input type="email" class="form-control" placeholder="Ingrese su correo" name="email" required>

                                   <textarea class="form-control" rows="6" placeholder="Dejenos un Mensaje" name="message" required></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="send message" value="Send Message">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="images/contact-1-600x400.jpg" class="img-responsive" alt="Smiling Two Girls">
                         </div>
                    </div>

               </div>
          </div>
     </section>       

     <!-- FOTTER -->
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