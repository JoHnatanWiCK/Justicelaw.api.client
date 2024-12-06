
@extends('layouts.layoutAbogado')

@section('title', 'Configuracion')

@section('nav')
@endsection

@section('main')


       <section class="configuration">
        <nav class="sidebar">
          <ul class="icon-list">
              <li>
                  <a href="#" id="perfilSidebar" class="icon-container">
                      <i class="fa-regular fa-user"></i>
                  </a>
              </li>
              <li>
                  <a href="{{route('historialAbogado')}}" class="icon-container">
                      <i class="fa-solid fa-clock-rotate-left"></i>
                  </a>
              </li>
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
                <a href="{{route('calendar_lawyer')}}" class="icon-container">
                    <i class="fa-regular fa-calendar"></i>
                </a>
            </li>

          </ul>
      </nav>

      <div class="main-content">
            <div class="configuration-content">
              <div class="contenido">

                <div class="configuration-header">
                    <div class="search-configuration">
                      <i class="fa-solid fa-magnifying-glass" id="lupa"></i>
                        <input type="text" placeholder="Buscar..." />
                      </div>
                </div>
                            <div class="container">
                                <h4>Herramientas y Recursos</h4>
                                <a href={{route('PermisosUso')}}><p>Permisos y Derechos de uso</p></a>
                            </div>

                            <div class="container">
                              <h4>Normas Comunitarias y Politicas Legales</h4>
                              <a href={{route('terminosCondiciones')}}><p>Terminos y condiciones</p></a>
                              <a href={{route('politicaPrivacidad')}}><p>Política de Privacidad</p></a>
                              <a href={{route('cookies')}}><p>Política de Cookies</p></a>
                              <a href={{route('NormasComuntarias')}}><p>Normas Comunitarias</p></a>
                          </div>

                        </div>
                      </div>
        </section>

        @endsection

        @section('footer')
        @endsection

        @push('styles')
        <link rel="stylesheet" href="css/configuracionAbogado.css">
        @endpush

        @push('scripts')
        <script src="js/configuracionAbogado.js"></script>
        @endpush
