@extends('layout')
@section('content')
<section class="with-bg solid-section">
    <div class="fix-image-wrap" data-image-src="./dist/images/nosotros.jpg" data-parallax="scroll"></div>
    <div class="theme-back"></div>
    <div class="container page-info">
        <div class="section-alt-head container-md">
            <h1 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">Nosotros</h1>
            <p data-inview-showup="showup-translate-left">Algo sobre nuestra empresa</p>
        </div>
    </div>
    
</section>
<section class="muted-bg solid-section" data-inview-showup="showup-translate-up">
    <div class="container">
        <div class="row cols-xl rows-lg">
            <div class="md-col-6 text-center md-text-left">
                <h2 class="text-upper text-semibold">¿Que hacemos?</h2>
                <p>Las reparaciones más completas en Otech Soluciones Informáticas. Cualquier dispositivo informático ya sea computadora portátil, pc de escritorio, impresora puede ser reparado o actualizado por nosotros, conozca más sobre nosotros y vea por qué somos la mejor opción para reparaciones y actualizaciones de dispositivos.</p>
                <blockquote class="hard-line-right text-right">
                    <p>Más de 4 años de experiencia laboral en servicios de reparación y desarrollo de paginas web y sistemas a medida.</p>
                </blockquote>
                <p>Tenemos un departamento de servicio totalmente capacitado y experimentado listo para manejar todas sus necesidades de servicio. Hemos estado en el negocio de reparación y desarrollo web desde el 2015.</p>
            </div>
            <div class="md-col-6 md-fix-container">
                <img class="image" src="./dist/images/equipo/somos.jpg" alt="" />
            </div>
        </div>
    </div>
</section>
<section class="content-section" data-inview-showup="showup-translate-up">
    <div class="container">
        <div class="row cols-md rows-xl">
            <div class="md-col-3 text-center md-text-left">
                <h3 class="text-upper text-semibold">Nuestro Equipo</h3>
                <p>Reúnase con nuestro equipo calificado y experto. Estamos especializados en nuestro campo individual. Tenemos suficiente habilidad y probado. Es por eso que obtiene los servicios de reparación de calidad y desarrollo de paginas web y sistemas a medida.
                </p>
                <div class="shift-lg">
                    <a class="btn text-upper" href="https://wa.link/pfz6l1">Contactanos</a>
                </div>
            </div>
            <div class="md-col-3 sm-col-4">
                <div class="member sm-fix-container">
                    <div class="text-center">
                        <span class="image-wrap">
                            <img class="image" src="./dist/images/equipo/ceo.jpg" alt="CEO FUNDADOR" />
                        </span>
                    </div>
                    <div class="member-info muted-bg text-center">
                        <div class="member-title">Oscar Diaz</div>
                        <div class="member-subtitle">CEO-Fundador &amp; Frontend Developer</div>
                        <div class="member-subtitle">Ecuador</div>
                        <div class="cols-list cols-sm socials inline-block">
                            <a href="#" class="list-item"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a href="#" class="list-item"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" class="list-item"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md-col-3 sm-col-4">
                <div class="member sm-fix-container">
                    <div class="text-center">
                        <span class="image-wrap">
                            <img class="image" src="./dist/images/equipo/backend.jpg" alt="" />
                        </span>
                    </div>
                    <div class="member-info muted-bg text-center">
                        <div class="member-title">Antonio Santiago Jiménez</div>
                        <div class="member-subtitle">Backend Developer</div>
                        <div class="member-subtitle">Mexico</div>
                        <div class="cols-list cols-sm socials inline-block">
                            <a href="#" class="list-item"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a href="#" class="list-item"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" class="list-item"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@component('components.mapa')
@endcomponent

<div class="block-cart collapse" data-block="cart" data-show-block-class="animation-scale-top-right" data-hide-block-class="animation-unscale-top-right">
    <div class="cart-inner">
        <a href="#" class="close-link" data-close-block><i class="fas fa-times" aria-hidden="true"></i></a>
        <h4 class="text-upper text-center">Your cart</h4>
        <div class="items">
            <div class="items collapse" data-block="cart" data-show-block-class="animation-scale-top-right" data-hide-block-class="animation-unscale-top-right">
                <div class="shop-side-item cart-item">
                    <a href="#" class="remove"><i class="fas fa-times"></i></a>
                    <div class="item-side-image">
                        <a href="shop-item.html" class="item-image responsive-1by1">
                            <img src="http://via.placeholder.com/500x500" alt="" />
                        </a>
                    </div>
                    <div class="item-side">
                        <div class="item-title">
                            <a class="item-label-sm item-label-sale item-label" href="#">sale</a>
                            <a href="shop-item.html" class="content-link text-upper">USB 3.0 HUB</a>
                        </div>
                        <div class="item-quantity">Quantity - 1</div>
                        <div class="item-prices">
                            <div class="item-price">$67.05</div>
                            <div class="item-old-price">$102.5</div>
                        </div>
                    </div>
                </div>
                <div class="shop-side-item cart-item">
                    <a href="#" class="remove"><i class="fas fa-times"></i></a>
                    <div class="item-side-image">
                        <a href="shop-item.html" class="item-image responsive-1by1">
                            <img src="http://via.placeholder.com/500x500" alt="" />
                        </a>
                    </div>
                    <div class="item-side">
                        <div class="item-title">
                            <a class="item-label-sm item-label-new item-label" href="#">new</a>
                            <a href="shop-item.html" class="content-link text-upper">Cable Organizer</a>
                        </div>
                        <div class="item-quantity">Quantity - 1</div>
                        <div class="item-prices">
                            <div class="item-price">$15.25</div>
                        </div>
                    </div>
                </div>
                <div class="shop-side-item cart-item">
                    <a href="#" class="remove"><i class="fas fa-times"></i></a>
                    <div class="item-side-image">
                        <a href="shop-item.html" class="item-image responsive-1by1">
                            <img src="http://via.placeholder.com/500x500" alt="" />
                        </a>
                    </div>
                    <div class="item-side">
                        <div class="item-title">
                            <a href="shop-item.html" class="content-link text-upper">10" Octa Core Tablet</a>
                        </div>
                        <div class="item-quantity">Quantity - 1</div>
                        <div class="item-prices">
                            <div class="item-price">$145.99</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="line-sides main-bg shift-lg"></div>
        <div class="row out-md">
            <div class="col-6 cart-price-title">Subtotal:</div>
            <div class="col-6 text-right cart-price">$105.20</div>
        </div>
        <div class="line-sides main-bg offs-lg"></div>
        <div class="clearfix">
            <a href="./cart.html" class="btn text-upper btn-md btns-bordered pull-left">view cart</a>
            <a href="./checkout.html" class="btn text-upper btn-md pull-right">checkout</a>
        </div>
    </div>
</div>
<a href="#" class="scroll-top disabled"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
<div class="singlepage-block collapse alt-bg" data-block="search" data-show-block-class="animation-scale-top-right" data-hide-block-class="animation-unscale-top-right">
    <a href="#" class="close-link" data-close-block><i class="fas fa-times" aria-hidden="true"></i></a>
    <div class="pos-v-center col-12">
        <div class="container">
            <div class="row cols-md rows-md">
                <div class="lg-col-9 md-col-8 sm-col-12">
                    <div class="field-group">
                        <div class="field-wrap">
                            <input class="field-control" name="search" placeholder="Search Tags" required="required" />
                            <span class="field-back"></span>
                        </div>
                    </div>
                </div>
                <div class="lg-col-3 md-col-4 sm-col-6">
                    <button class="btn btns-white-bordered text-upper" type="submit">
                        search
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="loader-block">
    <div class="loader-back alt-bg"></div>
    <div class="loader-image">
        <img class="image" src="./dist/images/parts/loader.gif" alt="" />
    </div>
</div>

@endsection