

@extends('layouts.layoutLogin')

@section('title', 'Informacion')

@section('nav')
@endsection

@section('main')

      <div class="container">
        <div class="news-column">
          <h2 class="titulo-informacion">Derechos de un trabajador</h2>
          <span>14 agosto 2024</span>
          <span class="categoria">Categoria: laboral y de empleo</span>

          <div class="informacion-contenido">
            <img
              src="../../img/DerechosTrabajadores.jpg"
              alt="Derechos de Trabajadores"
              class="imagen-arriba-derecha"
            />

            <p>
                Conocer los derechos del trabajador es fundamental para garantizar un entorno laboral justo y equitativo. Estos derechos no solo protegen al empleado de prácticas laborales injustas, sino que también promueven un ambiente de trabajo saludable y respetuoso. Al estar informado sobre sus derechos, el trabajador puede exigir condiciones laborales adecuadas, asegurar un trato equitativo, y defenderse en casos de despido injusto o discriminación. Además, un conocimiento sólido de los derechos laborales contribuye a prevenir abusos y conflictos, fomenta una mayor satisfacción en el trabajo, y fortalece la relación entre empleadores y empleados. En resumen, comprender y ejercer los derechos laborales es esencial para mantener el equilibrio y la justicia en el ámbito laboral, promoviendo un entorno de trabajo más productivo y armonioso.
            </p>

            <h3>Conocimientos necesarios sobre tus derechos</h3>

            <p>

             <li>Derechos Contractuales: Conoce los términos y condiciones de tu contrato de trabajo, incluyendo salario, horario laboral, y responsabilidades. Esto te permitirá saber qué esperar y qué exigir en caso de incumplimiento.
             </li>
             <li>Salario y Compensación: Familiarízate con las leyes relacionadas con el salario mínimo, horas extras, y pago de vacaciones. Asegúrate de recibir el salario acordado y las compensaciones correspondientes por horas adicionales trabajadas.

             </li>
             <li>Seguridad y Salud Laboral: Infórmate sobre tus derechos en cuanto a un ambiente de trabajo seguro y saludable. Esto incluye el derecho a reportar condiciones peligrosas sin temor a represalias y a recibir equipo de protección adecuado.</li>
             <li>Derechos de Protección: Conoce tus derechos en cuanto a protección contra la discriminación y el acoso laboral. Esto incluye el derecho a trabajar sin ser víctima de trato desigual por razones de raza, género, religión, orientación sexual, o cualquier otra característica protegida por la ley.
             </li>
             <li>Despido y Terminación: Entiende el proceso y los derechos relacionados con el despido, incluyendo el derecho a una notificación adecuada, la compensación por despido injusto, y la posibilidad de apelar la decisión si crees que fue injusta.</li>
             <li>Beneficios y Prestaciones: Infórmate sobre los beneficios a los que tienes derecho, como seguro de salud, jubilación, y otras prestaciones ofrecidas por tu empleador. Asegúrate de recibir todos los beneficios que te corresponden.</li>
             <li>Derecho a la Privacidad: Conoce tus derechos en cuanto a la privacidad en el lugar de trabajo, incluyendo la protección de tus datos personales y la limitación de la vigilancia invasiva por parte del empleador.</li>
            </p>

            <h3>que es lo mas importante de conocer tus derechos</h3>
            <p>
                Lo más importante de conocer tus derechos es que te brinda el poder y la confianza para protegerte y defenderte en el ámbito laboral. Al estar informado sobre tus derechos, puedes asegurarte de que se te trate de manera justa y equitativa, evitar abusos y prácticas injustas, y tomar acciones correctivas si es necesario. Además, el conocimiento de tus derechos te permite exigir condiciones de trabajo seguras, una compensación justa, y un trato respetuoso, lo que contribuye a tu bienestar y satisfacción en el trabajo. En resumen, conocer tus derechos es esencial para garantizar que puedas trabajar en un entorno que respete tu dignidad y te permita desarrollarte profesionalmente sin temor a represalias o discriminación.
            </p>
            </ol>
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
