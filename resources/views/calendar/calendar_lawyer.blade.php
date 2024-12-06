@extends('layouts.layoutAbogado')

@section('title', 'Calendario Abogado')

@section('nav')
<!-- Aquí iría el menú de navegación si lo deseas -->
@endsection

@section('main')
<main>
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
            <span class="close">&times;</span>
            <h3>Agendar Disponibilidad</h3>
            <form id="availabilityForm">
                <input type="hidden" id="modalDate" name="date">
                <label for="modalStartTime">Hora inicio:</label>
                <input type="time" id="modalStartTime" name="startTime">
                <label for="modalEndTime">Hora fin:</label>
                <input type="time" id="modalEndTime" name="endTime">
                <button type="submit">Confirmar</button>
            </form>
        </div>
    </div>

</main>
@endsection

@section('footer')
<!-- Aquí puedes incluir tu footer -->
@endsection

@push('styles')
<link rel="stylesheet" href="css/calendar_lawyer.css">
@endpush

@push('scripts')
<script src="js/calendar_lawyer.js"></script>
@endpush
