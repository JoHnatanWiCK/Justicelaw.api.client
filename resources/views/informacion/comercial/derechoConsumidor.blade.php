
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

            <h3>Conocimientos necesarios sobre tus derechos</h3>

            <p>
              <ul>
                <strong>Derecho a la Protección de la Salud y Seguridad</strong>
                <p>Este derecho garantiza que los consumidores tengan acceso a productos y servicios que no representen un riesgo para
                  su salud o seguridad. Esto incluye la obligación de los productores y vendedores de cumplir con estándares de calidad y
                  seguridad, así como de proporcionar información clara sobre cualquier riesgo potencial asociado con un producto. En caso de
                  que un producto represente un peligro, las autoridades tienen la responsabilidad de retirar dicho producto del mercado y
                  notificar a los consumidores.</p>

                <strong>Derecho a la Información</strong>
                <p>Los consumidores tienen el derecho a recibir información clara, veraz y completa sobre los productos y servicios que desean adquirir. Esto incluye detalles sobre el precio,
                    características, uso, y cualquier otro dato relevante que pueda influir en la decisión de compra. La publicidad y las promociones deben ser precisas y no engañosas, y
                    los consumidores deben ser advertidos sobre cualquier restricción o condición asociada al uso de un producto o servicio.</p>

                <strong>Derecho a la Elección</strong>
                <p>Los consumidores tienen derecho a elegir entre una variedad de productos y servicios en el mercado. Este derecho fomenta
                  la competencia y garantiza que los consumidores puedan acceder a opciones que se ajusten a sus necesidades y preferencias.
                  La existencia de un mercado competitivo es esencial para mantener precios razonables y calidad en los bienes y servicios.</p>

                <strong>Derecho a ser Escuchado</strong>
                <p>Los consumidores tienen derecho a expresar sus quejas y preocupaciones sobre productos o servicios, y deben ser escuchados por las empresas
                    y autoridades competentes. Este derecho implica que las empresas deben tener mecanismos adecuados para recibir y gestionar las reclamaciones
                    de los consumidores. Además, las autoridades deben tomar en cuenta las opiniones de los consumidores al desarrollar políticas y regulaciones
                    que afecten el mercado.</p>

                <strong>Derecho a la Educación y a la Información sobre Consumo</strong>
                <p>Los consumidores tienen derecho a recibir educación y formación sobre sus derechos y responsabilidades. Esto incluye información sobre cómo
                  hacer compras informadas, cómo utilizar los productos de manera segura, y cómo presentar quejas o reclamaciones. La educación del consumidor
                  es esencial para empoderar a los individuos y fomentar un comportamiento de compra responsable.</p>

                <strong>Derecho a la Privacidad y a la Protección de Datos</strong>
                <p>Con el crecimiento del comercio electrónico y el uso de datos personales, los consumidores tienen derecho a la privacidad y a la protección de
                  sus datos. Las empresas deben ser transparentes sobre cómo recopilan, utilizan y protegen la información personal de los consumidores. Además,
                  los consumidores deben tener la opción de acceder a sus datos, corregir errores y, en ciertos casos, optar por la eliminación de su información
                  personal.</p>
              </ul>
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
