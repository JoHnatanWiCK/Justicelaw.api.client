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

                <form id="loginForm">
                    <label for="gmailWeb">Email</label>
                    <input id="gmailWeb" type="email" name="gmailWeb">

                    <div class="error-message" id="emailError" style="display:none;"></div>

                    <label for="contraseñaWeb">Contraseña</label>
                    <div class="input-container"> <input id="contraseñaWeb" type="password" name="contraseñaWeb"> <i
                            id="togglePassword" class="fa fa-eye"></i> <!-- Icono del ojo --> </div>
                    <div class="error-message" id="passwordError" style="display:none;"></div>


                    <button type="button" id="btnInicioWeb" class="btn-login">Iniciar Sesión</button>
                </form>


                <div class="parrafo">
                    <a id="olvidarContraseña" href="{{ route('olvidarContraseña') }}">¿Olvidaste tu contraseña?</a>
                </div>

                <div class="par"><a href="{{ route('registro') }}">¿No tienes una cuenta?</a></div>
            </div>

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
