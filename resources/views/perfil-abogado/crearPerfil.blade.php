@extends('layouts.layoutAbogado')

@section('title', 'Perfil Abogado')

@section('nav')
@endsection

@section('main')

    <section class="content">
        <nav class="sidebar">
            <ul class="icon-list">
                <li>
                    <a href="#" id="perfilSidebar" class="icon-container">
                        <i class="fa-regular fa-user"></i>
                    </a>
                </li>
                {{--<li>
                    <a href="{{route('historialAbogado')}}" class="icon-container">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                    </a>
                </li>--}}
                <li>
                    <a href="{{route('configuracionAbogado')}}" class="icon-container">
                        <i class="fa-solid fa-gear"></i>
                    </a>
                </li>
                <li>
                    <a href="{{route('noti-lawyer')}}" class="icon-container">
                        <i class="fa-regular fa-bell"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="icon-container">
                        <i class="fa-regular fa-calendar"></i>
                    </a>
                </li>
                <li>
                    <a href="#" id="logoutButton" class="icon-container">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="perfil">
            <div class="perfil-contenedor">
                <div class="banner">
                    <img id="fotoPerfilAbogado" src="../../img/fotoPerfil.png" alt="foto" />

                    <div class="content-abogado">
                        <h3 id="userName"></h3>

                    </div>
                 
                </div>
                <!-- Modal para Editar Perfil -->
                <div id="editModal" class="modal-edit">
                    <div class="modal-edit-content">
                        <span class="modal-edit-close">&times;</span>
                        <h4>Editar Perfil Abogado</h4>
                        <form id="editForm">
                            <div class="modal-edit-field">
                                <label for="nombre">Nombre:</label>
                                <input type="text" id="nombre" placeholder="Introduce tu nombre" required>
                            </div>
                            <div class="modal-edit-field">
                                <label for="contacto">Contacto:</label>
                                <input type="text" id="contacto" placeholder="Introduce tu contacto" required>
                            </div>
                            <div class="modal-edit-field">
                                <label for="dni">DNI:</label>
                                <input type="text" id="dni" placeholder="Introduce tu DNI" required>
                            </div>
                            <div class="modal-edit-field">
                                <label for="consultorio">Nombre Consultorio:</label>
                                <input type="text" id="consultorio" placeholder="Introduce nombre del consultorio"
                                    required>
                            </div>
                            <div class="modal-edit-field">
                                <label for="ciudad">Ciudad:</label>
                                <input type="text" id="ciudad" placeholder="Introduce tu ciudad" required>
                            </div>
                            <div class="modal-edit-field">
                                <label for="pais">País:</label>
                                <input type="text" id="pais" placeholder="Introduce tu país" required>
                            </div>
                            <div class="modal-edit-field">
                                <label for="biografia">Biografía:</label>
                                <textarea id="biografia" placeholder="Introduce tu biografía" required></textarea>
                            </div>
                            <button type="submit">Guardar Cambios</button>
                        </form>
                    </div>
                </div>


                <nav class="profile-nav">
                    <ul>
                        <li><a href="#sobre-mi" data-target="sobre-mi" class="active" style="font-size: 14px">Sobre
                                mi</a></li>
                        <li><a href="#hoja-de-vida" data-target="hoja-de-vida" style="font-size: 14px">Hoja de vida</a>
                        </li>
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

                        <div class="right-column">
                            <div class="presentation">
                                <h2>Completa tu perfil</h2>
                                <p>Recuerda añadir más información a tu perfil para que sea más explícito e interesante para
                                    los clientes.</p>

                            </div>


                            <form id="profileForm">
                                <!-- Barra de progreso -->
                                <div class="progress-bar">
                                    <div class="step completed">1</div>
                                    <div class="line"></div>
                                    <div class="step">2</div>
                                    <div class="line"></div>
                                    <div class="step">3</div>
                                    <div class="line"></div>
                                    <div class="step">4</div>
                                </div>

                                <div class="step-content" id="step-1">
                                    <h2 id="practice-title">Agrega tu biografía personal</h2>
                                    <p id="practice-description">Asegúrate de incluir una breve biografía que destaque tu experiencia, áreas de especialización y filosofía profesional.</p>
                                    <textarea id="agregarBiografia" placeholder="Escribe tu biografía aquí (Minimo 1000 caracteres)"></textarea>
                                    <div class="error-message" id="biografiaError" style="display:none;"></div>
                                </div>

                                <div class="step-content" id="step-2" style="display: none;">
                                    <h2 id="practice-title">Agrega una foto de perfil</h2>
                                    <p id="practice-description">Brindale más confianza a tus clientes. Sube una foto profesional. La foto debe ser en formato JPEG, PNG o JPG y debe ser menor a 2MB. </p>
                                    <input type="file" id="fotoPerfilInput" />
                                    <div class="error-message" id="fotoPerfilError" style="display:none;"></div>
                                </div>

                                <div class="step-content" id="step-3" style="display: none;">
                                    <h2 id="practice-title">Agrega tus habilidades</h2>
                                    <p id="practice-description">Selecciona tus habilidades y áreas de especialización.</p>
                                    <div id="areasContainer"></div>
                                    <div class="error-message" id="habilidadesError" style="display:none;"></div>
                                </div>

                                <div class="step-content" id="step-4" style="display: none;">
                                    <h2 id="practice-title">¡Felicidades, perfil completo!</h2>
                                    <p id="practice-description">Has completado todos los pasos. Tu perfil está listo y puedes comenzar a usar la plataforma.</p>
                                </div>

                                <div class="button-group">
                                    <button type="button" id="atrasBtn" style="display: none;">Atrás</button>
                                    <button type="button" id="continuarBtnWeb">Continuar</button>
                                </div>
                            </form>




                        </div>
                    </div>

                  
                </section>


                <section id="hoja-de-vida" class="section">
                    <iframe class="iframeLarge" src="" frameborder="0"></iframe>
            
                      </section>

                <section id="reseñas" class="section">
                    <div class="box-reseñas">
                        <h4>Reseñas</h4>
                        <p>No tienes ninguna reseña todavía</p>
                    </div>
                    
                </section>
        
            </section>



    <div class="toast">
        <div class="toast-content">
            <img src="../../img/check.png" class="check" alt="check">
            <div class="message">
                <span class="text text-1">Datos Guardados</span>
                <span class="text text-2">¡Perfil actualizado exitosamente!</span>
            </div>
        </div>
        <i class="fa-solid fa-xmark close"></i>
        <div class="progress"></div>
    </div>

@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="css/perfilAbogado.css">
@endpush

@push('scripts')
    <script src="js/perfilAbogado.js"></script>
@endpush
