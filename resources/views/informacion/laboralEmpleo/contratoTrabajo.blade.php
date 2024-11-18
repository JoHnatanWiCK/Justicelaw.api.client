

@extends('layouts.layoutLogin')

@section('title', 'Informacion')

@section('nav')
@endsection

@section('main')
      <div class="container">
        <div class="news-column">
          <h2 class="titulo-informacion">Contratos de trabajo</h2>
          <span>14 agosto 2024</span>
          <span class="categoria">Categoria: Laboral y de empleo</span>

          <div class="informacion-contenido">
            <img
              src="../../img/contrato.jpg"
              alt="tutela"
              class="imagen-arriba-derecha"
            />

            <p>
                Los contratos de trabajo son acuerdos legales que establecen las condiciones
                bajo las cuales una persona (trabajador) se compromete a prestar sus servicios
                a otra persona o entidad (empleador), a cambio de una remuneración. Estos contratos
                formalizan la relación laboral y determinan los derechos y obligaciones de ambas partes.
                En la mayoría de los países, los contratos de trabajo están regulados por leyes laborales,
                que establecen las condiciones mínimas que deben cumplir para ser válidos.
            </p>

            <h3>Tipos de Contratos de Trabajo</h3>

            <p>
                Existen diferentes tipos de contratos de trabajo, dependiendo de la naturaleza y duración del vínculo laboral.
                A continuación, se describen los más comunes:
            </p>
                <ul>
                    <li><strong>Contrato de trabajo indefinido:</strong> Es el tipo más habitual y no tiene una fecha de
                        finalización específica. Se considera que la relación laboral durará mientras ninguna de las partes
                        decida finalizarla, ya sea por renuncia, despido justificado o mutuo acuerdo. Este tipo de contrato
                        suele ofrecer mayor estabilidad al trabajador, ya que le otorga derechos como la indemnización por despido,
                        preaviso, entre otros, en caso de que el empleador decida poner fin a la relación laboral.</li>
                    <li><strong>Contrato de trabajo temporal: </strong>Este contrato establece una duración limitada para la relación laboral,
                        que puede estar vinculada a una fecha específica o a la conclusión de una tarea o proyecto concreto. Los contratos
                        temporales se utilizan en situaciones donde la empresa necesita cubrir una necesidad laboral por un tiempo determinado,
                        como por ejemplo en reemplazos de empleados en licencia, trabajos estacionales o proyectos con fecha de finalización.
                        En muchos países, la legislación limita la duración máxima de estos contratos para evitar abusos.</li>
                    <li><strong>Contrato a tiempo parcial: </strong>Este tipo de contrato se caracteriza por establecer una jornada laboral más reducida en
                        comparación con la jornada completa. Los trabajadores a tiempo parcial suelen tener los mismos derechos que los de jornada completa,
                        aunque algunas prestaciones y beneficios pueden calcularse de manera proporcional al tiempo trabajado. Este contrato es habitual en sectores
                        como el comercio, la hostelería o la educación.</li>
                    <li><strong>Contrato por obra o servicio:</strong>Este contrato se utiliza cuando la relación laboral está vinculada a la realización de una obra o
                        proyecto concreto. Termina automáticamente cuando la obra o servicio ha concluido. Es común en sectores como la construcción, el cine, o la tecnología,
                        donde se requiere personal para tareas puntuales. En algunos países, este tipo de contrato está regulado para evitar que sea utilizado de
                        manera indefinida.</li>
                    <li><strong>Contrato de aprendizaje o formación:</strong>Este contrato está diseñado para que el trabajador combine su trabajo con la formación,
                        con el objetivo de adquirir experiencia y conocimientos en un área determinada. Suele aplicarse a jóvenes o personas en proceso de cualificación
                        profesional. La remuneración puede ser más baja que en otros tipos de contrato, pero el trabajador tiene derecho a recibir formación y, al finalizar
                        el contrato, en algunos casos puede tener la opción de ser contratado de manera indefinida.</li>
                        <li><strong>Contrato en prácticas:</strong>Se establece para personas que han finalizado estudios y buscan adquirir experiencia en su campo profesional.
                            Estos contratos tienen una duración limitada y suelen ofrecer condiciones especiales para fomentar la contratación de recién graduados. La remuneración
                            suele ser inferior a la de un trabajador con experiencia, pero se garantiza la posibilidad de aprender y formarse en el puesto de trabajo.</li>
                </ul>

            <h3>Contenido de los Contratos de Trabajo</h3>
            <p>
                Los contratos de trabajo deben cumplir con ciertos requisitos esenciales para ser válidos. Aunque los detalles pueden variar según la legislación
                de cada país, existen algunos elementos básicos que deben estar presentes. Primero, es esencial que se identifiquen claramente las partes,
                especificando el nombre y datos del empleador y del trabajador. En algunos casos, también se menciona el sector o actividad de la empresa.
                <br><br>
                Es necesario incluir una descripción detallada del trabajo o puesto que desempeñará el trabajador.
                En esta sección se deben detallar las tareas principales y las responsabilidades asociadas. Además,
                si el contrato es temporal, debe indicarse la duración específica. En el caso de un contrato indefinido, basta
                con mencionar que no tiene una fecha de finalización.
                <br><br>
                Otro aspecto clave es la jornada laboral, donde se especifica el número de horas que el trabajador debe cumplir diariamente,
                semanalmente o mensualmente. Esto incluye tanto el horario de entrada y salida como la posibilidad de realizar horas extras,
                si aplica.
                <br><br>
                La remuneración también es un elemento fundamental. Aquí se debe detallar el salario que recibirá el trabajador, junto con la periodicidad
                de los pagos, ya sea semanal, quincenal o mensual. También es importante incluir cualquier otro beneficio económico, como bonificaciones o
                pagos adicionales.
                <br><br>
                El lugar de trabajo debe ser indicado claramente, ya sea un lugar físico o diferentes ubicaciones si el trabajo lo requiere. En caso de teletrabajo o
                trabajo remoto, esta situación también debe reflejarse en el contrato.
                <br><br>
                En algunos casos, los contratos incluyen un período de prueba, que permite a ambas partes rescindir el contrato sin mayores complicaciones
                si alguna de ellas no está conforme. Este período suele ser más corto que la duración completa del contrato y está regulado por la ley.
                <br><br>
                Es importante detallar los días de vacaciones y descansos a los que el trabajador tiene derecho, siguiendo la legislación vigente.
                También se deben establecer las causas de terminación del contrato, que pueden estar reguladas por la ley o acordarse mutuamente.
                Estas causas suelen incluir situaciones como el incumplimiento de las obligaciones o la llegada del fin del contrato en caso de
                trabajos temporales.
                <br><br>
                Por último, pueden incluirse cláusulas adicionales en el contrato, como la confidencialidad, la prohibición de competencia una vez
                finalizado el contrato o la exclusividad del trabajador durante el tiempo de vigencia del acuerdo.
            </p>

            <h3>Modificación y Extinción de los Contratos de Trabajo</h3>

            <p>
                Los contratos de trabajo pueden ser modificados durante su vigencia si ambas partes están de acuerdo y si el cambio respeta las
                normativas laborales. Estas modificaciones suelen afectar aspectos como el salario, la jornada laboral o las funciones del trabajador.
                Es importante que cualquier modificación quede por escrito y sea firmada por ambas partes para que tenga validez.
                <br><br>
                La extinción de un contrato puede darse por diferentes razones. En algunos casos, ambas partes deciden finalizar la relación laboral por
                mutuo acuerdo, sin necesidad de intervención judicial. También puede ocurrir cuando se cumple el término o condición del contrato,
                especialmente en trabajos temporales o por obra.
                <br><br>
                El despido es otra forma de extinción, en la cual el empleador decide finalizar el contrato, ya sea por razones justificadas o injustificadas.
                Dependiendo de la legislación, puede requerirse una indemnización. En otros casos, es el trabajador quien decide poner fin a la relación laboral
                mediante su renuncia.
                <br><br>
                Finalmente, el fallecimiento del trabajador o su incapacidad total también extinguen la relación laboral de manera automática.e seguros.
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
                        </div
                         class="article-description">
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
