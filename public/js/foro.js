//cambiar a home
document.getElementById('home').addEventListener('click', function(event) {
    event.preventDefault(); 
    window.location.href = '../home/home.html'; 
});


document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.querySelector('.welcome input[type="text"]'); // Campo de búsqueda
    const rows = document.querySelectorAll('table tr'); // Filas de la tabla (incluso los headers)
    
    searchInput.addEventListener('input', function(event) {
        const searchQuery = event.target.value.toLowerCase(); // Convierte la búsqueda a minúsculas para comparaciones
        rows.forEach((row) => {
            const messageText = row.querySelector('.message-col h2')?.textContent.toLowerCase();
            if (messageText && messageText.includes(searchQuery)) {
                row.style.display = ''; // Muestra la fila si coincide
            } else {
                row.style.display = 'none'; // Oculta la fila si no coincide
            }
        });
    });
});


        $(document).ready(function() {
            // Cuando se hace clic en el enlace de "Ver respuestas"
            $('.toggle-responses').on('click', function(e) {
                e.preventDefault();
                
                // Obtén el id de la pregunta relacionada
                var questionId = $(this).data('question-id');
                
                // Muestra u oculta las respuestas relacionadas a esa pregunta
                $('#responses-' + questionId).toggle();
            });
        });

