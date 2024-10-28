

@extends('layouts.layoutLogin')

@section('title', 'Informacion')

@section('nav')
@endsection

@section('main')
      <div class="container">
        <div class="news-column">
          <h2 class="titulo-informacion">Patentes: protegen invenciones o mejoras tecnológicas.</h2>
          <span>14 agosto 2024</span>
          <span class="categoria">Categoria: Propiedad Intelectual</span>

          <div class="informacion-contenido">
            <img
              src="../../img/patente.jpg"
              alt="patente"
              class="imagen-arriba-derecha"
            />
            <p>Las <strong>patentes</strong> son un mecanismo de propiedad intelectual que proporciona a los inventores derechos exclusivos
              sobre sus invenciones o mejoras tecnológicas por un periodo limitado. Este sistema de protección no solo
              busca salvaguardar los intereses de los inventores, sino también fomentar la innovación al asegurar que
              los creadores puedan beneficiarse económicamente de sus trabajos. En un mundo cada vez más competitivo
              y basado en la tecnología, las patentes juegan un papel crucial en la economía global al incentivar
              el desarrollo y la divulgación de nuevos conocimientos</p>

                <h3>Tipos de Patentes</h3>
                <p>Existen varios tipos de patentes, que varían según el tipo de invención que protegen:</p>
                    <ul>
                        <li><strong>Patentes de invención:</strong>protegen nuevos productos, procesos o técnicas que ofrecen una
                          solución a un problema técnico. Estas patentes son el tipo más común y son aplicables a una amplia gama
                          de sectores, desde la farmacéutica hasta la ingeniería..</li>

                        <li><strong>Patentes de modelo de utilidad:</strong>protegen mejoras menores en productos o procesos existentes.
                          A menudo requieren un proceso de registro menos riguroso que las patentes de invención, lo que las hace más
                          accesibles para pequeños inventores y empresas.</li>

                        <li><strong>Patentes de diseño: </strong>protegen la apariencia ornamental o estética de un producto,
                          en lugar de su funcionalidad. Esto es especialmente relevante en industrias como la moda y el
                          diseño industrial, donde la forma y el estilo son críticos.</li>
                    </ul>

                <h3>Requisitos para la Protección de Patente</h3>
                <p>Para que una invención sea patentable, debe cumplir con ciertos requisitos. Primero, debe ser nueva, lo que
                  significa que no debe haber sido divulgada al público antes de la fecha de presentación de la solicitud de patente.
                  Segundo, la invención debe mostrar actividad inventiva, es decir, no debe ser obvia para un experto en el campo
                  correspondiente. Finalmente, la invención debe ser susceptible de aplicación industrial, lo que implica que
                  debe poder producirse o utilizarse de manera práctica en un sector productivo.</p>

                <h3>Proceso de Solicitud de Patente</h3>
                <p>El proceso para obtener una patente implica varios pasos. Inicialmente, es recomendable realizar una búsqueda de
                  patentes para asegurarse de que la invención no haya sido patentada previamente. Luego, se presenta la solicitud,
                  que debe incluir una descripción detallada de la invención y reivindicaciones que definan el alcance de la protección
                  solicitada. Posteriormente, la solicitud es sometida a un examen donde se evalúa si la invención cumple con los requisitos
                  de patentabilidad. Si la solicitud es aprobada, se otorga la patente, que confiere al titular derechos exclusivos sobre
                  la invención durante un periodo que generalmente oscila entre 20 y 25 años, dependiendo de la jurisdicción.</p>

                <h3>Derechos Conferidos por las Patentes</h3>
                <p>La concesión de una patente otorga al titular una serie de derechos exclusivos. Estos incluyen el derecho a explorar la invención,
                  lo que permite al titular fabricar, utilizar, vender o importar la invención sin la intervención de terceros. También incluye el
                  derecho a otorgar licencias, permitiendo a otros utilizar la invención a cambio de una compensación económica, así como el derecho
                  a iniciar acciones legales en caso de uso no autorizado de la invención.</p>

                <h3>Limitaciones y Excepciones</h3>
                <p>A pesar de los derechos exclusivos conferidos por las patentes, existen limitaciones y excepciones que permiten el uso de invenciones patentadas sin infringir
                  los derechos del titular. Por ejemplo, en muchos países se permite el uso personal de una invención patentada sin autorización del titular, siempre que no sea
                  comercial. Asimismo, las actividades de investigación y desarrollo pueden llevarse a cabo sin infringir patentes, siempre que no se comercialice la invención
                  patentada. Una vez que expira la protección de la patente, la invención entra en el dominio público y puede ser utilizada libremente por cualquier persona.</p>

                <h3>Importancia de las Patentes</h3>
                <p>Las patentes son esenciales para incentivar la innovación y el progreso tecnológico. Proporcionan a los inventores la seguridad necesaria para invertir tiempo y
                  recursos en el desarrollo de nuevas tecnologías. Sin este sistema de protección, los innovadores pueden ser reacios a compartir sus descubrimientos, temiendo que
                  sus ideas sean copiadas sin compensación. Las patentes también promueven la inversión en investigación y desarrollo, ya que las empresas están más dispuestas a
                  financiar proyectos si pueden asegurarse una ventaja competitiva mediante la obtención de patentes.</p>

                <h3>Críticas al Sistema de Patentes</h3>
                <p>A pesar de su importancia, el sistema de patentes ha enfrentado críticas en los últimos años. Algunas críticas se centran en la duración excesiva de la protección,
                  que puede impedir el acceso a tecnologías que beneficiarían a la sociedad. También se cuestionan los altos costos asociados con la obtención y mantenimiento de patentes,
                  que pueden limitar el acceso a la protección de patentes para pequeños inventores o startups. Adicionalmente, algunas empresas han sido criticadas por obtener patentes
                  sobre ideas que son consideradas obvias o que no presentan una innovación significativa, lo que puede dificultar la competencia y el desarrollo de nuevas soluciones.</p>
          </div>
        </div>
        <div class="recommendations-column">
          <h3>Recomendaciones de informaciones</h3>
          <div class="tab-container">
            <div class="filter">
              <button class="filter-button active">Último</button>
              <button class="filter-button">Más Recomendado</button>
              <button class="filter-button">Más Visto</button>
            </div>

            <div id="latest" class="tab-content">
              <ul class="article-list">
                <a href="/informacionDivorcio">
                  <li class="article">
                    <img src="../../img/Divorcio.jpg" alt="Artículo 1" />
                    <div class="article-content">
                      <div class="article-title">Guía sobre divorcio</div>
                      <p class="article-description">
                        La guía sobre divorcio brinda información sobre cómo
                        proceder durante la separación matrimonial.
                      </p>
                    </div>
                  </li>
                </a>
                <a href="/informacionArrendamiento">
                  <li class="article">
                    <img
                      src="../../img/Derechosdeinquilinos.png"
                      alt="Artículo 2"
                    />
                    <div class="article-content">
                      <div class="article-title">
                        Cómo enfrentar problemas de arrendamiento y derechos del
                        inquilino
                      </div>
                      <p class="article-description">
                        Obtén información sobre tus derechos como inquilino.
                      </p>
                    </div>
                  </li>
                </a>
                <a href="informacionAutor">
                  <li class="article">
                    <img src="../../img/derechoAutor.jpeg" alt="Artículo 2" />
                    <div class="article-content">
                      <div class="article-title">
                        Derechos de Autor
                      </div>
                      <p class="article-description">
                       Conoce que son los derechos de autor y cuando los puedes usar
                      </p>
                    </div>
                  </li>
                </a>
                  <a href="informacionTestamento">
                    <li class="article">
                      <img src="../../img/Testamento.jpg" alt="Artículo 2" />
                      <div class="article-content">
                        <div class="article-title">
                          Como redactar un testamento
                        </div>
                        <p class="article-description">
                          Aprende los pasos necesarios para realizar un testamento.
                        </p>
                      </div>
                    </li>
                  </a>
                  <a href="informacionSeguridadSaludTrabajo">
                    <li class="article">
                      <img src="../../img/SST.jpg" alt="Artículo 2" />
                      <div class="article-content">
                        <div class="article-title">
                          Como redactar un testamento
                        </div>
                        <p class="article-description">
                          Aprende lo necesario sobre seguridad y salud en el trabajo..
                        </p>
                      </div>
                    </li>
                  </a>
                  <a href="/derechosTrabajadores">
                    <li class="article">
                      <img
                        src="../../img/DerechosTrabajadores.jpg"
                        alt="Artículo 1"
                      />
                      <div class="article-content">
                        <div class="article-title">
                          Derechos del trabajador
                        </div>
                        <p class="article-description">
                          Todo lo que necesitas saber sobre los derechos del trabajador.
                        </p>
                      </div>
                    </li>
                  </a>
                <a href="./informacionPension">
                  <li class="article">
                    <img
                      src="../../img/PensionAliemnticia.jpg"
                      alt="Artículo 1"
                    />
                    <div class="article-content">
                      <div class="article-title">
                        Pension Alienticia
                      </div>
                      <p class="article-description">
                        Todo lo que necesitas saber sobre la
                        pension alimenticia
                      </p>
                    </div>
                  </li>
                </a>
                <a href="informacionConsumidor">
                  <li class="article">
                    <img
                      src="../../img/Derechosdelconsumidor.png"
                      alt="Artículo 2"
                    />
                    <div class="article-content">
                      <div class="article-title">
                        Los derechos del consumidor
                      </div>
                      <p class="article-description">
                        Conoce tus derechos como consumidor y aprende cómo
                        protegerte contra el fraude y las prácticas comerciales
                        injustas.
                      </p>
                    </div>
                  </li>
                </a>
                <a href="/informacionDespido">
                  <li class="article">
                    <img src="../../img/Despido.jpg" alt="Artículo 1" />
                    <div class="article-content">
                      <div class="article-title">
                        Qué hacer en caso de despido injustificado
                      </div>
                      <p class="article-description">
                        Explora tus opciones legales y los pasos a seguir si te
                        enfrentas a un despido injustificado.
                      </p>
                    </div>
                  </li>
                </a>
                <a href="/informacionNegocio">
                  <li class="article">
                    <img src="../../img/IniciarNegocio.jpg" alt="Artículo 2" />
                    <div class="article-content">
                      <div class="article-title">
                        Aspectos legales para iniciar un negocio
                      </div>
                      <p class="article-description">
                        Aprende los aspectos legales fundamentales al iniciar un
                        negocio
                      </p>
                    </div>
                  </li>
                </a>
              </ul>
            </div>
          </div>
        </div>
      </div>

      @endsection

      @section('footer')
      @endsection

      @push('styles')
      <link rel="stylesheet" href="css/informacion.css">
      @endpush


      @push('scripts')
      <script src="js/informacion.js"></script>
      @endpush
