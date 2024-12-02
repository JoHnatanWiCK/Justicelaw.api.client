@extends('layouts.layoutLogin')

@section('title', 'calendario_lawyer')

@section('nav')
@endsection

@section('main')
<section class="content"> 
    <div class="container">
        <!-- Calendar Section -->
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

            <!-- Navigation Days Section -->
            <div class="days">
                <div class="navigation-days">
                    <button class="prevBtn" id="prevBtn">&lt;</button> 
                </div>
                <div class="navigation-days">
                    <button class="nextBtn" id="nextBtn">&gt;</button> 
                </div>
            </div>

            <!-- Schedule Section -->
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
                    <!-- Event 1: Asesoría familiar -->
                   <!-- Empty Event 1: Evento vacío -->
                    @foreach($dates as $date)
                        @foreach($consultings as $consulting)
                            @if ($date['state'] == 'Agendado')
                                <div class="event-container" data-hour="15" style="top: 50%;">
                                    <div class="event" id="event4" data-date="2024-11-30"> <!-- Evento con disponibilidad -->
                                        <img src="../../img/mujer.png" alt="Foto de perfil" class="event-image">
                                        <div class="event-details">
                                            <p class="nombre-asesoria">Asesoría médica con <strong>{{$consulting['question_id']}}</strong></p>
                                            <p class="hora-evento">{{$date['startTime']}} - {{$date['endTime']}} </p>
                                        </div>
                                    </div>
                                </div>
                            @elseif($date['state'] == 'Disponible')
                                <div class="event vacio" id="event10-empty" data-date="2024-11-29"> <!-- Evento vacío -->
                                    <div class="more-options">
                                        <button class="dots-menu" aria-label="Más opciones">...</button>
                                        <div class="options-menu">
                                            <p class="edit-availability-option">Editar disponibilidad asesoría</p>
                                            <p class="delete-availability-option">Eliminar disponibilidad asesoría</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
                
        <!-- Profile Section -->
        <div class="profile">
            <img src="../../img/fotoPerfil.jfif" alt="David Astrada">
            <h2>David Astrada</h2>
            <p class="profile-info">Asesorías de <span>1 hora</span> </p>
            
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
                <div class="client-section">
                    <h3 class="client-section-title">Clientes</h3>
                    <div class="client-list">
                        <div class="client-item">
                            <img src="../../img/fotoPerfil.png" class="fotoperfil" alt="Foto de perfil" />
                            <div class="client-info">
                                <span class="client-name">Mariana Santos</span>
                                <span class="client-appointment">Agendó una asesoría para el 11 de marzo</span>
                            </div>
                        </div>
                        <!-- More clients here -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Availability -->
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
                            <select id="timePicker" name="startTime">
                                <option value="11:00am - 12:00am">11:00am - 12:00am</option>
                                <option value="12:00am - 1:00pm">12:00am - 1:00pm</option>
                                <option value="1:00pm - 2:00pm">1:00pm - 2:00pm</option>
                                <option value="2:00pm - 3:00pm">2:00pm - 3:00pm</option>
                            </select>
                        </div>
                    </div>

                    <form id="availabilityForm" action="{{ route('guardarDisponibilidad') }}" method="POST">
                        @csrf
                        <input type="hidden" name="date" id="modalDate" value="2024-11-30"> <!-- Fecha de disponibilidad -->
                        <input type="hidden" name="state" value="Disponible">
                        <input type="hidden" name="lawyer_id" value="1"> <!-- Suponiendo que el ID del abogado es 1 -->
                        
                        <div class="notification">
                            <img src="../../img/camapana.png" class="hora-icon" alt="Hora">
                            <label class="notificar-text">Notificar</label>
                            <select name="notification_time">
                                <option value="1">1 hora antes</option>
                                <option value="2">2 horas antes</option>
                                <option value="24">Un día antes</option>
                            </select>
                        </div>
                        <button class="save" type="submit">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@section('footer')
@endsection

@push('styles')
<link rel="stylesheet" href="css/calendar_lawyer.css">
@endpush

@push('scripts')
<script src="js/calendar_lawyer.js"></script>
@endpush
