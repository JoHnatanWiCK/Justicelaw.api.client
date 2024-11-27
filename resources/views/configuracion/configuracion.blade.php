
@extends('layouts.layoutLogin')

@section('title', 'Configuracion')

@section('nav')
@endsection

@section('main')


       <section class="configuration">
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
                    <a href="{{ route('home') }}"><i class="fa-solid fa-right-from-bracket"></i>Cerrar sesión</a>
                </li>
            </ul>
        </nav>
            <hr>
            <div class="configuration-content">
                <div class="configuration-header">
                    <h3>Configuración</h3>
                    <div class="search-configuration">
                         <img id="lupa" src="../../img/Lupa.png" alt="Buscar" />
                        <input type="text" placeholder="" />
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
        </section>

        <section class="configuration-small">
          <div class="content-movil">
            <img id="fotoIcon" src="../../img/fotoPerfil.png" alt="fotoPerfil">
            <div class="content-user">
              <h3>Alfonso Juan</h3>
              <a href="../perfil_usuario/perfil_creado.html">Ver perfil</a>
          </div>
          </div>

          <div class="ajustes">
            <i class="fa-solid fa-gear"></i><h3>Ajustes</h3>
          </div>

          <div class="ajustes-opciones">
          <div class="opcion">
            <a href="#"><i class="fa-solid fa-globe"></i><p>Lenguaje</p></a>
          </div>
          <div class="opcion">
            <a href="#"><i class="fa-solid fa-location-dot"></i><p>Ubicacion</p></a>
          </div>
          <div class="opcion">
            <a href="{{ route('notificaciones')}}"><i class="fa-regular fa-bell"></i><p>Notificaciones</p></a>
          </div>
          <div class="opcion">
            <a href="../historial/historial.html"><i class="fa-solid fa-clock-rotate-left"></i><p>Historial de busqueda</p></a>
          </div>
          <div class="opcion">
            <a href="#"><i class="fa-solid fa-shield-halved"></i><p>Privacidad</p></a>
          </div>
          <div class="opcion">

            <a href="#"><i class="fa-solid fa-person-circle-question"></i><p>Estado anónimo</p></a>
            <label class="switch">
              <input type="checkbox">
              <span class="slider round"></span>
            </label>
          </div>

          <div class="opcion">
            <a href="#"><i class="fa-solid fa-circle-info"></i><p>Sobre la aplicacion</p></a>
          </div>
          <div class="opcion">
            <a href="#"><i class="fa-solid fa-headset"></i><p>Soporte tecnico</p></a>
          </div>
          <div class="opcion">
            <a href="#"><i class="fa-solid fa-right-from-bracket"></i><p>Cerrar sesion</p></a>
          </div>
        </div>
        </section>


        @endsection

        @section('footer')
        @endsection

        @push('styles')
        <link rel="stylesheet" href="css/configuracion.css">
        @endpush

        @push('scripts')
        <script src="js/configuracion.js"></script>
        @endpush
