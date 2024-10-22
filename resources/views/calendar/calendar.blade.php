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
                <div class="hour">
                    <div class="event-box"></div>
                    <div>10:00</div>
                </div>
                <div class="hour">
                    <div class="event-box"></div>
                    <div>11:00</div>
                </div>
                <div class="hour">
                    <div class="event-box"></div>
                    <div>12:00</div>
                </div>
                <div class="hour">
                    <div class="event-box"></div>
                    <div>13:00</div>
                </div>
                <div class="hour">
                    <div class="event-box"></div>
                    <div>14:00</div>
                </div>
                <div class="hour">
                    <div class="event-box"></div>
                    <div>15:00</div>
                </div>
                <div class="hour">
                    <div class="event-box"></div>
                    <div>16:00</div>
                </div>
                <div class="hour">
                    <div class="event-box"></div>
                    <div>17:00</div>
                </div>
                <div class="hour">
                    <div class="event-box"></div>
                    <div>18:00</div>
                </div>
                <div class="hour">
                    <div class="event-box"></div>
                    <div>19:00</div>
                </div>
                <div class="hour">
                    <div class="event-box"></div>
                    <div>20:00</div>
                </div>
            </div>
            <div class="events">
                <div class="event-container" style="top: 10%;">
                    <div class="event disponible" id="event1">Asesoría familiar con Mariana Santos</div>
                </div>
                <div class="event-container" style="top: 20%;">
                    <div class="event vacio" id="event6">Evento vacío 1</div>
                </div>
                <div class="event-container" style="top: 30%;">
                    <div class="event ocupado" id="event2">Asesoría legal con Mariana Santos</div>
                </div>
                <div class="event-container" style="top: 40%;">
                    <div class="event vacio" id="event7">Evento vacío 2</div>
                </div>
                <div class="event-container" style="top: 50%;">
                    <div class="event disponible" id="event3">Asesoría psicológica con Juan Pérez</div>
                </div>
                <div class="event-container" style="top: 60%;">
                    <div class="event vacio" id="event8">Evento vacío 3</div>
                </div>
                <div class="event-container" style="top: 70%;">
                    <div class="event ocupado" id="event4">Asesoría financiera con Laura Gómez</div>
                </div>
                <div class="event-container" style="top: 80%;">
                    <div class="event vacio" id="event9">Evento vacío 4</div>
                </div>
                <div class="event-container" style="top: 90%;">
                    <div class="event disponible" id="event5">Asesoría médica con Ana López</div>
                </div>
                <div class="event-container" style="top: 100%;">
                    <div class="event vacio" id="event10">Evento vacío 5</div>
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
    </div>

    <div id="modal" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Disponibilidad de asesoría</h2>
            <p>Jueves, 11 abril</p>
            <p>12:00pm - 1:00pm</p>
            <button>Aceptar nueva disponibilidad</button>
            <label>
                Notificar
                <select>
                    <option>5 minutos antes</option>
                    <option>10 minutos antes</option>
                    <option>15 minutos antes</option>
                </select>
            </label>
            <button>Guardar</button>
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
