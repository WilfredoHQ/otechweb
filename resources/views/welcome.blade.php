@extends('layout')

@section('header')
<header class="header header-over">
            <input id="header-default" type="radio" class="collapse" checked="checked" name="siteheader" />
            <input id="header-shown" type="radio" class="collapse" name="siteheader" />
            <input id="header-hidden" type="radio" class="collapse" name="siteheader" />
            <div class="infobar transparent bottom-separator xs-hidden">
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
            <nav class="stick-menu menu-wrap simple line transparent">
                <div class="menu-container menu-row">
                    <div class="logo">
                        <a href="index.php">
                            <img src="./dist/images/logo.png" alt="logo" />
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
@endsection

@section('content')
<section>
            <div class="flexslider screen-height">
                <div class="slides">
                    <div class="slide">
                        <img src="./dist/images/slider/slider1.png" alt="" data-cover-image="true" />
                        <div class="theme-back"></div>
                        <div class="pos-center text-center col-12 text-white">
                            <div class="banner-title res-text-xxl">Paginas Web & Tiendas de Comercio Electronico</div>
                          
                        </div>
                    </div>
                    <div class="slide">
                        <img src="./dist/images/slider/slider2.png" alt="" data-cover-image="true" />
                        <div class="theme-back"></div>
                        <div class="pos-center text-center col-12 text-white">
                            <div class="banner-title res-text-xxl">Servicio Tecnico & Tienda </div>
                        </div>
                    </div>
                </div>
                <div class="flex-custom-navigation">
                    <!-- Arrow Navigator -->
                    <a href="#" class="flex-prev">
                        <i class="fas fa-angle-left" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="flex-next">
                        <i class="fas fa-angle-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </section>
        <div class="clearfix muted-bg">
            <section class="md-stuck-top content-section">
                <div class="container hyped-block">
                    <div class="row cols-md rows-md">
                        <div class="md-col-6">
                            <div class="row cols-md rows-md">
                                <div class="sm-col-6">
                                    <div class="price-block simple" data-inview-showup="showup-translate-up">
                                        <div class="price-back"></div>
                                        <div class="price-image">
                                            <img class="image" src="./dist/images/icons/notebook-dark.png" alt="" />
                                        </div>
                                        <div class="price-title">Reparacion de Laptop </div>
                                        <div class="price-subtext">A partir de...</div>
                                        <div class="price">$20.00</div>
                                        <a class="btn-md btns-bordered btn text-upper" href="#">Leer mas</a>
                                    </div>
                                </div>
                                <div class="sm-col-6">
                                    <div class="price-block simple" data-inview-showup="showup-translate-up">
                                        <div class="price-back"></div>
                                        <div class="price-image">
                                            <img class="image" src="./dist/images/icons/computer-dark.png" alt="" />
                                        </div>
                                        <div class="price-title">Reparacion de PC de Escritorio</div>
                                        <div class="price-subtext">A partir de...</div>
                                        <div class="price">$20.00</div>
                                        <a class="btn-md btns-bordered btn text-upper" href="#">Leer mas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-col-6">
                            <div class="row cols-md rows-md">
                                <div class="sm-col-6">
                                    <div class="price-block simple" data-inview-showup="showup-translate-up">
                                        <div class="price-back"></div>
                                        <div class="price-image">
                                            <img class="image" src="./dist/images/icons/printer-dark.png" alt="" />
                                        </div>
                                        <div class="price-title">Reparacion de Impresoras</div>
                                        <div class="price-subtext">A partir de...</div>
                                        <div class="price">$15.00</div>
                                        <a class="btn-md btns-bordered btn text-upper" href="#">Leer mas</a>
                                    </div>
                                </div>
                                <div class="sm-col-6">
                                    <div class="price-block simple" data-inview-showup="showup-translate-up">
                                        <div class="price-back"></div>
                                        <div class="price-image">
                                            <img class="image" src="./dist/images/icons/mobile-dark.png" alt="" />
                                        </div>
                                        <div class="price-title">Backup</div>
                                        <div class="price-subtext">A partir de...</div>
                                        <div class="price">$10.00</div>
                                        <a class="btn-md btns-bordered btn text-upper" href="#">Leer mas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content-section">
                <div class="container">
                    <div class="section-head text-center container-md">
                        <h2 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">POR QUÉ ELEGIRNOS</h2>
                        <p data-inview-showup="showup-translate-left">Algunas de nuestras características</p>
                    </div>
                    <div class="row cols-md rows-lg text-center">
                        <div class="md-col-6">
                            <div class="row cols-md rows-lg">
                                <div class="sm-col-6">
                                    <div class="feature feature-side text-left" data-inview-showup="showup-translate-up">
                                        <div class="feature-icon"><i class="fas fa-rocket" aria-hidden="true"></i></div>
                                        <div class="feature-title text-upper">SOMOS RAPIDOS</div>
                                        <!--<div class="feature-text">Qualified Workers Lorem Ipsum is simply dummy text of the printing</div><-->
                                    </div>
                                </div>
                                <div class="sm-col-6">
                                    <div class="feature feature-side text-left" data-inview-showup="showup-translate-up">
                                        <div class="feature-icon"><i class="fas fa-dollar-sign" aria-hidden="true"></i></div>
                                        <div class="feature-title text-upper">SIN ARREGLO, SIN TARIFA</div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-col-6">
                            <div class="row cols-md rows-lg">
                                <div class="sm-col-6">
                                    <div class="feature feature-side text-left" data-inview-showup="showup-translate-up">
                                        <div class="feature-icon"><i class="far fa-calendar-check" aria-hidden="true"></i></div>
                                        <div class="feature-title text-upper">GARANTÍA DE 30 DÍAS</div>
                                        
                                    </div>
                                </div>
                                <div class="sm-col-6">
                                    <div class="feature feature-side text-left" data-inview-showup="showup-translate-up">
                                        <div class="feature-icon"><i class="fas fa-users" aria-hidden="true"></i></div>
                                        <div class="feature-title text-upper">PERSONAL EXPERTO</div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="with-bg solid-section">
            <div class="fix-image-wrap" data-image-src="./dist/images/proceso.png" alt="proceso" data-parallax="scroll"></div>
            <div class="theme-back inner-shadow"></div>
            <div class="container text-center">
                <div class="section-head text-center container-md">
                    <h2 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">PROCESO DE SERVICIO</h2>
                    <p data-inview-showup="showup-translate-left">manera fácil y efectiva de reparar su dispositivo</p>
                </div>
                <div class="service-steps text-upper" data-inview-showup="showup-scale">
                    <div class="step">
                        <span class="step-number">1</span>DISPOSITIVO DE DAÑO</div>
                    <div class="step">
                        <span class="step-number">2</span>ENVÍENOSLO</div>
                    <div class="step">
                        <span class="step-number active">3</span>SOLUCION RAPIDA</div>
                   
                </div>
            </div>
        </section>
        <section class="muted-bg solid-section">
            <div class="container">
                <div class="section-head text-center container-md">
                    <h2 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">Servicios</h2>
                    <p data-inview-showup="showup-translate-left">Ofrecemos una gama completa de servicios de reparación proporcionados por un equipo experimentado y especializado.</p>
                </div>
                <div class="row cols-md rows-md">
                    <div class="md-col-4 sm-col-6">
                        <div class="item" data-inview-showup="showup-translate-up">
                            <a href="#" class="block-link text-center">
                                <span class="image-wrap">
                                    <img class="image" src="./dist/images/ensamblaje.png" alt="" />
                                </span>
                                <span class="hover">
                                    <span class="hover-show">
                                        <span class="back"></span>
                                        <span class="content"><i class="fas fa-search" aria-hidden="true"></i></span>
                                    </span>
                                </span>
                            </a>
                            <div class="item-content">
                                <div class="item-title text-upper">
                                    <a href="#">Ensamblaje, Mantenimiento y Reparacion de computadoras</a>
                                </div>
                                <div class="item-text">Nuestro servicio técnico de reparación de computadores se caracteriza por su rapidez en el manejo, diagnostico, evaluación y procedimiento de cualquier incidencia relacionada con tu ordenador, ya sea un simple problema a nivel de virus o una reparación que requiera el remplazo de algún componente hardware de tu portátil.
                                </div>
                                <a href="#" class="btn btn-md btns-bordered pull-right text-upper">Leer más...</a>
                            </div>
                        </div>
                    </div>
                    <div class="md-col-4 sm-col-6">
                        <div class="item" data-inview-showup="showup-translate-up">
                            <a href="#" class="block-link text-center">
                                <span class="image-wrap">
                                    <img class="image" src="./dist/images/instalacion.png" alt="" />
                                </span>
                                <span class="hover">
                                    <span class="hover-show">
                                        <span class="back"></span>
                                        <span class="content"><i class="fas fa-search" aria-hidden="true"></i></span>
                                    </span>
                                </span>
                            </a>
                            <div class="item-content">
                                <div class="item-title text-upper">
                                    <a href="#">Formateo e Instalacion de Sistemas Operativos</a>
                                </div>
                                <div class="item-text">Reparamos ordenadores para que empieces a trabajar desde cero. Si no es posible la recuperación de tu sistema operativo ya sea Windows, Linux o Mac OS; respaldamos tu información y la formateamos; con lo cual aseguramos la estabilidad y funcionalidad del sistema operativo para un trabajo óptimo.
                                </div>
                                <a href="#" class="btn btn-md btns-bordered pull-right text-upper">Leer más...</a>
                            </div>
                        </div>
                    </div>
                    <div class="md-col-4 sm-col-6">
                        <div class="item" data-inview-showup="showup-translate-up">
                            <a href="#" class="block-link text-center">
                                <span class="image-wrap">
                                    <img class="image" src="./dist/images/recuperacion.png" alt="" />
                                </span>
                                <span class="hover">
                                    <span class="hover-show">
                                        <span class="back"></span>
                                        <span class="content"><i class="fas fa-search" aria-hidden="true"></i></span>
                                    </span>
                                </span>
                            </a>
                            <div class="item-content">
                                <div class="item-title text-upper">
                                    <a href="#">Recuperacion de datos</a>
                                </div>
                                <div class="item-text">Somos expertos en la recuperación de la información, el borrado accidental de fotografías, documentos nosotros lo salvamos por ti. Disponemos de las herramientas más eficaces para el rescate de los datos que se han perdido; ya sea en la tarjeta de memoria, disco duro u otro medio digital.
                                </div>
                                <a href="#" class="btn btn-md btns-bordered pull-right text-upper">Leer más...</a>
                            </div>
                        </div>
                    </div>
                    <div class="md-col-4 sm-col-6">
                        <div class="item" data-inview-showup="showup-translate-up">
                            <a href="#" class="block-link text-center">
                                <span class="image-wrap">
                                    <img class="image" src="./dist/images/redes.png" alt="" />
                                </span>
                                <span class="hover">
                                    <span class="hover-show">
                                        <span class="back"></span>
                                        <span class="content"><i class="fas fa-search" aria-hidden="true"></i></span>
                                    </span>
                                </span>
                            </a>
                            <div class="item-content">
                                <div class="item-title text-upper">
                                    <a href="#">Instalacion de Redes</a>
                                </div>
                                <div class="item-text">Instalamos su Red Informática con la garantía que le puede ofrecer un instalador profesional con los conocimientos técnicos necesarios para instalar gestionar y mantener cualquier red informática.
                                </div>
                                <a href="#" class="btn btn-md btns-bordered pull-right text-upper">Leer más...</a>
                            </div>
                        </div>
                    </div>

                    <div class="md-col-4 sm-col-6">
                        <div class="item" data-inview-showup="showup-translate-up">
                            <a href="#" class="block-link text-center">
                                <span class="image-wrap">
                                    <img class="image" src="./dist/images/programacion.png" alt="" />
                                </span>
                                <span class="hover">
                                    <span class="hover-show">
                                        <span class="back"></span>
                                        <span class="content"><i class="fas fa-search" aria-hidden="true"></i></span>
                                    </span>
                                </span>
                            </a>
                            <div class="item-content">
                                <div class="item-title text-upper">
                                    <a href="#">Diseño de paginas web y sistemas</a>
                                </div>
                                <div class="item-text">Desarrollamos su pagina web a su medida, facil actualizacion, profesional y totalmente administrativa.
                                </div>
                                <a href="#" class="btn btn-md btns-bordered pull-right text-upper">Leer más...</a>
                            </div>
                        </div>
                    </div>

                    <div class="md-col-4 sm-col-6">
                        <div class="item" data-inview-showup="showup-translate-up">
                            <a href="#" class="block-link text-center">
                                <span class="image-wrap">
                                    <img class="image" src="./dist/images/venta.png" alt="" />
                                </span>
                                <span class="hover">
                                    <span class="hover-show">
                                        <span class="back"></span>
                                        <span class="content"><i class="fas fa-search" aria-hidden="true"></i></span>
                                    </span>
                                </span>
                            </a>
                            <div class="item-content">
                                <div class="item-title text-upper">
                                    <a href="#">Venta de equipos informaticos y accesorios</a>
                                </div>
                                <div class="item-text">Contamos con una alta gama de productos informaticos como laptops,pc de escritorio, perifericos, partes y piezas de laptops
                                </div>
                                <a href="#" class="btn btn-md btns-bordered pull-right text-upper">Leer más...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center shift-xl">
                    <a class="btn text-upper" href="#" data-inview-showup="showup-translate-up"><i class="fas fa-th-large" aria-hidden="true"></i>&nbsp;&nbsp;Todos los servicios</a>
                </div>
            </div>
        </section>
        <section class="main-bg decorated-bg text-center tight solid-section">
            <div class="container">
                <div class="row cols-md rows-xl" data-inview-showup="showup-translate-up">
                    <div class="sm-col-3">
                        <div class="counter">
                            <div class="counter-title text-upper">Clientes Felices</div>
                            <div class="counter-value" data-waypoint-counter="50">50</div>
                        </div>
                    </div>
                    <div class="sm-col-3">
                        <div class="counter">
                            <div class="counter-title text-upper">Proyectos Finalizados</div>
                            <div class="counter-value" data-waypoint-counter="5">5</div>
                        </div>
                    </div>
                    <div class="sm-col-3">
                        <div class="counter">
                            <div class="counter-title text-upper">Computadoras Reparadas</div>
                            <div class="counter-value" data-waypoint-counter="75">75</div>
                        </div>
                    </div>
                    <div class="sm-col-3">
                        <div class="counter">
                            <div class="counter-title text-upper">Ventas Realizadas</div>
                            <div class="counter-value" data-waypoint-counter="151">151</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-section">
            <div class="container">
                <div class="section-head text-center container-md">
                    <h2 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">Opiniones de Clientes</h2>
                    <p data-inview-showup="showup-translate-left">Para nosotros no hay mayor satisfacción que un cliente feliz y satisfecho. Algunos de ellos nos cuentan aquí su experiencia.</p>
                </div>
                <div class="owl-carousel" data-inview-showup="showup-translate-up" data-owl-dots="true">
                    <div class="item">
                        <div class="simple-testimonial text-center">
                            <div class="tt-title">EXCELENTE SOPORTE</div>
                            <div class="tt-rating"><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i></div>
                            <div class="tt-content">
                                <div class="tt-quote">&#8220;</div>
                                La atencion es muy buena y el soporte que dan es garantizado, muy buenos profesionales
                            </div>
                            <div class="tt-icon">
                                <img src="./dist/images/icons/notebook-sm.png" alt="">
                            </div>
                            <div class="pexx-tt-user-title">Andrea Cuenca</div>
                            <div class="pexx-tt-user-subtitle"></div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="simple-testimonial text-center">
                            <div class="tt-title">EQUIPO COMPROMETIDO</div>
                            <div class="tt-rating"><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i></div>
                            <div class="tt-content">
                                <div class="tt-quote">&#8220;</div>
                                El equipo de profesionales muy comprimetidos en su trabajo, lo recomiendo
                            </div>
                            <div class="tt-icon">
                                <img src="./dist/images/icons/printer-sm.png" alt="">
                            </div>
                            <div class="pexx-tt-user-title">Karolina Perez</div>
                            <div class="pexx-tt-user-subtitle">Cliente</div>
                        </div>
                    </div>

                                        <div class="item">
                        <div class="simple-testimonial text-center">
                            <div class="tt-title">GARANTIZADO</div>
                            <div class="tt-rating"><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i><i class="tt-star fa fa-star" aria-hidden="true"></i></div>
                            <div class="tt-content">
                                <div class="tt-quote">&#8220;</div>
                                El trabajo que realizan es muy profesional
                            </div>
                            <div class="tt-icon">
                                <img src="./dist/images/icons/printer-sm.png" alt="">
                            </div>
                            <div class="pexx-tt-user-title">Lenin Diaz</div>
                            <div class="pexx-tt-user-subtitle">Cliente Frecuente</div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <section class="main-bg" data-inview-showup="showup-translate-up">
            <div class="container">
                <div class="contact-table only-xs-text-center">
                    <div class="contact-icon xs-hidden"><i class="fas fa-bicycle" aria-hidden="true"></i></div>
                    <div class="contact-content">
                        <div class="contact-title">Solicite consulta</div>
                        <div class="text-justify only-xs-text-justify-center">Cualquier duda o consulta nos puede contactar</div>
                    </div>
                    <div class="contact-btn">
                        <a href="https://wa.link/pfz6l1" class="btn btns-white text-upper">Contactenos</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="text-center content-section">
            <div class="container">
                <div class="section-head text-center container-md">
                    <h2 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">Marcas de productos con las que trabajamos</h2>
                </div>
                <div class="owl-carousel" data-inview-showup="showup-translate-up" data-owl-responsive="2;3;4;5" data-owl-items="5">
                    <div class="item">
                        <a class="grayscale-link" href="#">
                            <img class="image" src="./dist/images/marcas/hp.png" alt="" />
                        </a>
                    </div>
                    <div class="item">
                        <a class="grayscale-link" href="#">
                            <img class="image" src="./dist/images/marcas/dell.png" alt="" />
                        </a>
                    </div>
                    <div class="item">
                        <a class="grayscale-link" href="#">
                            <img class="image" src="./dist/images/marcas/toshiba.png" alt="" />
                        </a>
                    </div>
                    <div class="item">
                        <a class="grayscale-link" href="#">
                            <img class="image" src="./dist/images/marcas/epson.png" alt="" />
                        </a>
                    </div>
                    <div class="item">
                        <a class="grayscale-link" href="#">
                            <img class="image" src="./dist/images/marcas/tplink.png" alt="" />
                        </a>
                    </div>

                </div>
            </div>
        </section>

        @component('components.mapa')
        @endcomponent

        <div class="loader-block">
            <div class="loader-back alt-bg"></div>
            <div class="loader-image">
                <img class="image" src="./dist/images/parts/loader.gif" alt="" />
            </div>
        </div>
@endsection