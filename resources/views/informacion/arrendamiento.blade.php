<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Información</title>
</head>
<body>
  <div id="informationDetail" style="display: none;">
    <div class="informacion-detalle">
      <h1>{{ $information->name }}</h1>
      <img src="{{ $information->cover_photo ? asset('storage/' . $information->cover_photo) : asset('img/placeholder.png') }}" alt="{{ $information->name }}">
      <p><strong>Categoría:</strong> {{ $information->forumcategory->name ?? 'Sin categoría' }}</p>
      <p>{{ $information->body }}</p>
  </div>
    <script>
    document.addEventListener('DOMContentLoaded', async () => {
    // URL base de la API
    const apiUrl = 'https://apijusticelaw-production.up.railway.app/v1/informations';
    const infoDetail = document.getElementById('informationDetail');
    const errorMessage = document.getElementById('errorMessage');
    const params = new URLSearchParams(window.location.search); // Obtener parámetros de la URL
    const infoId = params.get('id'); // Obtener el ID del artículo desde la URL

    if (!infoId) {
        errorMessage.textContent = 'No se especificó un ID válido en la URL.';
        errorMessage.style.display = 'block';
        return;
    }

    console.log(`Llamando a la API: ${apiUrl}/${infoId}`);

    try {
        // Realizar la petición a la API con el ID proporcionado
        console.log(`Llamando a la API: ${apiUrl}/${infoId}`);
        const response = await fetch(`${apiUrl}/${infoId}`);
        if (!response.ok) {
            const errorDetails = await response.text();
            console.error('Detalles del error:', errorDetails);
            throw new Error('Error al obtener los datos del servidor.');
        }
        const info = await response.json();
        console.log('Información recibida:', info);

        // Actualizar el HTML con los datos recibidos
        document.getElementById('infoImage').src = info.cover_photo
            ? `../../img/${info.cover_photo}` // Asume que las imágenes están en esta ruta
            : '../../img/placeholder.png';    // Imagen de reserva
        document.getElementById('infoImage').alt = info.name || 'Imagen no disponible';
        document.getElementById('infoTitle').textContent = info.name || 'Sin título';
        document.getElementById('infoDate').textContent = new Date(info.created_at).toLocaleDateString();
        document.getElementById('infoCategory').textContent = info.forumcategory?.name || 'Sin categoría';
        document.getElementById('infoBody').textContent = info.body || 'No hay contenido disponible.';

        // Mostrar la sección de detalles y ocultar mensajes de error
        infoDetail.style.display = 'block';
        errorMessage.style.display = 'none';
    } catch (error) {
        console.error('Error al cargar los detalles:', error);
        errorMessage.textContent = error.message;
        errorMessage.style.display = 'block';
    }
});


    </script>
</body>
</html>
