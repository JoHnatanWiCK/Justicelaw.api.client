const navLinks = document.querySelectorAll('.nav-links a');

        navLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                window.location.href = this.href;
                event.preventDefault();
            });
        });

        // Manejador de eventos para el botón de búsqueda
// Lista de términos legales con sus rutas correspondientes
const legalFiles = {
    'informacion': '/informaciones',
    'laboral': '/informacionesLaboral',
    'trabajadores': '/derechosTrabajadores',
    'arrendamiento': '/informacionArrendamiento',
    'despido': '/informacionDespido',
    'divorcio': '/informacionDivorcio',
    'negocio': '/informacionNegocio',
    'pension': '/informacionPension',
    'testamento': '/informacionTestamento',
    'accidente': '/informacionAccidente',
    'consumidor': '/informacionConsumidor',
    'seguridad social': '/informacionSeguridadSocial',
    'sst': '/informacionSST',
    'internacional laboral': '/informacionIntLab',
    'educacion': '/informacionEducacion',
    'vida familiar': '/informacionVidaFamiliar',
    'trabajo infantil': '/informacionTrabajoInfantil',
    'contrato': '/informacionContrato',
    'salud': '/informacionSalud',
    'participacion': '/informacionParticipacion',
    'voto': '/informacionVoto',
    'cargo': '/informacionCargo',
    'consulta': '/informacionConsulta',
    'peticiones': '/informacionPeticiones',
    'plebiscito': '/informacionPlebiscito',
    'autor': '/informacionAutor'
};

// Escucha el evento de clic en el botón de búsqueda
document.getElementById('buscarBtn').addEventListener('click', function(e) {
    e.preventDefault(); // Prevenir el comportamiento por defecto si es un formulario

    var searchQuery = document.querySelector('.search-bar input').value.trim().toLowerCase();

    const ruta = legalFiles[searchQuery];

    if (ruta) {
        window.location.href = ruta;
    } else {
        alert("No se encontró información con esa búsqueda.");
    }
});

