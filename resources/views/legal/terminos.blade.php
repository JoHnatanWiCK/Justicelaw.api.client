 
@extends('layouts.layoutLogin')

@section('title', 'Notifications')

@section('nav')
@endsection

@section('main')
<section>
            <h1>Términos de Uso de JusticeLaw</h1>
            <p><strong>Última actualización:</strong> [Fecha]</p>
        
            <h2>Bienvenida</h2>
            <p>
                Bienvenido a JusticeLaw, una plataforma interactiva donde usuarios pueden realizar consultas legales y obtener respuestas de expertos en derecho. 
                Estos Términos de Uso constituyen un contrato legalmente vinculante entre usted, como usuario, y JusticeLaw. 
                Al utilizar o acceder a nuestros servicios, acepta cumplir y estar sujeto a estos términos. 
                Si no está de acuerdo con estos términos, no debe utilizar la plataforma.
            </p>
        
            <h2>Acceso a la Plataforma</h2>
            <p>
                JusticeLaw proporciona a los usuarios acceso a servicios relacionados con la asesoría legal, incluidos foros de discusión, videoconferencias con abogados, 
                y recursos educativos. Nos reservamos el derecho de restringir o suspender el acceso a la plataforma si un usuario incumple los términos descritos aquí.
            </p>
        
            <h2>Cuentas de Usuario</h2>
            <p>
                Para utilizar algunos de los servicios, es posible que deba crear una cuenta proporcionando información precisa y actualizada. 
                Es responsabilidad del usuario mantener la confidencialidad de su cuenta y contraseña. 
                Cualquier actividad realizada desde su cuenta será su responsabilidad.
            </p>
        
            <h2>Uso Aceptable</h2>
            <p>Al usar JusticeLaw, usted acepta no:</p>
            <ul>
                <li>Publicar o compartir contenido ilegal, ofensivo o fraudulento.</li>
                <li>Utilizar la plataforma para actividades que infrinjan derechos de terceros.</li>
                <li>Interferir con el funcionamiento de la plataforma o intentar eludir medidas de seguridad.</li>
            </ul>
        
            <h2>Relación entre Usuario y Expertos</h2>
            <p>
                JusticeLaw no es un bufete de abogados y no ofrece servicios legales directos. La relación entre un usuario y un experto en derecho es independiente de la plataforma. 
                Los expertos proporcionan asesoramiento de acuerdo con su experiencia, pero no se garantiza la precisión o aplicabilidad del contenido proporcionado.
            </p>
        
            <h2>Exclusión de Garantías</h2>
            <p>
                El contenido de JusticeLaw es solo para fines informativos. No garantizamos que el contenido, incluidos los consejos de los expertos, esté libre de errores o sea aplicable en todos los contextos legales.
            </p>
        
            <h2>Limitación de Responsabilidad</h2>
            <p>
                JusticeLaw no será responsable por daños directos, indirectos, incidentales, especiales o consecuentes que resulten del uso de la plataforma, 
                la interacción con expertos, o cualquier contenido obtenido a través de la plataforma.
            </p>
        
            <h2>Modificaciones en los Términos de Uso</h2>
            <p>
                Nos reservamos el derecho de modificar estos Términos de Uso en cualquier momento. Los usuarios serán notificados de dichos cambios mediante una actualización en la plataforma. 
                El uso continuado de la plataforma después de tales cambios constituye la aceptación de los nuevos términos.
            </p>
        
            <h2>Ley Aplicable</h2>
            <p>
                Estos términos se rigen por las leyes de [jurisdicción aplicable]. 
                Cualquier disputa que surja en relación con el uso de la plataforma será resuelta exclusivamente en los tribunales de [ubicación aplicable].
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
        