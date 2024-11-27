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
                        <div class="profile-info">
                            <img src="../../img/fotoPerfil.jfif" alt="David Astrada" class="fotoperfil">
                            <h3>{{$lawyere['name']}}</h3>
                            <a href="David.pdf" class="pdf-download">
                                <img src="pdf-icon.png" alt="PDF"> David hv.pdf (1.4 MB)
                            </a>
                            <p><strong>Popayan (Cauca), Colombia</strong></p>
                            <p><a href="mailto:daviduolingo@gmail.com">daviduolingo@gmail.com</a></p>
                            <p><a href="tel:+573133353071">+57 313 33 53 071</a></p>
                        </div>
                        <div class="account-details">
                            <h4>Detalles de cuenta</h4>
                            <p><strong>Primer nombre:</strong> {{$lawyere['name']}}</p>
                            <p><strong>Primer Apellido:</strong> Astrada</p>
                            <p><strong>Fecha nacimiento:</strong> 16/04/1998</p>
                            <p><strong>Género:</strong> Masculino</p>
                        </div>
                        <div class="description">
                            <h4>Descripción</h4>
                            <p>Soy una  persona proactiva, organizada y responsable, con  buenas relaciones interpersonales, con una sólida formación académica y experiencia  práctica en diversas áreas del derecho.  Apasionada por la  justicia y comprometida con defender los derechos de los clientes de manera ética y eficaz. Experta en la investigación legal, redacción de documentos legales y representación en procedimientos judiciales y administrativos.</p>
                        </div>
                        <div class="id-document">
                            <h4>Documento de identidad</h4>
                            <img src="images/fotodocumento.png" alt="Documento de identidad">
                        </div>
                        <div class="document-details">
                            <h4>Detalles de documento</h4>
                            <p><strong>Tipo documento:</strong> Cedula ciudadana</p>
                            <p><strong>Fecha expedición:</strong> 20/04/2016</p>
                            <p><strong>Lugar expedición:</strong> Popayan, cauca</p>
                            <p><strong>Número documento:</strong> 011011010110001</p>
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
