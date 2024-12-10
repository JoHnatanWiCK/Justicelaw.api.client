@extends('layouts.layoutLogin')

@section('title', 'Sobre nosotros')

@section('nav')
@endsection

@section('main')

    <section class="about-us-section">
        <div class="about-us-container">
            <h2>¿Quiénes Somos?</h2>
            <p>
                En JusticeLaw, ayudamos a nuestros usuarios a comprender y manejar los retos del sistema judicial,
                ofreciendo una plataforma de apoyo y conocimiento legal.
            </p>
        </div>
    </section>

    <section class="about-us">
        <h2>Nuestra Misión</h2>
        <p>Facilitamos el acceso a información confiable para nuestros usuarios sobre procedimientos judiciales. Promovemos una comunidad informada donde el conocimiento empodera a las personas en su proceso legal.</p>
        <br><br><br>
        <h2>Nuestros Valores</h2>

        <div class="values-container">
            <div class="value-box">
                <h3>Transparencia</h3>
                <p>Brindamos información clara y accesible sobre cada proceso judicial, para que cada persona pueda tomar decisiones con seguridad.</p>
            </div>
            <div class="value-box">
                <h3>Empoderamiento</h3>
                <p>Nuestros usuarios se sienten empoderados al acceder a información y asesoría que los guía en cada paso de su proceso legal.</p>
            </div>
            <div class="value-box">
                <h3>Confidencialidad</h3>
                <p>La privacidad de nuestros usuarios es nuestra prioridad, asegurando que su información esté siempre protegida.</p>
            </div>
        </div>
    </section>

    <section class="team">
        <h2>Conoce a nuestro equipo</h2>
        <div class="team-container">
            <div class="team-member">
              <img src="../../img/fotoPerfil.png" class="fotoperfil" alt="Juan Pérez" />
              <h3>Alejandro Narvaez</h3>
                <p>Abogado especializado en derecho penal con más de 10 años de experiencia.</p>
            </div>
            <div class="team-member">
              <img src="../../img/fotoPerfil.png" class="fotoperfil" alt="Juan Pérez" />
              <h3>Maria López</h3>
                <p>Experta en derecho familiar, enfocada en casos de divorcio y custodia.</p>
            </div>
            <div class="team-member">
              <img src="../../img/fotoPerfil.png" class="fotoperfil" alt="Juan Pérez" />
              <h3>Eder Gomez</h3>
                <p>Asesor legal en derecho corporativo y comercial con enfoque en pequeñas empresas.</p>


            </div>

            <div class="team-member">
              <img src="../../img/fotoPerfil.png" class="fotoperfil" alt="Juan Pérez" />
              <h3>Andrea Solarte</h3>
                <p>Asesora legal en derecho corporativo y comercial con enfoque en pequeñas empresas.</p>
            </div>
        </div>
    </section>


@endsection


@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/nosotros.css" />

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endpush

@push('scripts')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/home.js"></script>
@endpush
