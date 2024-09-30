@extends('layouts.layoutLogin')

@section('title', 'Notifications')

@section('nav')
@endsection

@section('main')
    <section>
    <h1>Política de Cookies de JusticeLaw</h1>
    <p><strong>Última actualización:</strong> [Fecha]</p>

    <h2>Introducción</h2>
    <p>
        Esta Política de Cookies explica cómo JusticeLaw utiliza cookies y tecnologías similares para reconocerle cuando visita nuestra plataforma. 
        Explica qué son estas tecnologías y por qué las utilizamos, así como sus derechos para controlar su uso.
    </p>

    <h2>Qué son las Cookies</h2>
    <p>
        Las cookies son pequeños archivos de texto que se almacenan en su dispositivo cuando visita un sitio web. Pueden ser cookies de "sesión", 
        que se eliminan cuando cierra el navegador, o cookies "persistentes", que se mantienen en su dispositivo por un período más largo.
    </p>

    <h2>Tipos de Cookies Utilizadas</h2>
    <ul>
        <li><strong>Cookies Esenciales:</strong> Estas cookies son necesarias para que la plataforma funcione correctamente, como facilitar el inicio de sesión y el uso seguro de la plataforma.</li>
        <li><strong>Cookies de Rendimiento y Análisis:</strong> Utilizamos estas cookies para analizar cómo los usuarios utilizan la plataforma, lo que nos ayuda a mejorar el rendimiento y la experiencia de usuario.</li>
        <li><strong>Cookies de Funcionalidad:</strong> Estas cookies permiten que la plataforma recuerde sus preferencias, como el idioma o región seleccionada.</li>
        <li><strong>Cookies de Publicidad:</strong> Utilizamos estas cookies para mostrarle anuncios que sean relevantes para sus intereses, y también para medir la efectividad de nuestras campañas publicitarias.</li>
    </ul>

    <h2>Gestión de Cookies</h2>
    <p>
        Puede controlar y gestionar las cookies de diversas maneras. La mayoría de los navegadores web le permiten aceptar o rechazar cookies a través de la configuración del navegador. 
        Tenga en cuenta que si decide desactivar las cookies, algunas funciones de la plataforma pueden no funcionar correctamente.
    </p>

    <h2>Cookies de Terceros</h2>
    <p>
        Algunas cookies que utilizamos provienen de terceros, como proveedores de análisis o servicios publicitarios. 
        Estas cookies están sujetas a las políticas de privacidad de esos terceros.
    </p>

    <h2>Actualizaciones a la Política de Cookies</h2>
    <p>
        Nos reservamos el derecho de modificar esta Política de Cookies en cualquier momento. Le informaremos sobre cualquier cambio importante mediante notificaciones en la plataforma.
    </p>
    </section>
@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/legal.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endpush

@push('scripts')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/legal.js"></script>
@endpush
