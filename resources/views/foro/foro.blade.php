
@extends('layouts.layoutLogin')

@section('title', 'Foro')

@section('nav')
@endsection

@section('main')


        <section class="welcome">
            <h1>¡Bienvenido al foro!</h1>
            <p>Infórmate y comparte tu opinión con los demás.</p>
            <input type="text" placeholder="Buscar en el foro..." />
        </section>

        <div class="content">
            <div class="forum">
            <table>
    <tr>
        <th class="message-col">Mensaje</th>
        <th class="user-col">Usuario</th>
    </tr>

    @foreach ($pquestions as $q) 
    <tr>
        <td class="message-col">
            <h2>{{ $q['affair'] }}</h2>
            <p>{{ $q['content'] }}</p>
            <div class="meta">
                <span class="date">{{ $q['date_publication'] }}</span>
                <span class="category">Categoría: {{ $q['forum_category_id'] }}</span>
                <br>

            </div>
            <a id="toggle" class="toggle-responses" data-question-id="{{ $q['id'] }}">Ver respuestas</a> <!-- Enlace para mostrar respuestas -->

            <!-- Contenedor oculto para las respuestas -->
            <div class="responses" id="responses-{{ $q['id'] }}" style="display: none;">
            <table>
            

            <h2 class="res">Respuestas :</h2>

            
    @foreach ($answers as $a)
        @if ($a['question_id'] == $q['id'])  <!-- Verifica si la respuesta corresponde a la pregunta -->
       
            
           
        
                <div class="post">
                    <div class="post-header">
                        <img src="../../img/fotoPerfil.png" class="avatar" alt="Ana Martínez">
                        <div class="user-details">
                        <strong class="response-date">{{ $a['lawyer_id'] }}</strong></tr>
                            
                        </div>
                    </div>
                    
                    <span>{{ $a['content'] }}</span>
                   <br><br>
                   <span class="date-1">{{ $a['date_publication'] }}</span>
                   
                </div>
          
        
            
        @endif
    @endforeach
    </table>
</div>
        </td>
        <td class="user-col">
            <div class="user-info">
                <img src="../../img/fotoPerfil.png" class="fotoperfil" alt="Andrés López" />
                <br>
                <span class="name_user">USER: {{ $q['user_id'] }}</span>
            </div>
        </td>
    </tr>
@endforeach

</table>


                        <div class="pagination">
                         {{ $pquestions->links('pagination::bootstrap-4') }}
                        </div>

            </div>
   
            <aside>
                <div class="categories">
                    <h3>Categorías</h3>
                    <ul>
                        <li><a href="foro_familiar.html">Familiar</a></li>
                        <br>
                        <li><a href="#">Legal</a></li>
                        <br>
                        <li><a href="#">Laboral</a></li>
                        <br>
                        <li><a href="#">Propiedad</a></li>
                        <br>
                        <li><a href="#">Vivienda</a></li>
                        <br>
                        <li><a href="#">Negocio</a></li>
                        <br>
                        <li><a href="#">Inmigración</a></li>
                        <br>
                        <li><a href="#">Consumidor</a></li>
                        <br>
                        <li><a href="#">Propiedad Intelectual</a></li>
                    </ul>
                </div>
                <div class="ask-question">
    <h3>Escribe tu duda....</h3>
    <form action="{{ route('api.v1.questions.store') }}" method="POST">
        @csrf 
        
        <input type="text" name="affair" placeholder="Asunto:" required />
        
        <textarea name="content" placeholder="Contenido:" required></textarea>
        
        <select name="forum_category_id" required>
            <option value="">Categoría</option>
            <option value="1">Familiar</option>
            <option value="2">Legal</option>
            <option value="3">Laboral</option>
            <option value="4">Propiedad</option>
            <option value="5">Vivienda</option>
        </select>

        
        <button type="submit">Publicar</button>
    </form>
</div>

            </aside>
            
        </div>
        @endsection

        @section('footer')
        @endsection

      

        @push('scripts')
        <script src="js/foro.js"></script>   
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
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

    </script>
         @endpush
         @push('styles')
        
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/foro.css">
        <link rel="stylesheet" href="css/foro_res.css">

        <link href="https://fonts.googleapis.com/css2?family=Faustina:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
        @endpush
       

