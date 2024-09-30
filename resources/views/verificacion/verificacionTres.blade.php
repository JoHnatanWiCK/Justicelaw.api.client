


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

    <p>Nos gustaria conocerte, por favor sube tu hoja de vida.</p>
    <p>Se aceptan los siguientes formatos: pdf, doc, docx (de 5 MB o menos).</p>

   <button class="btn-hoja">Usar LinkedIn</button>
   <button class="btn-hoja">Usar OneDrive</button>
   <button class="btn-hoja">Explorador de Archivos</button>
   <button class="btn-hoja">Usar Dropbox</button>
    <div class="bot"><button type="submit" id="btnVerificarTres">Guardar</button></div>

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
    <button class="btn1" type="submit">Verificacion</button>
</div>
<div class="pasos">
    <button class="b1" type="submit">1</button>
    <button class="b2" type="submit">2</button>
    <button class="b3" type="submit">3</button>
</div>
<div class="re">

    <p>Nos gustaria conocerte, por favor sube tu hoja de vida.</p>
    <p>Se aceptan los siguientes formatos: pdf, doc, docx (de 5 MB o menos).</p>

   <button class="btn-hoja">Usar LinkedIn</button>
   <button class="btn-hoja">Usar OneDrive</button>
   <button class="btn-hoja">Explorador de Archivos</button>
   <button class="btn-hoja">Usar Dropbox</button>


    <div class="bot"><button type="submit" id="btnVerificarTres">Continuar</button></div>

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

