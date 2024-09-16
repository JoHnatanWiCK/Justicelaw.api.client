


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

    <label for="neducativo">Nivel educativo</label>
    <input id="neducativo" type="text" name="neducativo">
    <label for="lformacion">Lugar de formacion</label>
    <input id="lformacion" type="text" name="lformacion">

    <div class="bot"><button type="submit">Continuar</button></div>

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
    <button class="btn1" type="submit">Verificacion</button>
</div>
<div class="pasos">
    <button class="b1" type="submit">1</button>
    <button class="b2" type="submit">2</button>
    <button class="b3" type="submit">3</button>
</div>
<div class="re">

    <label for="neducativo">Nivel educativo</label>
    <input id="neducativo" type="text" name="neducativo">
    <label for="lformacion">Lugar de formacion</label>
    <input id="lformacion" type="text" name="lformacion">


    <div class="bot"><button type="submit">Continuar</button></div>

    </div>
    </section>




    @endsection

    @section('footer')
    @endsection

    @push('styles')
    <link rel="stylesheet" href="css/verificacion.css" />
    @endpush
