
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
                <div class="post">
                    <div class="post-header">
                        <img src="../../img/fotoPerfil.png" class="avatar" alt="Andrés López">
                        <div class="user-details">
                            <strong>Andrés López</strong>
                            <span class="date">12/01/2023</span>
                        </div>
                    </div>
                    <h2>¿Qué pasos debo seguir si me lesiono en un accidente de tráfico y el culpable se da a la fuga?</h2>
                    <span class="">Recientemente estuve involucrado en un accidente de tráfico donde el otro conductor se dio a la fuga. Sufrí lesiones y daños en mi vehículo. ¿Cuáles son mis opciones legales en esta situación? ¿Cómo puedo buscar compensación por mis lesiones y los daños a mi propiedad si el culpable no ha sido identificado?</span>

                </div>
        <h2>Respuestas :</h2>
                <div class="post">
                    <div class="post-header">
                        <img src="../../img/fotoPerfil.png" class="avatar" alt="Ana Martínez">
                        <div class="user-details">
                            <strong>Ana Martínez</strong>

                        </div>
                    </div>

                    <span class="">Lo siento por el accidente que has experimentado. En esta situación, es crucial que tomes medidas rápidas para proteger tus derechos. Primero, asegúrate de buscar atención médica inmediata para tus lesiones. Luego, debes informar el accidente a la policía y presentar un informe detallado del incidente. Este informe será fundamental para cualquier reclamo futuro. Además, considera consultar con un abogado especializado en accidentes de tráfico. Un abogado podrá ayudarte a explorar opciones como presentar un reclamo ante tu compañía de seguros o buscar compensación a través de programas estatales de compensación para víctimas de delitos.</span>
                   <br><br>
                    <span class="date-1">10/01/2023</span>

                </div>

                <div class="post">
                    <div class="post-header">
                        <img src="../../img/fotoPerfil.png" class="avatar" alt="Ana Martínez">
                        <div class="user-details">
                            <strong>Alfonso Juan</strong>

                        </div>
                    </div>

                    <span class="">Primero, busca asistencia médica para tus lesiones de inmediato. Después, llama a la policía y presenta un informe detallado del accidente. Recopila toda la evidencia disponible, como fotografías del lugar del accidente y tus lesiones, así como cualquier testigo presencial.</span>
                   <br><br>
                    <span class="date-1">10/01/2023</span>

                </div>

                <div class="post">
                    <div class="post-header">
                        <img src="../../img/fotoPerfil.png" class="avatar" alt="Ana Martínez">
                        <div class="user-details">
                            <strong>Mariana Santos</strong>

                        </div>
                    </div>

                    <span>En situaciones donde el culpable se da a la fuga, es fundamental actuar con rapidez y eficacia para proteger tus intereses. Primero, asegúrate de buscar atención médica para tus lesiones lo antes posible. Después, informa del accidente a la policía y proporciona toda la información que puedas, incluyendo la descripción del vehículo y cualquier detalle relevante del incidente. Luego, comunica el accidente a tu compañía de seguros y explora si tienes cobertura para este tipo de situación. Finalmente, considera buscar asesoramiento legal de un abogado especializado en accidentes de tráfico. Un abogado podrá evaluar tu caso y ayudarte a determinar las mejores opciones para buscar compensación por tus lesiones y daños a la propiedad.</span>                   <br><br>
                    <span class="date-1">10/01/2023</span>

                </div>
                <div class="response-container">
                    <textarea placeholder="Escribe tu respuesta..."></textarea>
                    <button>Publicar</button>
                </div>
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
                    <h3>Realiza una pregunta</h3>
                    <input type="text" placeholder="Título de la pregunta" />
                    <textarea placeholder="Detalles adicionales..."></textarea>
                    <select>
                        <option value="">Seleccione categoría</option>
                        <option value="abogados">Abogados</option>
                        <option value="demandas">Demandas</option>
                    </select>
                    <button>Enviar pregunta</button>
                </div>


            </aside>

        </div>

        @endsection

        @section('footer')
        @endsection

        @push('styles')
        <link rel="stylesheet" href="css/foro.css">
        @endpush

