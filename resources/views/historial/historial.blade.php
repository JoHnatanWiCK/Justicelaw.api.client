@extends('layouts.layoutLogin')

@section('title', 'Historial')

@section('nav')
@endsection

@section('main')
      <section class="historial">
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
        <hr />
        <div class="historial-content">
            <div class="historial-header">
              <h3>Historial</h3>
              <div class="search-historial">
                  <img id="lupa" src="../../img/Lupa.png" alt="Buscar" />
                  <input type="text" id="search-input" placeholder="Buscar en historial..." />
                </div>

            </div>
            <div class="container">
              <div class="container-fecha">
                <p>31 de marzo, 2024</p>
              </div>
              <hr />
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
        </section>
        <section class="historial-small">
          <div class="borrar-datos">
            <a href="../historial/historialEliminado.html"
              >Borrar datos de navegación</a
            >
          </div>

          <div class="historial-container">
            <div class="visita-small">
              <span class="fecha-visita">12 de abril, 2024</span>

              <div class="detalle-visita">
                <span class="icon-visita">T</span>
                <p>Se ha visitado</p>
                <a
                  class="link-informacion"
                  href="../Information/informacion_tutela.html"
                  >La tutela</a
                >
                <a
                  class="icon-eliminar"
                  href="../historial/historialEliminado.html"
                  ><i class="fa-regular fa-circle-xmark"></i
                ></a>
              </div>
              <div class="detalle-visita">
                <span class="icon-visita">T</span>
                <p>Se ha visitado</p>
                <a
                  class="link-informacion"
                  href="../Information/informacion_tutela.html"
                  >Todo acerca de las tutelas</a
                >
                <a
                  class="icon-eliminar"
                  href="../historial/historialEliminado.html"
                  ><i class="fa-regular fa-circle-xmark"></i
                ></a>
              </div>
              <div class="detalle-visita">
                <span class="icon-visita">T</span>
                <p>Se ha visitado</p>
                <a
                  class="link-informacion"
                  href="../Information/informacion_tutela.html"
                  >La tutela</a
                >
                <a
                  class="icon-eliminar"
                  href="../historial/historialEliminado.html"
                  ><i class="fa-regular fa-circle-xmark"></i
                ></a>
              </div>
              <div class="detalle-visita">
                <span class="icon-visita">T</span>
                <p>Se ha visitado</p>
                <a
                  class="link-informacion"
                  href="../Information/informacion_tutela.html"
                  >La tutela</a
                >
                <a
                  class="icon-eliminar"
                  href="../historial/historialEliminado.html"
                  ><i class="fa-regular fa-circle-xmark"></i
                ></a>
              </div>
              <div class="detalle-visita">
                <span class="icon-visita">T</span>
                <p>Se ha visitado</p>
                <a
                  class="link-informacion"
                  href="../Information/informacion_tutela.html"
                  >La tutela</a
                >
                <a
                  class="icon-eliminar"
                  href="../historial/historialEliminado.html"
                  ><i class="fa-regular fa-circle-xmark"></i
                ></a>
              </div>
            </div>

            <div class="visita-small">
              <span class="fecha-visita">11 de abril, 2024</span>

              <div class="detalle-visita">
                <span class="icon-visita">T</span>
                <p>Se ha visitado</p>
                <a
                  class="link-informacion"
                  href="../Information/informacion_tutela.html"
                  >La tutela</a
                >
                <a
                  class="icon-eliminar"
                  href="../historial/historialEliminado.html"
                  ><i class="fa-regular fa-circle-xmark"></i
                ></a>
              </div>
              <div class="detalle-visita">
                <span class="icon-visita">T</span>
                <p>Se ha visitado</p>
                <a
                  class="link-informacion"
                  href="../Information/informacion_tutela.html"
                  >Todo acerca de las tutelas</a
                >
                <a
                  class="icon-eliminar"
                  href="../historial/historialEliminado.html"
                  ><i class="fa-regular fa-circle-xmark"></i
                ></a>
              </div>
              <div class="detalle-visita">
                <span class="icon-visita">T</span>
                <p>Se ha visitado</p>
                <a
                  class="link-informacion"
                  href="../Information/informacion_tutela.html"
                  >La tutela</a
                >
                <a
                  class="icon-eliminar"
                  href="../historial/historialEliminado.html"
                  ><i class="fa-regular fa-circle-xmark"></i
                ></a>
              </div>
              <div class="detalle-visita">
                <span class="icon-visita">T</span>
                <p>Se ha visitado</p>
                <a
                  class="link-informacion"
                  href="../Information/informacion_tutela.html"
                  >La tutela</a
                >
                <a
                  class="icon-eliminar"
                  href="../historial/historialEliminado.html"
                  ><i class="fa-regular fa-circle-xmark"></i
                ></a>
              </div>
              <div class="detalle-visita">
                <span class="icon-visita">T</span>
                <p>Se ha visitado</p>
                <a
                  class="link-informacion"
                  href="../Information/informacion_tutela.html"
                  >La tutela</a
                >
                <a
                  class="icon-eliminar"
                  href="../historial/historialEliminado.html"
                  ><i class="fa-regular fa-circle-xmark"></i
                ></a>
              </div>
            </div>

            <div class="visita-small">
              <span class="fecha-visita">12 de abril, 2024</span>

              <div class="detalle-visita">
                <span class="icon-visita">T</span>
                <p>Se ha visitado</p>
                <a
                  class="link-informacion"
                  href="../Information/informacion_tutela.html"
                  >La tutela</a
                >
                <a
                  class="icon-eliminar"
                  href="../historial/historialEliminado.html"
                  ><i class="fa-regular fa-circle-xmark"></i
                ></a>
              </div>
              <div class="detalle-visita">
                <span class="icon-visita">T</span>
                <p>Se ha visitado</p>
                <a
                  class="link-informacion"
                  href="../Information/informacion_tutela.html"
                  >Todo acerca de las tutelas</a
                >
                <a
                  class="icon-eliminar"
                  href="../historial/historialEliminado.html"
                  ><i class="fa-regular fa-circle-xmark"></i
                ></a>
              </div>
              <div class="detalle-visita">
                <span class="icon-visita">T</span>
                <p>Se ha visitado</p>
                <a
                  class="link-informacion"
                  href="../Information/informacion_tutela.html"
                  >La tutela</a
                >
                <a
                  class="icon-eliminar"
                  href="../historial/historialEliminado.html"
                  ><i class="fa-regular fa-circle-xmark"></i
                ></a>
              </div>
              <div class="detalle-visita">
                <span class="icon-visita">T</span>
                <p>Se ha visitado</p>
                <a
                  class="link-informacion"
                  href="../Information/informacion_tutela.html"
                  >La tutela</a
                >
                <a
                  class="icon-eliminar"
                  href="../historial/historialEliminado.html"
                  ><i class="fa-regular fa-circle-xmark"></i
                ></a>
              </div>
              <div class="detalle-visita">
                <span class="icon-visita">T</span>
                <p>Se ha visitado</p>
                <a
                  class="link-informacion"
                  href="../Information/informacion_tutela.html"
                  >La tutela</a
                >
                <a
                  class="icon-eliminar"
                  href="../historial/historialEliminado.html"
                  ><i class="fa-regular fa-circle-xmark"></i
                ></a>
              </div>
            </div>
          </div>
        </section>
        @endsection

        @section('footer')
        @endsection

        @push('styles')
        <link rel="stylesheet" href="css/historial.css">
        @endpush

        @push('scripts')
        <script src="js/historial.js"></script>
        @endpush
