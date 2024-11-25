


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
    <div class="ti"><h1>Verificación</h1></div>
    <div class="pasos"><button class="b1" type="submit">1</button>
        <button class="b2" type="submit">2</button>
        <button class="b3" type="submit">3</button>
    </div>

    <form id="formPasoDos">
        <label for="neducativo">Nivel educativo</label>
        <select id="neducativo" name="neducativo">
            <!-- Las opciones serán llenadas dinámicamente -->
        </select>

        <div id="errorEducativo" class="error-message"></div>

        <label for="lformacion">Lugar de formacion</label>
        <input id="lformacion" type="text" name="lformacion">

        <div id="errorLugar" class="error-message"></div>

        <div class="bot">
            <button type="submit" id="btnVerificarDos">Continuar</button>
        </div>
    </form>

    </div>

</section>



    @endsection

    @section('footer')
    @endsection

    @push('styles')
    <link rel="stylesheet" href="css/verificacion.css" />
    @endpush

    @push('scripts')
    <script src="js/verificacionDos.js"></script>
     @endpush

