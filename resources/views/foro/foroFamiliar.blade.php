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
                    <tr>
                        <td class="message-col">
                            <h2>¿Qué pasos debo seguir en un proceso de divorcio?</h2>
                            <p>María y Juan están casados desde hace diez años, pero su relación se ha deteriorado. Juan trabaja mucho y apenas están juntos. Discuten frecuentemente y María se siente sola y abandonada emocionalmente. Además, descubrió que Juan tiene una aventura emocional con una compañera de trabajo. Considera el divorcio como la mejor opción para seguir adelante. </p>
                            <div class="meta">
                                <span class="date">30 de marzo, 2024</span>
                                <span class="category">Categoría: Familiar</span>
                            </div>
                        </td>
                        <td class="responses-col"><a href="">2</a></td>
                        <td class="user-col">
                            <div class="user-info">
                                <img src="../../img/fotoPerfil.png" class="fotoperfil" alt="Andrés López" />
                                <br>
                                <span class="name_user">Andrés López</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="message-col">
                            <h2>¿Cómo puedo proteger mis derechos en un divorcio?</h2>
                            <p>María y Carlos, casados por 12 años con dos hijos, enfrentan una creciente tensión debido a la ausencia de Carlos por su trabajo y sus gastos en juegos de azar en línea. María busca un divorcio para proteger sus derechos y los de sus hijos.</p>                            <div class="meta">
                                <span class="date">29 de abril, 2024</span>
                                <span class="category">Categoría: Familiar</span>
                            </div>
                        </td>
                        <td class="responses-col"><a href="">1</a></td>
                        <td class="user-col">
                            <div class="user-info">
                                <img src="../../img/fotoPerfil.png" class="fotoperfil" alt="Andrés López" />
                                <br>
                                <span class="name_user">Andrea Solarte</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="message-col">
                            <h2>¿Qué pasa con mis hijos en proceso de divorcio?</h2>
                                <p>Juan y María han decidido divorciarse después de años de matrimonio. Tienen dos hijos pequeños, Sofía y Alejandro. Juan está preocupado por el impacto que el divorcio tendrá en sus hijos y quiere asegurarse de que se protejan sus intereses.</p>                            <div class="meta">
                                <span class="date">15 de abril, 2024</span>
                                <span class="category">Categoría: Familiar</span>
                            </div>
                        </td>
                        <td class="responses-col"><a href="">3</a></td>
                        <td class="user-col">
                            <div class="user-info">
                                <img src="../../img/fotoPerfil.png" class="fotoperfil" alt="Andrés López" />
                                <br>
                                <span class="name_user">Mariana Zambrano </span>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <aside>
                <div class="categories">
                    <h3>Categorías</h3>
                    <ul>
                        <li><a href="#">Familiar</a></li>
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

