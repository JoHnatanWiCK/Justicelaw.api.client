@extends('layouts.layoutLogin')

@section('title', 'Perfil usuario')

@section('nav')
@endsection

@section('main')

        <section class="perfil">
            <nav class="sidebar">
                <ul>
                    <div class="titulo">
                        <i class="fa-solid fa-chevron-left" onclick="window.history.back()"></i>
                        <span>Perfil Usuario</span>
                    </div>
                    <li>
                        <a href="{{ route('crearPerfil') }}"><i class="fa-regular fa-user"></i>Información usuario</a>
                    </li>
                    <li>
                        <a href="{{ route('historial') }}"><i class="fa-solid fa-clock-rotate-left"></i>Historial</a>
                    </li>
                    <li>
                        <a href="{{ route('configuracion') }}"><i class="fa-solid fa-gear"></i>Configuracion</a>
                    </li>
                    <li>
                        <a href="{{ route('notificaciones') }}"><i class="fa-regular fa-bell"></i>Notificaciones</a>
                    </li>
                    <li id="cerrarSesion">
                        <a href="{{ route('home') }}"><i class="fa-solid fa-right-from-bracket"></i>Cerrar sesión</a>
                    </li>
                </ul>
            </nav>
            <hr>
            <div class="perfil-content">
                <div class="perfil-main">
                    <img id="fotoPerfil" src="../../img/fotoPerfil.png" alt="fotoPerfil">
                    <a href="#modal-foto"><img id="circuloPerfil" src="../../img/circuloPerfil.png" alt="circuloPerfil">
                        <img id="agregarFoto" src="../../img/camaraAgreFoto.png" alt="camaraAgreFoto"></a>
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
                          </div>

                    <div class="nombre-perfil">
                        <h3>Alfonso Juan</h3>
                        <span>Popayan, Colombia</span>
                           <div class="tabletModal">
                          <a href="#modal-foto">Agregar foto</a>
                        </div>
                    </div>
                </div>
                <div class="info">
                    <form name="infouser">
                        <div class="container">
                            <div class="form-left">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre">
                                <label for="email">Email</label>
                                <input type="email" name="email">
                                <label for="pais">País</label>
                                <select name="pais" onchange="cambia_provincia()">
                                    <option value="0" selected></option>
                                    <option value="1">España</option>
                                    <option value="2">Argentina</option>
                                    <option value="3">Colombia</option>
                                    <option value="4">Francia</option>
                                </select>
                            </div>
                            <div class="form-right">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" name="apellidos">
                                <label for="telefono">Teléfono</label>
                                <input type="text" name="telefono">
                                <label for="provincia">Ciudad</label>
                                <select name="provincia">
                                    <option value="-"></option>
                                </select>
                            </div>
                        </div>
                        <a id="boton-actualizar">Actualizar datos</a>
                    </form>
                </div>
            </div>
        </section>
        <section class="perfil-movil">
          <div class="perfil-main">
            <img id="fotoIcon" src="../../img/fotoPerfil.png" alt="fotoPerfil">
            <a href="#modal-movil">
              <img id="circuloPerfil" src="../../img/circuloPerfil.png" alt="circuloPerfil">
              <img id="agregarFoto" src="../../img/camaraAgreFoto.png" alt="camaraAgreFoto">
            </a>
            <div id="modal-movil" class="modalDialog">
              <div class="modal-contenido">
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
            </div>
          </div>
          <div class="content-movil">
            <h3>Alfonso Juan</h3>
            <div class="mi-perfil">
            <i class="fa-regular fa-user"></i><h3>Mi perfil</h3>
          </div>

          <div class="contenido-usuario">
            <div class="label-user">
            <h3>Nombre Completo:</h3>
            <div class="input-user">
            <input type="text" value="Alfonso Juan"><a href="../perfil_usuario/editarPerfil.html"><i class="fa-regular fa-pen-to-square"></i></a>
          </div>
        </div>
        <div class="label-user">
          <h3>E-mail:</h3>
          <div class="input-user">
          <input type="text" value="alfonsojuan@gmail.com"><a href="../perfil_usuario/editarPerfil.html"><i class="fa-regular fa-pen-to-square"></i></a>
        </div>
      </div>
      <div class="label-user">
        <h3>Numero telefonico:</h3>
        <div class="input-user">
        <input id="inputTelefono" type="text" value="+ 57 3135548084"><a href="../perfil_usuario/editarPerfil.html"><i class="fa-regular fa-pen-to-square"></i></a>
        <a href="#"  id="trash" ><i class="fa-regular fa-trash-can"></i></a>
      </div>
    </div>
    <div class="label-user">
      <h3>Genero:</h3>
      <div class="input-user">
      <input type="text" value="Masculino"><a href="../perfil_usuario/editarPerfil.html"><i class="fa-regular fa-pen-to-square"></i></a>
    </div>
  </div>
  <div class="label-user">
    <h3>Fecha de nacimiento:</h3>
    <div class="input-user">
    <input type="text" value="10/04/1998"><a href="../perfil_usuario/editarPerfil.html"><i class="fa-regular fa-pen-to-square"></i></a>
  </div>
</div>
          </div>
          </div>
        </section>

        <div class="toast">
            <div class="toast-content">
                <img src="../../img/check.png"  class="check" alt="check">
                <div class="message">
                    <span class="text text-1">Cambios Guardados</span>
                    <span class="text text-2">¡Foto guardada exitosamente!</span>
                </div>
            </div>
            <i class="fa-solid fa-xmark close"></i>
            <div class="progress"></div>
        </div>

        <script>
            window.routes = {
                perfilCreado: "{{ route('perfilCreado') }}",
                crearPerfil: "{{ route('crearPerfil') }}",
                editarPerfil: "{{ route('editarPerfil') }}"
            };
        </script>
        @endsection

        @section('footer')
        @endsection

        @push('styles')
        <link rel="stylesheet" href="css/perfil.css">
        @endpush

        @push('scripts')
        <script src="js/perfil.js"></script>
        @endpush
