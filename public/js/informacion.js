document.addEventListener('DOMContentLoaded', async () => { 
    const apiUrl = 'https://apijusticelaw-production.up.railway.app/v1/informations';  // API de informaciones
    const container = document.getElementById('informationContainer');
    const errorMessage = document.getElementById('errorMessage');

    try {
        // Obtener las informaciones
        const response = await fetch(apiUrl);
        if (!response.ok) {
            throw new Error('Error al obtener los datos del servidor.');
        }
        const informations = await response.json();

        if (!informations.length) {
            throw new Error('No se encontraron datos.');
        }

        // Iterar sobre las informaciones y obtener el nombre de la categoría
        informations.forEach(info => {
            // Acceder directamente al nombre de la categoría desde info.area.name
            let areaName = info.area ? info.area.name : 'Sin categoría'; // Usamos el nombre de la categoría directamente

            // Crear el elemento de la información
            const infoElement = document.createElement('div');
            infoElement.classList.add('info-informacion');

            infoElement.innerHTML = `
                <div class="imagen-container">
                    <img 
                        src="${info.cover_photo ? `../../img/${info.cover_photo}` : '../../img/placeholder.png'}" 
                        alt="${info.name || 'Imagen no disponible'}" 
                        class="informacion-imagen" 
                        onerror="this.onerror=null;this.src='../../img/placeholder.png';"
                    >
                </div>
                <div class="informacion-texto">
                    <h3>${info.name || 'Sin nombre'}</h3>
                    <p>${info.body || 'Sin contenido disponible.'}</p>
                    <p><strong>Categoría:</strong> ${areaName}</p>
                    <a href="/informacion/${info.id}" class="leer-mas-btn">Leer más</a>
                </div>
            `;

            container.appendChild(infoElement);
        });

        errorMessage.style.display = 'none';
    } catch (error) {
        console.error('Error al obtener las informaciones:', error);
        errorMessage.textContent = error.message;
        errorMessage.style.display = 'block';
    }
});
