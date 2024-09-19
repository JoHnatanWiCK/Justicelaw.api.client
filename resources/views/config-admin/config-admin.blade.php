@extends('layouts.layoutadmin')

@section('title', 'Dashboard')

@section('nav')
   
@endsection

@section('main')
<section class="content">
    <div class="container-sect">
        <div class="header-container">               
          <h1>Configuración</h1>              
          <div class="search-bar">               
            <input type="text" placeholder="Buscar...">               
          </div>
        </div>               
        <div class="sections">               
          <div class="section">               
            <h2>Herramientas y Recursos</h2>               
            <ul>                
              <li>Configuración de la cuenta</li>               
              <li>Permisos</li>               
            </ul>               
          </div>   
          <div class="section">   
            <h2>Preferencias</h2>
            <ul>         
              <li>Idioma y Región</li>               
            </ul>               
          </div>              
          <div class="section">              
            <h2>Normas Comunitarias y Políticas Legales</h2>               
            <ul>          
              <li>Condiciones del servicio</li>               
              <li>Política de Privacidad</li>                
              <li>Política de Cookies</li>               
              <li>Normas Comunitarias</li>               
            </ul>               
          </div>               
        </div>
      </div>
</section>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/config-admin.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endpush

@push('scripts')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/home.js') }}"></script>
@endpush
