@extends('layouts.layoutadmin')

@section('title', 'Dashboard')

@section('nav')
   
@endsection
@php
    $isGrid = true; 
@endphp
@section('main-content')
<section class="title-recent-profiles">
    <h3>Usuarios y Abogados creados recientemente</h3>
    <p>Aquí podrás revisar los datos de los usuarios y abogados registrados.</p>
</section>

<section class="profiles-list-container">
    <h4>Usuarios</h4>
    <div class="profiles-list">
        <!-- Los usuarios se cargarán dinámicamente aquí -->
    </div>
    <p id="noUsersMessage" style="display: none;">No hay usuarios registrados recientemente.</p>
</section>

<section class="lawyers-list-container">
    <h4>Abogados</h4>
    <div class="lawyers-list">
        <!-- Los abogados se cargarán dinámicamente aquí -->
    </div>
    <p id="noLawyersMessage" style="display: none;">No hay abogados registrados recientemente.</p>
</section>

<!-- Detalles del perfil (oculto inicialmente) -->
<section class="profile-details" id="profileDetailsSection" style="display: none;">
    <div class="profile-overview">
        <img src="../../img/perfilcontacto.png" alt="Avatar" class="per" id="profileAvatar">
        <h4 id="profileName">Nombre</h4>
        <p id="profileEmail">Correo</p>
        <a href="#" class="pdf-link" id="profileResumeLink">Hoja de Vida.pdf</a>
        <a href="#" class="btn">Ver perfil completo</a>
        <a href="#" class="btn">Bloquear</a>
        <a href="#" class="close-modal" id="closeModal">x</a>

    </div>
</section>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin-profiles.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endpush

@push('scripts')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/adminprofiles.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
@endpush
