@extends('layouts.layoutLogin')

@section('title', 'Notifications')

@section('nav')
@endsection

@section('main')
    <section>
    <h1>Permisos y Derechos de Uso</h1>
    <p><strong>Última actualización:</strong> [21/01/2024]</p>

    <h2>Derechos de Propiedad Intelectual</h2>
    <p>
        El contenido de este sitio web, incluyendo, sin limitarse a, textos, gráficos, logotipos, iconos, imágenes,
        software y cualquier otro material presente, es propiedad exclusiva de [Nombre del Bufete] o ha sido licenciado
        a este bajo derechos de uso. Dicho contenido está protegido bajo las leyes de propiedad intelectual vigentes,
        incluyendo las leyes de derechos de autor y de marcas comerciales, tanto en el país como a nivel internacional.
        Todos los derechos están reservados.

        Queda estrictamente prohibido cualquier uso de este contenido, incluidas la reproducción, modificación,
        distribución, transmisión, republicación, exhibición o ejecución del material del sitio sin el consentimiento
        expreso, previo y por escrito de [Nombre del Bufete]. En caso de que se permita el uso del contenido, solo podrá
        utilizarse para fines personales y no comerciales, con todas las restricciones y derechos de autor presentes 
        en el material original.
    </p>

    <h2>Uso Permitido del Sitio</h2>
    <p>El uso de este sitio web está permitido exclusivamente para fines informativos, educativos o de consulta y se establece de acuerdo con las condiciones de uso y las políticas de privacidad aquí descritas.
        Cualquier uso del sitio que contradiga estas condiciones, que infrinja leyes aplicables, o que afecte negativamente a otros usuarios o a la integridad del sitio está estrictamente prohibido. Esto incluye, pero no se limita a:</p>
    <ul>
        <li>Modificaciones y alteraciones: Los usuarios no están autorizados a realizar modificaciones, adaptaciones o alteraciones de ningún tipo al contenido del sitio.</li>
        <li>Acceso no autorizado: El uso de técnicas, herramientas, software o dispositivos que permitan el acceso no autorizado a secciones restringidas del sitio,
            que no hayan sido destinadas para el público general, constituye una violación grave.</li>
        <li>Copiado masivo de información: La extracción y recolección masiva de datos o cualquier forma de "web scraping" está estrictamente prohibida.</li>
    </ul>

    <h2>Prohibición de Uso Ilegal o No Autorizado</h2>
    <p>Al acceder y utilizar este sitio, el usuario acepta utilizarlo únicamente para propósitos legítimos y en conformidad con las leyes vigentes y las disposiciones aquí establecidas.
        El usuario se compromete a no:</p>
    <ul>
        <li>Usar este sitio web para llevar a cabo o participar en actividades ilegales, fraudulentas o abusivas, incluyendo, pero sin limitarse a, el acceso a sistemas informáticos
            sin autorización, la manipulación o interferencia con la funcionalidad del sitio, o la distribución de malware o spam.</li>
        <li>Realizar actos que puedan violar la seguridad, privacidad o integridad de los datos personales de otros usuarios o del propio sitio.</li>
        <li>Utilizar el sitio o el contenido en él para obtener ganancias comerciales sin autorización previa.</li>
    </ul>
   
    <h2>Enlaces a Terceros y Responsabilidad por Contenido Externo</h2>
    <p>
        Este sitio web puede contener enlaces a otros sitios web administrados por terceros, los cuales son proporcionados únicamente como una
        conveniencia para el usuario. JusticeLaw no controla, aprueba ni respalda el contenido, políticas de privacidad, ni prácticas de cualquier
        sitio de terceros y no asume responsabilidad alguna por la precisión, veracidad, legalidad o relevancia de la información en tales sitios.
        <br>
        El usuario que acceda a sitios web externos a través de los enlaces proporcionados lo hace bajo su propio riesgo. Recomendamos que los usuarios
        revisen las políticas de privacidad y términos de uso de los sitios enlazados antes de interactuar con ellos o de proporcionar cualquier tipo
        de información personal.
        <br>
        En caso de que un usuario observe alguna anomalía o contenido cuestionable en alguno de los enlaces externos, agradecemos que se nos informe
        para realizar las verificaciones correspondientes y, en su caso, proceder a eliminar o modificar el enlace.
        </p>
   

    <h2>Propiedad Intelectual</h2>
    <p>
        Todo el contenido disponible en el Sitio, incluidos textos, gráficos, logotipos y otros materiales,
        es propiedad de Justice Law y está protegido por las leyes de propiedad intelectual. El uso no
        autorizado de este contenido está prohibido.
    </p>

    <h2>Confidencialidad</h2>
    <p>Cualquier información confidencial compartida a través del Sitio o en comunicaciones directas con Justice
        Law será tratada con estricta confidencialidad de acuerdo con las leyes aplicables</p>
    

    <h2>Descargo de Responsabilidad Legal</h2>
    <p>La información y el contenido ofrecido en este sitio web se presentan exclusivamente con fines de consulta general
        y en ningún caso constituyen asesoramiento legal ni sustituyen el consejo profesional de un abogado.
        JusticeLaw no garantiza la exactitud, completitud, o actualidad de la información y, por lo tanto, no
        será responsable de ningún error, omisión o cualquier resultado derivado del uso de esta información.
        <br>
        El usuario debe ser consciente de que el uso de la información proporcionada en este sitio web es
        bajo su propio riesgo y que dicha información puede no estar actualizada, ya que el marco legal está
        en constante cambio. Para una asesoría legal adaptada a su situación específica, el usuario debe contactar
        directamente a un abogado cualificado.
        <br>
        El acceso o uso de este sitio web no establece una relación abogado-cliente entre el usuario y JusticeLaw.
        La comunicación a través de este sitio, incluyendo formularios de contacto o correos electrónicos, no crea
        ninguna relación contractual, fiduciaria o de confidencialidad hasta que ambas partes formalicen un
        acuerdo mediante contrato.</p>

    <h2>Confidencialidad y Limitación de Responsabilidad</h2>
    <p>
        Nos comprometemos a proteger la privacidad y confidencialidad de cualquier información personal proporcionada a
        través de este sitio web. Sin embargo, cualquier comunicación enviada a través de formularios o correos
        electrónicos puede no estar completamente protegida y, por lo tanto, recomendamos no enviar información 
        sensible o confidencial sin previa consulta.

        El contacto inicial con [Nombre del Bufete] a través de este sitio no implica, en ningún caso, la creación de una
        relación profesional de abogado-cliente. Dicha relación únicamente se establece cuando el cliente y JusticeLaw
        suscriben un contrato por escrito en el que ambas partes acuerdan los términos de la representación legal..</p>

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
