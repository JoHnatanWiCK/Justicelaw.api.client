document.addEventListener('DOMContentLoaded', async () => {
    const apiUrl = 'https://apijusticelaw-production.up.railway.app/v1/informations';
    const container = document.getElementById('informationContainer');

    try {
        const response = await fetch(apiUrl);
        const informations = await response.json();

        console.log('Respuesta de la API:', informations);

        informations.forEach(info => {
            const infoElement = document.createElement('div');
            infoElement.innerHTML = `
                <h3>${info.name || 'Sin nombre'}</h3>
                <p>${info.body || 'Sin contenido'}</p>
                <img src="../../img/${info.cover_photo}" alt="Imagen no disponible" style="max-width: 100px;">
                <p><strong>Categoría:</strong> ${info.category || 'Sin categoría'}</p>
            `;
            container.appendChild(infoElement);
        });
    } catch (error) {
        console.error('Error al obtener las informaciones:', error);
        container.innerHTML = '<p>Ocurrió un error al cargar las informaciones.</p>';
    }
});
