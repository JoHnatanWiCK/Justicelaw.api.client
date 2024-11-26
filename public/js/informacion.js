document.addEventListener('DOMContentLoaded', async () => {
    const apiUrl = 'https://apijusticelaw-production.up.railway.app/v1/informations';
    const container = document.getElementById('informationContainer');
    const errorMessage = document.getElementById('errorMessage');

    try {
        const response = await fetch(apiUrl);
        if (!response.ok) {
            throw new Error('Error al obtener los datos del servidor.');
        }

        const informations = await response.json();

        if (!informations.length) {
            throw new Error('No se encontraron datos.');
        }
        informations.forEach(info => {
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
                    <p><strong>Categoría:</strong> ${info.category || 'Sin categoría.'}</p>
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
