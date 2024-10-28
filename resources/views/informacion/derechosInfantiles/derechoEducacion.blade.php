

@extends('layouts.layoutLogin')

@section('title', 'Informacion')

@section('nav')
@endsection

@section('main')
      <div class="container">
        <div class="news-column">
          <h2 class="titulo-informacion">Derecho a la educacion</h2>
          <span>14 agosto 2024</span>
          <span class="categoria">Categoria: Infantil</span>

          <div class="informacion-contenido">
            <img
              src="../../img/educacion.jpg"
              alt="tutela"
              class="imagen-arriba-derecha"
            />

            <p>
                El derecho a la educación es un derecho humano fundamental que garantiza a todas
                las personas el acceso a una educación adecuada, sin discriminación de ningún tipo.
                Está reconocido por diversos instrumentos internacionales, como la Declaración Universal
                de los Derechos Humanos de 1948, que en su artículo 26 establece que toda persona tiene
                derecho a la educación, y que la enseñanza debe ser gratuita, al menos en los niveles
                básicos y fundamentales. También se reconoce en tratados regionales y nacionales, como
                las constituciones de muchos países.
                <br><br>
                La educación es clave para el desarrollo personal, social y económico. No solo proporciona
                habilidades académicas y técnicas, sino que también promueve el bienestar general, fomenta
                la participación ciudadana y fortalece los valores democráticos. Una educación de calidad
                empodera a los individuos, dándoles las herramientas necesarias para mejorar sus condiciones
                de vida y contribuir al desarrollo de sus comunidades.
            </p>

            <h3>Principales características del derecho a la educación:</h3>

            <p>
              <ul>
                <li><strong>Universalidad: </strong>El derecho a la educación debe estar garantizado para todos,
                    sin distinción de raza, sexo, origen étnico, discapacidad, religión o situación económica. 
                    Esto significa que ningún individuo debe ser excluido de acceder a la educación por ninguna razón.</li>
                <li><strong>Gratuidad: </strong>Los tratados internacionales y las legislaciones de muchos países establecen
                    que la educación básica debe ser gratuita y accesible para todos. La gratuidad también se extiende,
                    en algunos contextos, a la educación secundaria y terciaria, aunque a menudo estos niveles no son completamente
                    gratuitos. Sin embargo, el objetivo es que ningún niño o joven quede excluido por razones económicas.</li>
                <li><strong>Obligatoriedad: </strong> La educación primaria, en la mayoría de los países, es obligatoria, lo que obliga
                    tanto al Estado como a las familias a garantizar que los niños asistan a la escuela. Esta obligatoriedad es un
                    reconocimiento de la importancia de la educación básica para el desarrollo de los individuos y las sociedades.</li>
                <li><strong>Calidad:</strong> Además de ser accesible y gratuita, la educación debe ser de calidad. Esto implica que las escuelas
                    deben contar con infraestructuras adecuadas, docentes bien formados, recursos pedagógicos suficientes y un ambiente seguro y
                    estimulante para el aprendizaje. La calidad educativa es esencial para que el derecho a la educación sea realmente efectivo y
                    no solo un acceso formal.</li>
                <li><strong>Igualdad y equidad:</strong> El derecho a la educación también implica que debe ser ofrecida en condiciones de igualdad y equidad.
                    Esto significa que deben eliminarse las barreras que impiden que ciertos grupos, como niñas, personas con discapacidades, comunidades rurales
                    o minorías étnicas, accedan a la educación en igualdad de condiciones. El Estado tiene la responsabilidad de implementar políticas que garanticen
                    la inclusión de estos grupos, como programas especiales o subvenciones.</li>
            </ul>
            </p>

            <h3>Instrumentos internacionales y legislación:</h3>
            <p>
                El derecho a la educación está consagrado en numerosos tratados internacionales. Entre los más destacados
                se encuentra el Pacto Internacional de Derechos Económicos, Sociales y Culturales (PIDESC) de 1966, que
                establece en su artículo 13 que los Estados Partes deben reconocer el derecho de toda persona a recibir
                una educación y comprometerse a asegurar la gratuidad y obligatoriedad de la enseñanza primaria, así
                como a fomentar el desarrollo de la enseñanza secundaria y superior.
                <br><br>
                Por su parte, la Convención sobre los Derechos del Niño (1989) también es un instrumento crucial que
                protege este derecho, enfatizando en su artículo 28 el acceso a la educación para todos los niños, y
                en el artículo 29, la orientación de la educación hacia el desarrollo pleno del niño, el respeto por
                los derechos humanos y la identidad cultural, así como la preparación para asumir una vida responsable
                en una sociedad libre.
            </p>

            <h3>Desafíos y barreras al derecho a la educación</h3>

            <p>
                A pesar del amplio reconocimiento del derecho a la educación, muchos países enfrentan serios desafíos
                para garantizar su cumplimiento efectivo. Entre los principales obstáculos se encuentran:
            </p>
            <ul>
                <li><strong>Falta de acceso a infraestructuras educativas:</strong> En muchas zonas rurales o áreas en conflicto, los niños
                    y jóvenes no tienen acceso a escuelas debido a la lejanía o a la falta de instalaciones adecuadas.</li>
                    <li><strong>Desigualdades socioeconómicas:</strong> La pobreza es una de las principales barreras para la educación. En muchos países en
                        desarrollo, las familias no pueden permitirse los costos asociados con la educación, como uniformes, materiales o transporte, lo que
                        lleva a altas tasas de deserción escolar.</li>
                    <li><strong>Discriminación y exclusión: </strong>En algunas sociedades, las niñas, personas con discapacidades o grupos minoritarios
                        enfrentan mayores dificultades para acceder a la educación debido a prejuicios culturales o falta de políticas inclusivas</li>
                    <li><strong>Conflictos armados y desastres naturales: </strong> En regiones afectadas por guerras o desastres naturales, la infraestructura
                        educativa suele ser destruida o interrumpida, afectando gravemente el acceso a la educación. Además, los desplazamientos masivos pueden
                        impedir que los niños accedan a una educación estable.</li>
            </ul>

            <h3>Obligaciones del Estado</h3>

            <p>Los Estados tienen una responsabilidad primordial en la garantía del derecho a la educación. Esta obligación se manifiesta en varios niveles:</p>
            <ul>
                <li><strong>Respetar: </strong>El Estado debe abstenerse de interferir en el disfrute del derecho a la educación, como imponer barreras injustificadas
                    o discriminatorias.</li>
                <li><strong>Proteger: </strong>Los Estados deben proteger a los ciudadanos contra acciones de terceros (por ejemplo, actores privados) que puedan vulnerar
                    este derecho, como evitar que se impongan tarifas escolares que excluyan a ciertos grupos.</li>
                <li><strong>Garantizar: </strong>Los Estados deben tomar medidas activas para asegurar que todos los ciudadanos tengan acceso a una educación de calidad,
                    incluyendo la creación de escuelas, la formación de maestros y la asignación de recursos financieros adecuados.</li>
                <li><strong>Facilitar: </strong>Esto implica crear políticas y programas que ayuden a las personas a ejercer su derecho a la educación, como becas, transporte escolar
                    o alimentación gratuita</li>
            </ul>

            <h3>El derecho a la educación y el desarrollo</h3>

            <p>El derecho a la educación tiene una fuerte correlación con otros derechos y aspectos del desarrollo humano. La educación
                es fundamental para la reducción de la pobreza, la mejora de la salud y el bienestar general, y el empoderamiento de las
                mujeres. A nivel global, la Agenda 2030 de Desarrollo Sostenible, en su Objetivo 4, establece la meta de garantizar una
                educación inclusiva, equitativa y de calidad, y promover oportunidades de aprendizaje para todos.
                <br><br>
                La educación también juega un papel crucial en la promoción de la paz y la estabilidad, ya que fomenta el respeto por
                la diversidad, el entendimiento intercultural y la resolución pacífica de conflictos. A través de la educación,
                se pueden abordar muchos de los desafíos globales, como el cambio climático, la desigualdad y la violencia.
                <br><br>
                En conclusión, el derecho a la educación es un derecho esencial que promueve la dignidad, la igualdad y el desarrollo
                humano. Aunque se han logrado avances significativos en muchos países, persisten barreras importantes que requieren
                un esfuerzo concertado a nivel local, nacional e internacional para garantizar que este derecho sea disfrutado
                plenamente por todas las personas, sin excepción.  </p>

           
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
