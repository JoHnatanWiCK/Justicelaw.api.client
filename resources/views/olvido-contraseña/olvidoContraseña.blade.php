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
            <div class="ti">
                <h1>¿Olvidaste tu contraseña?</h1>
            </div>

            <p>Ingrese su correo electronico para realizar la renovacion de su contraseña de manera exitosa:</p>

            <h4>Email</h4>
            <input type="email" id="email" name="email" required>

            <div id="errorEmail" class="error-message"></div>

            <button id="recu" class="btn-contraseña" type="submit">Confirmar</button>


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
