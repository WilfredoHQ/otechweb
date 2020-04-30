@extends('layout')
@section('content')
<section class="with-bg solid-section">
    <div class="fix-image-wrap" data-image-src="./dist/images/proyectos/banner.jpg" data-parallax="scroll"></div>
    <div class="theme-back"></div>
    <div class="container page-info">
        <div class="section-alt-head container-md">
            <h1 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">Proyectos y Sistemas Web</h1>
        </div>
    </div>

</section>
<section class="content-section">
    <div class="container">
        <div class="shuffle-js">
            <div class="selectable-categories offs-lg text-center" data-inview-showup="showup-translate-up">
                <a class="active" data-filter='todos' href="#">Todos</a>
                <a href="#" data-filter='["web"]'>Paginas Web</a>
                <a href="#" data-filter='["tiendas"]'>Tiendas Online</a>
            </div>
            <div class="row cols-tiny rows-tiny shuffle-items">
                <div class="shuffle-item col-12 md-col-4 sm-col-6" data-groups='["todos", "web"]'>
                    <div class="item muted-bg" data-inview-showup="showup-scale">
                        <div class="block-link">
                            <div class="image-wrap">
                                <img class="image" src="./dist/images/proyectos/transporte.jpg" alt="" />
                            </div>
                            <div class="hover">
                                <div class="hover-lines">
                                    <div class="back"></div>
                                    <div class="line-content">
                                        <h5 class="text-white">Transporte Interprovincial</h5>
                                        <p>Este proyecto realiza la consulta de horararios de la diferentes cooperativas interprovinciales que viajan a diferentes ciudades del Ecuador</p>
                                        <a href="https://transporteweb.herokuapp.com/" target="_blank" class="text-upper simple-link line-link text-bold text-sm">Ver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shuffle-item col-12 md-col-4 sm-col-6" data-groups='["todos", "tiendas"]'>
                    <div class="item muted-bg" data-inview-showup="showup-scale">
                        <div class="block-link">
                            <div class="image-wrap">
                                <img class="image" src="./dist/images/proyectos/proyecto1.jpg" alt="" />
                            </div>
                            <div class="hover">
                                <div class="hover-lines">
                                    <div class="back"></div>
                                    <div class="line-content">
                                        <h5 class="text-white">Titulo</h5>
                                        <p>descripcion del proyecto</p>
                                        <a href="" class="text-upper simple-link line-link text-bold text-sm">Ver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
       
            </div>
            <div class="shuffle-empty text-center alt-color text-lg">Resultado no encontrado</div>
        </div>
    </div>
</section>
@component('components.contacto')
@endcomponent
@component('components.preloader')
@endcomponent

@endsection