<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="../../css/styles.css" />
    <script src="https://kit.fontawesome.com/bfdeae7cfe.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Faustina:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet" />
    @stack('styles')
</head>

<body>
    <header class="header-large">
        @yield('nav')
        <div class="logo">
            <a href="{{ route('homeLogin')}}"> <img src="../../img/logo.jpg" alt="JusticeLaw Logo"></a>
            <div class="logo-text">
                <h1>JUSTICE</h1>
                <p>LAW</p>
            </div>
        </div>
        <div class="search-bar">
            <input type="text"  id="search-input" placeholder="" />
            <button id="buscarBtn">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
        <nav class="nav-links">

            <a id="about-us" href="#">Sobre nosotros</a>
            <a id="foro" href="{{ route('forologin')}}">Foro</a>
            <a id="informaciones" href="{{ route('index')}}">Informaciones</a>
        </nav>
        <div class="user-menu">
            <img class="img-perfil" id="fotoPerfilLayout" src="../../img/fotoPerfil.png" alt="foto de Perfil" />
            <span></span>
            <input type="checkbox" id="dropdownToggle" class="dropdown-checkbox" />
            <label for="dropdownToggle">
                <img class="img-flecha" src="../../img/flechaPerfil.png" alt="flecha" />
            </label>
            <div class="dropdown">
                <ul>
                    <li><a href="{{ route('crearPerfil')}}">Perfil</a></li>
                    <li><a href="{{ route('historial')}}">Historial</a></li>
                    <li>
                        <a href="{{ route('notificaciones')}}">Notificaciones</a>
                    </li>
                    <li>
                        <a href="{{ route('calendar')}}">Calendario</a>
                    </li>
                    <li>
                        <a href="{{ route('configuracion')}}">Configuración</a>
                    </li>
                    <li><a href="#" id="openModal">Cerrar Sesión</a></li>
                </ul>
            </div>
        </div>
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
                    <h3>Alfonso Juan</h3>
                    <span>Popayan, Colombia</span>
                </div>
            </div>

            <ul>
                <hr>
                <li>
                    <a href="../home/homeLogin.html">
                        <i class="fa-solid fa-house"></i>Home</a>
                </li>
                <li>
                    <a href="../perfil_usuario/perfil_creado.html"><i class="fa-regular fa-user"></i>Perfil</a>
                </li>
                <li>
                    <a href="{{ route('notificaciones')}}">Notificaciones</a>
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
        <a href="{{ route('notificaciones')}}"><i class="fa-regular fa-bell"></i></a>
        <a href="../perfil_usuario/crearPerfil.html"><img class="img-perfil" src="../../img/fotoPerfil.png"
                alt="foto de Perfil" /></a>
    </header>
    <main>
        @yield('main')
    </main>
    <div id="logoutModal" class="modal">
        <div class="modal-content">
            <h2>¿Estás seguro de que deseas cerrar sesión?</h2>
            <p>Recuerda que siempre estamos aquí para brindarte la mejor asesoría legal cuando lo necesites.</p>
            <p>¡Esperamos verte pronto de vuelta!</p>
            <div class="modal-buttons">
                <button id="confirmLogout">Cerrar sesión</button>
                <button id="cancelLogout">Cancelar</button>
            </div>
        </div>
    </div>
    <footer class="footer-large">
        @yield('footer')
        <div class="footer-resources">
            <ul>
                <h3>Recursos</h3>
                <div class="linea1"></div>
                <li><a href="blog">Blog</a></li>
                <li><a href="contacto">Contacto</a></li>
                <li><a href="{{ route ('faqs_recurso')}}">FAQ</a></li>
            </ul>
        </div>
        <div class="footer-main">
            <h1>JUSTICE</h1>
            <h3>LAW</h3>
            <div class="linea2"></div>
            <a href="https://www.instagram.com/">
                <img src="../../img/Instagram.png" alt="Instagram" />
            </a>
            <a href="https://www.facebook.com/">
                <img src="../../img/Facebook.png" alt="Facebook" />
            </a>
            <a href="https://www.youtube.com/">
                <img src="../../img/Youtube.png" alt="Youtube" />
            </a>
            <a href="https://www.x.com/">
                <img src="../../img/Twiter.png" alt="Twiter" />
            </a>
            <a href="https://www.linkedin.com/">
                <img src="../../img/Linkedin.png" alt="Linkedin" />
            </a>
            <div class="linea3"></div>
            <p>&copy; 2024 JusticeLaw - Todos los derechos reservados</p>
        </div>
        <div class="footer-legal">
            <ul>
                <h3>Legal</h3>
                <div class="linea4"></div>
                <li><a href="{{ route('terminosUso')}}">Términos de uso</a></li>
                <li><a href="{{ route('cookies')}}">Política de Cookies</a></li>
                <li><a href="{{ route('politicaPrivacidad')}}">Política de privacidad</a></li>
            </ul>
        </div>
    </footer>

    <footer class="footer-small">
        <a href="../home/homeLogin.html"> <i class="fa-solid fa-house"></i></a>
        <a href="../Information/information.html">
            <i class="fa-solid fa-magnifying-glass"></i></a>
        <a href="../foro/foro.html"><i class="fa-solid fa-users"></i></a>
    </footer>

    {{-- <script src="script.js"></script> --}}
    <script src="js/modal.js"></script>
    @stack('scripts')

    <script src="js/layoutLoginAbogado.js"></script>
    <script src="js/perfil.js"></script>
</body>
</html>
