


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

    <form id="formPasoTres" enctype="multipart/form-data">
        <div class="upload-container">
            <p class="upload-text">Nos gustaría conocerte, por favor sube tu hoja de vida.</p>
            <p class="upload-text">Se aceptan los siguientes formatos: PDF, DOC, DOCX (de 5 MB o menos).</p>

            <label for="resume" class="upload-label">Selecciona tu archivo:</label>
            <input
                type="file"
                id="resume"
                name="resume"
                accept=".pdf,.doc,.docx"
                required
                class="upload-input"
            />
        </div>

        <div id="error-message" style="display:none; color: red;"></div>


        <div class="bot">
            <button type="submit" id="btnVerificarTres">Guardar</button>
        </div>
    </form>
    </div>

</section>


    @endsection

    @section('footer')
    @endsection

    @push('styles')
    <link rel="stylesheet" href="css/verificacion.css" />
    @endpush


    @push('scripts')
    <script src="js/verificacionTres.js"></script>
     @endpush

