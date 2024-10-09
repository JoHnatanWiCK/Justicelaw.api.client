@extends('layouts.layoutLogin')

@section('title', 'Notifications')

@section('nav')
@endsection

@section('main')
    <section>
    <h1>Terminos y Condiciones del servicio</h1>
    <p><strong>Última actualización:</strong> [21/01/2024]</p>

    <h2>Aceptación de los Términos</h2>
    <p>
        Al acceder o utilizar el sitio web de Justice Law (en adelante, "el Sitio"), acepta cumplir
         con los siguientes términos y condiciones de servicio (en adelante, "Términos"), así como con todas 
         las leyes y regulaciones aplicables. Si no está de acuerdo con estos Términos, le solicitamos que no utilice el Sitio.
    </p>
    <h2>Descripción de los Servicios</h2>
    <p>
        Justice Law proporciona información legal y servicios profesionales de asesoramiento y representación legal a través de su sitio web
        y otros medios de comunicación (en adelante, "los Servicios"). El uso de los Servicios no establece una relación abogado-cliente hasta
        que se celebre un acuerdo formal por escrito entre usted y Justice Law.
    </p>

    <h2>Uso del Sitio</h2>
    <p>Al hacer uso de el Sitio, acepta:</p>
    <ul>
        <li><strong>Proporcionar información precisa y veraz cuando se registre o utilice los Servicios.</strong> </li>
        <li><strong>No utilizar el Sitio para fines ilegales, fraudulentos o que infrinjan derechos de terceros.</strong> </li>
        <li><strong>No intentar acceder a áreas restringidas del Sitio o realizar acciones que comprometan la seguridad del mismo.</strong></li>
    </ul>

    <h2>Relación Abogado-Cliente</h2>
    <p>El uso del Sitio, la información proporcionada o el contacto inicial con Justice Law a través de formularios en línea no crea
         una relación abogado-cliente. Una relación formal de abogado-cliente se establece solo cuando ambas partes firman un acuerdo
          de representación.</p>
   
    <h2>Honorarios y Pagos</h2>
    <p>
        Los honorarios de los Servicios de Justice Law serán especificados en el contrato de servicios correspondiente. Los pagos deberán
         ser realizados en los términos y plazos acordados. En caso de falta de pago, Justice Law se reserva el derecho de suspender o 
         terminar la prestación de servicios.
   

    <h2>Propiedad Intelectual</h2>
    <p>
        Todo el contenido disponible en el Sitio, incluidos textos, gráficos, logotipos y otros materiales,
        es propiedad de Justice Law y está protegido por las leyes de propiedad intelectual. El uso no
        autorizado de este contenido está prohibido.
    </p>

    <h2>Confidencialidad</h2>
    <p>Cualquier información confidencial compartida a través del Sitio o en comunicaciones directas con Justice
        Law será tratada con estricta confidencialidad de acuerdo con las leyes aplicables</p>
    

    <h2> Ley Aplicable y Jurisdicción</h2>
    <p>
        Estos Términos se rigen por las leyes vigentes en la Constitusion politica. Cualquier disputa que surja
        en relación con el uso del Sitio o los Servicios será resuelta en los tribunales competentes de dicha jurisdicción.
    </p>

    <h2>Contacto</h2>
    <p>
        Si tiene alguna pregunta o comentario sobre estos Términos, puede ponerse en contacto con nosotros a través de JusticeLaw@outlook.com.
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
