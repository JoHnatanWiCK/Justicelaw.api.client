@extends('layouts.layoutadmin')

@section('title', 'Dashboard')

@section('nav')
   
@endsection

@section('main')
<section class="contentHA">
    <div class="columnas">
      <div class="columna-izquierda">
          <div class="tabla">
              <div class="titulo">
              <h4>Registro de actividad</h4> <a href="../herramientas-analisis/herramientasFiltro.html"><img src="../../img/FiltroBusqueda.png" alt="FiltroBusqueda" ></a> 
          </div>
              <table>
                  <tr>
                      <th>Usuario</th>
                      <th>Email</th>
                      <th>Fecha y hora</th>
                      <th>Accion realizada</th>
                  </tr>
                  <tr>
                      <td>Juan Martinez <br> Cliente</td>
                      <td id="email"> <i class="fa-solid fa-envelope"></i><span> juanmar123@gmail.com</span></td>
                      <td>Mar 20, 2021 - 10:24 pm</td>
                      <td>Inicio de sesión</td>
                  </tr>
                  <tr>
                      <td>Juan Martinez <br> Cliente</td>
                      <td> <i class="fa-solid fa-envelope"></i> juanmar123@gmail.com</td>
                      <td>Mar 20, 2021 - 10:24 pm</td>
                      <td>Inicio de sesión</td>
                  </tr>
                  <tr>
                      <td>Juan Martinez <br> Cliente</td>
                      <td> <i class="fa-solid fa-envelope"></i> juanmar123@gmail.com</td>
                      <td>Mar 20, 2021 - 10:24 pm</td>
                      <td>Inicio de sesión</td>
                  </tr>
                  <tr>
                      <td> Juan Martinez <br> Cliente</td>
                      <td> <i class="fa-solid fa-envelope"></i> juanmar123@gmail.com</td>
                      <td>Mar 20, 2021 - 10:24 pm</td>
                      <td>Inicio de sesión</td>
                  </tr>
                  <tr>
                      <td>Juan Martinez <br> Cliente</td>
                      <td> <i class="fa-solid fa-envelope"></i> juanmar123@gmail.com</td>
                      <td>Mar 20, 2021 - 10:24 pm</td>
                      <td>Inicio de sesión</td>
                  </tr>
          
    
              </table>
     
          </div>
          <div class="graficas">
              <div class="grafica">
                  <h4>Registro de actividad</h4>
                  <img src="../../img/grafica1.png" alt="grafica1">
              </div>
            <div class="grafica">
              <h4>Actividad de inicio de sesión</h4>
              <img src="../../img/grafica2.png" alt="grafica2">
              </div>
          </div>
      </div>
      <div class="columna-derecha">
          <div class="actividad-sospechosa">
              <div class="titulo">
                  <h4>Alertas de actividad sospechosa</h4>  <a href="../herramientas-analisis/herramientasFiltro.html"><img src="../../img/FiltroBusqueda.png" alt="FiltroBusqueda" ></a> 
              </div>
                  <table>
                      <tr>
                          <th>Usuario</th>
                          <th>Fecha y hora</th>
                          <th>Alerta</th>
                      </tr>
                      <tr>
                          <td>Juan Martinez <br> Cliente</td>
                          <td>Mar 20, 2021 - 10:24 pm</td>
                          <td>Se han detectado 5 intentos de inicio de sesión fallidos para el usuario en los últimos 15 minutos</td>
                      </tr>
                    
                    
                  
                      <tr>
                          <td>Juan Martinez <br> Cliente</td>
                          <td>Mar 20, 2021 - 10:24 pm</td>
                          <td>Se han detectado 5 intentos de inicio de sesión fallidos para el usuario en los últimos 15 minutos</td>
                      </tr>
                      <tr>
                          <td>Juan Martinez <br> Cliente</td>
                          <td>Mar 20, 2021 - 10:24 pm</td>
                          <td>Se han detectado 5 intentos de inicio de sesión fallidos para el usuario en los últimos 15 minutos</td>
                      </tr>
                      <tr>
                          <td>Juan Martinez <br> Cliente</td>
                          <td>Mar 20, 2021 - 10:24 pm</td>
                          <td>Se han detectado 5 intentos de inicio de sesión fallidos para el usuario en los últimos 15 minutos</td>
                      </tr>
                      <tr>
                          <td>Juan Martinez <br> Cliente</td>
                          <td>Mar 20, 2021 - 10:24 pm</td>
                          <td>Se han detectado 5 intentos de inicio de sesión fallidos para el usuario en los últimos 15 minutos</td>
                      </tr>
                      <tr>
                          <td>Juan Martinez <br> Cliente</td>
                          <td>Mar 20, 2021 - 10:24 pm</td>
                          <td>Se han detectado 5 intentos de inicio de sesión fallidos para el usuario en los últimos 15 minutos</td>
                      </tr>
                      <tr>
                          <td>Juan Martinez <br> Cliente</td>
                          <td>Mar 20, 2021 - 10:24 pm</td>
                          <td>Se han detectado 5 intentos de inicio de sesión fallidos para el usuario en los últimos 15 minutos</td>
                      </tr>
                      <tr>
                          <td>Juan Martinez <br> Cliente</td>
                          <td>Mar 20, 2021 - 10:24 pm</td>
                          <td>Se han detectado 5 intentos de inicio de sesión fallidos para el usuario en los últimos 15 minutos</td>
                      </tr>
                  </table>     
          </div>
      </div>
    </div>
</section>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/herramientasAnalisis.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endpush

@push('scripts')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/home.js') }}"></script>
@endpush
