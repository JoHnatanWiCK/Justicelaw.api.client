@extends('layouts.layoutLogin')

@section('title', 'Informacion')

@section('nav')
@endsection

@section('main')

        <section class="informaciones-home">
          <div class="columna-izquierda">
            <div class="encabezado">
                <img src="../../img/DerechosConsumidor.jpg" alt="Educacion">
                <h2>Derechos del Consumidor</h2>
                <h3>1 de febrero, 2024</h3>
                <p>Este artículo ofrecerá una visión general del derechos que tienen los consumidores,
                    destacando su importancia en el desarrollo integral de la sociedad y su impacto en el futuro.</p>
                      <button><a href={{route('informacionConsumidor')}}>Leer mas</a></button>
            </div>


        <div class="informaciones-contenedor">
          <div class="info-informacion">
              <img src="../../img/IniciarNegocio.jpg" alt="Participacion Infantil">
              <h2> Como Iniciar un Negocio</h2>
              <h3>1 de febrero, 2024</h3>
              <p>Este artículo abordará el derecho de los niños a participar en decisiones que les afectan,
                destacandEste artículo podría ofrecer información sobre cómo iniciar un negocio, incluyendo la identificación de una idea de negocio, la elaboración de un plan de negocios, y la selección de la estructura legal adecuada. También se abordarán aspectos como la obtención de financiamiento, la estrategia de marketing, y los recursos disponibles para emprendedores.
              </p>
              <button><a href={{route('informacionNegocio')}}>Leer mas</a></button>
          </div>

          <div class="info-informacion">
              <img src="../../img/marca.jpg" alt="Salud Niños">
              <h2>Cómo Proteger Tu Marca</h2>
              <h3>1 de febrero, 2024</h3>
              <p>Este artículo ofrecerá una guía sobre cómo proteger tu marca, destacando estrategias clave como el registro de la marca, el uso de derechos de autor y patentes, y la importancia de monitorear y hacer cumplir tus derechos para evitar infracciones.</p>
              <button><a href={{route('marca')}}>Leer mas</a></button>
          </div>

          <div class="info-informacion">
              <img src="../../img/obligacionesFiscales.jpg" alt="Trabajo Infantil">
              <h2>Obligaciones Fiscales para Nuevos Negocios</h2>
              <h3>1 de febrero, 2024</h3>
              <p>EEste artículo presentará un resumen de las obligaciones fiscales para nuevos negocios, abordando aspectos clave como la inscripción en el registro fiscal, la declaración de impuestos, y la importancia de llevar una contabilidad adecuada para cumplir con las normativas legales.</p>
              <button><a href={{route('obligacionFiscal')}}>Leer mas</a></button>
          </div>

          <div class="info-informacion">
              <img src="../../img/relasNegocio.png" alt="Vida Familiar">
              <h2>Reglas Básicas de Publicidad</h2>
              <h3>1 de febrero, 2024</h3>
              <p>Este artículo ofrecerá un resumen de las reglas básicas de publicidad, incluyendo la verdad en la comunicación, la ética publicitaria y estrategias efectivas para llegar a la audiencia adecuada.</p>
              <button><a href={{route('reglasPublicidad')}}></a>Leer más</button>
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
                <div class="texto-superpuesto"><a href="#">Comercial</a></div>
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
            <div class="imagen-container">
                <img src="../../img/Derechopenalyprocesal.png" alt="Derechopenalyprocesal">
                <div class="texto-superpuesto"><a href="#">Penal y Procesal</a></div>
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
