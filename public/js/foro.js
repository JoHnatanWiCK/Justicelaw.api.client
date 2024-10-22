

        $(document).ready(function() {
            // Cuando se hace clic en el enlace de "Ver respuestas"
            $('.toggle-responses').on('click', function(e) {
                e.preventDefault();
                
                console.log("Click en 'Ver respuestas'"); // Verifica si el evento click está funcionando
        
                // Obtén el id de la pregunta relacionada
                var questionId = $(this).data('question-id');
                
                // Muestra u oculta las respuestas relacionadas a esa pregunta
                $('#responses-' + questionId).toggle();
            });
        });




        //cambiar a home
document.getElementById('home').addEventListener('click', function(event) {
    event.preventDefault(); 
    window.location.href = '../home/home.html'; 
});





    