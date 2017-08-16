<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>StoreWare</title>

        <link href="css/styles-css/contactform-styles.css" rel="stylesheet">
        <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/shop-homepage.css" rel="stylesheet">

    </head>

    <body>
        <!-- Navigation -->
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
                        <li><a href="checkout.html"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
                        <?php
                            if ($visible) {
                                echo ("<li><a>Bienvenido <b>" . $_SESSION["usuario"] .
                                "</b></a></li>");
                                if ($admin) {
                                    echo ("<li>
                                    <a href="."admin-cp.php".">Panel de Control</a>
                                    </li>");
                                }
                                ?>
                                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                                <?php
                            }
                            else {
                              ?>
                                <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesión</a></li>
                            <?php }  ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- nav -->
            <h1 style="text-align:center">Pongase en contacto con nosotros</h1>
        <div class="container map">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3347.868446653849!2d-60.64585033878075!3d-32.954482486117264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b7ab11d0eb49c3%3A0x11f1d3d54f950dd0!2sUTN-FRRO%2C+Universidad+Tecnol%C3%B3gica+Nacional+-+Facultad+Regional+Rosario!5e0!3m2!1ses-419!2sar!4v1490369624629" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>
            </div>
        </div>
        <hr>
        <!-- contact form -->
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-2">

                    <form name="contactform" method="post" action="php/contact.php" role="form">

                        <input type="text" id="name" name="name" placeholder="Nombre completo..." required="">

                        <input type="text" id="email" value="" placeholder="Ingrese su email..." required>

                        <select name="sports">
                          <option value="consulta">Consulta general</option>
                          <option value="pedido">Realizar un pedido</option>
                          <option value="problem">Problema en la compra</option>
                        </select><br><br>

                        <textarea id="message" name="message" placeholder="Escriba su consulta.." style="height:200px" required=""></textarea>

                        <button type="reset" value="Reset" class="btn btn-default" >Limpiar</button>
                        <button type="submit" value="submit" class="btn btn-success pull-right">Enviar mensaje</button>

                     </form>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li class="data"><i class="fa fa-phone fa-2x fonticon" style="vertical-align: middle;"></i>341 4558888</li>
                        <li class="data"><i class="fa fa-map-marker fa-2x fonticon" style="vertical-align: middle;"></i>Zeballos 1337</li>
                        <li class="data"><i class="fa fa-envelope-o fa-2x fonticon" style="vertical-align: middle;"></i>info@storeware.com.ar</li>
                        <li class="data"><i class="fa fa-facebook fa-2x fonticon" style="vertical-align: middle;"></i>/StoreWare</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- contact form -->

        <div class="container">
            <hr>
            <!-- Footer -->
            <footer>
                <div class="row" style="text-align:center">
                    <div class="col-lg-12">
                        <p>Copyright &copy; StoreWare 2017</p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>