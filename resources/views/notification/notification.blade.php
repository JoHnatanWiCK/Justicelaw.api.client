@extends('layouts.layoutLogin')

@section('title', 'Notifications')

@section('nav')
@endsection

@section('main')
<section class="container">
    <nav class="sidebar">
        <ul>
            <div class="titulo">
                <i class="fa-solid fa-chevron-left" onclick="window.history.back()"></i>
                <span>Perfil Usuario</span>
            </div>
            <li>
                <a href="{{ route('crearPerfil') }}"><i class="fa-regular fa-user"></i>Información usuario</a>
            </li>
            <li>
                <a href="{{ route('historial') }}"><i class="fa-solid fa-clock-rotate-left"></i>Historial</a>
            </li>
            <li>
                <a href="{{ route('configuracion') }}"><i class="fa-solid fa-gear"></i>Configuracion</a>
            </li>
            <li>
                <a href="{{ route('notificaciones') }}"><i class="fa-regular fa-bell"></i>Notificaciones</a>
            </li>
            <li id="cerrarSesion">
                <a href="#" id="openModal"><i class="fa-solid fa-right-from-bracket"></i>Cerrar sesión</a>
            </li>
        </ul>
    </nav>
    <hr />
    <div class="sect2">
        <div class="container1">
            <div class="notifications-d">
                <h2>Notificaciones</h2>
                <div class="user-menu1">
                    <span>Mostrar: Mis preguntas</span>
                    <input type="checkbox" id="dropdownToggle1" class="dropdown-checkbox1">
                    <label for="dropdownToggle1">
                        <img class="img-flecha" src="../../img/flechaAbajo.png" alt="flecha">
                    </label>
                    <div class="dropdown1">
                        <ul>
                            <li><a href="#" data-filter="favoritas">Mis favoritas</a></li>
                            <li><a href="#" data-filter="archivadas">Mis archivadas</a></li>
                            <li><a href="#" data-filter="noleidas">No leídas</a></li>
                            <li><a href="#" data-filter="todas">Todas</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="notifications-list">
            <div class="notification favorite container2">
                <img class="img-perfil" src="../../img/fotoPerfil.png" alt="f-perfil">
                <a href="notify">Eder Nicolas ha respondido tu pregunta: "¿Qué pasos debo seguir en un proceso de divorcio?"</a>
                <img class="corazon" src="../../img/Like.png" alt="Like">
                <div class="user-menu2">
                    <input type="checkbox" id="dropdownToggle2" class="dropdown-checkbox2">
                    <label for="dropdownToggle2">
                        <img class="img-3puntos" src="../../img/trespuntos.png" alt="flecha">
                    </label>
                    <div class="dropdown2">
                        <ul>
                            <li><a href="m-leido">Marcar como leído</a></li>
                            <li><a href="archivar">Archivar notificación</a></li>
                            <li><a href="eliminar">Eliminar notificación</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="notification archived container2">
                <img class="img-perfil" src="../../img/fotoPerfil.png" alt="f-perfil">
                <a href="notify">Eder Nicolas ha respondido tu pregunta: "¿Qué pasos debo seguir en un proceso de divorcio?"</a>
                <img class="corazon" src="../../img/Like.png" alt="Like">
                <div class="user-menu2">
                    <input type="checkbox" id="dropdownToggle2" class="dropdown-checkbox2">
                    <label for="dropdownToggle2">
                        <img class="img-flecha" src="../../img/trespuntos.png" alt="flecha">
                    </label>
                    <div class="dropdown2">
                        <ul>
                            <li><a href="m-leido">Marcar como leído</a></li>
                            <li><a href="archivar">Archivar notificación</a></li>
                            <li><a href="eliminar">Eliminar notificación</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="notification unread container2">
                <img class="img-perfil" src="../../img/fotoPerfil.png" alt="f-perfil">
                <a href="notify">Eder Nicolas ha respondido tu pregunta: "¿Qué pasos debo seguir en un proceso de divorcio?"</a>
                <img class="corazon" src="../../img/Like.png" alt="Like">
                <div class="user-menu2">
                    <input type="checkbox" id="dropdownToggle2" class="dropdown-checkbox2">
                    <label for="dropdownToggle2">
                        <img class="img-3puntos" src="../../img/trespuntos.png" alt="flecha">
                    </label>
                    <div class="dropdown2">
                        <ul>
                            <li><a href="m-leido">Marcar como leído</a></li>
                            <li><a href="archivar">Archivar notificación</a></li>
                            <li><a href="eliminar">Eliminar notificación</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="notification container2">
                <img class="img-perfil" src="../../img/fotoPerfil.png" alt="f-perfil">
                <a href="notify">Eder Nicolas ha respondido tu pregunta: "¿Qué pasos debo seguir en un proceso de divorcio?"</a>
                <img class="corazon" src="../../img/Like.png" alt="Like">
                <div class="user-menu2">
                    <input type="checkbox" id="dropdownToggle2" class="dropdown-checkbox2">
                    <label for="dropdownToggle2">
                        <img class="img-3puntos" src="../../img/trespuntos.png" alt="flecha">
                    </label>
                    <div class="dropdown2">
                        <ul>
                            <li><a href="m-leido">Marcar como leído</a></li>
                            <li><a href="archivar">Archivar notificación</a></li>
                            <li><a href="eliminar">Eliminar notificación</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="notifications-actions">
            <button id="marcarTodoLeido">Marcar todo como leído</button>
            <button id="archivarTodo">Archivar todo</button>
        </div>    
    </div>
</section>
@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/notification.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endpush

@push('scripts')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/notification.js"></script>
@endpush
