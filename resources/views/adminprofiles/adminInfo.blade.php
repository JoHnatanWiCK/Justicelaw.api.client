@extends('layouts.layoutadmin')

@section('title', 'Dashboard')

@section('nav')
   
@endsection
@php
    $isGrid = false; 
@endphp
@section('main-content')
<h1>Formulario para Subir Información</h1>
    <div id="message"></div>
    <form id="informationForm">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="body">Descripción</label>
            <textarea id="body" name="body" rows="5" required></textarea>
        </div>

        <div class="form-group">
            <label for="cover_photo">Foto de Portada</label>
            <input type="file" id="cover_photo" name="cover_photo" accept="image/*" required>
        </div>

        <div class="form-group">
            <label for="category">Categoría</label>
            <select id="category" name="category" required>
                <option value="comercial">Comercial</option>
                <option value="laboral">Laboral</option>
                <option value="familiar">Familiar</option>
                <option value="penal">Penal</option>
                <option value="civil">Civil</option>
                <option value="inmobiliario">Inmobiliario</option>
            </select>
        </div>

        <button type="submit">Guardar Información</button>
    </form>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin-profiles.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endpush

@push('scripts')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/adminInfo.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
@endpush
