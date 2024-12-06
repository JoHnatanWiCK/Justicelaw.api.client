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
<nav>
<h2  style="display: inline-block;">Estado Cuenta: <span class="status">(pendiente)</span></h2>

                        <form action="{{route('api.v1.lawyers.delete',$lawyere['id'])}}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('delete')
                            <button class="reject-btn" type="submit">Rechazar</button>
                            </form>  

                            <form action="{{route('api.v1.lawyers.update',$lawyere['id'])}}" method="POST" class="form" style="display: inline-block;">
        @csrf
        @method('PUT')

        <input type="text" id="name" name="name" class="input-field" maxlength="30" 
           value="{{ $lawyere['name'] }}" required style="display: none;"><br>

    <input type="text" id="last_name" name="last_name" class="input-field" maxlength="50" 
           value="{{ $lawyere['last_names'] }}" required style="display: none;"><br>

    <input id="type_document_id" name="type_document_id" class="input-field" required 
           value="{{ $lawyere['type_document_id'] }}" style="display: none;"> 

    <input type="text" id="document_number" name="document_number" class="input-field" maxlength="10" 
           value="{{ $lawyere['document_number'] }}" required style="display: none;"><br>

    <label for="email" style="display: none;">Correo Electrónico:</label>
    <input type="email" id="email" name="email" class="input-field" maxlength="255" 
           value="{{ $lawyere['email'] }}" required style="display: none;"><br>

    <input type="number" id="verification" name="verification" class="input-field" 
           value="1" style="display: none;"><br>   
        <button class="accept-btn" type="submit">Aceptar</button>
        </form>
        </nav>

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
                            <p><a href="tel:+573133353071"></a>313 33 53 071</p>
                        </div>
                        <div class="account-details">
                            <h4>Detalles de cuenta</h4>
                            <p><strong>Primer nombre:</strong> {{$lawyere['name']}}</p>
                            <p><strong>Primer Apellido:</strong>  {{$lawyere['last_names']}}</p>
                            <p><strong>Numero de documento:</strong> {{$lawyere['document_number']}}</p> 
                        </div>
                        <div class="description">
                            <h4>Descripción</h4>
                            <p>{{ \Illuminate\Support\Str::limit($lp['biography'], 430, '...') }}</p>
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
