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

            <p>Ingrese el codigo de validacion que ha sido enviado a su correo </p>

            <h4>Ingrese el Codigo</h4>
            <input type="text" name="Codigo" id="codigoInput"> <!-- Añadir id aquí -->

            <button id="codigoButton" class="btn-contraseña" type="submit">Confirmar</button> <!-- Añadir id aquí -->
        </div>

    </section>

@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="css/olvidoContraseña.css" />
@endpush

@push('scripts')
    <script src="js/codigoEmail.js"></script>
@endpush
