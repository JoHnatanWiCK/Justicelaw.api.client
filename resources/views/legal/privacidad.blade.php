@extends('layouts.layoutLogin')

@section('title', 'Notifications')

@section('nav')
@endsection

@section('main')
    <section>
    <h1>Política de Privacidad de JusticeLaw</h1>
    <p><strong>Última actualización:</strong> [Fecha]</p>

    <h2>Introducción</h2>
    <p>
        En JusticeLaw, respetamos la privacidad de nuestros usuarios y nos comprometemos a proteger su información personal. 
        Esta Política de Privacidad describe cómo recopilamos, utilizamos y compartimos su información cuando utiliza nuestros servicios.
    </p>

    <h2>Información Recopilada</h2>
    <p>Recopilamos varios tipos de información para mejorar su experiencia en la plataforma:</p>
    <ul>
        <li><strong>Información Personal:</strong> Esta incluye nombre, dirección de correo electrónico, número de teléfono, información de pago y detalles del caso legal proporcionados por los usuarios.</li>
        <li><strong>Información Automática:</strong> Recopilamos información sobre el dispositivo que utiliza para acceder a la plataforma, su dirección IP, tipo de navegador, páginas vistas y tiempo de permanencia en la plataforma.</li>
        <li><strong>Información de Terceros:</strong> Podemos recibir información adicional de terceros, como proveedores de servicios de autenticación o servicios de pago.</li>
    </ul>

    <h2>Cómo Utilizamos la Información</h2>
    <p>La información que recopilamos se utiliza para:</p>
    <ul>
        <li>Personalizar su experiencia en JusticeLaw y adaptar los recursos legales disponibles a sus necesidades.</li>
        <li>Procesar pagos y suscripciones a servicios premium.</li>
        <li>Facilitar la interacción con expertos legales en la plataforma.</li>
        <li>Enviar notificaciones, actualizaciones, y mensajes administrativos.</li>
        <li>Mejorar la funcionalidad y el rendimiento de la plataforma mediante análisis y optimización.</li>
    </ul>

    <h2>Compartir Información</h2>
    <p>
        JusticeLaw no vende la información personal de sus usuarios a terceros. Sin embargo, podemos compartir información con:
    </p>
    <ul>
        <li>Expertos legales con quienes los usuarios se comunican.</li>
        <li>Proveedores de servicios que nos ayudan a operar y mantener la plataforma, como servicios de almacenamiento en la nube o procesadores de pagos.</li>
        <li>Autoridades legales si se requiere para cumplir con una obligación legal o proteger los derechos, propiedad, o seguridad de JusticeLaw.</li>
    </ul>

    <h2>Retención de Datos</h2>
    <p>
        Mantendremos su información personal durante el tiempo que su cuenta esté activa o según sea necesario para proporcionarle servicios. 
        Si desea eliminar su cuenta, puede hacerlo a través de la configuración de usuario o contactándonos directamente.
    </p>

    <h2>Derechos del Usuario</h2>
    <p>Los usuarios tienen derecho a:</p>
    <ul>
        <li>Acceder a su información personal almacenada en la plataforma.</li>
        <li>Rectificar cualquier información incorrecta o desactualizada.</li>
        <li>Solicitar la eliminación de su información personal, sujeto a ciertas excepciones legales.</li>
        <li>Oponerse al procesamiento de su información en ciertas circunstancias.</li>
    </ul>

    <h2>Medidas de Seguridad</h2>
    <p>
        Implementamos medidas de seguridad técnicas y organizativas para proteger su información personal de accesos no autorizados, alteración, divulgación o destrucción. 
        Utilizamos cifrado SSL para garantizar la privacidad de los datos en tránsito.
    </p>

    <h2>Transferencias Internacionales</h2>
    <p>
        Si accede a la plataforma desde fuera de [país], su información puede ser transferida a, almacenada y procesada en un país diferente, sujeto a protecciones adecuadas.
    </p>

    <h2>Actualización de la Política de Privacidad</h2>
    <p>
        Nos reservamos el derecho de actualizar esta Política de Privacidad en cualquier momento. Le notificaremos de los cambios a través de la plataforma.
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
