

@extends('layouts.layoutLogin')

@section('title', 'Informacion')

@section('nav')
@endsection

@section('main')
      <div class="container">
        <div class="news-column">
          <h2 class="titulo-informacion">Derechos de autor: protegen las obras literarias, artísticas y científicas.</h2>
          <span>14 agosto 2024</span>
          <span class="categoria">Categoria: Propiedad Intelectual</span>

          <div class="informacion-contenido">
            <img
              src="../../img/derechoAutor.jpg"
              alt="tutela"
              class="imagen-arriba-derecha"
            />
            <p>Los derechos de autor son un conjunto de normas jurídicas que protegen <strong>las obras literarias, artísticas y científicas</strong>,
                otorgando a sus creadores la capacidad de controlar el uso y la distribución de sus creaciones. Estos derechos no solo
                garantizan que los autores reciban el reconocimiento adecuado por su obra, sino que también permiten que se beneficien
                económicamente de la explotación de sus trabajos, ya sea mediante la reproducción, distribución, o la comunicación
                pública de los mismos.
                <br><br>
                El derecho de autor surge automáticamente cuando una obra es creada, sin la necesidad de registro o formalidades adicionales,
                aunque en muchos países existen registros de propiedad intelectual que refuerzan los derechos del creador. Esta protección
                legal se aplica en todos los campos de la creación artística y científica, asegurando que los autores puedan ejercer control
                sobre el uso de sus obras por terceros y que reciban compensación por su trabajo.</p>

                <h3>Ámbito de Protección de los Derechos de Autor</h3>
                <p>El ámbito de protección de los derechos de autor es amplio e incluye diversas obras del intelecto humano.
                    Entre ellas se encuentran:</p>
                    <ul>
                        <li><strong>Obras literarias:</strong>como novelas, cuentos, ensayos, artículos periodísticos, poemas, y cualquier forma de
                            creación escrita. Estas obras son protegidas desde el momento de su creación, y el autor tiene derechos exclusivos sobre 
                            la reproducción, distribución y comunicación pública de las mismas.</li>

                        <li><strong>Obras artísticas: </strong>que incluyen desde pinturas y esculturas hasta obras de arte digital. Dentro de esta
                            categoría se consideran también las obras cinematográficas, las composiciones musicales, los guiones teatrales y las
                            coreografías. Incluso los programas de ordenador, conocidos como software, están protegidos bajo las leyes de derechos 
                            de autor.</li>

                        <li><strong>Obras científicas:</strong>que abarca artículos de investigación, estudios, tesis doctorales, trabajos
                            de divulgación científica, y teorías o descubrimientos. En el campo de la ciencia, los derechos de autor protegen
                            tanto la expresión original de una idea como el modo en que se transmite el conocimiento, pero no protegen las
                            ideas o métodos científicos en sí.</li>
                    </ul>
                    <p>Esta protección se extiende a cualquier creación que tenga una forma tangible, ya sea en formato físico o digital. Así,
                    tanto los libros impresos como los archivos electrónicos de texto o imágenes digitales están cubiertos por la normativa
                    de derechos de autor.</p>

                <h3>Tipos de Derechos de Autor</h3>
                <p>Los derechos de autor se dividen en dos grandes categorías: los <strong>derechos morales</strong> y los
                    <strong>derechos patrimoniales</strong>, cada uno con funciones y características particulares.
                <br><br>
                Los <strong>derechos morales</strong> son aquellos que vinculan al autor de manera personal e intransferible con su obra.
                Estos derechos reconocen la autoría de una persona y su capacidad para proteger la integridad de su creación.
                Entre los más destacados se encuentran el derecho a la <strong>paternidad</strong>, que asegura que el autor sea identificado
                como creador de la obra, y el derecho a la integridad, que impide que la obra sea modificada sin su consentimiento,
                especialmente si esos cambios pueden dañar su reputación o la naturaleza de la creación. Los derechos morales,
                a diferencia de los patrimoniales, suelen ser inalienables, lo que significa que no pueden ser cedidos o vendidos.
                <br><br>
                Por otro lado, los derechos patrimoniales son aquellos que permiten al autor obtener una retribución económica por
                la explotación de su obra. Estos derechos incluyen la reproducción, la distribución y la comunicación pública de la
                obra, así como su transformación, que puede implicar adaptaciones, traducciones u otras formas de modificarla. A
                diferencia de los derechos morales, los derechos patrimoniales sí pueden ser transferidos a terceros, ya sea
                mediante venta, cesión, o licencia.
        </p>
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
