<?php

$ubicacion = "Pierola 313";
$titulo = "Speed and Life";
$comprar = "COMPRAR AHORA";
$message = "Porfavor no envie mas de 2 veces su email";
?> 

<!DOCTYPE php>
<html lang="en">
<head>

     <title>LO ULTIMO</title>

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
                         <li><a href="contact.php">CONTACTANOS</a></li>
                    </ul>
               </div>

          </div>
     </section>

                 <!-- LO ULTIMO -->
     <section>
          <div class="container">
               <div class="text-center">
                    <h1>LO ULTIMO</h1>

                    <br>

                    <p class="lead">Su estilo, su manera.</p>
               </div>
          </div>
     </section>

     <section class="section-background">
          <div class="container">
               <div class="row">
                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/product-1-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="courses-date">
                                        <span title="passegengers"><i class="fa fa-user"></i> 5</span>
                                        <span title="luggages"><i class="fa fa-briefcase"></i> 4</span>
                                        <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                                        <span title="transmission"><i class="fa fa-cog"></i> A</span>
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="fleet.html"> Largo:Premium </a></h3>
                                   <p class="lead"><small>desde</small> <strong>$99</strong> <small>por semana</small></p>
                              </div>

                              <div class="courses-info">
                                   <button type="button" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block">  <?php echo $comprar; ?> </button>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/product-2-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="courses-date">
                                        <span title="passegengers"><i class="fa fa-user"></i> 5</span>
                                        <span title="luggages"><i class="fa fa-briefcase"></i> 4</span>
                                        <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                                        <span title="transmission"><i class="fa fa-cog"></i> A</span>
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="fleet.html">Largo: Station wagon</a></h3>
                                   <p class="lead"><small>desde </small> <strong>$99</strong> <small>por semana</small></p>
                              </div>

                              <div class="courses-info">
                                   <button type="button" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block"> <?php echo $comprar; ?> </button>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/product-3-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="courses-date">
                                        <span title="passegengers"><i class="fa fa-user"></i> 5</span>
                                        <span title="luggages"><i class="fa fa-briefcase"></i> 4</span>
                                        <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                                        <span title="transmission"><i class="fa fa-cog"></i> A</span>
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="fleet.html">Medio: Low emission</a></h3>
                                   <p class="lead"><small>desde</small> <strong>$99</strong> <small>por semana</small></p>
                              </div>

                              <div class="courses-info">
                                   <button type="button" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block"> <?php echo $comprar; ?> </button>
                              </div>
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
                                        <span><sup>*</sup> <?php echo $message; ?></span>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>

     <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
               <div class="modal-content">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="gridSystemModalLabel">Book Now</h4>
                    </div>
                    
                    <div class="modal-body">
                         <form action="#" id="contact-form">
                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pick-up location" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Return location" required>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pick-up date/time" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Return date/time" required>
                                   </div>
                              </div>
                              <input type="text" class="form-control" placeholder="Enter full name" required>

                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Enter email address" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Enter phone" required>
                                   </div>
                              </div>
                         </form>
                    </div>

                    <div class="modal-footer">
                         <button type="button" class="section-btn btn btn-primary">Book Now</button>
                    </div>
               </div>
          </div>
     </div>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>