


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

        <label for="telefono">Numero de telefono</label>
        <input id="telefono" type="text" name="telefono">

        <label for="ciudad">Ciudad</label>
        <input id="ciudad" type="text" name="ciudad">

        <label for="pais">Pais</label>
        <input id="pais" type="text" name="pais">

        <label for="num_doc">Pregunta de seguridad</label>
        <select id="num_doc" name="num_doc">
              <option value="tarjeta_identidad">¿Cual es el nombre de su primer mascota?</option>
              <option value="cedula_ciudadania">¿Cual era el apodo de su infancia?</option>
              <option value="cedula_extranjera">¿Cual es el nombre de tu padre?</option>
              <option value="pasaporte">¿Cual es tu libro infantil favorito?</option>
        </select class="loginlweb">
        <label for="respuesta">Respuesta</label>
        <input id="respuesta" type="text" name="respuesta">
        <div class="bot"><button type="submit" id="btnVerificarUno">Continuar</button></div>

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

        <label for="ciudad">Ciudad</label>
        <input id="ciudad" type="text" name="ciudad">

        <label for="pais">Pais</label>
        <input id="pais" type="text" name="pais">

        <label for="num_doc">Pregunta de seguridad</label>
        <select id="num_doc" name="num_doc">
              <option value="tarjeta_identidad">¿Cual es el nombre de su primer mascota?</option>
              <option value="cedula_ciudadania">¿Cual era el apodo de su infancia?</option>
              <option value="cedula_extranjera">¿Cual es el nombre de tu padre?</option>
              <option value="pasaporte">¿Cual es tu libro infantil favorito?</option>
        </select class="loginlweb">
        <label for="respuesta">Respuesta</label>
        <input id="respuesta" type="text" name="respuesta">

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

