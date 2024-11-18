

@extends('layouts.layoutLogin')

@section('title', 'Informacion')

@section('nav')
@endsection

@section('main')
      <div class="container">
        <div class="news-column">
          <h2 class="titulo-informacion">Planificación Familiar: Derecho a la Salud Reproductiva</h2>
          <span>14 agosto 2024</span>
          <span class="categoria">Categoria: Familia</span>

          <div class="informacion-contenido">
            <img
              src="../../img/planificacion.jpg"
              alt="patente"
              class="imagen-arriba-derecha"
            />
            <p>La planificación familiar se refiere a las prácticas y decisiones que permiten a las personas y a las parejas determinar el número de hijos que desean tener y el momento en que desean tenerlos. Este concepto se enmarca dentro del derecho a la salud reproductiva, el cual es fundamental para el bienestar físico, mental y social de los individuos. La planificación familiar incluye una variedad de métodos anticonceptivos, así como educación y acceso a servicios de salud relacionados con la reproducción.</p>

                <h3>Importancia de la Planificación Familiar</h3>
                <p>La planificación familiar es crucial por varias razones. En primer lugar, permite a las personas y a las parejas tomar decisiones informadas sobre su salud reproductiva, lo que contribuye a la mejora de la calidad de vida. Asimismo, la planificación familiar puede ayudar a reducir la incidencia de embarazos no deseados, lo que a su vez puede disminuir la necesidad de abortos y mejorar la salud materna e infantil.

                    Además, la planificación familiar contribuye a la igualdad de género, permitiendo a las mujeres tener mayor control sobre su cuerpo y sus decisiones reproductivas. Esto puede llevar a un mayor empoderamiento, mejor acceso a la educación y oportunidades laborales, así como a una participación más activa en la sociedad.</p>

                    
                <h3>Métodos de Planificación Familiar</h3>
                <p>Existen diversos métodos de planificación familiar que se pueden clasificar en métodos temporales y permanentes. Los métodos temporales incluyen métodos hormonales, como píldoras anticonceptivas y dispositivos intrauterinos (DIU), así como métodos de barrera como preservativos y diafragmas. Los métodos naturales, como el ritmo y la ovulación, también se consideran opciones de planificación familiar.

                    Por otro lado, los métodos permanentes, como la ligadura de trompas en mujeres y la vasectomía en hombres, son decisiones que impiden la capacidad de tener hijos en el futuro. Es fundamental que las personas se informen adecuadamente sobre las ventajas y desventajas de cada método para elegir el que mejor se adapte a sus necesidades y circunstancias.</p>

                <h3>Acceso a Servicios de Planificación Familiar</h3>
                <p>El acceso a servicios de planificación familiar es un derecho humano fundamental. Los gobiernos y las instituciones de salud tienen la responsabilidad de proporcionar educación, servicios y recursos para que las personas puedan ejercer su derecho a la planificación familiar. Esto incluye la disponibilidad de métodos anticonceptivos, asesoramiento sobre salud reproductiva y atención médica adecuada.

                    La falta de acceso a estos servicios puede llevar a consecuencias negativas para la salud de las personas y sus familias. Por lo tanto, es vital que se promueva y garantice el acceso a servicios de planificación familiar de manera equitativa y sin discriminación.</p>

                <h3>Consecuencias Legales y Derechos</h3>
                <p>Las decisiones relacionadas con la planificación familiar pueden tener implicaciones legales, especialmente en contextos donde existen restricciones en el acceso a ciertos métodos anticonceptivos o donde se prohíbe el aborto. En algunos países, las leyes pueden limitar el acceso a servicios de salud reproductiva, lo que puede resultar en violaciones de derechos humanos. Es importante que las personas sean conscientes de sus derechos y busquen apoyo legal si se enfrentan a obstáculos para acceder a la planificación familiar.</p>
                
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
                    <img src="../../img/derechoAutor.jpg" alt="Artículo 2" />
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
