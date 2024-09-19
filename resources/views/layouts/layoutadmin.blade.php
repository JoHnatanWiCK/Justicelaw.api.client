<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Faustina:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    @stack('styles')
</head>
<body>
    <div class="container">
        <header>
            @yield('nav')
            <input type="text" placeholder="Buscar...">
            <div class="user-info">
                <span>Juan Perez</span>
                <img src="{{ asset('img/fotoPerfil.png') }}" alt="User Icon">
            </div>
        </header>
        <aside class="sidebar">
            <div class="logo">
                <img src="{{ asset('img/logo.jpg') }}" alt="JusticeLaw Logo">
                <div class="logo-text">
                    <h1>JUSTICE</h1>
                    <p>LAW</p>
                </div>
            </div>
            <nav class="menu">
                <ul>
                    <li><img src="{{ asset('img/admin/dashboard.png') }}" alt="dashboard">
                        <a href="#">Dashboard</a></li>
                    <li><img src="{{ asset('img/admin/herramientasAnalisis.png') }}" alt="herramientasAnalisis">
                        <a href="#">Herramientas análisis</a></li>
                    <li><img src="{{ asset('img/admin/gestionRoles.png') }}" alt="gestionRoles">
                        <a href="#">Gestión de roles y permisos</a></li>
                    <li><img src="{{ asset('img/admin/administrarPerfiles.png') }}" alt="administrarPerfiles">
                        <a href="#">Administrar perfiles</a></li>
                    <li><img src="{{ asset('img/admin/verificarReseñas.png') }}" alt="verificarReseñas">
                        <a href="#">Verificación de reseñas</a></li>
                </ul>
            </nav>
            <div class="content">
                <ul>
                    <li><img src="{{ asset('img/admin/Informaciones.png') }}" alt="Informaciones">
                        <a href="#">Informaciones</a></li>
                    <li><img src="{{ asset('img/admin/FAQs.png') }}" alt="FAQs">
                        <a href="#">FAQs</a></li>
                </ul>
            </div>
            <div class="settings">
                <ul>
                    <li><img src="{{ asset('img/admin/configuraciones.png') }}" alt="configuraciones">
                        <a href="#">Configuración</a></li>
                    <li><img src="{{ asset('img/admin/medidasSeguridad.png') }}" alt="medidasSeguridad">
                        <a href="#">Medidas de seguridad</a></li>
                    <li><img src="{{ asset('img/admin/ayudaSoporte.png') }}" alt="ayudaSoporte">
                        <a href="#">Ayuda y Soporte</a></li>
                </ul>
            </div>
            <div class="logout">
                <img src="{{ asset('img/CerrarSesion.png') }}" alt="Cerrar Sesión">
                <a href="#">Cerrar Sesión</a>
            </div>
        </aside>
        <main class="main-content">
            @yield('main')
        </main>
    </div>
    @stack('scripts')
</body>
</html>
