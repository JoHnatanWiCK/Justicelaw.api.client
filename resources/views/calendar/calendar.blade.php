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
                    <div>10:00</div>
                    <div>11:00</div>
                    <div>12:00</div>
                    <div>13:00</div>
                    <div>14:00</div>
                    <div>15:00</div>
                    <div>16:00</div>
                    <div>17:00</div>
                    <div>18:00</div>
                </div>
                <div class="events">
                    <div class="event time" id="event1" style="top: 10%;">Asesoría familiar con Mariana Santos</div>
                    <div class="event task" id="event2" style="top: 30%;">Asesoría legal con Mariana Santos</div>
                    <div class="event last" style="top: 50%;"></div>
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
