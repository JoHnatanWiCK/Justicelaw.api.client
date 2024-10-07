const navLinks = document.querySelectorAll('.nav-links a');

        navLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                window.location.href = this.href;
                event.preventDefault();
            });
        });

        // Manejador de eventos para el botón de búsqueda
document.getElementById('buscarBtn').addEventListener('click', function(e) {
    e.preventDefault(); // Prevenir el comportamiento por defecto si es un formulario
    
    // Obtener el valor del campo de búsqueda
    var searchQuery = document.querySelector('.search-bar input').value.trim().toLowerCase();
    
    // Verificar si el texto ingresado es 'informacion'
    if (searchQuery === 'informacion') {
        // Redirigir a la ruta de 'informacion'
        window.location.href = "/informaciones"; // Redirige a la ruta adecuada
    } else {
        // Mostrar un mensaje de error si la búsqueda no coincide
        alert("No se encontró información con esa búsqueda.");
    }
});
