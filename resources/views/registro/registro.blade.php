@extends('layouts.layout')

@section('title', 'Registro')

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
                <h1>Únete a Nuestra Comunidad de Usuarios</h1>
            </div>

            <form action="#" onsubmit="registro(event)">
                <label for="nombre">Nombres</label>
                <input id="nombre" type="text" name="nombre">
                <div id="errorNombre" class="error-message"></div>

                <label for="apellido">Apellidos</label>
                <input id="apellido" type="text" name="apellido">
                <div id="errorApellido" class="error-message"></div>

                <label for="tip_doc">Tipo de Documento</label>
                <select id="tip_doc_web" name="tip_doc">

                </select class="loginlweb">

                <label for="num_doc">Numero de Documento</label>
                <input id="num_doc" type="text" name="num_doc">
                <div id="errorNum_doc" class="error-message"></div>


                <label for="gmail">Email</label>
                <input id="gmail" type="email" name="gmail">
                <div id="errorGmail" class="error-message"></div>

                <label for="contraseña">Contraseña</label>
                <div class="input-container">
                <input id="contraseña" type="password" name="contraseña">
                <i id="togglePassword" class="fa fa-eye"></i>
                </div>

                <div id="errorContraseña" class="error-message"></div>


                <div class="bot"><button type="submit" class="btn-registro" id="btnRegistro">Registrarse</button></div>
            </form>
            <div class="parrafo">
                <p>Al crear la cuenta, aceptas los <a href="#">Términos de uso</a> y la <a href="#">Política de
                        Privacidad</a> de justicelaw.com</p>
            </div>
            <div class="par"><a href="{{ route('login') }}">¿Ya tienes una cuenta?</a>
                <a class="par" href="{{ route('registroAbogado') }}">¿Quieres trabajar con nosotros?</a>
            </div>
        </div>

    </section>

    {{-- <section class="loginlmovil">
        <div class="tit">
        <div class="titulo1"><h1>Justice</h1></div>
        <div class="titulo2"><h1>Law</h1></div>
    </div>
        <div class="subt"><h2>Leyes claras, justicia real</h2></div>
        <div class="contenedor">
        <button class="btn1" type="submit">Iniciar sesion</button>
        <button class="btn2" type="submit">Registrarse</button>
    </div>
    <div class="re">

        <label for="nombre">Nombres</label>
        <input id="nombre" type="text" name="nombre" required>

        <label for="apellido">Apellidos</label>
        <input id="apellido" type="text" name="apellido" required>

        <label for="tip_doc">Tipo de Documento</label>
        <input id="tip_doc" type="text" name="tip_doc" required>

        <label for="num_doc">Numero de Documento</label>
        <select id="num_doc" name="num_doc" required>
              <option value="tarjeta_identidad">Tarjeta de identidad</option>
              <option value="cedula_ciudadania">Cedula</option>
              <option value="cedula_extranjera">Cedula Extranjera</option>
              <option value="pasaporte">Pasaporte</option>
        </select class="loginlweb">

        <label for="gmial">Email</label>
        <input id="gmail" type="email" name="gmail" required>

        <label for="contraseña">Contraseña</label>
        <input id="contraseña" type="password" name="contraseña">
        <label for="concontraseña">Confirmar Contraseña</label>
        <input id="concontraseña" type="password" name="concontraseña" required>
        </div>
        <div class="bt"><button class="btn-registro" type="submit" id="btnRegistro">Registrarme</button></div>
        <div class="parrafo">
            <p>Al crear la cuenta, aceptas los <a href="#">Términos de uso</a> y la <a href="#">Política de Privacidad</a> de justicelaw.com</p>
        </div>
    </section> --}}

@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="css/registro.css">
@endpush

@push('scripts')
    <script src="js/registro.js"></script>
@endpush
