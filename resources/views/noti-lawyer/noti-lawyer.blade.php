@extends('layouts.layoutAbogado')

@section('title', 'Notifications')

@section('nav')
@endsection

@section('main')

<section class="content">
    <nav class="sidebar">
        <ul class="icon-list">
            <li>
                <a href="#" id="perfilSidebar" class="icon-container">
                    <i class="fa-regular fa-user"></i>
                </a>
            </li>
            {{--<li>
                <a href="{{route('historialAbogado')}}" class="icon-container">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                </a>
            </li>--}}
            <li>
                <a href="{{route('configuracionAbogado')}}" class="icon-container">
                    <i class="fa-solid fa-gear"></i>
                </a>
            </li>
            <li>
                <a href="{{route('noti-lawyer')}}" class="icon-container">
                    <i class="fa-regular fa-bell"></i>
                </a>
            </li>
            <li>
                <a href="#" class="icon-container">
                    <i class="fa-regular fa-calendar"></i>
                </a>
            </li>
            <li>
                <a href="#" id="logoutButton" class="icon-container">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </a>
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
                  <p>Maria Jose Salazar ha solicitado una asesoría para el día Jueves 14 de noviembre a las 8:00 a.m</p>
              </div>
              <div class="actions">
                  <a href="{{ route('calendar') }}">Ver en el calendario</a>
                  <span class="date">2024-10-24</span>
              </div>
          </div>
          <div class="notification-item">
              <div class="user-info">
                  <img src="../../img/fotoPerfil.png" alt="User Image">
                  <p>Maria Jose Salazar ha solicitado una asesoría para el día Jueves 14 de noviembre a las 8:00 a.m</p>
              </div>
              <div class="actions">
                  <a href="#" id="aceptar">Aceptar</a>
                  <a href="#" id="aplazar">Aplazar</a>
                  <span class="date">2024-10-24</span>
              </div>
          </div>
          <div class="notification-item">
              <div class="user-info">
                  <img src="../../img/fotoPerfil.png" alt="User Image">
                  <p>Maria Jose Salazar ha solicitado una asesoría para el día Jueves 14 de noviembre a las 8:00 a.m</p>
              </div>
              <div class="actions">
                  <a href="{{ route('calendar') }}">Ver en el calendario</a>
                  <span class="date">2024-10-24</span>
              </div>
          </div>
          <div class="notification-item">
              <div class="user-info">
                  <img src="../../img/fotoPerfil.png" alt="User Image">
                  <p>Maria Jose Salazar ha solicitado una asesoría para el día Jueves 14 de noviembre a las 8:00 a.m</p>
              </div>
              <div class="actions">
                <a href="#" id="aceptar">Aceptar</a>
                <a href="#" id="aplazar">Aplazar</a>
                <span class="date">2024-10-24</span>
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
