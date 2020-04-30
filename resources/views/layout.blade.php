<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Otech Soluciones Informticas una empresa de informática que ofrece una solución global en informática a sus clientes, empresas y particulares.">
    <meta name="keywords" content="empresa informatica, soporte tecnico, archidona, soluciones informaticas"/>
    <meta name="author" content="Oscar Enrique Diaz Capa" />
    <meta name="robots" content="index"/>
    <meta name="REPLY-TO" content="oscardiaz0077@hotmail.com">
    <title>OTECH SOLUCIONES INFORMATICAS - Servicio Tecnico & Tienda</title>
    <!-- Animate.css -->
    <link href="./dist/animate.css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome iconic font -->
    <link href="./dist/fontawesome/css/all.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,800,900" rel="stylesheet" />
    <!-- Chosen -->
    <link href="./dist/chosen/chosen.min.css" rel="stylesheet" type="text/css" />
    <!-- jQuery UI custom - slider only -->
    <link href="./dist/jquery-ui-custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <!-- Pentix styles start -->
    <!-- Core styles -->
    <link href="./dist/pentix/css/pentix.css" rel="stylesheet" type="text/css">
    <!-- Theme styles -->
    <link href="./dist/css/pex-theme.css" rel="stylesheet" type="text/css">
</head>
<body class="body loader-loading">
    @section('header')
    <header class="header">
        <input id="header-default" type="radio" class="collapse" checked="checked" name="siteheader" />
        <input id="header-shown" type="radio" class="collapse" name="siteheader" />
        <input id="header-hidden" type="radio" class="collapse" name="siteheader" />
        <div class="infobar xs-hidden">
            <div class="container">
                <div class="cols-list pull-left cols-md">
                   <div class="list-item">
                        <span class="info-icon"><i class="fas fa-home" aria-hidden="true"></i></span>San Agustin Calle 16 y Transv. 20, Archidona
                    </div>
                    <div class="list-item">
                        <span class="info-icon"><i class="fas fa-phone"></i></span>Telf: 0939693348
                    </div>
                </div>
                <div class="cols-list pull-right cols-md socials">
                    <div class="list-item">
                        <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="https://www.facebook.com/otech.ecuador" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="#"><i class="fab fa-pinterest" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="list-item">
                        <a href="#"><i class="fab fa-dribbble" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="stick-menu menu-wrap simple line">
            <div class="menu-container menu-row">
                <div class="logo">
                    <a href="index.php">
                        <img src="dist/images/logo.png" alt="logo" />
                    </a>
                </div>
                <div class="header-toggler pull-right xs-shown">
                    <label class="header-shown-sign" for="header-hidden"><i class="fas fa-times" aria-hidden="true"></i></label>
                    <label class="header-hidden-sign" for="header-shown"><i class="fas fa-bars" aria-hidden="true"></i></label>
                </div>
                <div class="clearfix xs-shown"></div>
                <div class="menu">
                    <ul class="menu-items">
                        <li>
                            <a href="index.php">Inicio</a>
                        </li>
                        <li>
                            <a href="nosotros.php">Acerca de</a>
                        </li>
                        <li>
                            <a href="servicios.php">Servicios</a>
                        </li>
                        <li>
                            <a href="proyectos.php">Proyectos</a>
                        </li>
                        <li>
                            <a href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="line-right xs-hidden"></div>
                </div>
            </div>
        </nav>
    </header>
    @show

    @section('content')
        <h1>Prueba</h1>
    @show

    <footer class="footer alt-bg">
        <div class="container only-xs-text-justify-center">
            <div class="solid-section">
                <div class="row cols-md">
                    <div class="sm-col-3">
                        <div class="footer-logo">
                            <img src="dist/images/logo_footer.png" alt="" />
                        </div>
                        <div class="footer-text sm-text-justify">Otech Soluciones Informaticas es una microempresa dedicada a la venta, ensamblaje y reparacion de equipos informaticos</div>
                    </div>
                    <div class="sm-col-8 sm-push-1">
                        <div class="row cols-md">
                            <div class="sm-col-4">
                                <div class="footer-title text-upper">Direccion</div>
                                <div class="footer-text">San Agustin Calle 16 y Transv. 20,
                                    <br/>Archidona</div>
                            </div>
                            <div class="sm-col-4">
                                <div class="footer-title text-upper">Contacto</div>
                                <div class="footer-text">(+593) 939693348
                                    <br/>info@otechecuador.com</div>
                            </div>
                            <div class="sm-col-4">
                                <div class="footer-title text-upper">Social</div>
                                <div class="cols-list socials cols-sm inline-block">
                                    <a href="#" class="list-item"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                    <a href="#" class="list-item"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" class="list-item"><i class="fab fa-pinterest" aria-hidden="true"></i></a>
                                    <a href="#" class="list-item"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                                    <a href="#" class="list-item"><i class="fab fa-dribbble" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyrights text-center top-separator ins-md">&copy; 2020 <b>Otech Soluciones Informaticas</b>. All Rights Reserved</div>
        </div>
    </footer>
    <!-- jQuery library -->
    <script src="./dist/js/jquery-1.12.4.js"></script>
    <!-- Paralax.js -->
    <script src="./dist/parallax.js/parallax.js"></script>
    <!-- FlexSlider -->
    <script src="./dist/flexslider/jquery.flexslider-min.js"></script>
    <!-- OwlCarousel2 -->
    <script src="./dist/owlcarousel2/owl.carousel.min.js"></script>
    <!-- Shuffle -->
    <script src="./dist/shuffle/shuffle.min.js"></script>
    <!-- Waypoints -->
    <script src="./dist/waypoints/jquery.waypoints.min.js"></script>
    <!-- Chosen -->
    <script src="./dist/chosen/chosen.jquery.min.js"></script>
    <!-- jQuery UI custom - slider only -->
    <script src="./dist/jquery-ui-custom/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Pentix scripts start -->
    <script src="./dist/pentix/js/pentix.js" type="text/javascript"></script>
    <!-- Pentix scripts end -->
    <!-- Inits theme scripts -->
    <script src="./dist/js/script.js" type="text/javascript"></script>
</body>
</html>