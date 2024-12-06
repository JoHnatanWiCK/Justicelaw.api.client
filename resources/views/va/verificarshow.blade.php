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
                        <p>Total pendientes: <strong>(5004)</strong></p>
                        <ul class="pending-requests">
                            @foreach($lawyers as $lawyer)
                            @if ($lawyer['verification']==0)
                            <li><img src="images/foto.png" alt="User"><a href="{{route('api.v1.verificarabogado.show', $lawyer['id'])}}"> {{$lawyer['name']}} ha solicitado una verificación de usuario</a></li>
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
                        @foreach($lawyerPofiles as $lp)

                        @if ($lp['lawyer_id']==$lawyere['id'])
                        <div class="profile-info">
                            <img src="../../img/fotoPerfil.jfif" alt="David Astrada" class="fotoperfil">
                            <h3>{{$lawyere['name']}}</h3>
                            <a href="David.pdf" class="pdf-download">
                                <img src="pdf-icon.png" alt="PDF"> David hv.pdf (1.4 MB)
                            </a>
                            <p><strong>Popayan (Cauca), Colombia</strong></p>
                            <p><a href="">{{$lawyere['email']}}</a></p>
                            <p><a href="tel:+573133353071"></a>{{$lp['email']}}</p>
                        </div>
                        <div class="account-details">
                            <h4>Detalles de cuenta</h4>
                            <p><strong>Primer nombre:</strong> {{$lawyere['name']}}</p>
                            <p><strong>Primer Apellido:</strong>  {{$lawyere['last_names']}}</p>
                            <p><strong>Numero de documento:</strong> {{$lawyere['document_number']}}</p> 
                        </div>
                        <div class="description">
                            <h4>Descripción</h4>
                            <p>{{$lp['biography']}}</p>
                        </div>
                  @endif
                  @endforeach
                    </div>
                </div>


        
 

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/verificar-abogado.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endpush

@push('scripts')
    
@endpush
