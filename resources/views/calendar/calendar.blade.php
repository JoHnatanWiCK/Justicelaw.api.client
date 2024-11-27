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
                    <div class="event-container" data-hour="15" style="top: 50%;">
                        <div class="event vacio" id="event8"></div>
                    </div>
                    <div class="event">
                        <div class="event-details">
                        </div>
                    </div>
                    <div class="event-container" data-hour="15" style="top: 50%;">

                    <div class="event-container" data-hour="15" style="top: 50%;">
                        <div class="event vacio" id="event9"></div>
                    </div>
                    <div class="event-container" data-hour="15" style="top: 50%;">
                        <div class="event vacio" id="event10"></div>
                    </div>
                    <div class="event-container" data-hour="15" style="top: 50%;">
                        <div class="event vacio" id="event11"></div>
                    </div>
                    <div class="event">
                        <div class="event-details">
                        </div>
                    </div>
                    <div class="event-container" data-hour="15" style="top: 50%;">
                </div>
                <div class="event-container" data-hour="15" style="top: 50%;">
                    <div class="event vacio" id="event11"></div>
                </div>
                <div class="event-container" data-hour="15" style="top: 50%;">
                    <div class="event vacio" id="event11"></div>
                </div>
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
        </div>
        <!-- Modal para agregar disponibilidad -->
        <div id="availabilityModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Disponibilidad de asesoría</h2>
                <div class="modal-body">
                    <div class="date-time">
                        <div class="date-time-item">
                            <img src="../../img/calendario.png" class="fecha-icon" alt="Fecha">
                            <span id="dateDisplay">Miércoles, 3 Enero</span>
                        </div>
                        <div class="date-time-item">
                            <img src="../../img/relojAsesoria.png" class="hora-icon" alt="Hora">
                            <!-- Selector de hora -->
                            <select id="timePicker">
                                <option value="11:00am - 12:00am">11:00am - 12:00am</option>
                                <option value="12:00am - 1:00pm">12:00am - 1:00pm</option>
                                <option value="1:00pm - 2:00pm">1:00pm - 2:00pm</option>
                                <option value="2:00pm - 3:00pm">2:00pm - 3:00pm</option>
                            </select>
                        </div>
                    </div>
                    <button class="add-availability">+ Agregar una nueva disponibilidad</button>
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
                <button class="save">Guardar</button>
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
