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
                        <th class="responses-col">Respuestas</th>
                        <th class="user-col">Usuario</th>
                    </tr>

                    @foreach ($question as $q) 
              

                
                    <tr>
                        <td class="message-col">
                            <h2>{{$q['affair']}}</h2>
                            <p>{{$q['content']}}</p>
                            <div class="meta">
                                <span class="date">{{$q['date_publication']}}</span>
                                <span class="category">Categoría: {{$q['forum_category_id']}}</span>
                            </div>
                        </td>
                        <td class="responses-col"><a href="">2</a></td>
                        <td class="user-col">
                            <div class="user-info">
                                <img src="../../img/fotoPerfil.png" class="fotoperfil" alt="Andrés López" />
                                <br>
                                <span class="name_user">USER:{{$q['user_id']}}</span>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </table>
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
                    <input type="text" placeholder="Asunto:" />
                    <textarea placeholder="Contenido:"></textarea>
                    <select>
                        <option value="">Categoría</option>
                        <option value="familiar">Familiar</option>
                        <option value="legal">Legal</option>
                        <option value="laboral">Laboral</option>
                        <option value="propiedad">Propiedad</option>
                        <option value="vivienda">Vivienda</option>
                        <option value="negocio">Negocio</option>
                        <option value="inmigracion">Inmigración</option>
                        <option value="consumidor">Consumidor</option>
                        <option value="propiedad-intelectual">Propiedad Intelectual</option>
                    </select>
                    <button>Publicar</button>
                </div>
            </aside>
        </div>
        @endsection

        @section('footer')
        @endsection

        @push('styles')
        <link rel="stylesheet" href="css/foro.css">
        @endpush

