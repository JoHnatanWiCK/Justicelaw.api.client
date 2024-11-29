@extends('layouts.layoutAbogado')

@section('title', 'Historial')

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

        <div class="main-content">
        <section class="historial">
        <div class="contenido">
          <div class="container">
            <div class="historial-list">
         
          <div class="historial-header">
            <div class="search-historial">
              <i class="fa-solid fa-magnifying-glass lupa"></i>
                <input type="text" id="search-input" placeholder="Buscar en historial..." />
              </div>

          </div>
       
            <div class="container-fecha">
              <p>31 de marzo, 2024</p>
            </div>
            <div class="container-visitas">
              <div class="visita">
                <div class="checkbox-wrapper-21">
                  <label class="control control--checkbox">
                    <input type="checkbox" />
                    <div class="control__indicator"></div>
                  </label>
                </div>
                <p>2:40 p.m.</p>
                <p>Se ha visitado</p>
                <a href="{{ route('informacionDivorcio')}}">El divorcio</a>
                <input type="checkbox" id="menu-toggle" class="menu-toggle" />
                <label for="menu-toggle" class="tres-puntos-label">
                  <img
                    src="../../img/trespuntos.png"
                    alt="tres puntos"
                    class="tres-puntos"
                  />
                </label>

                <div class="menu-desplegable">
                  <a href="{{ route('informacionDivorcio')}}">Visitar esta información</a>
                  <a
                    href="../historial/historialEliminado.html"
                    class="eliminar"
                    >Eliminar del historial</a
                  >
                </div>
              </div>
              <div class="visita">
                <div class="checkbox-wrapper-21">
                  <label class="control control--checkbox">
                    <input type="checkbox" />
                    <div class="control__indicator"></div>
                  </label>
                </div>
                <p>2:30 p.m.</p>
                <p>Se ha visitado</p>
                <a href="{{ route('informacionPension')}}">Pension Alimenticia</a>
                <input type="checkbox" id="menu-toggle" class="menu-toggle" />
                <label for="menu-toggle" class="tres-puntos-label">
                  <img
                    src="../../img/trespuntos.png"
                    alt="tres puntos"
                    class="tres-puntos"
                  />
                </label>

                <div class="menu-desplegable">
                  <a href="{{ route('informacionPension')}}">Visitar esta información</a>
                  <a
                    href="../historial/historialEliminado.html"
                    class="eliminar"
                    >Eliminar del historial</a
                  >
                </div>
              </div>
              <div class="visita">
                <div class="checkbox-wrapper-21">
                  <label class="control control--checkbox">
                    <input type="checkbox" />
                    <div class="control__indicator"></div>
                  </label>
                </div>
                <p>2:30 p.m.</p>
                <p>Se ha visitado</p>
                <a href="{{ route('informacionDespido')}}">Redactar una carta de despido</a>
                <input type="checkbox" id="menu-toggle" class="menu-toggle" />
                <label for="menu-toggle" class="tres-puntos-label">
                  <img
                    src="../../img/trespuntos.png"
                    alt="tres puntos"
                    class="tres-puntos"
                  />
                </label>

                <div class="menu-desplegable">
                  <a href="{{ route('informacionDespido')}}">Visitar esta información</a>
                  <a
                    href="../historial/historialEliminado.html"
                    class="eliminar"
                    >Eliminar del historial</a
                  >
                </div>
              </div>
              <div class="visita">
                <div class="checkbox-wrapper-21">
                  <label class="control control--checkbox">
                    <input type="checkbox" />
                    <div class="control__indicator"></div>
                  </label>
                </div>
                <p>2:30 p.m.</p>
                <p>Se ha visitado</p>
                <a href="{{ route('informacionAccidente')}}">Accidentes de trafico</a>
                <input type="checkbox" id="menu-toggle" class="menu-toggle" />
                <label for="menu-toggle" class="tres-puntos-label">
                  <img
                    src="../../img/trespuntos.png"
                    alt="tres puntos"
                    class="tres-puntos"
                  />
                </label>

                <div class="menu-desplegable">
                  <a href="{{ route('informacionDespido')}}">Visitar esta información</a>
                  <a
                    href="../historial/historialEliminado.html"
                    class="eliminar"
                    >Eliminar del historial</a
                  >
                </div>
              </div>
              <div class="visita">
                <div class="checkbox-wrapper-21">
                  <label class="control control--checkbox">
                    <input type="checkbox" />
                    <div class="control__indicator"></div>
                  </label>
                </div>
                <p>2:30 p.m.</p>
                <p>Se ha visitado</p>
                <a href="{{ route('informacionConsumidor')}}">Derechos del Consumidor</a>
                <input type="checkbox" id="menu-toggle" class="menu-toggle" />
                <label for="menu-toggle" class="tres-puntos-label">
                  <img
                    src="../../img/trespuntos.png"
                    alt="tres puntos"
                    class="tres-puntos"
                  />
                </label>

                <div class="menu-desplegable">
                  <a href="{{ route('informacionDespido')}}">Visitar esta información</a>
                  <a
                    href="../historial/historialEliminado.html"
                    class="eliminar"
                    >Eliminar del historial</a
                  >
                </div>
              </div>

              <div class="visita">
                <div class="checkbox-wrapper-21">
                  <label class="control control--checkbox">
                    <input type="checkbox" />
                    <div class="control__indicator"></div>
                  </label>
                </div>
                <p>2:30 p.m.</p>
                <p>Se ha visitado</p>
                <a href="{{ route('informacionPension')}}">Pension Alimenticia</a>
                <input type="checkbox" id="menu-toggle" class="menu-toggle" />
                <label for="menu-toggle" class="tres-puntos-label">
                  <img
                    src="../../img/trespuntos.png"
                    alt="tres puntos"
                    class="tres-puntos"
                  />
                </label>

                <div class="menu-desplegable">
                  <a href="{{ route('informacionDespido')}}">Visitar esta información</a>
                  <a
                    href="../historial/historialEliminado.html"
                    class="eliminar"
                    >Eliminar del historial</a
                  >
                </div>
              </div>
              <div class="visita">
                <div class="checkbox-wrapper-21">
                  <label class="control control--checkbox">
                    <input type="checkbox" />
                    <div class="control__indicator"></div>
                  </label>
                </div>
                <p>2:30 p.m.</p>
                <p>Se ha visitado</p>
                <a href="{{ route('informacionArrendamiento')}}">Problemas de arrendamiento</a>
                <input type="checkbox" id="menu-toggle" class="menu-toggle" />
                <label for="menu-toggle" class="tres-puntos-label">
                  <img
                    src="../../img/trespuntos.png"
                    alt="tres puntos"
                    class="tres-puntos"
                  />
                </label>

                <div class="menu-desplegable">
                  <a href="{{ route('informacionDespido')}}">Visitar esta información</a>
                  <a
                    href="../historial/historialEliminado.html"
                    class="eliminar"
                    >Eliminar del historial</a
                  >
                </div>
              </div>
            </div>
        </div>
        </div>
        </div>
      </div>
      </section>
    </section>
  
    
    </section>
      @endsection

      @section('footer')
      @endsection

      @push('styles')
      <link rel="stylesheet" href="css/historialAbogado.css">
      @endpush

      @push('scripts')
      <script src="js/historialAbogado.js"></script>
      @endpush
