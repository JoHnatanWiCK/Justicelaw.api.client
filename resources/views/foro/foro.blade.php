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
    <aside class="sidebar">
        <div class="ask-question">
            <h3>Escribe tu duda....</h3>
            <form action="{{ route('api.v1.questions.store') }}" method="POST">
                @csrf
                <input type="text" name="affair" placeholder="Asunto:" required />
                <input type="number" name="user_id" placeholder="user_id:" required />
                <input type="date" name="date_publication" required />
                <textarea name="content" placeholder="Contenido:" required></textarea>
                <select name="forum_category_id">
                    @foreach ($categories as $c)
                        <option value="{{$c['id']}}">{{$c['name']}}</option>
                    @endforeach
                </select>
                <button type="submit">Publicar</button>
            </form>
        </div>

        
    </aside>

    <!-- Contenedor con scroll para las tarjetas -->
    <div class="cards-scroll">
    <div class="filter-bar">
        <label for="category-filter">Filtrar por categoría:</label>
        <select id="category-filter" class="category-dropdown">
            <option value="">Todas las categorías</option>
            @foreach ($categories as $c)
                <option value="{{ $c['id'] }}">{{ $c['name'] }}</option>
            @endforeach
        </select>
    </div>
        <div class="cards-container">
       
            @foreach ($pquestions as $q)
            @foreach ($users as $user)
            @if ($q['user_id'] == $user['id'])

                <div class="card" onclick="showModal('{{ $q['id'] }}', '{{ $q['affair'] }}', '{{ $q['content'] }}', '{{ $q['date_publication'] }}','{{ $user['name'] }}','{{ $user['last_name'] }}')">
                @endif

                @endforeach
  


                    <div class="profile">
                        <img src="../../img/fotoPerfil.png" class="fotoperfil" alt="Foto de perfil" />
                        @foreach ($users as $user)

                        @if ($q['user_id'] == $user['id'])
                          
                                <span class="name_user"> {{ $user['name'] }} {{ $user['last_name'] }}</span>
                            @endif
                        @endforeach
                    </div>
                    <div class="card-content">
                        <h2 class="title">{{ $q['affair'] }}</h2>
                        <p class="description">{{ \Illuminate\Support\Str::limit($q['content'], 60) }}</p>
                        <div class="footer">
                        @foreach ($categories as $c)
                                @if ($q['forum_category_id'] == $c['id'])
                                    <span class="category">Categoría: {{ $c['name'] }}</span>
                                @endif
                            @endforeach
                            <span class="date">{{ $q['date_publication'] }}</span>
                           
                            <br>
                            <a href="#" class="link">Ver respuestas</a>
                        </div>
                    </div>
                </div>
                
              
@endforeach    
        </div>

        <div id="smodal" class="modal" style="display: none;" >
                    <div class="modal-content">
                            <span class="close-button" onclick="closeModal()">×</span>
                            
                        <div class="profile">
                            <img src="../../img/fotoPerfil.png" class="fotoperfil" alt="Foto de perfil" />
                            <span class="name_user" id="modal-user"></span>
                         
                        </div>
                            <h2 id="modal-title"></h2>
                            <p id="modal-content"></p>
                            <span id="modal-date"></span>

                            <h3>Respuestas:</h3>
                        @foreach ($answers as $a)
                        
                        
                                    
                                  <div class="post" data-question-id="{{ $a['question_id'] }}">
                                    <div class="post-header">
                                    <img src="../../img/fotoPerfil.png" class="avatar" alt="Ana Martínez">
                                <div class="user-details">
                                @foreach ($lawyers as $lawyer)
                                    @if ($a['lawyer_id'] == $lawyer['id'])
                           
                                        <strong class="response-date">{{ $lawyer['name'] }} {{ $lawyer['last_names'] }}</strong></tr>
                       
                                    @endif
                       
                                @endforeach
                                </div>
                                </div>
                    
                                <span>{{ $a['content'] }}</span>
                                <br><br>
                                <span class="date-1">{{ $a['date_publication'] }}</span>
                   
                                </div>
               

                            
           
                        @endforeach
           
        <div class="new-answer-section">
            <h4>Escribe tu respuesta:</h4>
            <textarea id="new-answer" placeholder="Escribe aquí tu respuesta..."></textarea>
            <button onclick="submitAnswer()">Responder</button>
        </div>
       
    </div>
    
</div>
       
        <div class="pagination">
            {{ $pquestions->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>




@endsection

@section('footer')
@endsection

@push('styles')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/foro.css">
<link href="https://fonts.googleapis.com/css2?family=Faustina:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/foro.js') }}"></script>


   
@endpush
