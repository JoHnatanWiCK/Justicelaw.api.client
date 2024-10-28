@extends('layouts.layoutLogin')

@section('title', 'Informacion')

@section('nav')
@endsection

@section('main')

        <section class="informaciones-home">
          <div class="columna-izquierda">
            <div class="encabezado">
                <img src="../../img/educacion.jpg" alt="Educacion">
                <h2>Derecho a la educacion</h2>
                <h3>1 de febrero, 2024</h3>
                <p>Este artículo ofrecerá una visión general del derecho a la educación como un derecho infantil,
                    destacando su importancia en el desarrollo integral de los niños y su impacto en el futuro.
                    Se abordarán las normas internacionales que respaldan este derecho, los obstáculos que
                    enfrentan los niños en diversas regiones para acceder a la educación, y las iniciativas
                    que buscan garantizar que todos los niños tengan la oportunidad de aprender y crecer en
                    un entorno seguro e inclusivo.</p>
                      <button><a href={{route('informacionEducacion')}}>Leer mas</a></button>
            </div>


        <div class="informaciones-contenedor">
          <div class="info-informacion">
              <img src="../../img/participacionInfantil.jpg" alt="Participacion Infantil">
              <h2>Derecho a la participación en decisiones</h2>
              <h3>1 de febrero, 2024</h3>
              <p>Este artículo abordará el derecho de los niños a participar en decisiones que les afectan,
                destacando su importancia para el desarrollo personal y social. Se explorarán las normativas
                internacionales que respaldan este derecho y se ofrecerán ejemplos de cómo fomentar la
                participación infantil en contextos familiares, escolares y comunitarios.</p>
              <button><a href={{route('informacionParticipacion')}}>Leer mas</a></button>
          </div>

          <div class="info-informacion">
              <img src="../../img/saludNiños.png" alt="Salud Niños">
              <h2>Derecho a la salud y el bienestar en los niños</h2>
              <h3>1 de febrero, 2024</h3>
              <p>Este artículo examinará el derecho de los niños a la salud y el bienestar, resaltando
                su importancia para un desarrollo integral. Se abordarán los principios que sustentan
                este derecho, los desafíos en su acceso y la necesidad de promover entornos saludables
                para todos los niños.</p>
              <button><a href={{route('informacionSalud')}}>Leer mas</a></button>
          </div>

          <div class="info-informacion">
              <img src="../../img/trabajoInfantil.jpg" alt="Trabajo Infantil">
              <h2>Protección contra el trabajo infantil</h2>
              <h3>1 de febrero, 2024</h3>
              <p>Este artículo examinará el derecho de los niños a estar protegidos contra el trabajo infantil,
                abordando su importancia y las normativas que prohíben esta práctica para garantizar su bienestar y desarrollo.</p>
              <button><a href={{route('informacionTrabajoInfantil')}}>Leer mas</a></button>
          </div>

          <div class="info-informacion">
              <img src="../../img/vidaFamiliar.jpg" alt="Vida Familiar">
              <h2>Vida familiar y cuidados adecuados</h2>
              <h3>1 de febrero, 2024</h3>
              <p>Este artículo abordará el derecho de los niños a una vida familiar y cuidados adecuados, destacando su importancia para un
                desarrollo seguro y estable. Se explorarán los principios que garantizan este derecho y las políticas que promueven entornos
                familiares protectores y afectuosos.</p>
              <button><a href={{route('informacionVidaFamiliar')}}></a>Leer más</button>
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
                <img src="../../img/DerechoComercial.png" alt="DerechoComercial">
                <div class="texto-superpuesto"><a href="#">Comercial</a></div>
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
