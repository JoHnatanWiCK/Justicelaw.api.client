@extends('layouts.layoutadmin')

@section('title', 'Dashboard')

@section('nav')
    <nav>
    </nav>
@endsection
@php
    $isGrid = false; 
@endphp
@section('main-content')
<section class="nogrid">
    <div class="faqs">
        <h1>FAQs</h1>
            <div class="faq-sections">
                <div class="faq-category">
                    <h2>Soporte al cliente</h2>
                    <ul>
                        <li>¿Qué servicios legales ofrecen? <img src="../../img/mas.png" alt="mas" class="plus-icon"></li>
                        <li>¿Cómo puedo saber si necesito un abogado para mi situación legal? <img src="../../img/mas.png" class="plus-icon"></li>
                        <li>¿Cuál es el proceso para resolver disputas legales fuera de los tribunales? <img src="../../img/mas.png" class="plus-icon"></li>
                        <li>¿Cuáles son los plazos legales que debo tener en cuenta en mi caso? <img src="../../img/mas.png" class="plus-icon"></li>
                        <li>¿Cómo puedo obtener una copia de un documento legal importante? <img src="../../img/mas.png" class="plus-icon"></li>
                    </ul>
                </div>
                <div class="faq-category">
                    <h2>Preguntas generales</h2>
                    <ul>
                        <li>¿Qué servicios legales ofrecen? <img src="../../img/mas.png" class="plus-icon"></li>
                        <li>¿Cómo puedo saber si necesito un abogado para mi situación legal? <img src="../../img/mas.png" class="plus-icon"></li>
                        <li>¿Cuál es el proceso para resolver disputas legales fuera de los tribunales? <img src="../../img/mas.png" class="plus-icon"></li>
                        <li>¿Cuáles son los plazos legales que debo tener en cuenta en mi caso? <img src="../../img/mas.png" class="plus-icon"></li>
                        <li>¿Cómo puedo obtener una copia de un documento legal importante? <img src="../../img/mas.png" class="plus-icon"></li>
                    </ul>
                </div>
            </div>
        </div>
</section>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
<link rel="stylesheet" href="css/faqs.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endpush

@push('scripts')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/faqs.js') }}"></script>
@endpush
