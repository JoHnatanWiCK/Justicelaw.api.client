@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle de la Información</h1>
    <div id="errorMessage" class="alert alert-danger" style="display: none;"></div>

    <div id="informationDetail" style="display: none;">
        <div class="card">
            <img id="infoImage" class="card-img-top" src="" alt="Imagen no disponible" onerror="this.onerror=null;this.src='../../img/placeholder.png';">
            <div class="card-body">
                <h3 id="infoTitle" class="card-title"></h3>
                <p id="infoBody" class="card-text"></p>
                <p><strong>Categoría:</strong> <span id="infoCategory"></span></p>
                <a href="/" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', async () => {
        const apiUrl = 'https://apijusticelaw-production.up.railway.app/v1/informations'; // URL base de la API
        const informationDetail = document.getElementById('informationDetail');
        const errorMessage = document.getElementById('errorMessage');
        const infoId = window.location.pathname.split('/').pop(); // Extrae el ID de la URL

        try {
            // Obtener los detalles de la información
            const response = await fetch(`${apiUrl}/${infoId}`);
            if (!response.ok) {
                throw new Error('No se pudo obtener la información del servidor.');
            }
            const info = await response.json();

            // Actualizar el contenido de la página con los datos obtenidos
            document.getElementById('infoImage').src = info.cover_photo 
                ? `../../img/${info.cover_photo}` 
                : '../../img/placeholder.png';
            document.getElementById('infoTitle').textContent = info.name || 'Sin título';
            document.getElementById('infoBody').textContent = info.body || 'No hay contenido disponible.';
            document.getElementById('infoCategory').textContent = info.area ? info.area.name : 'Sin categoría';

            informationDetail.style.display = 'block'; // Mostrar detalles
            errorMessage.style.display = 'none'; // Ocultar errores
        } catch (error) {
            console.error('Error al obtener los detalles:', error);
            errorMessage.textContent = error.message;
            errorMessage.style.display = 'block';
        }
    });
</script>
@endsection
