<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Información</title>
</head>
<body>
    <div id="informationDetail" style="display: none;">
        <h1 id="infoTitle"></h1>
        <p id="infoDate"></p>
        <p><strong>Categoría:</strong> <span id="infoCategory"></span></p>
        <img id="infoImage" src="../../img/placeholder.png" alt="Imagen no disponible">
        <div id="infoBody"></div>
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', async () => {
    // URL base de la API
    const apiUrl = 'https://apijusticelaw-production.up.railway.app/v1/informations';
    const infoDetail = document.getElementById('informationDetail'); // Contenedor del detalle
    const errorMessage = document.getElementById('errorMessage'); // Contenedor de error
    const params = new URLSearchParams(window.location.search); // Leer los parámetros de la URL
    const infoId = params.get('id'); // Obtener el ID desde los parámetros

    if (!infoId) {
        errorMessage.textContent = 'No se especificó un ID válido.';
        errorMessage.style.display = 'block';
        return;
    }

    try {
        // Realizar la solicitud para obtener los detalles del artículo por ID
        const response = await fetch(`${apiUrl}/${infoId}`);
        if (!response.ok) {
            throw new Error('Error al obtener los datos del servidor.');
        }
        const info = await response.json();

        // Actualizar el contenido de la página con los datos recibidos
        document.getElementById('infoImage').src = info.cover_photo
            ? info.cover_photo
            : '../../img/placeholder.png';
        document.getElementById('infoImage').alt = info.name || 'Imagen no disponible';
        document.getElementById('infoTitle').textContent = info.name || 'Sin título';
        document.getElementById('infoDate').textContent = new Date(info.created_at).toLocaleDateString();
        document.getElementById('infoCategory').textContent = info.area?.name || 'Sin categoría';
        document.getElementById('infoBody').textContent = info.body || 'No hay contenido disponible.';

        infoDetail.style.display = 'block'; // Mostrar el detalle de la información
        errorMessage.style.display = 'none'; // Ocultar el mensaje de error
    } catch (error) {
        console.error('Error al cargar los detalles:', error);
        errorMessage.textContent = error.message;
        errorMessage.style.display = 'block';
    }
});

    </script>
</body>
</html>
