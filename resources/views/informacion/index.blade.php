@extends('layouts.layoutLogin')

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
            <div class="lo-mas-destacado">
                <h1>Categorías Derechos</h1>
                <div class="imagen-container">
                    <img src="../../img/Derecholaboralydeempleo.png" alt="Derecholaboralydeempleo" class="imagen-lo-mas-destacado">
                    <div class="texto-superpuesto"><p><a href={{route('informacionesLaboral')}}>Laboral y de Empleo</a></p></div>
                </div>
                <div class="imagen-container">
                    <img src="../../img/derechosNiños.jpg" alt="Derecho Niños" class="imagen-lo-mas-destacado">
                    <div class="texto-superpuesto"><p><a href={{route('informacionInfantil')}}>Infantiles</a></p></div>
                </div>
                <div class="imagen-container">
                    <img src="./../img/Derechodefamilia.png" alt="Derechodefamilia" class="imagen-lo-mas-destacado">
                    <div class="texto-superpuesto"><p><a href={{route('violenciaIntrafamiliar')}}>Infantiles</a></p></div>
                </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
@endsection

@push('styles')
<link rel="stylesheet" href="css/informaciones.css">
@endpush

@push('scripts')
<script src="js/informacion.js"></script>
@endpush
