@extends('layouts.layoutAbogado')

@section('title', 'forolawyer')

@section('nav')
@endsection

@section('main')

<section class="welcome">
    <h1>¡Bienvenido al foro!</h1>
    <p>Infórmate y comparte tu opinión con los demás.</p>
</section>


<div class="container">




    <aside class="sidebar">

    <!-- Modal para crear publicación -->

    <div class="task-modal" id="askTaskModal">
     <div class="ask-question">

        <span class="task-modal-close" onclick="closeTaskModal()">&times;</span>
            <h3>Escribe tu duda....</h3>
            <form id="questionForm" action="{{ route('api.v1.questions.store') }}" method="POST">
                @csrf
                <input type="text" name="affair" placeholder="Asunto:" required />
                <input type="date" id="dateInput" name="date_publication" style="display: ;" required>

                <span id="userid" style="display: none;"></span>
                <input type="number" id="userInput" name="user_id" style="display: none;" >
                <textarea name="content" placeholder="Contenido:" required></textarea>
                <select name="forum_category_id">
                    @foreach ($categories as $c)
                        <option value="{{$c['id']}}">{{$c['name']}}</option>
                    @endforeach
                </select>
                <button type="submit">Publicar</button>
            </form>
        </div>
    </div>

<div class="conteiner-infos">

<h3>Nuestras Informaciones</h3>



<div class="horizontal-card">
    <img src="../../img/Testamento.jpg" alt="Noticia 5" class="horizontal-card-image">
    <div class="horizontal-card-content">
        <h4 class="horizontal-card-title" id="alimentp">PENSIÓN ALIMENTICIA</h4>
        <p class="horizontal-card-description">
            Entiende los aspectos esenciales de la pensión alimenticia, incluyendo cómo solicitarla,
            cómo se calcula y cómo administrarla correctamente para asegurar el bienestar de los
            dependientes.
        </p>
    </div>
</div>

<div class="horizontal-card">
    <img src="../../img/PensionAliemnticia.jpg" alt="Noticia 5" class="horizontal-card-image">
    <div class="horizontal-card-content">
        <h4 class="horizontal-card-title" id="alimentp">PENSIÓN ALIMENTICIA</h4>
        <p class="horizontal-card-description">
            Entiende los aspectos esenciales de la pensión alimenticia, incluyendo cómo solicitarla,
            cómo se calcula y cómo administrarla correctamente para asegurar el bienestar de los
            dependientes.
        </p>
    </div>
</div>

<div class="horizontal-card">
    <img src="../../img/Arrendamiento.jpg" alt="Noticia 5" class="horizontal-card-image">
    <div class="horizontal-card-content">
        <h4 class="horizontal-card-title" id="alimentp">PENSIÓN ALIMENTICIA</h4>
        <p class="horizontal-card-description">
            Entiende los aspectos esenciales de la pensión alimenticia, incluyendo cómo solicitarla,
            cómo se calcula y cómo administrarla correctamente para asegurar el bienestar de los
            dependientes.
        </p>
    </div>
</div>

<div class="horizontal-card">
    <img src="../../img/Testamento.jpg" alt="Noticia 5" class="horizontal-card-image">
    <div class="horizontal-card-content">
        <h4 class="horizontal-card-title" id="alimentp">PENSIÓN ALIMENTICIA</h4>
        <p class="horizontal-card-description">
            Entiende los aspectos esenciales de la pensión alimenticia, incluyendo cómo solicitarla,
            cómo se calcula y cómo administrarla correctamente para asegurar el bienestar de los
            dependientes.
        </p>
    </div>
</div>

<div class="horizontal-card">
    <img src="../../img/Accidente.png" alt="Noticia 5" class="horizontal-card-image">
    <div class="horizontal-card-content">
        <h4 class="horizontal-card-title" id="alimentp">PENSIÓN ALIMENTICIA</h4>
        <p class="horizontal-card-description">
            Entiende los aspectos esenciales de la pensión alimenticia, incluyendo cómo solicitarla,
            cómo se calcula y cómo administrarla correctamente para asegurar el bienestar de los
            dependientes.
        </p>
    </div>
</div>

<div class="horizontal-card">
    <img src="../../img/Despido.jpg" alt="Noticia 5" class="horizontal-card-image">
    <div class="horizontal-card-content">
        <h4 class="horizontal-card-title" id="alimentp">PENSIÓN ALIMENTICIA</h4>
        <p class="horizontal-card-description">
            Entiende los aspectos esenciales de la pensión alimenticia, incluyendo cómo solicitarla,
            cómo se calcula y cómo administrarla correctamente para asegurar el bienestar de los
            dependientes.
        </p>
    </div>
</div>


<div class="horizontal-card">
    <img src="../../img/Divorcio.jpg" alt="Noticia 5" class="horizontal-card-image">
    <div class="horizontal-card-content">
        <h4 class="horizontal-card-title" id="alimentp">PENSIÓN ALIMENTICIA</h4>
        <p class="horizontal-card-description">
            Entiende los aspectos esenciales de la pensión alimenticia, incluyendo cómo solicitarla,
            cómo se calcula y cómo administrarla correctamente para asegurar el bienestar de los
            dependientes.
        </p>
    </div>
</div>

</div>

    </aside>

 <header class="header">
<!-- Barra de tareas -->

   <!-- Filtro -->
   <div class="filter-bar">
        <label for="category-filter">Filtrar por categoría:</label>
        <select id="category-filter" class="category-dropdown">
            <option value="">Todas las categorías</option>
            @foreach ($categories as $c)
                <option value="{{ $c['id'] }}">{{ $c['name'] }}</option>
            @endforeach
        </select>
    </div>


    <div class="searcha-bar">
            <input type="text" placeholder="">
            <button id="buscarBtn">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
            <div class="results" id="results"></div>

        </div>

        <button class="create-post-btns" onclick="openTaskModal()">Crear Publicación</button>




 </header>

<main class="main-content">


    <div class="cards-scroll">
    <div class="cards-container">
            @foreach ($pquestions as $q)
                @foreach ($users as $user)
                    @if ($q['user_id'] == $user['id'])
                        <div class="card" >
                    @endif
                @endforeach

                <div class="profile">
                    <img src="../../img/fotoPerfil.png" class="fotoperfil" alt="Foto de perfil" />
                    @foreach ($users as $use)
                        @if ($q['user_id'] == $use['id'])
                            <span class="name_user"> {{ $use['name'] }} {{ $use['last_name'] }}</span>
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
                        <div class="actions">
                        <button class="like-btn" data-id="{{ $q['id'] }}"><i class="fa-regular fa-thumbs-up"></i> (<span id="likes-{{ $q['id'] }}">{{ $q['likes'] ?? 0 }}</span>)</button>
                        <button class="dislike-btn" data-id="{{ $q['id'] }}"><i class="fa-regular fa-thumbs-down"></i> (<span id="dislikes-{{ $q['id'] }}">{{ $q['dislikes'] ?? 0 }}</span>)</button>

                        @foreach ($users as $use)
                        @if ($q['user_id'] == $use['id'])
                        <span class="" style="display: none;"> {{ $use['name'] }} {{ $use['last_name'] }}</span>

                        <a href="#" class="link" onclick="showModal('{{ $q['id'] }}', '{{ $q['affair'] }}', '{{ $q['content'] }}', '{{ $q['date_publication'] }}','{{ $use['name'] }}','{{ $use['last_name'] }}')">Ver respuestas</a>

                        @endif
                    @endforeach 
                         </div>      
      </div>
                </div>
            </div>
            @endforeach
        </div>

        <div id="respuestas" class="modal" style="display: none;">
            <div class="modal-content">
                <span class="close-button" onclick="closeModala()">×</span>
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
                            <img src="../../img/fotoPerfil.png" class="avatar" alt="Foto de perfil">
                            <div class="user-details">
                                @foreach ($lawyers as $lawyer)
                                    @if ($a['lawyer_id'] == $lawyer['id'])
                                    <a href="javascript:void(0);" class="name-link" data-lawyer-id="{{ $lawyer['id'] }}">
                                        <strong class="response-date">{{ $lawyer['name'] }} {{ $lawyer['last_names'] }}</strong>
                                    </a>
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

                <form id="answerForm" action="{{ route('api.v1.answers.store') }}" method="POST">
                @csrf 

                    <textarea id="new-answer" placeholder="Escribe aquí tu respuesta..." name="content"></textarea>


                    <span id="questionid" style="display:none;"  >0</span>
                    <input type="number" id="questionInput" name="question_id" style="display: ;" >

                    <span id="lawyerid" style="display:;">0</span>
                    <input type="number" id="lawyerInput" name="lawyer_id" style="display: ;" >
                    <input type="date" id="dateInput" name="date_publication" style="display: ;" required>

                    <button type="submit">Publicar</button>
                    </form>

                </div>
               
            </div>
        </div>

        <div class="pagination">
            {{ $pquestions->links('pagination::bootstrap-4') }}
        </div>
    </div>


  </main>


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
<script src="{{ asset('js/forolawyer.js') }}"></script>
@endpush


layoutAbogado