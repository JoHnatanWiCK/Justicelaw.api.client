@extends('layouts.layoutLogin')

@section('title', 'Calendario de Asesorias')

@section('nav')
@endsection

@section('main')
<div class="calendar-container">
    <div class="calendar-header">
        <button id="prevMonth" class="nav-btn">&#60;</button>
        <h2 id="calendarTitle">Diciembre 2024</h2>
        <button id="nextMonth" class="nav-btn">&#62;</button>
    </div>

    <div class="calendar-body">
        <div class="days-of-week">
            <span>Lunes</span>
            <span>Martes</span>
            <span>Miércoles</span>
            <span>Jueves</span>
            <span>Viernes</span>
            <span>Sábado</span>
            <span>Domingo</span>
        </div>
        <div class="calendar-grid">
            <!-- Las fechas se generarán con JavaScript -->
        </div>
    </div>

    <div class="available-hours">
        <h3>Horas disponibles</h3>
        <ul id="availableHoursList">
            <!-- Las horas disponibles se añadirán con JavaScript -->
        </ul>
    </div>
</div>

<div id="availabilityModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <h3>Agendar Asesoría</h3>
        <p class="clarification-text">Si el abogado no te ha respondido tu pregunta, no podrás agendar una asesoría con él.</p>

        <form id="availabilityForm">
            <input type="hidden" id="modalDate" name="date">
            <input type="hidden" id="modalTime" name="time">

            <label for="modalQuestion">Selecciona tu pregunta:</label>
            <select id="modalQuestion" name="question_id">
                <option value="">Cargando preguntas...</option>
            </select>

            <label for="modalAnswer">Selecciona la respuesta del abogado:</label>
            <select id="modalAnswer" name="answer_id">
                <option value="">Selecciona una pregunta primero</option>
            </select>

            <button type="button" id="confirmBookingButton">Confirmar</button>

            <!-- Aclaración debajo del formulario -->
        </form>
    </div>
</div>

<div id="zoomLinkContainer"></div>



@endsection

@section('footer')
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/Calendar.css') }}" />

@endpush

@push('scripts')
<script src="{{ asset('js/layoutLogin.js') }}"></script>
<script src="{{ asset('js/calendar.js') }}"></script>
@endpush
