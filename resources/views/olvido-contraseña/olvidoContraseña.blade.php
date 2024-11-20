


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
    <div class="ti"><h1>¿Olvidaste tu contraseña?</h1></div>

    <p>Ingrese su correo electronico para realizar la renovacion de su contraseña de manera exitosa:</p>

    <h1>Email</h1>
    <input type="email" id="email" name="email" placeholder="Ingresa tu correo electrónico" required>

    <button id="recu" class="btn-contraseña" type="submit">Confirmar</button>


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
    <button class="btn1" type="submit">¿Olvidaste tu contraseña?</button>
</div>

<div class="re">

    <p>Ingrese su correo electronico para realizar la renovacion de su contraseña de manera exitosa:</p>

    <h1>Email</h1>
    <input type="email" id="email" name="email" placeholder="Ingresa tu correo electrónico" required>

    <button class="btn-contraseña" type="submit"><i class="fa-regular fa-envelope"></i>confirmar</button>
    </div>
    </section>




    @endsection

    @section('footer')
    @endsection

    @push('styles')
    <link rel="stylesheet" href="css/olvidoContraseña.css" />
    @endpush

    @push('scripts')
    <script src="js/olvidoContraseña.js"></script>
    @endpush

