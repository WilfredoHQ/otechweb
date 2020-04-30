@extends('layout')
@section('content')
<section class="with-bg solid-section">
    <div class="fix-image-wrap" data-image-src="./dist/images/servicios/banner.jpg" data-parallax="scroll"></div>
    <div class="theme-back"></div>
    <div class="container page-info">
        <div class="section-alt-head container-md">
            <h1 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">Servicios</h1>
        </div>
    </div>
</section>
<section class="content-section">
    <div class="container">
        <div class="shuffle-js">
            <div class="selectable-categories offs-lg text-center" data-inview-showup="showup-translate-up">
                <a class="active" data-filter='todos' href="#">Todos</a>
                <a href="#" data-filter='["Laptops"]'>Reparación de laptops</a>
                <a href="#" data-filter='["Computadoras"]'>Reparación de Computadoras</a>
                <a href="#" data-filter='["Impresoras"]'>Reparación de Impresoras</a>
            </div>
            <div class="row cols-md rows-md shuffle-items">
                
                <div class="shuffle-item col-12 md-col-4 sm-col-6" data-groups='["todos","Laptops","Computadoras"]'>
                    <div class="item muted-bg" data-inview-showup="showup-scale">
                        <a href="#" class="block-link">
                            <span class="image-wrap">
                                <img class="image" src="./dist/images/servicios/servicio1.jpg" alt="" />
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
                                <a href="#">Respaldo y Recuperación de Datos</a>
                            </div>
                            <div class="item-text">descripcion-descripcion-descripcion-descripcion-descripcion-descripcion-descripcion-descripcion-descripcion-descripcion-</div>
                            <a href="#" class="btn btn-md btns-bordered text-upper pull-right">Leer más...</a>
                        </div>
                    </div>
                </div>

                <div class="shuffle-item col-12 md-col-4 sm-col-6" data-groups='["todos","Impresoras"]'>
                    <div class="item muted-bg" data-inview-showup="showup-scale">
                        <a href="service.html" class="block-link">
                            <span class="image-wrap">
                                <img class="image" src="./dist/images/servicios/servicio1.jpg" alt="" />
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
                                <a href="service.html">Mantenimiento de Impresoras</a>
                            </div>
                            <div class="item-text">descripcion-descripcion-descripcion-descripcion-descripcion-descripcion-descripcion-descripcion-descripcion-descripcion-</div>
                            <a href="#" class="btn btn-md btns-bordered text-upper pull-right">Leer más...</a>
                        </div>
                    </div>
                </div>
                <div class="shuffle-item col-12 md-col-4 sm-col-6" data-groups='["todos","Laptops"]'>
                    <div class="item muted-bg" data-inview-showup="showup-scale">
                        <a href="service.html" class="block-link">
                            <span class="image-wrap">
                                <img class="image" src="./dist/images/servicios/servicio1.jpg" alt="" />
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
                                <a href="service.html">Reemplazo de Pantalla</a>
                            </div>
                             <div class="item-text">descripcion-descripcion-descripcion-descripcion-descripcion-descripcion-descripcion-descripcion-descripcion-descripcion-</div>
                            <a href="#" class="btn btn-md btns-bordered text-upper pull-right">Leer más...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shuffle-empty text-center alt-color text-lg">Resultados No encontrados</div>
        </div>
    </div>
</section>

@component('components.contacto')
@endcomponent

<div class="loader-block">
    <div class="loader-back alt-bg"></div>
    <div class="loader-image">
        <img class="image" src="./dist/images/parts/loader.gif" alt="" />
    </div>
</div>
@endsection