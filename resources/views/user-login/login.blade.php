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
        <div class="columna-derecha">
        <div class="reg">
            <div class="ti">
                <h1>Registro Abogado</h1>
            </div>
            <label for="nombre">Nombres</label>
            <input id="nombre" type="text" name="nombre">

            <label for="apellido">Apellidos</label>
            <input id="apellido" type="text" name="apellido">

            <label for="tip_doc">Tipo de Documento</label>
            <input id="tip_doc" type="text" name="tip_doc">

            <label for="num_doc">Numero de Documento</label>
            <select id="num_doc" name="num_doc">
                <option value="tarjeta_identidad">Tarjeta de identidad</option>
                <option value="cedula_ciudadania">Cedula</option>
                <option value="cedula_extranjera">Cedula Extranjera</option>
                <option value="pasaporte">Pasaporte</option>
            </select class="loginlweb">

            <label for="gmail">Email</label>
            <input id="gmail" type="email" name="gmail">

            <label for="contraseña">Contraseña</label>
            <input id="contraseña" type="password" name="contraseña">
            <br><br><br><br>
        </div>
        <div class="bot"><button type="submit">Registrarse</button></div>
        <div class="parrafo">
            <p>Al crear la cuenta, aceptas los <a href="#">Términos de uso</a> y la <a href="#">Política de
                    Privacidad</a> de justicelaw.com</p>
        </div>
        <div class="par">
            <p>¿Ya tienes una cuenta?</p>
        </div>
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

            <label for="nombre">Nombres</label>
            <input id="nombre" type="text" name="nombre">

            <label for="apellido">Apellidos</label>
            <input id="apellido" type="text" name="apellido">

            <label for="tip_doc">Tipo de Documento</label>
            <input id="tip_doc" type="text" name="tip_doc">

            <label for="num_doc">Numero de Documento</label>
            <select id="num_doc" name="num_doc">
                <option value="tarjeta_identidad">Tarjeta de identidad</option>
                <option value="cedula_ciudadania">Cedula</option>
                <option value="cedula_extranjera">Cedula Extranjera</option>
                <option value="pasaporte">Pasaporte</option>
            </select class="loginlweb">

            <label for="gmial">Email</label>
            <input id="gmail" type="email" name="gmail">

            <label for="contraseña">Contraseña</label>
            <input id="contraseña" type="password" name="contraseña">
            <label for="concontraseña">Confirmar Contraseña</label>
            <input id="concontraseña" type="password" name="concontraseña">
        </div>
        <div class="bt"><button class="btn3" type="submit">Registrarme</button></div>
        <div class="parrafo">
            <div class="parrafo1">
                <p>Al crear la cuenta, aceptas los</p>
            </div>
            <div class="parrafo2">
                <p>Terminos de Uso</p>
            </div>
            <div class="parrafo3">
                <p>y la</p>
            </div>
            <div class="parrafo4">
                <p>Politica de Privacidad</p>
            </div>
            <div class="parrafo5">
                <p>de justicelaw.com</p>
            </div>
        </div>
    </section>
@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="../../css/login.css">
@endpush
