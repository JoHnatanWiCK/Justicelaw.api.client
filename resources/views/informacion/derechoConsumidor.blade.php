
@extends('layouts.layoutLogin')

@section('title', 'Informacion')

@section('nav')
@endsection

@section('main')

      <div class="container">
        <div class="news-column">
          <h2 class="titulo-informacion">Derechos de un consumidor</h2>
          <span>14 agosto 2024</span>
          <span class="categoria">Categoria: Publico</span>

          <div class="informacion-contenido">
            <img
              src="../../img/DerechosConsumidor.jpg"
              alt="Derechos de consumidor"
              class="imagen-arriba-derecha"
            />

            <p>
                Conocer los derechos del consumidor es esencial para garantizar que las compras y servicios que adquieres se realicen de manera justa, transparente y segura.
                Estos derechos protegen al consumidor de prácticas comerciales desleales, productos defectuosos y publicidad engañosa. Al estar bien informado sobre tus derechos,
                puedes tomar decisiones de compra con mayor confianza, exigir reparaciones o reembolsos cuando sea necesario y, en general, asegurar que recibes el valor justo por tu
                dinero. Además, un conocimiento sólido de los derechos del consumidor fomenta un mercado más equilibrado y competitivo, donde las empresas son incentivadas a ofrecer
                productos y servicios de calidad, respetando las normas establecidas. En definitiva, entender y ejercer tus derechos como consumidor te empodera para proteger tus intereses
                 y contribuir a un mercado más justo y equitativo.

            <h3>Conocimientos necesarios <s></s>obre tus derechos</h3>

            <p>

             <li>Derecho a la Información: Tienes derecho a recibir información clara, veraz y completa sobre los productos o servicios que adquieres. Esto incluye detalles sobre
              el precio, características, garantías, y cualquier condición especial que pueda aplicar.
             </li>
             <li>Derecho a la Protección contra Publicidad Engañosa: Es crucial saber que estás protegido contra prácticas de publicidad falsa o engañosa.
               Las empresas deben presentar sus productos de manera honesta, sin exagerar beneficios ni ocultar riesgos.

             </li>
             <li>Derecho a la Seguridad y Calidad: Los productos y servicios que consumes deben cumplir con estándares de seguridad y calidad. Tienes derecho a recibir bienes
              que sean seguros para su uso y que funcionen como se espera.</li>
             <li>Derecho a la Garantía: Conoce tus derechos sobre las garantías de productos y servicios. Esto incluye el derecho a reparación, reemplazo o
              reembolso si un producto o servicio no cumple con lo prometido o presenta defectos.
             </li>
             <li>Derecho a la Protección de tus Datos: Estás protegido contra el uso indebido de tu información personal. Las empresas deben manejar tus datos de manera
              segura y solo para los fines que tú has autorizado.</li>
             <li>Derecho a Reclamar y Obtener Reparaciones: Tienes derecho a presentar quejas y reclamar si un producto o servicio no cumple con las expectativas o condiciones
              establecidas. Además, tienes derecho a obtener compensaciones justas, ya sea mediante reembolsos, reparaciones o indemnizaciones.</li>
             <li>Derecho a la Protección contra Cláusulas Abusivas: Los contratos de consumo no deben incluir cláusulas que perjudiquen injustamente tus derechos como consumidor.
              Tienes derecho a exigir que cualquier cláusula abusiva sea eliminada o modificada.Derecho a la Protección contra Cláusulas Abusivas: Los contratos de consumo no deben
              incluir cláusulas que perjudiquen injustamente tus derechos como consumidor. Tienes derecho a exigir que cualquier cláusula abusiva sea eliminada o modificada.</li>
            </p>

            <h3>Cual es lo mas importante de conocer tus derechos</h3>
            <p>
                Lo más importante de conocer tus derechos como consumidor es que te empodera para tomar decisiones informadas y protegerte contra prácticas
                comerciales injustas o engañosas. Al estar al tanto de tus derechos, puedes exigir productos y servicios de calidad, evitar fraudes, y buscar
                compensación si algo sale mal con tu compra. Además, conocer tus derechos te permite actuar con confianza en el mercado, sabiendo que tienes el
                respaldo de la ley para defenderte en caso de ser necesario. Esto no solo protege tus intereses, sino que también contribuye a mantener un mercado
                más justo y equilibrado, donde los consumidores pueden confiar en las transacciones que realizan.
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
                <a href="#">
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

                <a href="#">
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
                <a href="#">
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
                <a href="#">
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
                <a href="#">
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
                <a href="#">
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
