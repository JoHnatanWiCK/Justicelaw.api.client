@extends('layouts.layout')

@section('title', 'Información')

@section('nav')
@endsection

@section('main')
<section class="informaciones-home">

    <div class="columna-izquierda">
        <div id="informationContainer" class="informaciones-contenedor">
        </div>
        <p id="errorMessage" class="error-message" style="display: none;">Ocurrió un error al cargar la información. Por favor, intente nuevamente.</p>
    </div>

    <div class="columna-derecha">
        <div class="sobre-nosotros">
            <h1>Sobre Nosotros</h1>
            <img src="../../img/sobrenosotros.png" alt="Sobre nosotros" class="imagen-sobre-nosotros">
            <p class="descripcion-sobre-nosotros">Somos una comunidad con el objetivo de ayudar a nuestros usuarios a conocer cómo proceder en casos relacionados con la rama judicial.</p>
        </div>
        <div class="lo-mas-destacado">
            <h3>Lo más destacado</h3>
            <div class="imagen-container">
                <img src="../../img/lomasdestacado.png" alt="Lo más destacado" class="imagen-lo-mas-destacado">
                <p>Pensión alimenticia: Todo lo que necesitas saber</p>
            </div>
        </div>
    </div>
</section>

<!-- Modal de detalles -->
<div id="informationDetail" class="modal" style="display: none;">
    <div class="modal-content">
        <span id="closeModal" class="close">&times;</span>
        <div class="card">


            <div id="infoImage" class="imagen-modal"></div>

            <div class="card-body">
                <h3 id="infoTitle" class="card-title"></h3>
                <div id="infoBody" class="card-text"></div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('footer')
@endsection

@push('styles')
<link rel="stylesheet" href="css/informaciones.css">
@endpush

@push('scripts')
<script src="js/informacion.js"></script>
@endpush
