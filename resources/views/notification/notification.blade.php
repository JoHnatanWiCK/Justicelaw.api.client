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
                <a href="{{ route('configuracion') }}"><i class="fa-solid fa-gear"></i>Configuración</a>
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
                    <label class="dropdown-toggle">
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

        <!-- Contenedor vacío para las notificaciones -->
        <div id="notifications-list">
            <!-- Las notificaciones serán inyectadas aquí dinámicamente con JavaScript -->
        </div>

        <div class="notifications-actions">
            <button id="marcarTodoLeido">Marcar todo como leído</button>
            <button id="archivarTodo">Archivar todo</button>
        </div>

        <div class="toast">
            <div class="toast-content">
                <img src="../../img/check.png"  class="check" alt="check">
                <div class="message">
                    <div class="text" id="toastMessage">¡Acción completada!</div>
                </div>
            </div>
            <i class="fa-solid fa-xmark close"></i>
            <div class="progress"></div>
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
