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
                <h1>Únete a la Red de Expertos Jurídicos</h1>
            </div>

            <form action="#" onsubmit="registroAbogado(event)">
                <label for="nombre">Nombres</label>
                <input id="nombreAbogado" type="text" name="nombreAbogado">
                <div id="errorNombre" class="error-message"></div>

                <label for="apellido">Apellidos</label>
                <input id="apellidoAbogado" type="text" name="apellidoAbogado">
                <div id="errorApellido" class="error-message"></div>

                <label for="tip_doc">Tipo de Documento</label>
                <select id="tip_doc_web" name="tip_doc">

                </select class="loginlweb">

                <label for="num_doc">Numero de Documento</label>
                <input id="num_docAbogado" type="text" name="num_docAbogado">
                <div id="errorNum_doc" class="error-message"></div>


                <label for="gmail">Email</label>
                <input id="gmailAbogado" type="email" name="gmailAbogado">
                <div id="errorGmail" class="error-message"></div>

                <label for="contraseña">Contraseña</label>
                <div class="input-container">
                <input id="contraseñaAbogado" type="password" name="contraseñaAbogado">
                <i id="togglePassword" class="fa fa-eye"></i>
                </div>

                <div id="errorContraseña" class="error-message"></div>


                <div class="bot"><button type="submit" class="btn-registro" id="btnRegistroAbogado">Registrarse</button></div>
            </form>
            <div class="parrafo">
                <p>Al crear la cuenta, aceptas los <a href="#">Términos de uso</a> y la <a href="#">Política de
                        Privacidad</a> de justicelaw.com</p>
            </div>
            <div class="par"><a href="{{ route('login') }}">¿Ya tienes una cuenta?</a>
                <a class="par" href="{{ route('registro') }}">¿Quieres registrarte como usuario?</a>
            </div>
        </div>

    </section>

@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="css/registro.css">
@endpush

@push('scripts')
    <script src="js/registroAbogado.js"></script>
@endpush
