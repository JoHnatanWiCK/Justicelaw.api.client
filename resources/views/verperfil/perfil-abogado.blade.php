@extends('layouts.layoutLogin')

@section('title', 'Perfil Abogado')

@section('nav')
@endsection

@section('main')
    <section class="content">

        <div class="perfil">
            <div class="banner">
                <img id="fotoPerfilVer" src="../../img/fotoPerfil.jfif" alt="foto" />
                <div class="content-abogado">
                    <h3 id="nombreAbogado"></h3>
                </div>

                <!-- Botón para ver calendario de asesorías -->
                <button id="verCalendarioBtn" class="calendario-btn">Ver calendario de asesorías</button>

            </div>

            <nav class="profile-nav">
                <ul>
                    <li><a href="#sobre-mi" data-target="sobre-mi" class="active" style="font-size: 14px">Sobre mi</a></li>
                    <li><a href="#hoja-de-vida" data-target="hoja-de-vida" style="font-size: 14px">Hoja de vida</a></li>
                    <li><a href="#reseñas" data-target="reseñas" style="font-size: 14px">Reseñas</a></li>
                </ul>
                <div class="indicator"></div>
            </nav>

            <section class="section" id="sobre-mi">
                <div class="container">
                    <div class="left-column">
                        <div class="datos">
                            <div class="editar-datos">
                                <h2>Información Personal</h2>
                            </div>
                            <div class="telefonoWeb">
                                <h4>Telefono:</h4>
                                <p></p>
                            </div>

                            <div class="correoWeb">
                                <h4>Email:</h4>
                                <p></p>
                            </div>
                            <div class="paisWeb">
                                <h4>Pais:</h4>
                                <p></p>
                            </div>
                            <div class="ciudadWeb">
                                <h4>Ciudad:</h4>
                                <p></p>
                            </div>
                        </div>


                    </div>
                    <hr>

                    <div class="right-column">
                        <div class="presentation">
                            <h2>Presentación</h2>
                            <p id="biografiaUsuario"></p>
                        </div>
                        <div class="practice">
                            <h2>Áreas de práctica</h2>
                            <div class="civ">

                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section id="hoja-de-vida" class="section" style="width:98%;">

            </section>

            {{-- comienza aqui --}}
            <section id="reseñas" class="section">
                <div class="box-reseñas">
                    <h4>Reseñas</h4>
                    <div class="review-container">
                        <div class="input">

                            <input type="text" name="inputReseña" id="inputReseña" placeholder="Escribe tu reseña..."
                                maxlength="250">
                            <div id="charCounter">0/250 caracteres</div>
                        </div>
                        <a id="boton-publicar">Publicar</a>
                    </div>
                    <div id="reseñasPublicadas" class="reseñas-publicadas">

                    </div>
                </div>

            </section>

            {{-- termina aqui --}}
    </section>


@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/lawyersProfile.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/verPerfilAbogado.js') }}"></script>
@endpush
