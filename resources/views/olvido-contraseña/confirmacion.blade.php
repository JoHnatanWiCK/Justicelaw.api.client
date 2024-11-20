


@extends('layouts.layout')

@section('title', 'Olvido Contraseña')

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
    <div class="ti"><h1>Reestablecimiento exitoso</h1></div>

    <p>Su nueva contraseña esta actualizada, inicie secsion nuevamente:</p>


    <button id="exito" class="btn-contraseña" type="submit">Iniciar sesion</button>


    </div>

</section>
<section class="loginlmovil">
    <div class="tit">
    <div class="titulo1"><h1>Justice</h1></div>
    <div class="titulo2"><h1>Law</h1></div>
</div>
    <div class="subt"><h2>Leyes claras, justicia real</h2></div>

</div>
<div class="contenedor">
    <button class="btn1" type="submit">Reestablecimiento exitoso</button>
</div>

<div class="re">

    <p>Su nueva contraseña esta actualizada, inicie secsion nuevamente:</p>

    <button id="exito" class="btn-contraseña" type="submit">Iniciar sesion</button>
    </div>
    </section>




    @endsection

    @section('footer')
    @endsection

    @push('styles')
    <link rel="stylesheet" href="css/olvidoContraseña.css" />
    @endpush

    @push('scripts')
    <script src="js/confirmar.js"></script>
    @endpush

