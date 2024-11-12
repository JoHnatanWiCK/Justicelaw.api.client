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


<div id="container">
    <div id="slider-container">
        <div class="carousel-header">
            <h1 class="carousel-title">Descubre Nuestras Informaciones</h1>
            <p class="carousel-description">Explora una variedad de temas legales que te ayudarán a tomar decisiones informadas. Navega entre nuestras guías y descubre más sobre tus derechos.</p>
        </div>
        <span onclick="slideRight()" class="btn"></span>
        <div id="slider">

            <div class="slide">

                <div class="card">
                    <img src="../../img/Divorcio.jpg" alt="Noticia 1">
                    <h4 class="card-title" id="divorcio">GUÍA SOBRE  <br> DIVORCIO</h4>
                    <p class="card-description">La guía sobre divorcio brinda información sobre cómo proceder durante la separación matrimonial, incluyendo consejos legales y emocionales.</p>
                </div>
            </div>
            <div class="slide">

                <div class="card">
                    <img src="../../img/Despido.jpg" alt="Noticia 2">
                    <h4 class="card-title" id="despido">REDACTAR UNA CARTA DE DESPIDO</h4>
                    <p class="card-description">Descubre los pasos clave para redactar una carta de despido correctamente. Te explicamos cómo estructurarla, qué detalles legales incluir y cómo manejar esta situación de forma profesional y clara.</p>
                </div>
            </div>
            <div class="slide">

                <div class="card">
                    <img src="../../img/Accidente.png" alt="Noticia 3">
                    <h4 class="card-title" id="accidente">GUÍA PARA ACCIDENTES DE TRÁFICO</h4>
                    <p class="card-description">Descubre los pasos clave para manejar un accidente de tráfico, desde la documentación hasta las acciones legales necesarias.</p>
                </div>
            </div>
            <div class="slide">

                <div class="card">
                    <img src="../../img/Testamento.jpg" alt="Noticia 4">
                    <h4 class="card-title" id="testamento">COMO REDACTAR UN TESTAMENTO</h4>
                    <p class="card-description">Aprende a estructurar y redactar un testamento de forma clara y legalmente válida, asegurando que tus deseos sean respetados y evitando futuros conflictos familiares.</p>
                </div>
            </div>
            <div class="slide">

                <div class="card">
                    <img src="../../img/PensionAliemnticia.jpg" alt="Noticia 5">
                    <h4 class="card-title" id="alimentp">PENSIÓN ALIMENTICIA</h4>
                    <p class="card-description">Entiende los aspectos esenciales de la pensión alimenticia, incluyendo cómo solicitarla,
                        cómo se calcula y cómo administrarla correctamente para asegurar el bienestar de los
                        dependientes.</p>
                </div>
            </div>
            <div class="slide">

                <div class="card">
                    <img src="../../img/Arrendamiento.jpg" alt="Noticia 6">
                    <h4 class="card-title" id="arrendamiento">PROBLEMAS DE ARRENDAMIENTO</h4>
                    <p class="card-description">Conoce tus derechos y cómo resolver conflictos comunes en el arrendamiento, incluyendo
                        problemas con el contrato, el mantenimiento del inmueble y la protección legal del
                        inquilino.</p>
                </div>
            </div>
        </div>
        <span onclick="slideLeft()" class="btn"></span>
    </div>
 





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
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-5YSOQ5KtZq2j9Vc1lYZn3vZ0rUubXsg9F9Z9RkVoThSKg/B0J9cuC0Rf5Gp6ueIa" crossorigin="anonymous">

@endpush

@push('scripts')

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script src="js/carrusel.js"></script>

    <script src="js/home.js"></script>
    <script src="js/forocarousel.js"></script>

@endpush
