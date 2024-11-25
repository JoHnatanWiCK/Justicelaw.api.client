


@extends('layouts.layout')

@section('title', 'Verificacion - Abogado')

@section('nav')
@endsection

@section('main')
<section class="loginlweb">

    <div class="columna-izquierda">
<div class="justice">
<h1>Justice</h1>
<h2>Leyes claras</h2>
</div>
<div class="law">
    <h1>Law</h1>
    <h2>justicia real</h2>
    </div>
</div>
<div class="reg">
    <div class="ti"><h1>¡Verificación Completada!</h1></div>

        <p>Verificacion exitosa, revisaremos tu solicitud y te mandaremos un correo electronico para darte las noticias, mientras, sigue navegando por nuestra pagina, ¡muchas gracias por querer ser aprte de nuestro equipo!</p>

        <div class="bot">
            <a id="boton-verificacion" href="{{ route('home') }}">Volver al inicio</a>
        </div>
    </div>

</section>




    @endsection

    @section('footer')
    @endsection

    @push('styles')
    <link rel="stylesheet" href="css/verificacion.css" />
    @endpush


    @push('scripts')
    <script src="js/verificacionTres.js"></script>
     @endpush

