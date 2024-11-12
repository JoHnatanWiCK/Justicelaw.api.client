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

        <div class="categories">
            <h3>Categorías</h3>
            <ul>
                @php $count = 0; @endphp
                @foreach ($categories as $c)
                    @if ($count < 13)
                        <li><a href="foro_familiar.html">{{ $c['name'] }}</a></li>
                    @else
                        <li class="extra-category" style="display: none;"><a href="foro_familiar.html">{{ $c['name'] }}</a></li>
                    @endif
                    @php $count++; @endphp
                @endforeach
            </ul>
            @if (count($categories) > 13)
                <button id="show-more">Ver más</button>
            @endif
        </div>
    </aside>

    <!-- Contenedor con scroll para las tarjetas -->
    <div class="cards-scroll">
        <div class="cards-container">
            @foreach ($pquestions as $q)
                <div class="card" onclick="showModal({{ $q['id'] }}, '{{ $q['affair'] }}', '{{ $q['content'] }}', '{{ $q['date_publication'] }}')">
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
                        <p class="description">{{ $q['content'] }}</p>
                        <div class="footer">
                            <span class="date">{{ $q['date_publication'] }}</span>
                            @foreach ($categories as $c)
                                @if ($q['forum_category_id'] == $c['id'])
                                    <span class="category">Categoría: {{ $c['name'] }}</span>
                                @endif
                            @endforeach
                            <br>
                            <a href="#" class="link">Ver respuestas</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination">
            {{ $pquestions->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>


<div id="modal" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close-button" onclick="closeModal()">×</span>
        <h2 id="modal-title"></h2>
        <p id="modal-content"></p>
        <span id="modal-date"></span>

        <h3>Respuestas:</h3>
        <div id="modal-responses"></div>
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

<script>
    function showModal(id, title, content, date) {
        document.getElementById('modal').style.display = 'flex';
        document.getElementById('modal-title').innerText = title;
        document.getElementById('modal-content').innerText = content;
        document.getElementById('modal-date').innerText = date;

        // Simulando la carga de respuestas, puedes cargar estas respuestas desde una API
        // Aquí debes reemplazar con una llamada a tu backend para obtener respuestas reales
        document.getElementById('modal-responses').innerHTML = `<p>Cargando respuestas para la pregunta ${id}...</p>`;
        
        fetch(`/api/v1/questions/${id}/answers`)
            .then(response => response.json())
            .then(data => {
                let responsesHtml = '';
                data.forEach(response => {
                    responsesHtml += `<div><strong>${response.user_name}</strong>: ${response.content}</div>`;
                });
                document.getElementById('modal-responses').innerHTML = responsesHtml;
            })
            .catch(error => {
                document.getElementById('modal-responses').innerHTML = `<p>Error al cargar respuestas.</p>`;
            });
    }

    function closeModal() {
        document.getElementById('modal').style.display = 'none';
    }

    document.getElementById('show-more').addEventListener('click', function() {
        document.querySelectorAll('.extra-category').forEach(function(category) {
            category.style.display = 'list-item';
        });
        this.style.display = 'none'; 
    });
</script>
@endpush
