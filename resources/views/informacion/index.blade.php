@extends('layouts.layoutLogin')

@section('title', 'Información')

@section('nav')
@endsection

@section('main')
<div class="container">
    <h1 class="text-center">Listado de Artículos</h1>
    <div class="row" id="information-container">
        <!-- Aquí se insertarán las tarjetas dinámicamente mediante JavaScript -->
    </div>
</div>
@endsection

@section('footer')
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/informaciones.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/informacion.js') }}"></script>
@endpush
