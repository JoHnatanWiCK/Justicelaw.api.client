@extends('layouts.layout')

@section('title', 'Login')

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
            <div class="ti">
                <h1>Inicio Sesión</h1>
            </div>

            <label for="gmail">Email</label>
            <input id="gmail" type="email" name="gmail">

            <label for="contraseña">Contraseña</label>
            <input id="contraseña" type="password" name="contraseña">
            <div class="bot"><button type="submit" id="btnInicio">Iniciar Sesión</button></div>
            <div class="parrafo">
                <a id="olvidarContraseña" href="{{ route('olvidarContraseña') }}">¿Olvidaste tu contraseña?</a>
            </div>
            <div class="par"><a href="{{ route('registro') }}">¿No tienes una cuenta?</a></div>
        </div>

    </section>
    <section class="loginlmovil">
        <div class="tit">
            <div class="titulo1">
                <h1>Justice</h1>
            </div>
            <div class="titulo2">
                <h1>Law</h1>
            </div>
        </div>
        <div class="subt">
            <h2>Leyes claras, justicia real</h2>
        </div>
        <div class="contenedor">
            <button class="btn1" type="submit">Iniciar sesion</button>
            <button class="btn2" type="submit">Registrarse</button>
        </div>
        <div class="re">

            <label for="gmail">Email</label>
            <input id="gmail" type="email" name="gmail">

            <label for="contraseña">Contraseña</label>
            <input id="contraseña" type="password" name="contraseña">
            <label for="concontraseña">Confirmar Contraseña</label>
            <input id="concontraseña" type="password" name="concontraseña">
        </div>
        <div class="bt"><button class="btn3" type="submit" id="btnInicio">Iniciar Sesión</button></div>

    </section>

@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="css/login.css">
@endpush

@push('scripts')
    <script src="js/login.js"></script>
@endpush
