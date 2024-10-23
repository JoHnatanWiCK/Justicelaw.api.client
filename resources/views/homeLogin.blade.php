@extends('layouts.layoutLogin')

@section('title', 'Home Login')

@section('nav')
@endsection

@section('main')
<section class="banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- Información -->
            <div class="swiper-slide" id="primer-swiper">
                <div class="text">
                    <h3>Conéctate con abogados experimentados y encuentra las respuestas que necesitas.</h3>
                    <p>Accede a una red de abogados especializados listos para ayudarte en cualquier situación legal.</p>
                    <a href="ruta-a-informacion-adicional" class="btn">Leer Más</a>
                </div>
            </div>
            <div class="swiper-slide" id="segundo-swiper">
                <div class="text">
                    <h2>Información Importante</h2>
                    <p>Descubre cómo nuestros servicios pueden apoyarte en situaciones legales urgentes o planificadas.</p>
                    <a href="ruta-a-informacion-adicional" class="btn">Leer Más</a>
                </div>
            </div>
            <!-- Abogado Estrella -->
            <div class="swiper-slide" id="tercer-swiper">
                <div class="text">
                    <h2>Conoce a Nuestro Abogado Estrella</h2>
                    <p>Juan Pérez, con más de 20 años de experiencia en derecho penal y familiar, está aquí para apoyarte.</p>
                    <a href="ruta-a-perfil-abogado" class="btn">Ver Perfil</a>
                </div>
            </div>
            <!-- Información -->
            <div class="swiper-slide" id="cuarto-swiper">
                <div class="text">
                    <h2>Información Importante</h2>
                    <p>Navega por nuestra plataforma para conocer las diversas áreas legales en las que podemos asesorarte.</p>
                    <a href="ruta-a-informacion-adicional" class="btn">Leer Más</a>
                </div>
            </div>
            <div class="swiper-slide" id="quinto-swiper">
                <div class="text">
                    <h3>Conéctate con abogados experimentados y encuentra las respuestas que necesitas.</h3>
                    <p>Contamos con una amplia variedad de abogados que se especializan en diferentes ramas del derecho.</p>
                    <a href="ruta-a-informacion-adicional" class="btn">Leer Más</a>
                </div>
            </div>
            <!-- Tendencias -->
            <div class="swiper-slide" id="trending-items">
                <div class="text">
                    <h2>Tendencias</h2>
                    <h3>Conéctate con abogados experimentados y encuentra las respuestas que necesitas.</h3>
                    <p>Explora las categorías más populares entre nuestros usuarios y las preguntas más frecuentes.</p>
                    <a href="ruta-a-informacion-adicional" class="btn">Ver Más</a>
                </div>
            </div>
        </div>
        <!-- Botones de navegación -->
        <div class="btn-next">
            <img id="prev-thumbnail" src="../img/f-derecha.png" alt="Previous Thumbnail">
        </div>
        <div class="btn-prev">
            <img id="prev-thumbnail" src="../img/f-izquierda.png" alt="Previous Thumbnail">
        </div>
    </div>
</section>


{{-- <section id="tranding">
        <div class="container">
            <div class="swiper tranding-slider">
                <div class="swiper-wrapper">

                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <a><img src="../../img/Divorcio.jpg"
                                    alt="Tranding">
                            </a>
                        </div>

                        <div class="tranding-slide-content">
                            <div class="info">
                                <h3>GUÍA SOBRE DIVORCIO</h3>
                                <hr>
                                <p>La guía sobre divorcio brinda información sobre cómo proceder durante la separación
                                    matrimonial, incluyendo consejos legales y emocionales.</p>
                                <button id="btnDivorcio">Más información...</button>
                            </div>

                        </div>
                    </div>

                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <a><img src="../../img/Despido.jpg"
                                    alt="Tranding">
                            </a>
                        </div>
                        <div class="tranding-slide-content">
                            <div class="info">
                                <h3>REDACTAR UNA CARTA DE DESPIDO</h3>
                                <hr>
                                <p>Descubre los pasos clave para redactar una carta de despido correctamente. Te explicamos
                                    cómo estructurarla, qué detalles legales incluir y cómo manejar esta situación de forma
                                    profesional y clara.</p>
                                <button id="btnDespido">Más información...</button>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <a><img src="../../img/Accidente.png"
                                    alt="Tranding">
                            </a>
                        </div>
                        <div class="tranding-slide-content">
                            <div class="info">
                                <h3>GUÍA PARA ACCIDENTES DE TRÁFICO</h3>
                                <hr>
                                <p>Descubre los pasos clave para manejar un accidente de tráfico, desde la documentación
                                    hasta las acciones legales necesarias.</p>
                                <button id="btnAccidente">Más información...</button>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <a><img src="../../img/Testamento.jpg"
                                    alt="Tranding">
                            </a>
                        </div>
                        <div class="tranding-slide-content">
                            <div class="info">
                                <h3>COMO REDACTAR UN TESTAMENTO</h3>
                                <hr>
                                <p>Aprende a estructurar y redactar un testamento de forma clara y legalmente válida,
                                    asegurando que tus deseos sean respetados y evitando futuros conflictos familiares.</p>
                                <button id="btnTestamento">Más información...</button>
                            </div>

                        </div>
                    </div>

                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <a><img src="../../img/DerechosConsumidor.jpg"
                                    alt="Tranding">
                            </a>
                        </div>
                        <div class="tranding-slide-content">
                            <div class="info">
                                <h3>DERECHOS DEL CONSUMIDOR</h3>
                                <hr>
                                <p>Infórmate sobre tus derechos como consumidor y cómo defenderte en situaciones de compra y
                                    servicio, desde garantías y devoluciones hasta reclamaciones efectivas contra productos
                                    defectuosos.</p>
                                <button id="btnConsumidor">Más información...</button>
                            </div>

                        </div>
                    </div>

                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <a><img src="../../img/PensionAliemnticia.jpg"
                                    alt="Tranding">
                            </a>
                        </div>
                        <div class="tranding-slide-content">
                            <div class="info">
                                <h3>PENSIÓN ALIMENTICIA</h3>
                                <hr>
                                <p>Entiende los aspectos esenciales de la pensión alimenticia, incluyendo cómo solicitarla,
                                    cómo se calcula y cómo administrarla correctamente para asegurar el bienestar de los
                                    dependientes.</p>
                                <button id="btnAlimenticia">Más información...</button>
                            </div>

                        </div>
                    </div>

                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <a><img src="../../img/Arrendamiento.jpg"
                                    alt="Tranding">
                            </a>
                        </div>
                        <div class="tranding-slide-content">
                            <div class="info">
                                <h3>PROBLEMAS DE ARRENDAMIENTO</h3>
                                <hr>
                                <p>Conoce tus derechos y cómo resolver conflictos comunes en el arrendamiento, incluyendo
                                    problemas con el contrato, el mantenimiento del inmueble y la protección legal del
                                    inquilino.</p>
                                <button id="btnArrendamiento">Más información...</button>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <a><img src="../../img/IniciarNegocio.jpg"
                                    alt="Tranding">
                            </a>
                        </div>
                        <div class="tranding-slide-content">
                            <div class="info">
                                <h3>INICIAR UN NEGOCIO LEGALMENTE</h3>
                                <hr>
                                <p>Explora los requisitos y aspectos legales necesarios para establecer y operar un nuevo
                                    negocio, desde la constitución legal hasta el cumplimiento de normativas y licencias.
                                </p>
                                <button id="btnNegocio">Más información...</button>
                            </div>

                        </div>
                    </div>

                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <a><img
                                    src="../../img/DerechosTrabajadores.jpg" alt="Tranding">
                            </a>
                        </div>
                        <div class="tranding-slide-content">
                            <div class="info">
                                <h3>DERECHOS LABORALES</h3>
                                <hr>
                                <p>Infórmate sobre tus derechos como trabajador, incluyendo condiciones laborales, salarios,
                                    seguridad en el trabajo y cómo actuar en caso de conflictos con el empleador para
                                    proteger tus intereses.</p>
                                <button id="btnLaboral">Más información...</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
                <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
                <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
        </div>

        </div>
        </div>
    </section> --}}


   

    <section class="informacion">
        <div class="content-informacion">
            <img src="../../img/homeTres.png" alt="">
            <div class="text-content">
                <h1>¿Que hacemos?</h1>
                <p>Principalmente facilitamos el acceso a la información <br>
                    referente a la rama judicial y a través de un foro <br>
                    buscamos aclarar las dudas y necesidades de nuestros <br>
                    usuarios en sus procesos legales. Como segundo punto <br>
                    ofrecemos el servicio de accesorias con el objetivo de <br>
                    que los abogados registrados obtengan una experiencia <br>
                    empirica y un ingreso extra a travez de nuestra web</p>
            </div>
        </div>
    </section>
@endsection


@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-5YSOQ5KtZq2j9Vc1lYZn3vZ0rUubXsg9F9Z9RkVoThSKg/B0J9cuC0Rf5Gp6ueIa" crossorigin="anonymous">

@endpush

@push('scripts')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/home.js"></script>
    <script src="js/forocarousel.js"></script>
@endpush
