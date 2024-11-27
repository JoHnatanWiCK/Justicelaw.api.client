@extends('layouts.layoutLogin')

@section('title', 'Perfil usuario')

@section('nav')
@endsection

@section('main')
<section class="content"> 
    <div class="container">
        <div class="calendar">
            <h1 id="monthName">Calendario</h1>
            <div class="months">
                <div id="prevMonthBtn" class="navigation">
                    <button>&lt;</button>
                </div>
                <div>Enero</div>
                <div>Febrero</div>
                <div>Marzo</div>
                <div>Abril</div>
                <div>Mayo</div>
                <div>Junio</div>
                <div>Julio</div>
                <div id="nextMonthBtn" class="navigation">
                    <button>&gt;</button>
                </div>
            </div>
            <div class="days">
                <div class="navigation-days">
                    <button class="prevBtn" id="prevBtn">&lt;</button> 
                </div>
                <div class="navigation-days">
                    <button class="nextBtn" id="nextBtn">&gt;</button> 
                </div>
            </div>
            <div class="schedule" id="scheduleArea">
                <div class="hours">
                    <div class="hour"><div>10:00</div></div>
                    <div class="hour"><div>11:00</div></div>
                    <div class="hour"><div>12:00</div></div>
                    <div class="hour"><div>13:00</div></div>
                    <div class="hour"><div>14:00</div></div>
                    <div class="hour"><div>15:00</div></div>
                    <div class="hour"><div>16:00</div></div>
                    <div class="hour"><div>17:00</div></div>  
                </div>
                <div class="events">
                    <div class="event">
                        <img src="../../img/mujer.png" alt="Foto de perfil" class="event-image">
                        <div class="event-details">
                            <p class="nombre-asesoria">Asesoría familiar con <strong>Mariana Santos</strong></p>
                            <p class="hora-evento">10:00 - 11:00</p>
                        </div>
                    </div>
                    <div class="event-container" data-hour="15" style="top: 50%;">
                        <div class="event vacio" id="event8"></div>
                    </div>
                    <div class="event">
                        <img src="../../../../img/hombre.png" alt="Foto de perfil" class="event-image">
                        <div class="event-details">
                            <p class="nombre-asesoria">Asesoría psicológica con <strong>Juan Pérez</strong></p>
                            <p class="hora-evento">12:00 - 13:00</p>
                        </div>
                    </div>
                    <div class="event-container" data-hour="15" style="top: 50%;">
                        <div class="event vacio" id="event8"></div>
                    </div>
                    <div class="event">
                        <img src="../../img/mujer.png" alt="Foto de perfil" class="event-image">
                        <div class="event-details">
                            <p class="nombre-asesoria">Asesoría financiaera <strong>Laura Gómez</strong></p>
                            <p class="hora-evento">14:00 - 15:00</p>
                        </div>
                    </div>
                    <div class="event-container" data-hour="15" style="top: 50%;">
                        <div class="event vacio" id="event8"></div>
                    </div>
                    <div class="event">
                        <img src="../../img/mujer.png" alt="Foto de perfil" class="event-image">
                        <div class="event-details">
                            <p class="nombre-asesoria">Asesoría médica con <strong>Ana López</strong></p>
                            <p class="hora-evento">16:00 - 17:00</p>
                        </div>
                    </div>
                    <div class="event-container" data-hour="15" style="top: 50%;">
                        <div class="event vacio" id="event8"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile">
            <img src="../../img/fotoPerfil.jfif" alt="David Astrada">
            <h2>David Astrada</h2>
            <a id="verPerfil" href="../ver_perfil/perfil_abogado.html">Ver perfil</a>
            <p>Especializado en derecho civil y familiar, mi objetivo es proporcionar soluciones legales efectivas y comprensibles para mis clientes. Fuera del trabajo, disfruto de la lectura y el tiempo al aire libre. Estoy aquí para ayudarte con tus necesidades legales.</p>
            <div class="stats">
                <div class="ocupado">
                    <div class="contenido">
                        <div class="circulo-ocupado"></div>
                        <p>Ocupado</p>
                    </div>
                    <span class="valor">5</span>
                </div>
                <hr>
                <div class="disponible">
                    <div class="contenido">
                        <div class="circulo-disponible"></div>
                        <p>Disponible</p>
                    </div>
                    <span class="valor">7</span>
                </div>
            </div>
            <div id="availabilityModal" class="modal">
                <div class="modal-content">
                  <span class="close">&times;</span>
                  <h2>Disponibilidad de asesoría</h2>
                  <div class="modal-body">
                    
                    <div class="date-time">
                        <!-- Contenedor de la Fecha -->
                        <div class="date-time-item">
                            <img src="../../img/calendario.png" class="fecha-icon" alt="Fecha">
                            <span>Jueves, 11 abril</span>
                        </div>
                      
                        <!-- Contenedor de la Hora -->
                        <div class="date-time-item">
                            <img src="../../img/relojAsesoria.png" class="hora-icon" alt="Hora">
                            <span>12:00pm - 1:00pm</span>
                        </div>
                    </div>
                    
                    <!-- Botón para agregar disponibilidad -->
                    <button class="add-availability">+ Agregar una nueva disponibilidad</button>
              
                    <!-- Configuración de notificación -->
                    <div class="notification">
                      <span class="icon-bell"></span>
                      <label>Notificar</label>
                      <select>
                        <option>1 hora antes</option>
                        <option>2 horas antes</option>
                        <option>Un día antes</option>
                      </select>
                    </div>
                  </div>
              
                  <!-- Botón para guardar -->
                  <button class="save">Guardar</button>
                </div>
              </div>
              
              
                </div>
            </div>
            
        </div>
    </div>
</section>
@endsection

@section('footer')
@endsection

@push('styles')
<link rel="stylesheet" href="css/calendar.css">
@endpush

@push('scripts')
<script src="js/calendar.js"></script>
@endpush
