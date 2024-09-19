@extends('layouts.layoutadmin')

@section('title', 'Dashboard')

@section('nav')
    <nav>
    </nav>
@endsection

@section('main')
<section class="welcome">
    <h3>¡Bienvenido al Dashboard!</h3>
    <p>Ha alcanzado sus objetivos de métricas mensuales.</p>
</section>

<div class="reports">
    <h3>Registro reportes</h3>
    <ul>
        <li><img src="{{ asset('img/admin/reporte.png') }}" alt="reporte" class="reporte">
            <a href="#">Martina Zapata ha solicitado ayuda con un error del sistema</a></li>
        <li><img src="{{ asset('img/admin/verificacion.png') }}" alt="verificacion" class="verificacion">
            <a href="#">Martina Santos ha solicitado una verificación de abogado</a></li>
        <li><img src="{{ asset('img/admin/verificacion.png') }}" alt="verificacion" class="verificacion">
            <a href="#">Sofía Méndez ha solicitado una verificación de usuario</a></li>
        <li><img src="{{ asset('img/admin/reporte.png') }}" alt="reporte" class="reporte">
            <a href="#">Martina Zapata ha solicitado ayuda con un error del sistema</a></li>
    </ul>
</div>

<section class="central">
    <div class="stats">
        <div class="stat">
            <h2><img src="{{ asset('img/admin/personas.png') }}" alt="personas" class="pers"> Total clientes</h2>
            <p>38940 <img src="{{ asset('img/admin/graficaTotalClientes.png') }}" alt="graficaTotalClientes" class="graf"></p>
            <a href="#">Ver todo -> </a>
            <span class="percentage">+40% Este mes</span>
        </div>
        <div class="stat">
            <h2><img src="{{ asset('img/admin/personas.png') }}" alt="personas" class="pers2"> Informaciones publicadas</h2>
            <p>43129 <img src="{{ asset('img/admin/graficaInformacionesPublicadas.png') }}" alt="graficaInformacionesPublicadas" class="graf"></p>
            <a href="#">Ver todo -> </a>
            <span class="percentage">+14% Este mes</span>
        </div>
        <div class="stat">
            <h2><img src="{{ asset('img/admin/asesoriasProgramadas.png') }}" alt="asesoriasProgramadas" class="pers2"> Asesorías programadas</h2>
            <p>72613 <img src="{{ asset('img/admin/graficaAsesoriasProgramadas.png') }}" alt="graficaAsesoriasProgramadas" class="graf"></p>
            <a href="#">Ver todo -> </a>
            <span class="percentage">+10% Este mes</span>
        </div>
        <div class="stat">
            <h2><img src="{{ asset('img/admin/personas.png') }}" alt="personas" class="pers"> Total reseñas</h2>
            <p>21819 <img src="{{ asset('img/admin/graficaTotalReseñas.png') }}" alt="graficaTotalReseñas" class="graf"></p>
            <a href="#">Ver todo -> </a>
            <span class="percentage">+9% Este mes</span>
        </div>
    </div>

    <div class="chart">
        <h3>Visitantes</h3>
        <p>Informes</p>
        <img src="{{ asset('img/admin/graficaVisitantes.png') }}" alt="graficaVisitantes">
        <p>Clientes</p>
        <p>Abogados</p>
    </div>
</section>

<div class="chart2">
    <h3>Usuarios por rol</h3>
    <p>Abogados</p>
    <img src="{{ asset('img/admin/graficaUsuariosPorRol.png') }}" alt="graficaUsuariosPorRol">
    <p>Clientes</p>
</div>

<div class="recent-activity">
    <h3>Actividad reciente</h3>
    <ul>
        <li><a href="#">Respondió una solicitud de soporte - 19, marzo - 6:28 pm</a></li>
        <li><a href="#">Agregó la información "¿Cómo hacer una demanda por alimentos?" - 17, marzo - 6:28 pm</a></li>
        <li><a href="#">Respondió una solicitud de soporte - 19, marzo - 6:28 pm</a></li>
        <li><a href="#">Agregó la información "¿Cómo hacer una demanda por alimentos?" - 17, marzo - 6:28 pm</a></li>
    </ul>
</div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endpush

@push('scripts')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endpush
