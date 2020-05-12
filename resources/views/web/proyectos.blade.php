@extends('web.layout')

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
                @foreach($projects as $project)
                    <div class="shuffle-item col-12 md-col-4 sm-col-6" data-groups='["todos", "web", "tiendas"]'>
                        <div class="item muted-bg" data-inview-showup="showup-scale">
                            <div class="block-link">
                                <div class="image-wrap">
                                    <img class="image" src="./dist/images/proyectos/proyecto1.jpg" alt="{{ $project->file }}" />
                                </div>
                                <div class="hover">
                                    <div class="hover-lines">
                                        <div class="back"></div>
                                        <div class="line-content">
                                            <h5 class="text-white">{{ $project->title }}</h5>
                                            <p>{{ $project->description }}</p>
                                            <a href="{{ $project->url }}" target="_blank" class="text-upper simple-link line-link text-bold text-sm">Ver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                @endforeach             
       
            </div>
            <div class="shuffle-empty text-center alt-color text-lg">Resultado no encontrado</div>
        </div>
    </div>
</section>
@component('web.components.contacto')
@endcomponent
@component('web.components.preloader')
@endcomponent

@endsection