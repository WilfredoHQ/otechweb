@extends('web.layout')

@section('content')
<section class="with-bg solid-section">
    <div class="fix-image-wrap" data-image-src="./dist/images/contacto.jpg" data-parallax="scroll"></div>
    <div class="theme-back"></div>
    <div class="container page-info">
        <div class="section-alt-head container-md">
            <h1 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">Contactenos</h1>
        </div>
    </div>

</section>
<section class="map-section" data-inview-showup="showup-translate-up">
@component('web.components.mapa')

@endcomponent
</section>
<div class="content-section container">
    <div class="row cols-lg rows-lg">
        <div class="sm-col-6">
            <section data-inview-showup="showup-translate-right">
                <h2 class="text-upper">COMO ENCONTRARNOS</h2>
                <p class="offs-lg">Nuestro objetivo es proporcionar el mejor servicio al cliente y responder a todas sus preguntas de manera oportuna.
                </p>
                <div class="rows-md">
                    <div class="row cols-md rows-md">
                        <div class="md-col-6">
                            <div class="info-item">
                                <div class="icon">
                                    <img src="./dist/images/icons/side/phone.png" alt="" />
                                </div>
                                <div class="text">(+593) 939633348</div>
                            </div>
                        </div>
                        <div class="md-col-6">
                            <div class="info-item">
                                <div class="icon">
                                    <img src="./dist/images/icons/side/phone1.png" alt="" />
                                </div>
                                <div class="text">(+593) 968519469</div>
                            </div>
                        </div>
                    </div>
                    <div class="row cols-md rows-md">
                        <div class="md-col-6">
                            <div class="info-item">
                                <div class="icon">
                                    <img src="./dist/images/icons/side/skype.png" alt="" />
                                </div>
                                <div class="text">oscardiaz0077@hotmail.com</div>
                            </div>
                        </div>
                        <div class="md-col-6">
                            <div class="info-item">
                                <div class="icon">
                                    <img src="./dist/images/icons/side/instagram.png" alt="" />
                                </div>
                                <div class="text">#oteche.cuador</div>
                            </div>
                        </div>
                    </div>
                    <div class="row cols-md rows-md">
                        <div class="md-col-6">
                            <div class="info-item">
                                <div class="icon">
                                    <img src="./dist/images/icons/side/email.png" alt="" />
                                </div>
                                <div class="text">info@otechecuador.com</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="sm-col-6">
            <section class="block-md sm-fix-container muted-bg" data-inview-showup="showup-translate-left">
                <h5 class="offs-md">Mandanos un mensaje</h5>
                <form>
                    <div class="field-group">
                        <div class="field-wrap">
                            <input class="field-control" name="nombre" placeholder="Nombre" required="required" />
                            <span class="field-back"></span>
                        </div>
                    </div>
                    <div class="field-group">
                        <div class="field-wrap">
                            <input class="field-control" name="email" type="email" placeholder="Email" required="required" />
                            <span class="field-back"></span>
                        </div>
                    </div>
                    <div class="field-group">
                        <div class="field-wrap">
                            <input class="field-control" name="asunto" placeholder="Asunto" required="required" />
                            <span class="field-back"></span>
                        </div>
                    </div>
                    <div class="field-group">
                        <div class="field-wrap">
                            <textarea class="field-control" name="mensaje" placeholder="Mensaje" required="required"></textarea>
                            <span class="field-back"></span>
                        </div>
                    </div>
                    <div class="btn-block">
                        <button class="btn text-upper ajax-disabled" type="submit">
                            Enviar Mensaje
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>

@component('web.components.preloader')
@endcomponent

@endsection