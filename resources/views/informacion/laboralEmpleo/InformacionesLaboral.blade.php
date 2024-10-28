@extends('layouts.layoutLogin')

@section('title', 'Informacion')

@section('nav')
@endsection

@section('main')

        <section class="informaciones-home">
          <div class="columna-izquierda">
            <div class="encabezado">
                <img src="../../img/contrato.jpg" alt="Contrato">
                <h2>Contrato laboral</h2>
                <h3>1 de febrero, 2024</h3>
                <p>Este artículo proporciona una explicación completa y detallada sobre los requisitos fundamentales para elaborar un contrato de trabajo
                    de forma clara, precisa y legalmente válida. A través de esta guía, conocerás los elementos esenciales que debe incluir un contrato
                    laboral, desde la identificación de las partes hasta las cláusulas adicionales, garantizando que cumpla con las normativas laborales
                    vigentes y evitando posibles problemas legales o malentendidos entre empleador y trabajador.o</p>
                      <button><a href={{route('informacionContrato')}}>Leer mas</a></button>
            </div>


        <div class="informaciones-contenedor">
          <div class="info-informacion">
              <img src="../../img/internacionalLaboral.jpg" alt="Internacional Laboral">
              <h2>Derecho Internacional Laboral</h2>
              <h3>1 de febrero, 2024</h3>
              <p>
                Conoce tus derechos laborales a nivel internacional y aprende cómo protegerte frente a abusos y condiciones de trabajo injustas. Descubre las
                normativas globales que garantizan un empleo digno, seguro y equitativo para todos los trabajadores del mundo.</p>
              <button><a href={{route('informacionIntLab')}}>Leer mas</a></button>
          </div>

          <div class="info-informacion">
              <img src="../../img/SST.jpg" alt="SST">
              <h2>Seguridad y Salud en el Trabajo</h2>
              <h3>1 de febrero, 2024</h3>
              <p>Conoce tus derechos en materia de seguridad y salud en el trabajo y aprende cómo protegerte frente a riesgos laborales. Descubre las normativas que garantizan un
                ambiente de trabajo seguro y saludable, promoviendo el bienestar físico y mental de los trabajadores en todos los sectores.</p>
              <button><a href={{route('SST')}}>Leer mas</a></button>
          </div>

          <div class="info-informacion">
              <img src="../../img/Despidoinjustificado.png" alt="Despido injustificado">
              <h2>Qué hacer en caso de despido injustificado</h2>
              <h3>1 de febrero, 2024</h3>
              <p>Explora tus opciones legales y los pasos a seguir si te enfrentas a un despido injustificado</p>
              <button><a href={{route('informacionDespido')}}>Leer mas</a></button>
          </div>

          <div class="info-informacion">
              <img src="../../img/seguridadSocial.jpg" alt="seguridadSocial">
              <h2>Derecho a la Seguridad Social</h2>
              <h3>1 de febrero, 2024</h3>
              <p>Conoce tu derecho a la seguridad social y cómo garantiza tu bienestar en situaciones de enfermedad,
                desempleo, invalidez o jubilación. Descubre cómo este derecho protege a los trabajadores y sus familias,
                asegurando una vida digna y apoyo en momentos de necesidad.</p>
              <button><a href={{route('informacionSeguridadSocial')}}>Leer mas</a></button>
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
                <img src="../../img/derechosNiños.jpg" alt="Derecholaboralydeempleo">
                <div class="texto-superpuesto"><a href="{{route('informacionInfantil')}}">Infantiles</a></div>
            </div>
            
           
            <div class="imagen-container">
                <img src="../../img/Derechodefamilia.png" alt="Derechodefamilia">
                <div class="texto-superpuesto"><a href={{route('informacionFamilia')}}>De Familia</a></div>
            </div>
            <div class="imagen-container">
              <img src="../../img/ParticipaciónCiudadana.jpg" alt="Derecholaboralydeempleo">
              <div class="texto-superpuesto"><a href={{route('infoCiudadana')}}>Participación Ciudadana</a></div>
          </div>
            {{--<div class="imagen-container">
                <img src="../../img/Derechopenalyprocesal.png" alt="Derechopenalyprocesal">
                <div class="texto-superpuesto"><a href="#">Penal y Procesal</a></div>
            </div>
            <div class="imagen-container">
              <img src="../../img/derechosDigitales.jpg" alt="Derechopenalyprocesal">
              <div class="texto-superpuesto"><a href="#">Digitales</a></div>
          </div>--}}
          <div class="imagen-container">
            <img src="../../img/DerechoComercial.png" alt="DerechoComercial">
            <div class="texto-superpuesto"><a href={{route('Comercial')}}>Comercial</a></div>
        </div>
            <div class="imagen-container">
              <img src="../../img/propIntelectual.jpg" alt="Derechopenalyprocesal">
              <div class="texto-superpuesto"><a href={{route('informacionIntelec')}}>Propiedad Intelectual</a></div>
          </div>

            {{--<div class="imagen-container">
              <img src="../../img/derechoAmbiental.jpg" alt="Derechopenalyprocesal">
              <div class="texto-superpuesto">Ambiental</div>
          </div>
          <div class="imagen-container">
            <img src="../../img/DerechoSalud.jpg" alt="DerechoSalud">
            <div class="texto-superpuesto">Salud</div>
        </div>
        <div class="imagen-container">
          <img src="../../img/DerechoInternacional.jpg" alt="DerechoInternacional">
          <div class="texto-superpuesto">Internacional</div>---}}
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
