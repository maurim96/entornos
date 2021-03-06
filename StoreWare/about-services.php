<?php include("validate.php") ?>
<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>StoreWare - Servicios</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">StoreWare</a>
            </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li>
                      <a href="about-services.php">Servicios</a>
                  </li>
                  <li>
                      <a href="contact.php">Contacto</a>
                  </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                  <li><a href="carro/checkout.php"><span class="glyphicon glyphicon-shopping-cart"></span> Ir al carro</a></li>
                  <?php
                      if ($visible) {
                          echo ("<li><a>Bienvenido <b>" . $_SESSION["usuario"] .
                          "</b></a></li>");
                          if ($admin) {
                              echo ("<li>
                              <a href="."index-cp.php".">Panel de Control</a>
                              </li>");
                          }
                          ?>
                          <li><a href="php/logout.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesión</a></li>
                          <?php
                      }
                      else {
                        ?>
                            <li><a href="registro-login.html">Registrarse</a></li>
                            <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesión</a></li>
                      <?php }  ?>
                </ul>
            </div>
      </div>
    </nav>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading">Servicios</h1>
                    <h3 class="section-subheading text-muted">pensamos siempre en usted</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">E-Commerce</h4>
                    <p class="text-muted">Implementamos la innovadora herramienta E-Commerce, para que la experiencia de usuario sea 100% satisfactoria y gratificante.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-credit-card fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Formas de Pago</h4>
                    <p class="text-muted">Ofrecemos soporte a diversas y variadas formas de pago, desde tarjetas de credito VISA y MASTERCARD, a pago en efectivo y deposito bancario.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-cogs fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Soporte</h4>
                    <p class="text-muted">Service Desk disponible para el usuario. Nos encargamos de solucionar cualquier problema que se le presente al usuario.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <!-- Footer -->
        <hr>
        <footer>
            <div class="row" style="text-align:center">
                <div class="col-lg-12">
                    <p>Copyright &copy; StoreWare 2017 - All rights reserved • Created by Andres, Mauricio, Julian and Tomas.</p>
                </div>
            </div>
        </footer>
        <!-- end footer -->
    </div>
</body>
</html>