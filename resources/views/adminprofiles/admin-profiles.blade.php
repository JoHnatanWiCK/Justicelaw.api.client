@extends('layouts.layoutadmin')

@section('title', 'Dashboard')

@section('nav')
   
@endsection

@section('main')
<section class="title-recent-profiles">
    <h3>Perfiles creados reciente</h3>
    <p>Aqui podras revisar los datos de los perfiles</p>
</section>
<section class="registro-reportes">
<h3>Registro reportes</h3>
<ul>
    <li><img src="../../img/admin/reporte.png" alt="reporte" class="reporte">
        <a href="#">Martina Zapata ha solicitado ayuda con un error del sistema</a></li>
    <li><img src="../../img/admin/verificacion.png" alt="verificacion" class="verificacion">
        <a href="#">Martina Santos ha solicitado una verificación de abogado</a></li>
    <li><img src="../../img/admin/verificacion.png" alt="verificacion" class="verificacion">
        <a href="#">Sofía Méndez ha solicitado una verificación de usuario</a></li>
    <li><img src="../../img/admin/reporte.png" alt="reporte" class="reporte">
        <a href="#">Martina Zapata ha solicitado ayuda con un error del sistema</a></li>
</ul>
</section>
<section class="central">
<section class="recent-profiles">
<div class="profiles-list">
    <div class="profile-item">
        <a href="#">
            <p class="initials">JM</p> Jesus Lopez - Abogado - Mar 20, 2024 - 10:24 pm
        </a>
    </div>
    <div class="profile-item">
        <a href="#">
            <p class="initials">JE</p> Julian Estupiñan - Abogado - Mar 20, 2024 - 10:24 pm
        </a>
    </div>
    <div class="profile-item">
        <a href="#">
            <p class="initials">MG</p> María Gomez - Abogado - Mar 20, 2024 - 10:20 pm
        </a>
    </div>
    <div class="profile-item">
        <a href="#">
            <p class="initials">CA</p> Carlos Agredo - Cliente - Mar 20, 2024 - 10:19 pm
        </a>
    </div>
    <div class="profile-item">
        <a href="#">
            <p class="initials">AB</p> Andrea Benavides - Cliente - Mar 20, 2024 - 10:15 pm
        </a>
    </div>
    <div class="profile-item">
        <a href="#">
            <p class="initials">JM</p> Juan Martínez - Cliente - Mar 19, 2024 - 10:24 pm
        </a>
    </div>
    <div class="profile-item">
        <a href="#">
            <p class="initials">JM</p> Juan Martínez - Cliente - Mar 18, 2024 - 10:24 pm
        </a>
    </div>
    <div class="profile-item">
        <a href="#">
            <p class="initials">DA</p> David Astrada - Cliente - Mar 17, 2024 - 10:24 pm
        </a>
    </div>  
    <div class="line"></div>              
    <a href="#">Mostrar más +</a>
</div>
</section>
<section class="profile-details">
<div class="profile-overview">
    <img src="../../img/perfilcontacto.png" alt="Avatar" class="per">
    <h4>Jesus Lopez</h4>
    <p>example@gmail.com</p>
    <a href="#" class="pdf-link">Hoja de Vida.pdf</a>
    <div class="account-details">
        <div>
            <span>Reportes: 0</span>
            <a href="#">Ver</a>
        </div>
        <div>
            <span>Comentarios: 2</span>
            <a href="#">Ver</a>
        </div>
        <div>
            <span>Reseñas: 4</span>
            <a href="#">Ver</a>
        </div>
    </div>
    <a href="#" class="btn">Ver perfil completo</a>
    <a href="#" class="btn">Bloquear</a>
</div>
</section>
</section>
<aside class="search-profiles">
<h3>Buscar perfiles</h3>
<input type="text" placeholder="   Ingresa un nombre de usuario o su Id" class="input">
<a href="#"><img src="../../img/Lupa.png" alt="lupa"></a>
<h4>O busca por categorías</h4>
<ul>
    <li><a href="#">  Últimos Reportes  </a></li>
    <li><a href="#">  Respuestas reportadas  </a></li>
    <li><a href="#">  Reseñas  </a></li>
    <li><a href="#">  Usuarios Reportados  </a></li>
</ul>
</aside>
<section class="recent-activity">
<h3>Actividad reciente</h3>
<ul> 
    <li> <a href="#">Respondió una solicitud de soporte - 19, marzo - 6:28 pm</a></li>
    <li> <a href="#">Agregó la información "¿Cómo hacer una demanda por alimentos?" - 17, marzo - 6:28 pm</a></li>
    <li> <a href="#">Respondió una solicitud de soporte - 19, marzo - 6:28 pm</a></li>
    <li> <a href="#">Agregó la información "¿Cómo hacer una demanda por alimentos?" - 17, marzo - 6:28 pm</a></li>
</ul>
</section>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin-profiles.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endpush

@push('scripts')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/home.js') }}"></script>
@endpush
