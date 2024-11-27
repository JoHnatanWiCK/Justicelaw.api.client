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
                    <li>
                        <a href="{{route('historialAbogado')}}" class="icon-container">
                            <i class="fa-solid fa-clock-rotate-left"></i>
                        </a>
                    </li>
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
            <div class="stars">
              <img src="../../img/star-solid.svg" alt="star">
              <img src="../../img/star-solid.svg" alt="star">
              <img src="../../img/star-solid.svg" alt="star">
              <img src="../../img/star-solid.svg" alt="star">
              <img src="../../img/star-solid-white.svg" alt="star white">
            </div>
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






            {{-- <a href="#modal-foto"><img id="circuloPerfil" src="../../img/circuloPerfil.png" alt="circuloPerfil"></a>
                <div id="modal-foto" class="modalDialog">
                    <div>
                      <a href="#close" title="Close" class="close"><i class="fa-solid fa-xmark close"></i></a>
                      <h2>¡Haz que tu perfil sea más <br> personal!</h2>
                      <p>Sube una foto de perfil para que te reconozcan fácilmente.</p>
                      <img id="avatarUno" src="../../img/avatarUno.png" alt="avatarUno">
                      <img id="avatarTres" src="../../img/avatarTres.png" alt="avatarTres">
                      <img id="avatarDos" src="../../img/avatarDos.png" alt="avatarDos">
                      <div class="subir-foto" id="seleccionarFoto">
                        <input type="file" name="seleccionarFoto" aria-label="Subir foto" onchange="handleFileSelection()">
                      </div>
                    </div>
                  </div> --}}

            <nav class="profile-nav">
              <ul>
                <li><a href="#sobre-mi"  data-target="sobre-mi" class="active">Sobre mi</a></li>
            <li><a href="#hoja-de-vida" data-target="hoja-de-vida">Hoja de vida</a></li>
            <li><a href="#reseñas" data-target="reseñas" >Reseñas</a></li>
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
          <div class="act">
            <h2>Actividad</h2>
            <div class="activity-content">
                <img src="../../img/mas.png" alt="más">
                <h4>Ver el historial de asesoramiento legal</h4>
            </div>
            <p>Las preguntas que respondas en el foro aparecerán aquí.</p>
            </div>
          </section>



          <section id="hoja-de-vida" class="section">
        <iframe class="iframeLarge" src="" frameborder="0"></iframe>

          </section>

        <section id="reseñas" class="section">
         <div class="box-reseñas">
          <h4>Reseñas</h4>

            <div class="comment-section">
              <div class="comment">
                  <div class="comment-header">
                      <img src="../../img/fotoPerfil.png" alt="Foto de perfil" class="profile-img">
                      <div class="user-info">
                          <strong>Alfonso Juan</strong>
                          <p>17 de marzo del 2024</p>
                      </div>
                  </div>
                  <div class="comment-body">
                      <div class="stars-review">
                          <span class="star-review">&#9733;</span>
                          <span class="star-review">&#9733;</span>
                          <span class="star-review">&#9733;</span>
                          <span class="star-review">&#9733;</span>
                          <span class="star empty">&#9733;</span>
                      </div>
                      <p>Recomendado totalmente para temas legales. Brinda buen servicio, aunque la respuesta fue lenta.</p>
                  </div>
                  <div class="comment-footer">
                      <p>¿Te parece útil el comentario?
                          <a href="#" class="useful">Sí (0)</a>
                          <a href="#" class="not-useful">No (0)</a>
                      </p>
                  </div>
              </div>
            </div>
              <div class="comment-section">
                <div class="comment">
                    <div class="comment-header">
                        <img src="../../img/fotoPerfil.png" alt="Foto de perfil" class="profile-img">
                        <div class="user-info">
                            <strong>Alfonso Juan</strong>
                            <p>17 de marzo del 2024</p>
                        </div>
                    </div>
                    <div class="comment-body">
                        <div class="stars-review">
                            <span class="star-review">&#9733;</span>
                            <span class="star-review">&#9733;</span>
                            <span class="star-review">&#9733;</span>
                            <span class="star-review">&#9733;</span>
                            <span class="star empty">&#9733;</span>
                        </div>
                        <p>Recomendado totalmente para temas legales. Brinda buen servicio, aunque la respuesta fue lenta.</p>
                    </div>
                    <div class="comment-footer">
                        <p>¿Te parece útil el comentario?
                            <a href="#" class="useful">Sí (0)</a>
                            <a href="#" class="not-useful">No (0)</a>
                        </p>
                    </div>
                </div>
              </div>
                <div class="comment-section">
                  <div class="comment">
                      <div class="comment-header">
                          <img src="../../img/fotoPerfil.png" alt="Foto de perfil" class="profile-img">
                          <div class="user-info">
                              <strong>Alfonso Juan</strong>
                              <p>17 de marzo del 2024</p>
                          </div>
                      </div>
                      <div class="comment-body">
                          <div class="stars-review">
                              <span class="star-review">&#9733;</span>
                              <span class="star-review">&#9733;</span>
                              <span class="star-review">&#9733;</span>
                              <span class="star-review">&#9733;</span>
                              <span class="star empty">&#9733;</span>
                          </div>
                          <p>Recomendado totalmente para temas legales. Brinda buen servicio, aunque la respuesta fue lenta.</p>
                      </div>
                      <div class="comment-footer">
                          <p>¿Te parece útil el comentario?
                              <a href="#" class="useful">Sí (0)</a>
                              <a href="#" class="not-useful">No (0)</a>
                          </p>
                      </div>
                  </div>
                </div>
                  <div class="comment-section">
                    <div class="comment">
                        <div class="comment-header">
                            <img src="../../img/fotoPerfil.png" alt="Foto de perfil" class="profile-img">
                            <div class="user-info">
                                <strong>Alfonso Juan</strong>
                                <p>17 de marzo del 2024</p>
                            </div>
                        </div>
                        <div class="comment-body">
                            <div class="stars-review">
                                <span class="star-review">&#9733;</span>
                                <span class="star-review">&#9733;</span>
                                <span class="star-review">&#9733;</span>
                                <span class="star-review">&#9733;</span>
                                <span class="star empty">&#9733;</span>
                            </div>
                            <p>Recomendado totalmente para temas legales. Brinda buen servicio, aunque la respuesta fue lenta.</p>
                        </div>
                        <div class="comment-footer">
                            <p>¿Te parece útil el comentario?
                                <a href="#" class="useful">Sí (0)</a>
                                <a href="#" class="not-useful">No (0)</a>
                            </p>
                        </div>
                    </div>
                  </div>
                    <div class="comment-section">
                      <div class="comment">
                          <div class="comment-header">
                              <img src="../../img/fotoPerfil.png" alt="Foto de perfil" class="profile-img">
                              <div class="user-info">
                                  <strong>Alfonso Juan</strong>
                                  <p>17 de marzo del 2024</p>
                              </div>
                          </div>
                          <div class="comment-body">
                              <div class="stars-review">
                                  <span class="star-review">&#9733;</span>
                                  <span class="star-review">&#9733;</span>
                                  <span class="star-review">&#9733;</span>
                                  <span class="star-review">&#9733;</span>
                                  <span class="star empty">&#9733;</span>
                              </div>
                              <p>Recomendado totalmente para temas legales. Brinda buen servicio, aunque la respuesta fue lenta.</p>
                          </div>
                          <div class="comment-footer">
                              <p>¿Te parece útil el comentario?
                                  <a href="#" class="useful">Sí (0)</a>
                                  <a href="#" class="not-useful">No (0)</a>
                              </p>
                          </div>
                      </div>
                    </div>
          </div>
        </div>
          </div>
        </div>
         </div>
        </section>


        <section class="abogado-small">
          <div class="perfil-abogado">
          <div class="banner-small">
            <i class="fa-solid fa-chevron-left" onclick="window.history.back()"></i>
            <img id="fotoIcon" src="../../img/fotoPerfil.jfif" alt="foto" />
            <div class="content-abogado">
            <h3>David Astrada</h3>
            <div class="stars">
              <img src="../../img/star-solid.svg" alt="star">
              <img src="../../img/star-solid.svg" alt="star">
              <img src="../../img/star-solid.svg" alt="star">
              <img src="../../img/star-solid.svg" alt="star">
              <img src="../../img/star-solid-white.svg" alt="star white">

            </div>
            </div>
            </div>
            <nav class="profile-nav-sm">
              <ul>
                <li><a href="#sobre-mi"  data-target="sobre-mi" class="active">Sobre mi</a></li>
            <li><a href="#hoja-de-vida" data-target="hoja-de-vida">Hoja de vida</a></li>
            <li><a href="#reseñas" data-target="reseñas" >Reseñas</a></li>
              </ul>
              <div class="indicator"></div>
            </nav>

            <section class="section-mov" id="sobre-mi">

              <div class="presentation">
                <p>Especializado en derecho civil y familiar, mi objetivo
                  es proporcionar soluciones legales efectivas y comprensibles
                  para mis clientes. Fuera del trabajo, disfruto de la lectura y
                  el tiempo al aire libre. Estoy aquí para ayudarte con tus necesidades
                  legales.</p>
            </div>
            <div class="container">

              <div class="left-movil">
                  <div class="datos-movil">
                      <h2>Información Personal</h2>
                      <p>Contacto: &ensp;&ensp;+57 3132307635</p>
                      <p>DNI: &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;1061702424</p>
                      <p>Email: &ensp;&ensp;&ensp;&ensp;davidastr45@gmail.com</p>
                      <p>País: &ensp;&ensp;&ensp;&ensp;&ensp;Colombia</p>
                      <p>Ciudad: &ensp;&ensp;&ensp;Popayán</p>
                      <p>Nombre <br> Consultorio: &ensp;&ensp;LeyEs</p>
                  </div>
              </div>
              <hr>
              <div class="right-movil">

                  <div class="practice-movil">
                      <h2>Áreas de práctica</h2>
                      <div class="civ-movil">
                          <div class="box-movil">
                              <div class="practice-movil civil">
                                  <img src="../../img/logoCivil.png" alt="Derecho civil">
                              </div>
                              <p class="practice-text">Derecho civil</p>
                          </div>
                          <div class="box-movil">
                              <div class="practice-movil familiar">
                                  <img src="../../img/derechofamiliar.png" alt="Derecho familiar">
                              </div>
                              <p class="practice-text">Derecho familiar</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="act-movil">
            <h2>Actividad</h2>
            <div class="activity-movil">
                <img src="../../img/mas.png" alt="más">
                <h4>Ver el historial de asesoramiento legal</h4>
            </div>
            <p>Las preguntas que el abogado responda en el foro aparecerán aquí.</p>
            </div>
          </section>
        </div>


        <section id="hoja-de-vida" class="section-mov">
          <iframe class="iframeMov" src="https://drive.google.com/file/d/1hCQs9GVqTZRmz5LOQNM8-HLn9M25Dblk/preview" frameborder="0"></iframe>

            </section>


        <section id="reseñas" class="section-mov">
          <div class="movil-reseñas">
           <h4>Reseñas</h4>
           <img id="fotoReseña" src="../../img/fotoPerfil.png" alt="Perfil" class="profile-img">
           <div class="review-container">
             <div class="input">
               <div class="star-container">
                 <span class="star" data-value="1">&#9733;</span>
                 <span class="star" data-value="2">&#9733;</span>
                 <span class="star" data-value="3">&#9733;</span>
                 <span class="star" data-value="4">&#9733;</span>
                 <span class="star" data-value="5">&#9733;</span>
               </div>

               <input type="text" name="inputReseña" id="inputReseña" placeholder="Escribe tu reseña...">

             </div>
             <a id="boton-publicar" href="../ver_perfil/reseñaPublicada.html">Publicar</a>
             </div>

             <div class="comment-section">
               <div class="comment">
                   <div class="comment-header">
                       <img src="../../img/fotoPerfil.png" alt="Foto de perfil" class="profile-img">
                       <div class="user-info">
                           <strong>Alfonso Juan</strong>
                           <p>17 de marzo del 2024</p>
                       </div>
                   </div>
                   <div class="comment-body">
                       <div class="stars-review">
                           <span class="star-review">&#9733;</span>
                           <span class="star-review">&#9733;</span>
                           <span class="star-review">&#9733;</span>
                           <span class="star-review">&#9733;</span>
                           <span class="star empty">&#9733;</span>
                       </div>
                       <p>Recomendado totalmente para temas legales. Brinda buen servicio, aunque la respuesta fue lenta.</p>
                   </div>
                   <div class="comment-footer">
                       <p>¿Te parece útil el comentario?
                           <a href="#" class="useful">Sí (0)</a>
                           <a href="#" class="not-useful">No (0)</a>
                       </p>
                   </div>
               </div>
             </div>
               <div class="comment-section">
                 <div class="comment">
                     <div class="comment-header">
                         <img src="../../img/fotoPerfil.png" alt="Foto de perfil" class="profile-img">
                         <div class="user-info">
                             <strong>Alfonso Juan</strong>
                             <p>17 de marzo del 2024</p>
                         </div>
                     </div>
                     <div class="comment-body">
                         <div class="stars-review">
                             <span class="star-review">&#9733;</span>
                             <span class="star-review">&#9733;</span>
                             <span class="star-review">&#9733;</span>
                             <span class="star-review">&#9733;</span>
                             <span class="star empty">&#9733;</span>
                         </div>
                         <p>Recomendado totalmente para temas legales. Brinda buen servicio, aunque la respuesta fue lenta.</p>
                     </div>
                     <div class="comment-footer">
                         <p>¿Te parece útil el comentario?
                             <a href="#" class="useful">Sí (0)</a>
                             <a href="#" class="not-useful">No (0)</a>
                         </p>
                     </div>
                 </div>
               </div>
                 <div class="comment-section">
                   <div class="comment">
                       <div class="comment-header">
                           <img src="../../img/fotoPerfil.png" alt="Foto de perfil" class="profile-img">
                           <div class="user-info">
                               <strong>Alfonso Juan</strong>
                               <p>17 de marzo del 2024</p>
                           </div>
                       </div>
                       <div class="comment-body">
                           <div class="stars-review">
                               <span class="star-review">&#9733;</span>
                               <span class="star-review">&#9733;</span>
                               <span class="star-review">&#9733;</span>
                               <span class="star-review">&#9733;</span>
                               <span class="star empty">&#9733;</span>
                           </div>
                           <p>Recomendado totalmente para temas legales. Brinda buen servicio, aunque la respuesta fue lenta.</p>
                       </div>
                       <div class="comment-footer">
                           <p>¿Te parece útil el comentario?
                               <a href="#" class="useful">Sí (0)</a>
                               <a href="#" class="not-useful">No (0)</a>
                           </p>
                       </div>
                   </div>
                 </div>
                   <div class="comment-section">
                     <div class="comment">
                         <div class="comment-header">
                             <img src="../../img/fotoPerfil.png" alt="Foto de perfil" class="profile-img">
                             <div class="user-info">
                                 <strong>Alfonso Juan</strong>
                                 <p>17 de marzo del 2024</p>
                             </div>
                         </div>
                         <div class="comment-body">
                             <div class="stars-review">
                                 <span class="star-review">&#9733;</span>
                                 <span class="star-review">&#9733;</span>
                                 <span class="star-review">&#9733;</span>
                                 <span class="star-review">&#9733;</span>
                                 <span class="star empty">&#9733;</span>
                             </div>
                             <p>Recomendado totalmente para temas legales. Brinda buen servicio, aunque la respuesta fue lenta.</p>
                         </div>
                         <div class="comment-footer">
                             <p>¿Te parece útil el comentario?
                                 <a href="#" class="useful">Sí (0)</a>
                                 <a href="#" class="not-useful">No (0)</a>
                             </p>
                         </div>
                     </div>
                   </div>
                     <div class="comment-section">
                       <div class="comment">
                           <div class="comment-header">
                               <img src="../../img/fotoPerfil.png" alt="Foto de perfil" class="profile-img">
                               <div class="user-info">
                                   <strong>Alfonso Juan</strong>
                                   <p>17 de marzo del 2024</p>
                               </div>
                           </div>
                           <div class="comment-body">
                               <div class="stars-review">
                                   <span class="star-review">&#9733;</span>
                                   <span class="star-review">&#9733;</span>
                                   <span class="star-review">&#9733;</span>
                                   <span class="star-review">&#9733;</span>
                                   <span class="star empty">&#9733;</span>
                               </div>
                               <p>Recomendado totalmente para temas legales. Brinda buen servicio, aunque la respuesta fue lenta.</p>
                           </div>
                           <div class="comment-footer">
                               <p>¿Te parece útil el comentario?
                                   <a href="#" class="useful">Sí (0)</a>
                                   <a href="#" class="not-useful">No (0)</a>
                               </p>
                           </div>
                       </div>
                     </div>
           </div>

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
