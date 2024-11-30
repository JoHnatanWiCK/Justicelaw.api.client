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
<!-- Empty Event 1 -->
<div class="event-container" data-hour="15" style="top: 50%;">
    <div class="event vacio" id="event8" data-date="2024-11-27">
        <div class="more-options">
            <button class="dots-menu" aria-label="Más opciones">...</button>
            <div class="options-menu">
                <p class="edit-availability-option">Editar disponibilidad asesoría</p>
                <p class="delete-availability-option">Eliminar disponibilidad asesoría</p>
            </div>
        </div>
    </div>
</div>

<!-- Empty Event 2 -->
<div class="event-container" data-hour="15" style="top: 50%;">
    <div class="event vacio" id="event9" data-date="2024-11-28">
        <div class="more-options">
            <button class="dots-menu" aria-label="Más opciones">...</button>
            <div class="options-menu">
                <p class="edit-availability-option">Editar disponibilidad asesoría</p>
                <p class="delete-availability-option">Eliminar disponibilidad asesoría</p>
            </div>
        </div>
    </div>
</div>

                
                  <!-- Event 2: Asesoría psicológica -->
<div class="event-container" data-hour="15" style="top: 50%;">
    <div class="event" id="event2" data-date="2024-11-28"> <!-- Evento con disponibilidad -->
        <img src="../../../../img/hombre.png" alt="Foto de perfil" class="event-image">
        <div class="event-details">
            <p class="nombre-asesoria">Asesoría psicológica con <strong>Juan Pérez</strong></p>
            <p class="hora-evento">12:00 - 13:00</p>
        </div>
        <div class="more-options">
            <button class="dots-menu" aria-label="Más opciones">...</button>
            <div class="options-menu">
                <p class="edit-availability-option">Editar disponibilidad asesoría</p>
                <p class="delete-availability-option">Eliminar disponibilidad asesoría</p> <!-- Opción eliminar -->
            </div>
        </div>
    </div>
</div>

<!-- Empty Event 2: Evento vacío -->
<div class="event-container" data-hour="15" style="top: 50%;">
    <div class="event vacio" id="event9-empty" data-date="2024-11-28"> <!-- Evento vacío -->
        <div class="more-options">
            <button class="dots-menu" aria-label="Más opciones">...</button>
            <div class="options-menu">
                <p class="edit-availability-option">Editar disponibilidad asesoría</p>
                <p class="delete-availability-option">Eliminar disponibilidad asesoría</p>
            </div>
        </div>
    </div>
</div>

<!-- Event 3: Asesoría financiera -->
<div class="event-container" data-hour="15" style="top: 50%;">
    <div class="event" id="event3" data-date="2024-11-29"> <!-- Evento con disponibilidad -->
        <img src="../../img/mujer.png" alt="Foto de perfil" class="event-image">
        <div class="event-details">
            <p class="nombre-asesoria">Asesoría financiera con <strong>Laura Gómez</strong></p>
            <p class="hora-evento">14:00 - 15:00</p>
        </div>
        <div class="more-options">
            <button class="dots-menu" aria-label="Más opciones">...</button>
            <div class="options-menu">
                <p class="edit-availability-option">Editar disponibilidad asesoría</p>
                <p class="delete-availability-option">Eliminar disponibilidad asesoría</p> <!-- Opción eliminar -->
            </div>
        </div>
    </div>
</div>

<!-- Empty Event 3: Evento vacío -->
<div class="event-container" data-hour="15" style="top: 50%;">
    <div class="event vacio" id="event10-empty" data-date="2024-11-29"> <!-- Evento vacío -->
        <div class="more-options">
            <button class="dots-menu" aria-label="Más opciones">...</button>
            <div class="options-menu">
                <p class="edit-availability-option">Editar disponibilidad asesoría</p>
                <p class="delete-availability-option">Eliminar disponibilidad asesoría</p>
            </div>
        </div>
    </div>
</div>

<!-- Event 4: Asesoría médica -->
<div class="event-container" data-hour="15" style="top: 50%;">
    <div class="event" id="event4" data-date="2024-11-30"> <!-- Evento con disponibilidad -->
        <img src="../../img/mujer.png" alt="Foto de perfil" class="event-image">
        <div class="event-details">
            <p class="nombre-asesoria">Asesoría médica con <strong>Ana López</strong></p>
            <p class="hora-evento">16:00 - 17:00</p>
        </div>
        <div class="more-options">
            <button class="dots-menu" aria-label="Más opciones">...</button>
            <div class="options-menu">
                <p class="edit-availability-option">Editar disponibilidad asesoría</p>
                <p class="delete-availability-option">Eliminar disponibilidad asesoría</p> <!-- Opción eliminar -->
            </div>
        </div>
    </div>
</div>

<!-- Empty Event 4: Evento vacío -->
<div class="event-container" data-hour="15" style="top: 50%;">
    <div class="event vacio" id="event11-empty" data-date="2024-11-30"> <!-- Evento vacío -->
        <div class="more-options">
            <button class="dots-menu" aria-label="Más opciones">...</button>
            <div class="options-menu">
                <p class="edit-availability-option">Editar disponibilidad asesoría</p>
                <p class="delete-availability-option">Eliminar disponibilidad asesoría</p>
            </div>
        </div>
    </div>
</div>

                
                    <!-- Empty Event 4: Evento vacío -->
                    <div class="event-container" data-hour="15" style="top: 50%;">
                        <div class="event vacio" id="event11-empty" data-date="2024-11-30"> <!-- Evento vacío -->
                            <div class="more-options">
                                <button class="dots-menu" aria-label="Más opciones">...</button>
                                <div class="options-menu">
                                    <p class="edit-availability-option">Editar disponibilidad asesoría</p>
                                    <p class="delete-availability-option">Eliminar disponibilidad asesoría</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <div class="client-item">
                            <img src="../../img/fotoPerfil.png" class="fotoperfil" alt="Foto de perfil" />
                            <div class="client-info">
                                <span class="client-name">Mariana Santos</span>
                                <span class="client-appointment">Agendó una asesoría para el 11 de marzo</span>
                            </div>
                        </div>
                        <div class="client-item">
                            <img src="../../img/fotoPerfil.png" class="fotoperfil" alt="Foto de perfil" />
                            <div class="client-info">
                                <span class="client-name">Mariana Santos</span>
                                <span class="client-appointment">Agendó una asesoría para el 11 de marzo</span>
                            </div>
                        </div>
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
                        <img src="../../img/camapana.png" class="hora-icon" alt="Hora">
                        <label class="notificar-text">Notificar</label>
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
<link rel="stylesheet" href="css/calendar_lawyer.css">
@endpush

@push('scripts')
<script src="js/calendar_lawyer.js"></script>
@endpush
