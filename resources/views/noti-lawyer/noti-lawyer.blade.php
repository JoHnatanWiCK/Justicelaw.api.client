@extends('layouts.layoutLogin')

@section('title', 'Notifications')

@section('nav')
@endsection

@section('main')

<section class="content">
    <nav class="sidebar">
        <ul>
            <li>
                <div class="icon-container">
                    <i class="fa-regular fa-user"></i>
                </div>
                <div class="text-container">
                    <a href="{{route ('perfil.abogado.creado')}}">Información usuario</a>
                </div>
            </li>
            <li>
                <div class="icon-container">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                </div>
                <div class="text-container">
                    <a href="{{ route('historial') }}">Historial</a>
                </div>
            </li>
            <li>
                <div class="icon-container">
                    <i class="fa-solid fa-gear"></i>
                </div>
                <div class="text-container">
                    <a href="{{ route ('configuracionAbogado')}}">Configuración</a>
                </div>
            </li>
            <li>
                <div class="icon-container">
                    <i class="fa-regular fa-bell"></i>
                </div>
                <div class="text-container">
                    <a href="{{ route ('noti-lawyer')}}">Notificaciones</a>
                </div>
            </li>
            <li>
                <div class="icon-container">
                    <i class="fa-regular fa-calendar"></i>
                </div>
                <div class="text-container">
                    <a href="{{ route('calendar') }}">Calendario</a>
                </div>
            </li>
            <li id="cerrarSesion">
                <div class="icon-container">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </div>
                <div class="text-container">
                    <a href="../home/home.html">Cerrar sesión</a>
                </div>
            </li>
        </ul>
    </nav>

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
                  <a href="{{ route('calendar') }}">Ver en el calendario</a>
                  <span class="date">10/04/2024</span>
              </div>
          </div>
          <div class="notification-item">
              <div class="user-info">
                  <img src="../../img/fotoPerfil.png" alt="User Image">
                  <p><strong>Diego Narvaez</strong> ha solicitado una asesoría para el día <strong>13/04/2024</strong></p>
              </div>
              <div class="actions">
                  <a href="#" id="aceptar">Aceptar</a>
                  <a href="#" id="aplazar">Aplazar</a>
                  <span class="date">09/04/2024</span>
              </div>
          </div>
          <div class="notification-item">
              <div class="user-info">
                  <img src="../../img/fotoPerfil.png" alt="User Image">
                  <p><strong>Carlos Nose</strong> ha solicitado una asesoría para el día <strong>10/04/2024 : 13:00 pm</strong></p>
              </div>
              <div class="actions">
                  <a href="{{ route('calendar') }}">Ver en el calendario</a>
                  <span class="date">10/04/2024</span>
              </div>
          </div>
          <div class="notification-item">
              <div class="user-info">
                  <img src="../../img/fotoPerfil.png" alt="User Image">
                  <p><strong>Diego Narvaez</strong> ha solicitado una asesoría para el día <strong>13/04/2024</strong></p>
              </div>
              <div class="actions">
                <a href="#" id="aceptar">Aceptar</a>
                <a href="#" id="aplazar">Aplazar</a>
                  <span class="date">09/04/2024</span>
              </div>
          </div>
          <div class="load-more">
            <button>Cargar más</button>
        </div>
      </div>

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
  </section>
</section>

@endsection


@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="css/noti-lawyer.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endpush

@push('scripts')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/noti-lawyer.js"></script>
@endpush
