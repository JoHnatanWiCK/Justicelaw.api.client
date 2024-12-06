@extends('layouts.layoutadmin')

@section('title', 'Dashboard')

@section('nav')
    <nav>
    </nav>
@endsection
@php
    $isGrid = true; 
@endphp
@section('main-content')

                <div class="left-panel">
                    <div class="solicitudes">
                        <h2>Solicitudes perfiles (Abogado)</h2>
                        <p>Total pendientes</p>
                        <ul class="pending-requests">
                            @foreach($lawyers as $abogados)
                            @if ($abogados['verification']==0)
                            <li><img src="images/foto.png" alt="User"><a href="verificarabogado/{{$abogados['id']}}"> {{$abogados['name']}} ha solicitado una verificación de usuario</a></li>
                            <!-- Repite para más entradas -->
                            @endif
                           @endforeach
                           
                        
                        </ul>
                    </div>
                </div>
                <div class="right-panel">
                    <div class="status-bar">
                        <h2>Estado Cuenta: <span class="status">(pendiente)</span></h2>
                        <button class="reject-btn">Rechazar</button>
                        <button class="accept-btn">Aceptar</button>
                    </div>
                    <div class="profile">
                        <div class="profile-info">
                            <img src="images/foto.png" alt="David Astrada" class="fotoperfil">
                            <h3>David Astrada</h3>
                            <a href="David.pdf" class="pdf-download">
                                <img src="pdf-icon.png" alt="PDF"> David hv.pdf (1.4 MB)
                            </a>
                            <p><strong>Popayan (Cauca), Colombia</strong></p>
                            <p><a href="mailto:daviduolingo@gmail.com">daviduolingo@gmail.com</a></p>
                            <p><a href="tel:+573133353071">+57 313 33 53 071</a></p>
                        </div>
                       
                    </div>
                </div>


        
 

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/verificar-abogado.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endpush

@push('scripts')
    
@endpush
