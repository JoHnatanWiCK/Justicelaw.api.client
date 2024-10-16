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
                <h2>Preguntas generales</h2>
                <ul>
                    <li class="faq-item">¿Qué servicios legales ofrecen? 
                        <i class="fas fa-plus plus-icon"></i>
                        <i class="fas fa-minus minus-icon" style="display: none;"></i>
                    </li>
                    <li class="faq-answer">Ofrecemos una amplia gama de servicios legales que incluyen asesoramiento jurídico, representación en litigios, redacción de contratos, planificación patrimonial, resolución alternativa de disputas y más. Nuestros abogados tienen experiencia en diversas áreas del derecho, desde derecho corporativo hasta derecho de familia y derecho penal.</li>
                    
                    <li class="faq-item">¿Cómo puedo saber si necesito un abogado para mi situación legal? 
                        <i class="fas fa-plus plus-icon"></i>
                        <i class="fas fa-minus minus-icon" style="display: none;"></i>
                    </li>
                    <li class="faq-answer">Dependerá de la complejidad de tu caso y tu experiencia previa.</li>
                    
                    <li class="faq-item">¿Cuál es el proceso para resolver disputas legales fuera de los tribunales? 
                        <i class="fas fa-plus plus-icon"></i>
                        <i class="fas fa-minus minus-icon" style="display: none;"></i>
                    </li>
                    <li class="faq-answer">A través de mediación, arbitraje o negociación.</li>
                    
                    <li class="faq-item">¿Cuáles son los plazos legales que debo tener en cuenta en mi caso? 
                        <i class="fas fa-plus plus-icon"></i>
                        <i class="fas fa-minus minus-icon" style="display: none;"></i>
                    </li>
                    <li class="faq-answer">Los plazos varían según el tipo de caso, te recomendamos consultar con un abogado.</li>
                    
                    <li class="faq-item">¿Cómo puedo obtener una copia de un documento legal importante? 
                        <i class="fas fa-plus plus-icon"></i>
                        <i class="fas fa-minus minus-icon" style="display: none;"></i>
                    </li>
                    <li class="faq-answer">Puedes solicitar una copia a la entidad que emitió el documento o a través del abogado que gestionó tu caso.</li>
                </ul>
            </div>
            
            <div class="faq-category">
                <h2>Soporte al cliente</h2>
                <ul>
                    <li class="faq-item">¿Qué servicios legales ofrecen? 
                        <i class="fas fa-plus plus-icon"></i>
                        <i class="fas fa-minus minus-icon" style="display: none;"></i>
                    </li>
                    <li class="faq-answer">Ofrecemos una amplia gama de servicios legales que incluyen asesoramiento jurídico, representación en litigios, redacción de contratos, planificación patrimonial, resolución alternativa de disputas y más. Nuestros abogados tienen experiencia en diversas áreas del derecho, desde derecho corporativo hasta derecho de familia y derecho penal.</li>
                    
                    <li class="faq-item">¿Cómo puedo saber si necesito un abogado para mi situación legal? 
                        <i class="fas fa-plus plus-icon"></i>
                        <i class="fas fa-minus minus-icon" style="display: none;"></i>
                    </li>
                    <li class="faq-answer">Dependerá de la complejidad de tu caso y tu experiencia previa.</li>
                    
                    <li class="faq-item">¿Cuál es el proceso para resolver disputas legales fuera de los tribunales? 
                        <i class="fas fa-plus plus-icon"></i>
                        <i class="fas fa-minus minus-icon" style="display: none;"></i>
                    </li>
                    <li class="faq-answer">A través de mediación, arbitraje o negociación.</li>
                    
                    <li class="faq-item">¿Cuáles son los plazos legales que debo tener en cuenta en mi caso? 
                        <i class="fas fa-plus plus-icon"></i>
                        <i class="fas fa-minus minus-icon" style="display: none;"></i>
                    </li>
                    <li class="faq-answer">Los plazos varían según el tipo de caso, te recomendamos consultar con un abogado.</li>
                    
                    <li class="faq-item">¿Cómo puedo obtener una copia de un documento legal importante? 
                        <i class="fas fa-plus plus-icon"></i>
                        <i class="fas fa-minus minus-icon" style="display: none;"></i>
                    </li>
                    <li class="faq-answer">Puedes solicitar una copia a la entidad que emitió el documento o a través del abogado que gestionó tu caso.</li>
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
