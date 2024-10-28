
@extends('layouts.layoutLogin')

@section('title', 'Informacion')

@section('nav')
@endsection

@section('main')

      <div class="container">
        <div class="news-column">
          <h2 class="titulo-informacion">Seguridad Social</h2>
          <span>14 agosto 2024</span>
          <span class="categoria">Categoria: Laboral y de Empleo</span>

          <div class="informacion-contenido">
            <img
              src="../../img/seguridadSocial.jpg"
              alt="seguridadSocial"
              class="imagen-arriba-derecha"
            />
            <p>
                El Derecho de la Seguridad Social es una rama del derecho público que se encarga
                de regular la protección social de los trabajadores y sus familias frente a ciertos
                riesgos que afectan su estabilidad económica y social. Estos riesgos incluyen enfermedades,
                accidentes, desempleo, maternidad, invalidez, vejez y muerte. En esencia, la Seguridad Social
                garantiza que las personas puedan contar con prestaciones que les aseguren un nivel de vida
                digno cuando no puedan trabajar o se encuentren en situaciones de vulnerabilidad.
            </p>

            <h3>Consepto y Objetivo</h3>

            <p>
                El Derecho de la Seguridad Social se centra en la protección integral del trabajador
                y sus beneficiarios, proporcionando asistencia económica y acceso a servicios de salud
                en determinadas situaciones. Su objetivo es promover el bienestar general y prevenir que
                las personas caigan en la pobreza debido a contingencias laborales o personales.

                La Seguridad Social también busca redistribuir la riqueza, pues su financiamiento
                se basa en un sistema de contribuciones donde las personas en actividad laboral
                contribuyen para sostener a aquellos que no pueden trabajar, ya sea temporal o
                permanentemente.

                <h3>Principios Fundamentales</h3>
                <p>El Derecho de la Seguridad Social se basa en varios principios clave:

                    <li><strong>Universalidad: </strong> Toda persona tiene derecho a acceder al sistema de Seguridad Social, sin importar su
                         situación laboral.</li>
                         <br>
                    <li><strong>Solidaridad: </strong>Los recursos para financiar el sistema provienen de contribuciones obligatorias de
                        trabajadores y empleadores, basándose en la idea de que los más capaces de contribuir ayudan a
                        quienes lo necesitan.</li>
                        <br>
                        <li><strong>Igualdad: </strong>Todos los asegurados deben recibir el mismo trato en cuanto al acceso y calidad de las
                            prestaciones.</li>
                            <br>
                        <li><strong>Suficiencia: </strong>Las prestaciones deben ser adecuadas para cubrir las necesidades básicas del beneficiario.</li>
                        <br>
                        <li><strong>Responsabilidad Estatal: </strong> El Estado garantiza y supervisa el adecuado funcionamiento del sistema de Seguridad Social.</li>
                </p>

            <h3>Cobertura y Beneficiarios</h3>
            <p>
                El sistema de Seguridad Social está diseñado para cubrir una serie de riesgos o contingencias que afectan la capacidad de las personas para generar ingresos.
                Los principales riesgos cubiertos son:
                <li><strong>Enfermedad: </strong>Prestaciones médicas y económicas en caso de incapacidad temporal o permanente derivada de una enfermedad común.</li>
                <br>
                <li><strong>Maternidad: </strong>Protección económica y médica a la trabajadora durante el embarazo, parto y posparto.</li>
                <br>
                <li><strong>Invalidez: </strong>Protección en caso de que el trabajador sufra una incapacidad física o mental que le impida continuar trabajando.</li>
                <br>
                <li><strong>Vejez: </strong>Prestaciones que aseguran una pensión durante la jubilación, una vez que el trabajador cumple con los requisitos de edad y contribuciones.</li>
                <br>
                <li><strong>Accidentes de Trabajo y Enfermedades Profesionales: </strong>Asistencia médica y económica para quienes sufren accidentes o desarrollan enfermedades derivadas de su actividad laboral.</li>
                <br>
                <li><strong>Desempleo: </strong>Subsidios o ayudas para personas que han perdido su empleo involuntariamente y cumplen con los requisitos establecidos.</li>
                <br>
                <li><strong>Muerte: </strong>Prestaciones a favor de los familiares o dependientes del trabajador fallecido.</li>
                <br>
                Los beneficiarios de estas prestaciones incluyen no solo al trabajador asegurado, sino también a sus familiares directos (cónyuge, hijos, dependientes), quienes pueden recibir cobertura médica,
                pensiones o subsidios en caso de muerte del titular o en otras circunstancias.
            </p>

            <h3>Financiamiento de la Seguridad Social</h3>
            <p>
                El sistema de Seguridad Social se financia a través de contribuciones obligatorias que recaen
                sobre los trabajadores y empleadores. Estas contribuciones se realizan mediante deducciones
                salariales y pagos patronales que son administrados por las entidades de Seguridad Social del Estado.
                <br>
                En muchos países, el sistema puede complementarse con fondos estatales, especialmente para
                cubrir déficits o financiar programas especiales de asistencia social para personas que no
                tienen capacidad contributiva (como los desempleados de larga duración, ancianos sin pensiones, etc.).
            </p>
    
            <h3>Prestaciones del Sistema de Seguridad Social</h3>
            <p>Las prestaciones proporcionadas por el sistema de Seguridad Social pueden ser de dos tipos:
                en especie y en dinero.
            <li><strong>Prestaciones en especie: </strong>Estas incluyen la atención médica, los tratamientos, medicamentos, hospitalizaciones y cualquier
                otro servicio relacionado con la salud.</li>
                <br>
                <li><strong>Prestaciones en dinero: </strong>Son pagos directos que el beneficiario recibe, como pensiones, subsidios por desempleo, incapacidad
                    temporal o permanente, subsidios por maternidad, entre otros.</li>

            </p>
              <strong>Ejemplos de prestaciones económicas:</strong>
              <p>
              <li><strong>Pensiones por jubilación: </strong>Un ingreso mensual vitalicio para el trabajador retirado que ha alcanzado la edad de jubilación.</li>
              <br>
              <li><strong>Incapacidad temporal: </strong>Pago de un porcentaje del salario mientras el trabajador está incapacitado por una enfermedad o accidente no laboral.</li>
              <br>
              <li><strong>Seguro de desempleo: </strong>Pago periódico mientras la persona busca un nuevo empleo.</li>

            </p>
              <strong>Ejemplos de prestaciones en especie:</strong>
              <p>
              <li><strong>Atención médica gratuita: </strong>Servicios de salud para los asegurados y sus dependientes, que incluye desde consultas médicas hasta cirugías complejas.</li>
              <br>
              <li><strong>Rehabilitación laboral: </strong>Servicios destinados a la reincorporación de los trabajadores accidentados o con discapacidad.</li>
            </p>
             
                <h3>Administración del Sistema de Seguridad Social</h3>
                <p>Los sistemas de Seguridad Social pueden ser administrados por entidades públicas o privadas bajo supervisión estatal. En la mayoría de los países,
                    el Estado juega un papel fundamental como garante del sistema, aunque algunas funciones pueden ser delegadas a instituciones especializadas o
                    aseguradoras privadas bajo regulación estricta.</p>
                    
                    <li><strong>Institutos de Seguridad Social: </strong> Son las entidades públicas encargadas de gestionar las contribuciones y pagar las prestaciones.</li>
                    <li><strong>Aseguradoras privadas: </strong> En algunos sistemas, las aseguradoras privadas participan ofreciendo planes complementarios o administrando fondos de pensiones bajo control estatal.</li>
                       
                    <h3>Evolución y Desafíos del Sistema de Seguridad Social</h3>
                    <p>A lo largo del tiempo, los sistemas de Seguridad Social han evolucionado para adaptarse a los cambios demográficos, económicos y sociales. Sin embargo, también enfrentan
                        desafíos importantes, como el envejecimiento de la población, el empleo informal y la necesidad de reformas para garantizar la sostenibilidad financiera a largo plazo.</p>
                        <p>
                        <strong>Desafíos actuales:</strong>
                       <li><strong>Sostenibilidad financiera: </strong>El envejecimiento de la población y la baja tasa de natalidad en muchos países ponen presión sobre los sistemas de pensiones.</li>
                       <br>
                       <li><strong>Cobertura insuficiente: </strong> países con alta informalidad laboral, muchas personas quedan excluidas del sistema de Seguridad Social, lo que agrava 
                        la pobreza y la desigualdad.</li>
                        <br>
                        <li><strong>Reformas necesarias: </strong> muchos países, los sistemas de pensiones y de seguridad social requieren reformas para garantizar su viabilidad y equidad en el futuro.</li>
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
                  <a href="/informacionTestamento">
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
                <a href="/informacionPension">
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
                <a href="/informacionConsumidor">
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
                <a href="/informacionAccidente">
                    <li class="article">
                      <img
                        src="../../img/AccidenteTrafico.jpeg"
                        alt="Artículo 1"
                      />
                      <div class="article-content">
                        <div class="article-title">
                          Guía después de un accidente de tráfico
                        </div>
                        <p class="article-description">
                          Qué hacer inmediatamente después de verse involucrado en
                          un accidente de tráfico y cómo buscar ayuda legal si es
                          necesario.
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
