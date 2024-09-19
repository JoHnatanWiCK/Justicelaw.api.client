@extends('layouts.layoutLogin')

@section('title', 'Perfil usuario')

@section('nav')
@endsection

@section('main')
<section class="content">
    <div class="container">
        <div class="calendar">
            <h1>Calendario</h1>
            <div class="months">
                <div>Enero</div>
                <div>Febrero</div>
                <div>Marzo</div>
                <div>Abril</div>
                <div>Mayo</div>
                <div>Junio</div>
                <div>Julio</div>
                <div>borrar despues</div>
            </div>
            <div class="days">
                <div class="day">
                    <span class="date">1</span>
                    <span class="day-name">Lun</span>
                </div>
                <div class="day">
                    <span class="date">2</span>
                    <span class="day-name">Mar</span>
                </div>
                <div class="day">
                    <span class="date">3</span>
                    <span class="day-name">Mié</span>
                </div>
                <div class="day">
                    <span class="date">4</span>
                    <span class="day-name">Jue</span>
                </div>
                <div class="day">
                    <span class="date">5</span>
                    <span class="day-name">Vie</span>
                </div>
                <div class="day">
                    <span class="date">6</span>
                    <span class="day-name">Sáb</span>
                </div>
                <div class="day">
                    <span class="date">8</span>
                    <span class="day-name">Lun</span>
                </div>
                <div class="day">
                    <span class="date">9</span>
                    <span class="day-name">Mar</span>
                </div>
                <div class="day">
                    <span class="date">10</span>
                    <span class="day-name">Mié</span>
                </div>
                <div class="day selected">
                    <span class="date">11</span>
                    <span class="day-name">Jue</span>
                </div>
                <div class="day">
                    <span class="date">12</span>
                    <span class="day-name">Vie</span>
                </div>
                <div class="day">
                    <span class="date">13</span>
                    <span class="day-name">Sáb</span>
                </div>
                <div class="day">
                    <span class="date">15</span>
                    <span class="day-name">Lun</span>
                </div>
                <div class="day">
                    <span class="date">16</span>
                    <span class="day-name">Mar</span>
                </div>
            </div>
            <div class="schedule">
                <div class="hours">
                    <div>10:00</div>
                    <div>11:00</div>
                    <div>12:00</div>
                    <div>13:00</div>
                    <div>14:00</div>
                    <div>15:00</div>
                    <div>16:00</div>
                    <div>17:00</div>
                    <div>18:00</div>
                </div>
                <div class="events">
                    <div class="event time"></div>
                    <div class="event task"></div>
                    <div class="event last"></div>
                </div>
            </div>
        </div>
        <div class="profile">
            <img src="../../img/fotoPerfil.jfif" alt="David Astrada">
            <h2>David Astrada</h2>
            <a id="verPerfil" href="../ver_perfil/perfil_abogado.html">Ver perfil</a>
            <p>Especializado en derecho civil y familiar, mi objetivo es proporcionar soluciones legales efectivas y comprensibles para mis clientes. Fuera del trabajo, disfruto de la lectura y el tiempo al aire libre. Estoy aquí para ayudarte con tus necesidades legales.</p>
            <div class="stats">
                <div class="ocupado">
                    <div class="contenido">
                        <div class="circulo-ocupado"></div>
                        <p>Ocupado</p>
                    </div>
                    <span class="valor">5</span>
                </div>
                <hr>
                <div class="disponible">
                    <div class="contenido">
                        <div class="circulo-disponible"></div>
                        <p>Disponible</p>
                    </div>
                    <span class="valor">7</span>
                </div>
            </div>
        </div>
    </div>
</section>
        @endsection

        @section('footer')
        @endsection

        @push('styles')
        <link rel="stylesheet" href="css/calendar.css">
        @endpush

        @push('scripts')
        <script src="js/perfil.js"></script>
        @endpush
