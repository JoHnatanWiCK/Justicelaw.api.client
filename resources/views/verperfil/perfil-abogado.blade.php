@extends('layouts.layoutLogin')

@section('title', 'Perfil usuario')

@section('nav')
@endsection

@section('main')
<section class="content">
    <div class="perfil">
      <div class="banner">
      <img id="fotoPerfilVer" src="../../img/fotoPerfil.jfif" alt="foto" />
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
    <div class="act">
      <h2>Actividad</h2>
      <div class="activity-content">
          <img src="../../img/mas.png" alt="más">
          <h4>Ver el historial de asesoramiento legal</h4>
      </div>
      <p>Las preguntas que el abogado responda en el foro aparecerán aquí.</p>
      </div>
    </section>

    <section id="hoja-de-vida" class="section">
        <!-- Aquí se insertará el contenido dinámicamente (iframe o enlace de descarga) -->
      </section>

{{-- comienza aqui --}}
<section id="reseñas" class="section">
    <div class="box-reseñas">
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
            <a id="boton-publicar">Publicar</a>
        </div>
        <div id="reseñasPublicadas" class="reseñas-publicadas">
            <!-- Aquí se mostrarán las reseñas publicadas -->
        </div>
    </div>
</section>

{{-- termina aqui --}}
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
        @endsection

        @section('footer')
        @endsection

        @push('styles')
        <link rel="stylesheet" href="{{ asset('css/lawyersProfile.css') }}">
        @endpush

        @push('scripts')
        <script src="{{ asset('js/verPerfilAbogado.js') }}"></script>


        @endpush
