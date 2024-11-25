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
            <div class="ti">
                <h1>Verificación</h1>
            </div>
            <div class="pasos"><button class="b1" type="submit">1</button>
                <button class="b2" type="submit">2</button>
                <button class="b3" type="submit">3</button>
            </div>

            <form id="formPasoUno">
                <label for="telefono">Numero de telefono</label>
                <input id="telefono" type="text" name="telefono">

                <div id="errorTelefono" class="error-message"></div>

                <label for="pais">País</label>
                <select id="pais" name="pais" required>
                    <option value="">Selecciona un país:</option>
                </select>

                <div id="errorPais" class="error-message"></div>

                <label for="estado">Estado</label>
                <select id="estado" name="estado" required>
                    <option value="">Selecciona un estado:</option>
                </select>

                <div id="errorEstado" class="error-message"></div>

                <label for="ciudad">Ciudad</label>
                <select id="ciudad" name="ciudad" required>
                    <option value="">Selecciona una ciudad:</option>
                </select>

                <div id="errorCiudad" class="error-message"></div>

                <div class="bot">
                    <button type="submit" id="btnVerificarUno">Continuar</button>
                </div>
            </form>
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

        </div>
        <div class="contenedor">
            <button class="btn1" type="submit">Verificación</button>
        </div>
        <div class="pasos">
            <button class="b1" type="submit">1</button>
            <button class="b2" type="submit">2</button>
            <button class="b3" type="submit">3</button>
        </div>
        <div class="re">

            <label for="telefono">Numero de telefono</label>
            <input id="telefono" type="text" name="telefono">

            <label for="pais">Pais</label>
            <input id="pais" type="text" name="pais">


            <label for="ciudad">Ciudad</label>
            <input id="ciudad" type="text" name="ciudad">

            <label for="ciudad">Estado</label>
            <input id="estado" type="text" name="estado">




            <div class="bot"><button id="btnVerificarUno" type="submit">Continuar</button></div>

        </div>
    </section>




@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="css/verificacion.css" />
@endpush

@push('scripts')
    <script src="js/verificacion.js"></script>
@endpush
