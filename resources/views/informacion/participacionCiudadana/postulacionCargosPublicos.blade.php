

@extends('layouts.layoutLogin')

@section('title', 'Informacion')

@section('nav')
@endsection

@section('main')
      <div class="container">
        <div class="news-column">
          <h2 class="titulo-informacion">Derecho a postularse para cargos públicos.</h2>
          <span>14 agosto 2024</span>
          <span class="categoria">Categoria: Participación Cuidadana</span>

          <div class="informacion-contenido">
            <img
              src="../../img/cargosPublicos.jpeg"
              alt="tutela"
              class="imagen-arriba-derecha"
            />

            <p>El derecho a postularse para cargos públicos es una extensión fundamental del derecho a la participación política y
                un componente central de las democracias modernas. Este derecho, también conocido como el derecho de elegibilidad
                o sufragio pasivo, permite a los ciudadanos no solo votar, sino también presentarse como candidatos para ocupar
                puestos de representación en el gobierno o en otras instituciones públicas. Garantiza que cualquier persona que
                cumpla con los requisitos legales establecidos tenga la oportunidad de competir por un cargo público, contribuyendo
                de manera directa a la conducción del Estado y a la toma de decisiones que afectan a la sociedad en su conjunto.</p>
                <h3>Fundamentación del derecho a postularse para cargos públicos</h3>
                <p>El derecho a postularse para cargos públicos está consagrado en varios instrumentos internacionales de derechos humanos.
                    La Declaración Universal de los Derechos Humanos (1948) establece en su artículo 21 que "toda persona tiene el derecho
                    de participar en el gobierno de su país, directamente o por medio de representantes libremente escogidos". Además,
                    el Pacto Internacional de Derechos Civiles y Políticos (1966), en su artículo 25, afirma que todos los ciudadanos
                    tienen el derecho de "tener acceso, en condiciones generales de igualdad, a las funciones públicas de su país".
                    Estos tratados proporcionan un marco jurídico internacional que garantiza el acceso equitativo a la posibilidad
                    de ser elegido para un cargo público.
                <br><br>
                    El derecho a postularse es esencial porque asegura que la competencia política sea inclusiva y refleje la
                    diversidad de la sociedad. Un sistema político verdaderamente democrático no puede limitar este derecho
                    arbitrariamente ni permitir que solo ciertos grupos o élites tengan acceso a los cargos de poder. Las
                    restricciones al derecho a postularse deben estar justificadas por razones legítimas, como el cumplimiento
                    de requisitos de edad, ciudadanía, o en algunos casos, no haber cometido ciertos delitos, pero no deben ser
                    discriminatorias ni excluyentes por motivos de género, raza, religión, orientación sexual o condición económica.</p>

                    <h3>Requisitos y limitaciones para postularse</h3>
                    <p>Aunque el derecho a postularse está ampliamente reconocido, los países pueden imponer ciertas condiciones
                        para asegurar que los candidatos sean aptos para ocupar un cargo público. Estas condiciones varían entre 
                        diferentes naciones, pero en general, incluyen:
                        <ul>
                            <li><strong>Edad mínima:</strong>En la mayoría de los países, existe una edad mínima para postularse a
                                determinados cargos. Por ejemplo, en muchos lugares la edad mínima para postularse como miembro de
                                un parlamento puede ser de 18 a 25 años, mientras que para la presidencia suele ser más alta,
                                generalmente entre 30 y 35 años. Estas edades buscan garantizar que los candidatos tengan la
                                madurez necesaria para ejercer funciones de responsabilidad pública.</li>
                            
                            <li><strong>Ciudadanía:</strong>Para la mayoría de los cargos públicos, es necesario ser ciudadano
                                del país. En algunos países, los ciudadanos naturalizados pueden tener restricciones para
                                postularse a ciertos cargos de alto rango, como la presidencia o el gobierno, aunque esta es
                                una cuestión sujeta a debate y variación según las constituciones nacionales.</li>

                            <li><strong>Residencia:</strong>Algunos cargos requieren que los candidatos hayan residido en el
                                país o en una región específica durante un cierto período antes de las elecciones.
                                Esta condición asegura que los candidatos estén familiarizados con las realidades 
                                necesidades de la comunidad a la que aspiran representar.</li>

                            <li><strong>No tener antecedentes penales graves:</strong>En algunos países, las personas condenadas por
                                ciertos delitos graves pueden ser descalificadas para postularse a cargos públicos, ya sea temporal o
                                permanentemente. Sin embargo, esta medida es controvertida, ya que algunos argumentan que, una vez
                                cumplida la condena, las personas deberían recuperar sus derechos civiles, incluyendo el derecho
                                a postularse.</li>
                        </ul>
                                A pesar de la existencia de estos requisitos, es importante que las leyes no impongan barreras excesivas
                                que limiten injustificadamente el acceso a los cargos públicos. Las restricciones desproporcionadas o
                                discriminatorias pueden socavar los principios de equidad y participación igualitaria que son fundamentales
                                 para una democracia inclusiva.
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
                  <a href="informacionPatente">
                    <li class="article">
                      <img src="../../img/patente.jpg" alt="Artículo 2" />
                      <div class="article-content">
                        <div class="article-title">
                          Patentes
                        </div>
                        <p class="article-description">
                         Conoce que son las patentes y cuales son sus diferentes tipos y usos
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
