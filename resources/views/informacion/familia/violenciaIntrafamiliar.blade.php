

@extends('layouts.layoutLogin')

@section('title', 'Informacion')

@section('nav')
@endsection

@section('main')
      <div class="container">
        <div class="news-column">
          <h2 class="titulo-informacion">Violencia Intrafamiliar: Un Problema Social y Legal</h2>
          <span>14 agosto 2024</span>
          <span class="categoria">Categoria: Familia</span>

          <div class="informacion-contenido">
            <img
              src="../../img/violenciaIntrafam.jpg"
              alt="patente"
              class="imagen-arriba-derecha"
            />
            <p>La violencia intrafamiliar se refiere a cualquier acto de violencia que se produce en el ámbito familiar y puede incluir agresiones físicas, psicológicas, sexuales y económicas.
                Este fenómeno es un grave problema social que afecta a millones de personas en todo el mundo, independientemente de su origen, edad o condición socioeconómica.
                La violencia intrafamiliar no solo afecta a la víctima directa, sino que también impacta en otros miembros de la familia, incluidos niños y ancianos, perpetuando
                ciclos de violencia y afectando el bienestar emocional y físico de todos los involucrados.</p>

                <h3>Tipos de Violencia Intrafamiliar</h3>
                <p>La violencia intrafamiliar puede manifestarse de diversas formas:
                    <ul>
                        <li><strong>Violencia física:</strong>Implica cualquier tipo de agresión física, como golpes, empujones, o cualquier otro tipo de contacto que cause daño físico.</li>
                        <li><strong>Violencia psicológica: </strong>Se refiere a acciones que causan daño emocional o mental a la víctima, incluyendo amenazas, humillaciones, aislamiento
                            y control de la vida diaria.</li>
                        <li><strong>Violencia sexual:</strong>Incluye cualquier tipo de agresión sexual o coerción, así como el abuso sexual de menores dentro del entorno familiar.</li>
                        <li><strong>Violencia económica:</strong> Implica el control de los recursos económicos de la víctima, restringiendo su acceso a dinero o propiedades y limitando su
                            capacidad de ser independiente.</li>
                    </ul>
                </p>

                <h3>Legislación sobre Violencia Intrafamiliar</h3>
                <p>Las leyes sobre violencia intrafamiliar varían según el país, pero en muchas jurisdicciones, se han implementado legislaciones específicas para abordar este problema.
                    Estas leyes buscan proteger a las víctimas, sancionar a los agresores y proporcionar recursos para la recuperación. Por lo general, las leyes permiten a las víctimas
                    solicitar órdenes de protección, que son medidas legales diseñadas para mantener a los agresores alejados de las víctimas y evitar que tengan contacto con ellas.
                    También se pueden establecer protocolos para la intervención de las autoridades y servicios de apoyo para las víctimas.</p>

                <h3>Recursos y Apoyo para Víctimas de Violencia Intrafamiliar</h3>
                <p>Si usted o alguien que conoce es víctima de violencia intrafamiliar, es fundamental actuar. Aquí hay algunas recomendaciones sobre qué hacer:
                    <ul>
                        <li><strong>Buscar ayuda inmediata: </strong>En situaciones de emergencia, llame a los servicios de emergencia o acuda a un hospital. La salud y la seguridad deben ser la prioridad principal.</li>
                        <li><strong>Contactar a una línea de ayuda:</strong>Existen organizaciones y líneas de ayuda que brindan apoyo y asesoramiento a las víctimas de violencia intrafamiliar. Estas organizaciones
                            pueden ofrecer recursos, refugios y asistencia legal.</li>
                        <li><strong>Hablar con alguien de confianza:</strong>Compartir su situación con amigos, familiares o profesionales puede proporcionar el apoyo emocional necesario para tomar decisiones sobre su futuro.</li>
                        <li><strong>Consultar a un abogado:</strong>Obtener asesoría legal es crucial para entender sus derechos y opciones. Un abogado especializado en violencia intrafamiliar puede ayudar a presentar una orden
                            de protección, iniciar procesos legales y asesorar sobre los pasos a seguir.</li>
                        <li><strong>Documentar la violencia: </strong>Mantener un registro de los incidentes de violencia, incluyendo fechas, detalles de lo sucedido y cualquier evidencia (como fotos de lesiones o mensajes amenazantes),
                            puede ser útil para acciones legales futuras.</li>
                        <li><strong>Buscar refugio: </strong>Si es necesario, considere la posibilidad de abandonar el hogar y buscar refugio en un centro especializado. Estos refugios ofrecen un lugar seguro y, a menudo,
                            brindan servicios adicionales como asesoramiento y apoyo legal.</li>
                    </ul>
                </p>

                <h3>Prevención de la Violencia Intrafamiliar</h3>
                <p>La prevención de la violencia intrafamiliar requiere un enfoque integral que involucre a la comunidad, las autoridades y las organizaciones gubernamentales. La educación y
                    la sensibilización son fundamentales para desmantelar los mitos y estigmas asociados con la violencia. Las campañas de concientización pueden ayudar a identificar señales
                    de alerta y fomentar la denuncia de estos actos. También es esencial promover relaciones sanas y la resolución pacífica de conflictos en el hogar, así como proporcionar
                    recursos educativos sobre la igualdad de género y el respeto mutuo.</p>
                
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
