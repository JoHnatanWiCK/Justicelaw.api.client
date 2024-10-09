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
                <span>Perfil Abogado</span>
            </div>
            <li>
                <a href="{{ route('perfil.abogado.creado') }}"><i class="fa-regular fa-user"></i>Información usuario</a>
            </li>
            <li>
                <a href="{{ route('historialAbogado') }}"><i class="fa-solid fa-clock-rotate-left"></i>Historial</a>
            </li>
            <li>
                <a href="{{ route('configuracionAbogado') }}"><i class="fa-solid fa-gear"></i>Configuracion</a>
            </li>
            <li>
                <a href="{{ route('noti-lawyer') }}"><i class="fa-regular fa-bell"></i>Notificaciones</a>
            </li>
            <li>

                    <i class="fa-regular fa-calendar"></i>

                    <a href="{{ route('calendar') }}">Calendario</a>

            </li>
            <li id="cerrarSesion">
                <a href="{{ route('home') }}"><i class="fa-solid fa-right-from-bracket"></i>Cerrar sesión</a>
            </li>
        </ul>
    </nav>
    <hr />
  <section class="notifications">
    <div class="contenido">
      <div class="notification-list">
        <h2 > Notificaciones</h2>
          <div class="notification-item">
              <div class="user-info">
                  <img src="../../img/fotoPerfil.png" alt="User Image">
                  <p><strong>Carlos Nose</strong> ha solicitado una asesoría para el día <strong>10/04/2024 : 13:00 pm</strong></p>
              </div>
              <div class="actions">
                  <a href="#">Ver en el calendario</a>
                  <span class="date">10/04/2024</span>
              </div>
          </div>
          <div class="notification-item">
              <div class="user-info">
                  <img src="../../img/fotoPerfil.png" alt="User Image">
                  <p><strong>Diego Narvaez</strong> ha solicitado una asesoría para el día <strong>13/04/2024</strong></p>
              </div>
              <div class="actions">
                  <a href="#">Aceptar</a>
                  <a href="#">Aplazar</a>
                  <span class="date">09/04/2024</span>
              </div>
          </div>
          <div class="notification-item">
              <div class="user-info">
                  <img src="../../img/fotoPerfil.png" alt="User Image">
                  <p><strong>Carlos Nose</strong> ha solicitado una asesoría para el día <strong>10/04/2024 : 13:00 pm</strong></p>
              </div>
              <div class="actions">
                  <a href="#">Ver en el calendario</a>
                  <span class="date">10/04/2024</span>
              </div>
          </div>
          <div class="notification-item">
              <div class="user-info">
                  <img src="../../img/fotoPerfil.png" alt="User Image">
                  <p><strong>Diego Narvaez</strong> ha solicitado una asesoría para el día <strong>13/04/2024</strong></p>
              </div>
              <div class="actions">
                  <a href="#">Aceptar</a>
                  <a href="#">Aplazar</a>
                  <span class="date">09/04/2024</span>
              </div>
          </div>
          <div class="load-more">
            <button>Cargar más</button>
        </div>
      </div>

    </div>
  </section>
</section>
@endsection


@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/noti-lawyer.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endpush

@push('scripts')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/notification.js"></script>
@endpush
