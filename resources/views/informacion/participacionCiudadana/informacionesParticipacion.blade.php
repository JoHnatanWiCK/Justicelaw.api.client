@extends('layouts.layoutLogin')

@section('title', 'Informacion')

@section('nav')
@endsection

@section('main')

        <section class="informaciones-home">
          <div class="columna-izquierda">
            <div class="encabezado">
                <img src="../../img/ConsultaPopular.jpg" alt="Consulta Popular">
                <h2>Derecho a participar en referendos o consultas populares</h2>
                <h3>1 de febrero, 2024</h3>
                <p>Este artículo podría explicar el derecho a participar en referendos o consultas populares,
                    destacando su importancia en la democracia y los procedimientos para que los ciudadanos
                    ejerzan esta participación..</p>
                      <button><a href={{route('informacionConsulta')}}>Leer mas</a></button>
            </div>


        <div class="informaciones-contenedor">
          <div class="info-informacion">
              <img src="../../img/derechoVoto.jpg" alt="Derecho Voto">
              <h2>Derecho al voto</h2>
              <h3>1 de febrero, 2024</h3>
              <p>Este artículo podría abordar el derecho al voto, enfatizando su papel fundamental en la democracia,
                los requisitos para ejercerlo y cómo los ciudadanos pueden participar en elecciones para influir en la
                gobernanza.</p>
              <button><a href={{route('informacionVoto')}}>Leer mas</a></button>
          </div>

          <div class="info-informacion">
              <img src="../../img/peticionAutoridades.jpg" alt="Peticiones Autoridades">
              <h2>Presentar peticiones a las autoridades</h2>
              <h3>1 de febrero, 2024</h3>
              <p>Este artículo podría detallar el derecho a presentar peticiones a las autoridades,
                explicando el proceso para hacerlo, la importancia de la participación ciudadana
                y cómo este derecho permite a los ciudadanos expresar sus inquietudes y demandas.</p>
              <button><a href={{route('informacionPeticiones')}}>Leer mas</a></button>
          </div>

          <div class="info-informacion">
              <img src="../../img/plebiscito.jpeg" alt="Plebiscito">
              <h2>Plebiscito</h2>
              <h3>1 de febrero, 2024</h3>
              <p>Este artículo podría describir el derecho al plebiscito, enfatizando su función como
                herramienta de participación ciudadana en la toma de decisiones políticas y la forma en que
                permite a los ciudadanos votar directamente sobre cuestiones de interés público.</p>
              <button><a href={{route('informacionPlebiscito')}}>Leer mas</a></button>
          </div>

          <div class="info-informacion">
              <img src="../../img/cargosPublicos.jpeg" alt="Cargos Publicos ">
              <h2>Postulacion para cargos públicos</h2>
              <h3>1 de febrero, 2024</h3>
              <p>Este artículo podría abordar el derecho a postularse para cargos públicos, destacando su importancia en
                la representación democrática, los requisitos necesarios para la candidatura y el proceso electoral que
                los aspirantes deben seguir.</p>
              <button><a href={{route('informacionCargo')}}>Leer más</a></button>
          </div>

        </div>
      </div>

      <div class="columna-derecha">
      <div class="sidebar-in">
        <div class="sobre-nosotros">
            <h2>Sobre nosotros</h2>
            <img src="../../img/sobrenosotros.png" alt="sobrenosotros">
            <p>Somos una comunidad con el objetivo de ayudar a nuestros
                usuarios a conocer como proseguir en sus casos referentes a
                la rama judicial presentados en el dia a dia</p>
        </div>

        <div class="dest">
            <h2>Lo más destacado</h2>
            <img src="../../img/lomasdestacado.png" alt="lomasdestacado">
            <h3>Pensión alimenticia: Todo lo que necesitas saber</h3>
            <h4>1 de febrero, 2024</h4>
            <button><a href={{route('informacionPension')}}>Leer más</a></button>
        </div>
    </div>
        <div class="position-container">
            <h1>Categorías Derechos</h1>
            <div class="imagen-container">
              <img src="../../img/general.jpg" alt="DerechosGenerales">
              <div class="texto-superpuesto"><a href={{route('informaciones')}}>General</a></div>
          </div>
            <div class="imagen-container">
                <img src="../../img/DerechoComercial.png" alt="DerechoComercial">
                <div class="texto-superpuesto"><a href={{route('Comercial')}}>Comercial</a></div>
            </div>
            <div class="imagen-container">
                <img src="../../img/Derechodefamilia.png" alt="Derechodefamilia">
                <div class="texto-superpuesto"><a href={{route('informacionFamilia')}}>De Familia</a></a></div>
            </div>
            <div class="imagen-container">
                <img src="../../img/derechosNiños.jpg" alt="Derecholaboralydeempleo">
                <div class="texto-superpuesto"><a href="{{route('informacionInfantil')}}">Infantiles</a></div>
            </div>
            <div class="imagen-container">
                <img src="../../img/Derechopenalyprocesal.png" alt="Derechopenalyprocesal">
                <div class="texto-superpuesto"><a href="#">Penal y Procesal</a><</div>
            </div>
            <div class="imagen-container">
              <img src="../../img/derechosDigitales.jpg" alt="Derechopenalyprocesal">
              <div class="texto-superpuesto"><a href="#">Digitales</a></div>
          </div>
            <div class="imagen-container">
              <img src="../../img/propIntelectual.jpg" alt="Derechopenalyprocesal">
              <div class="texto-superpuesto"><a href={{route('informacionIntelec')}}>Propiedad Intelectual</a></div>
          </div>
            <div class="imagen-container">
              <img src="../../img/derechoAmbiental.jpg" alt="Derechopenalyprocesal">
              <div class="texto-superpuesto">Ambiental</div>
          </div>
          <div class="imagen-container">
            <img src="../../img/DerechoSalud.jpg" alt="DerechoSalud">
            <div class="texto-superpuesto">Salud</div>
        </div>
        <div class="imagen-container">
          <img src="../../img/DerechoInternacional.jpg" alt="DerechoInternacional">
          <div class="texto-superpuesto">Internacional</div>
      </div>
      <div class="imagen-container">
        <img src="../../img/Derecholaboralydeempleo.png" alt="Derecholaboralydeempleo">
        <div class="texto-superpuesto"><a href={{route('informacionesLaboral')}}>Laboral y de Empleo</a></div>
    </div>
        </div>
      </div>
        </section>
        <div class="buscador-container">
          <div class="search-bar">
            <input type="text" placeholder="">
            <button><img src="../../img/Lupa.png" alt="Buscar"></button>
          </div>

          <div class="filter-menu">
            <button class="active" data-category="todos">Todos</button>
            <button data-category="comercial">Comercial</button>
            <button data-category="laboral">Laboral</button>
            <button data-category="familiar">Familiar</button>
            <button data-category="penal">Penal</button>
            <button data-category="civil">Civil</button>
            <button data-category="inmobiliario">Inmobiliario</button>
          </div>
        </div>

        <div class="articles-list">
          <div class="article">
            <img src="../../img/Accidente.png" alt="Artículo">
            <div class="article-info">
                <h3>Guía completa sobre los pasos a seguir...</h3>
                <p>Entra y descubre la información necesaria...</p>
                <span>12 Sept, 2023</span>
            </div>
        </div>
        <div class="article">
          <img src="../../img/Derechosdelconsumidor.png" alt="Artículo">
          <div class="article-info">
              <h3>Los derechos del consumidor</h3>
              <p>Conoce tus derechos como consumidor y aprende cómo...</p>
              <span>11 Sept, 2023</span>
          </div>
        </div>
        <div class="article">
          <img src="../../img/Iniciarunnegocio.png" alt="Artículo">
          <div class="article-info">
              <h3>Aspectos legales para iniciar ...</h3>
              <p>Aprende los aspectos legales fundamentales al iniciar un negocio...</p>
              <span>11 Sept, 2023</span>
          </div>
      </div>
      <div class="article">
          <img src="../../img/Despidoinjustificado.png" alt="Artículo">
          <div class="article-info">
              <h3>Qué hacer en caso de  un despido ... </h3>
              <p>Explora tus opciones legales y los pasos a ...</p>
              <span>11 Sept, 2023</span>
          </div>
      </div>
      <div class="article">
        <img src="../../img/Derechosdeinquilinos.png" alt="Artículo">
        <div class="article-info">
            <h3>Cómo enfrentar problemas de ...</h3>
            <p>Obtén información sobre tus derechos como inquilino...</p>
            <span>11 Sept, 2023</span>
        </div>
    </div>
    <div class="article">
              <img src="../../img/Iniciarunnegocio.png" alt="Artículo">
              <div class="article-info">
                  <h3>Aspectos legales para iniciar ...</h3>
                  <p>Aprende los aspectos legales fundamentales al iniciar un negocio...</p>
                  <span>11 Sept, 2023</span>
              </div>
          </div>
          <div class="article">
              <img src="../../img/Despidoinjustificado.png" alt="Artículo">
              <div class="article-info">
                  <h3>Qué hacer en caso de  un despido ... </h3>
                  <p>Explora tus opciones legales y los pasos a ...</p>
                  <span>11 Sept, 2023</span>
              </div>
          </div>
          <div class="article">
            <img src="../../img/Derechosdeinquilinos.png" alt="Artículo">
            <div class="article-info">
                <h3>Cómo enfrentar problemas de ...</h3>
                <p>Obtén información sobre tus derechos como inquilino...</p>
                <span>11 Sept, 2023</span>
            </div>
        </div>
        <div class="article">
          <img src="../../img/PensionAliemnticia.jpg" alt="Artículo">
          <div class="article-info">
              <h3>Pensión alimenticia</h3>
              <p>Comprende tus derechos y responsabilidades en relación..</p>
              <span>11 Sept, 2023</span>
          </div>
      </div>
      <div class="article">
        <img src="../../img/Divorcio.jpg" alt="Artículo">
        <div class="article-info">
            <h3>Guía sobre divorcio</h3>
            <p>La guía sobre divorcio brinda información sobre..</p>
            <span>11 Sept, 2023</span>
        </div>
    </div>
    
      </div>

    </div>
  </div>

@endsection

@section('footer')
@endsection

@push('styles')
<link rel="stylesheet" href="css/informaciones.css">
@endpush


@push('scripts')
<script src="js/informacion.js"></script>
@endpush
