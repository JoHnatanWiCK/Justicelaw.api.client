<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/bfdeae7cfe.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Faustina:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    @stack('styles')
</head>

<body>

    <header class="header-large">
        @yield('nav')
        <div class="logo">
            <img src="../../img/logo.jpg" alt="JusticeLaw Logo">
            <div class="logo-text">
                <h1>JUSTICE</h1>
                <p>LAW</p>
            </div>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="">
            <img id="filtroBusqueda" src="../../img/FiltroBusqueda.png" alt="Filtro">
            <button>
                <img src="../../img/Lupa.png" alt="Buscar">
            </button>
        </div>
        <nav class="nav-links">
            <a id="home" href="{{ route('home')}}">Home</a>
            <a id="login" href="{{ route('login')}}">Iniciar Sesión</a>
            <a id="about-us" href="{{ route('sobreNosotros')}}">Sobre nosotros</a>
            <a id="foro" href="{{ route('foro')}}">Foro</a>
        </nav>
    </header>

    <header class="header-small">
        <input type="checkbox" id="dropdownMenu" class="dropdownMovil-checkbox" />
        <label for="dropdownMenu">
            <i class="fa-solid fa-bars"></i>
        </label>

        <div class="dropdownMovil">

            <i class="fa-solid fa-chevron-left"></i>

            <div class="profile-info">
                <img id="fotoPerfil" src="../../img/fotoPerfil.png" alt="fotoPerfil" />
                <div class="profile-details">
                    <a href="../registro/register.html">Registrarse</a>
                </div>

            </div>

            <ul>
                <hr>
                <li>
                    <a href="../home/home.html">
                        <i class="fa-solid fa-house"></i>Home</a>
                </li>
                <li>
                    <a href="../perfil_usuario/perfil_creado.html"><i class="fa-regular fa-user"></i>Perfil</a>
                </li>
                <li>
                    <a href="../notification/notification.html"><i class="fa-regular fa-bell"></i>Notificaciones</a>
                </li>
                <li>
                    <a href="../historial/historial.html"><i class="fa-solid fa-clock-rotate-left"></i>Historial</a>
                </li>
                <hr>
                <li>
                    <a href="../configuracion/configuracion.html"><i class="fa-solid fa-gear"></i>Configuracion</a>
                </li>
                <li>
                    <a href="#"><i class="fa-solid fa-circle-info"></i></i>Quienes somos</a>
                </li>
                <li>
                    <a href="#"><i class="fa-solid fa-question"></i></i>Ayuda</a>
                </li>
                <hr>
            </ul>
        </div>
    </header>


    <main>
        @yield('main')
    </main>

    <footer class="footer-large">
        @yield('footer')
        <div class="footer-resources">
            <ul>
                <h3>Recursos</h3>
                <div class="linea1"></div>
                <li><a href="blog">Blog</a></li>
                <li><a href="contacto">Contacto</a></li>
                <li><a href="faq">FAQ</a></li>
            </ul>
        </div>
        <div class="footer-main">
            <h1>JUSTICE</h1>
            <h3>LAW</h3>
            <div class="linea2"></div>
            <a href="https://www.instagram.com/">
                <img src="../../img/Instagram.png" alt="Instagram">
            </a>
            <a href="https://www.facebook.com/">
                <img src="../../img/Facebook.png" alt="Facebook">
            </a>
            <a href="https://www.youtube.com/">
                <img src="../../img/Youtube.png" alt="Youtube">
            </a>
            <a href="https://www.x.com/">
                <img src="../../img/Twiter.png" alt="Twiter">
            </a>
            <a href="https://www.linkedin.com/">
                <img src="../../img/Linkedin.png" alt="Linkedin">
            </a>
            <div class="linea3"></div>
            <p>&copy; 2024 JusticeLaw - Todos los derechos reservados</p>

        </div>
        <div class="footer-legal">
            <ul>
                <h3>Legal</h3>
                <div class="linea4"></div>
                <li><a href="terminos">Términos de uso</a></li>
                <li><a href="cookies">Política de Cookies</a></li>
                <li><a href="privacidad">Política de privacidad</a></li>
            </ul>
        </div>
    </footer>

    <footer class="footer-small">
        <i class="fa-solid fa-house"></i>
        <i class="fa-solid fa-magnifying-glass"></i>
        <i class="fa-solid fa-users"></i>
    </footer>
    <script src="js/layout.js"></script>
    @stack('scripts')

</body>

</html>
