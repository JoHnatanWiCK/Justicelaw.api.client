@extends('layouts.layoutLogin')

@section('title', 'Home Login')

@section('nav')
@endsection

@section('main')
<section class="banner">
    <div class="content-banner">
        <h3>Conéctate con abogados experimentados y encuentra las respuestas que necesitas.</h3>
        <p>Nuestro objetivo es brindar asesoría legal accesible y de calidad, ayudando a usuarios a navegar el sistema legal con confianza.</p>
    </div>
</section>
<section class="servicios">
    <h3>Nuestros servicios</h3>
    <p>Explora nuestra amplia gama de servicios legales diseñados para satisfacer tus necesidades.</p>
    <div class="contenedor-tarjetas">
        <div class="tarjeta">
            <i class="fa-solid fa-gavel"></i>
            <h5>Consulta Legal Personalizada</h5>
            <p>Recibe asesoría adaptada a tu situación legal específica.</p>
        </div>
        <div class="tarjeta">
            <i class="fa-solid fa-scale-balanced"></i>
            <h5>Representación Legal</h5>
            <p>Defiende tus derechos con representación de un abogado profesional.</p>
        </div>
        <div class="tarjeta">
            <i class="fa-solid fa-info"></i>
            <h5>Acceso a Información Legal</h5>
            <p>Obtén información relevante sobre derechos, leyes y procedimientos legales.</p>
        </div>
        <div class="tarjeta">
            <i class="fa-solid fa-user-tie"></i>
            <h5>Foro de Discusión</h5>
            <p>Plataforma para compartir experiencias y hacer preguntas sobre temas legales.</p>
        </div>
    </div>
</section>

<section class="carrusel">
    <div class="card-container">
        <div class="card">
            <img src="../../img/Divorcio.jpg" alt="Noticia 1">
            <h4 class="card-title">GUÍA SOBRE  <br> DIVORCIO</h4>
            <p class="card-description">La guía sobre divorcio brinda información sobre cómo proceder durante la separación
                matrimonial, incluyendo consejos legales y emocionales.</p>
        </div>
        <div class="card">
            <img src="../../img/Despido.jpg" alt="Noticia 2">
            <h4 class="card-title">REDACTAR UNA CARTA DE DESPIDO</h4>
            <p class="card-description">Descubre los pasos clave para redactar una carta de despido correctamente. Te explicamos
                cómo estructurarla, qué detalles legales incluir y cómo manejar esta situación de forma
                profesional y clara.</p>
        </div>
        <div class="card">
            <img src="../../img/Accidente.png" alt="Noticia 3">
            <h4 class="card-title">GUÍA PARA ACCIDENTES DE TRÁFICO</h4>
            <p class="card-description">Descubre los pasos clave para manejar un accidente de tráfico, desde la documentación
                hasta las acciones legales necesarias.</p>
        </div>
        <div class="card">
            <img src="../../img/Testamento.jpg" alt="Noticia 2">
            <h4 class="card-title">COMO REDACTAR UN TESTAMENTO</h4>
            <p class="card-description">Aprende a estructurar y redactar un testamento de forma clara y legalmente válida,
                asegurando que tus deseos sean respetados y evitando futuros conflictos familiares.</p>
        </div>
    </div>
</section>


    <section id="tranding">
        <div class="container">
            <div class="swiper tranding-slider">
                <div class="swiper-wrapper">

                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <a href="../Information/informacion_divorcio.html"><img src="../../img/Divorcio.jpg"
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
                            <a href="../Information/informacion_despido.html"><img src="../../img/Despido.jpg"
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
                                <button id="btnDespido"> Más información...</button>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <a href="../Information/informacion_accidente.html"><img src="../../img/Accidente.png"
                                    alt="Tranding">
                            </a>
                        </div>
                        <div class="tranding-slide-content">
                            <div class="info">
                                <h3>GUÍA PARA ACCIDENTES DE TRÁFICO</h3>
                                <hr>
                                <p>Descubre los pasos clave para manejar un accidente de tráfico, desde la documentación
                                    hasta las acciones legales necesarias.</p>
                                <button  id="btnAccidente">Más información...</button>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <a href="../Information/informacion_testamento.html"><img src="../../img/Testamento.jpg"
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
                            <a href="../Information/derecho_consumidor.html"><img src="../../img/DerechosConsumidor.jpg"
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
                            <a href="../Information/informacion_pension.html"><img src="../../img/PensionAliemnticia.jpg"
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
                            <a href="../Information/informacion_arrendamiento.html"><img src="../../img/Arrendamiento.jpg"
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
                            <a href="../Information/informacion_negocio.html"><img src="../../img/IniciarNegocio.jpg"
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
                            <a href="../Information/derechos_trabajadores.html"><img
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
    </section>

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
@endpush

@push('scripts')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/home.js"></script>
@endpush
