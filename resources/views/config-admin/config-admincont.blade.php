@extends('layouts.layoutadmin')

@section('title', 'Dashboard')

@section('nav')
   
@endsection

@section('main')
<section class="content">
    <div class="container-font">
        <div class="breadcrumb">
            <h1>Configuración </h1>
            <h4>Configuración de la cuenta </h4>
            <p>Restablecer contraseña</p>
        </div>

        <div class="form-container">
            <h2>Restablecer Contraseña</h2>
            <p>La contraseña debe tener un mínimo de 8 dígitos, una letra mayúscula, un número, y un carácter especial incluidos.</p>

            <form id="password-form" action="#" method="post">
                <label for="current-password">*Contraseña Actual</label>
                <input type="password" id="current-password" name="current-password" placeholder="Contraseña Actual" required>

                <label for="new-password">*Nueva Contraseña</label>
                <input type="password" id="new-password" name="new-password" placeholder="Nueva Contraseña" required>

                <label for="confirm-password">*Confirmar Contraseña</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirmar Contraseña" required>

                <button type="submit" id="guardar-btn">Guardar</button>
            </form>

            <div class="toast hidden" id="toast">
                <img src="../../img/check.png" class="check" alt="check">
                <div class="message">
                    <span class="text text-1">Datos Guardados</span>
                    <span class="text text-2">¡Contraseña restablecida exitosamente!</span>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.getElementById("password-form").addEventListener("submit", function(event){
        event.preventDefault(); 

        const toast = document.getElementById("toast");

        const guardarBtn = document.getElementById("guardar-btn");
        guardarBtn.innerText = "Guardando...";

        setTimeout(() => {
            guardarBtn.innerText = "Guardar"; 
         
            toast.classList.remove("hidden");
            toast.classList.add("show");

            setTimeout(() => {
                toast.classList.remove("show");
                toast.classList.add("hidden");
            }, 5000);

        }, 1000); 
    });
</script>     
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/AdminrestContraseña.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
@endpush

@push('scripts')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/home.js') }}"></script>
@endpush
