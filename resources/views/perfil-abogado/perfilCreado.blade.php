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
            <img id="fotoPerfilAbogado" src="../../img/fotoPerfil.jfif" alt="foto" />

            <div class="content-abogado">
                <h3 id="userName"></h3>
           
            </div>
            <a href="#" id="editLink"><i
                class="fa-regular fa-pen-to-square"></i></a>

            </div>

            <div id="editModal" class="modal-edit">
                <div class="modal-edit-content">
                    <span class="modal-edit-close">&times;</span>
                    <h4>Editar Perfil Abogado</h4>
                    <form id="editForm">

                        <!-- Campo para actualizar foto de perfil -->
                        <div class="modal-edit-field">
                            <label for="fotoPerfil">Foto de Perfil:</label>
                            <input type="file" id="fotoPerfilEdit" accept="image/*">
                            <div class="foto-preview-container">
                                <img id="fotoPreview" src="" alt="Foto actual" class="foto-preview">
                            </div>
                        </div>

                        <!-- Campo de biografía -->
                        <div class="modal-edit-field">
                            <label for="biografia">Biografía:</label>
                            <textarea id="biografia" placeholder="Introduce tu biografía" required></textarea>
                        </div>

                        <!-- Campo para áreas de práctica -->
                        <div class="modal-edit-field">
                            <label for="areasPractica">Áreas prácticas:</label>
                            <div id="areasContainer"></div>
                        </div>

                        <button type="submit" class="modal-edit-btn">Guardar Cambios</button>
                    </form>
                </div>
            </div>


            <nav class="profile-nav">
              <ul>
                <li><a href="#sobre-mi"  data-target="sobre-mi" class="active" style="font-size: 14px">Sobre mi</a></li>
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



          <section id="hoja-de-vida" class="section">
        <iframe class="iframeLarge" src="" frameborder="0"></iframe>

          </section>

          <section id="reseñas" class="section">
            <div class="box-reseñas">
                <h4>Reseñas</h4>
                <div id="reseñasPublicadas" class="reseñas-publicadas">
        
                </div>
            </div>
            
        </section>

    </section>

       

        <div class="toast">
            <div class="toast-content">
                <img src="../../img/check.png"  class="check" alt="check">
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
        <script src="js/abogadoCreado.js"></script>
        @endpush
