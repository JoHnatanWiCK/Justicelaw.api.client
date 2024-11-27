@extends('layouts.layoutadmin')

@section('title', 'Dashboard')

@section('nav')
   
@endsection
@php
    $isGrid = true; 
@endphp
@section('main-content')
<section class="title-recent-profiles">
    <h3>Perfiles creados recientemente</h3>
    <p>Aquí podrás revisar los datos de los perfiles</p>
</section>

<section class="profiles-list-container">
    <div class="profiles-list">
        <!-- Los perfiles se cargarán dinámicamente aquí -->
    </div>
</section>

<!-- Detalles del perfil (oculto inicialmente) -->
<section class="profile-details" id="profileDetailsSection" style="display: none;">
    <div class="profile-overview">
        <img src="../../img/perfilcontacto.png" alt="Avatar" class="per" id="profileAvatar">
        <h4 id="profileName">Jesus Lopez</h4>
        <p id="profileEmail">example@gmail.com</p>
        <a href="#" class="pdf-link" id="profileResumeLink">Hoja de Vida.pdf</a>
        <div class="account-details">
            <div>
                <span id="profileReports">Reportes: 0</span>
                <a href="#">Ver</a>
            </div>
            <div>
                <span id="profileComments">Comentarios: 2</span>
                <a href="#">Ver</a>
            </div>
            <div>
                <span id="profileReviews">Reseñas: 4</span>
                <a href="#">Ver</a>
            </div>
        </div>
        <a href="#" class="btn">Ver perfil completo</a>
        <a href="#" class="btn">Bloquear</a>
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
