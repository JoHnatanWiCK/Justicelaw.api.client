document.addEventListener('DOMContentLoaded', async () => {
    const apiUrl = 'https://apijusticelaw-production.up.railway.app/v1/informations';
    const areasUrl = 'https://apijusticelaw-production.up.railway.app/v1/areas';
    const container = document.getElementById('informationContainer');
    const errorMessage = document.getElementById('errorMessage');
    const modal = document.getElementById('informationDetail'); // Modal
    const closeModal = document.getElementById('closeModal'); // Botón de cerrar

    try {
        const response = await fetch(apiUrl);
        if (!response.ok) {
            throw new Error('Error al obtener los datos del servidor.');
        }
        const informations = await response.json();

        if (!informations.length) {
            throw new Error('No se encontraron datos.');
        }

        const areasResponse = await fetch(areasUrl);
        if (!areasResponse.ok) {
            throw new Error('Error al obtener las áreas.');
        }
        const areas = await areasResponse.json();

        informations.forEach(info => {
            let areaName = 'Sin categoría'; // Valor por defecto
            if (info.area_id) {
                const area = areas.find(area => area.id === info.area_id);
                if (area) {
                    areaName = area.name;
                }
            }

            // Crear contenedor de información
            const infoElement = document.createElement('div');
            infoElement.classList.add('info-informacion');

            // Truncar el texto si es demasiado largo
            const truncatedBody = info.body.length > 150 ? `${info.body.substring(0, 150)}...` : info.body;

            infoElement.innerHTML = `
                <div class="imagen-container">
                    <img src="${info.cover_photo ? `../../img/${info.cover_photo}` : '../../img/placeholder.png'}" 
                         alt="${info.name || 'Imagen no disponible'}" class="informacion-imagen" 
                         onerror="this.onerror=null;this.src='../../img/placeholder.png';">
                </div>
                <div class="informacion-texto">
                    <h3>${info.name || 'Sin nombre'}</h3>
                    <p>${truncatedBody}</p> <!-- Mostrar resumen del texto -->
                    <p><strong>Categoría:</strong> ${areaName}</p>
                    <a href="#" class="leer-mas-btn" data-id="${info.id}">Leer más</a>
                </div>
            `;

            container.appendChild(infoElement);

            // Asignar el evento al hacer clic en el enlace "Leer más"
            const btn = infoElement.querySelector('.leer-mas-btn');
            btn.addEventListener('click', async (event) => {
                event.preventDefault(); // Evitar la redirección del enlace
            
                const infoId = btn.getAttribute('data-id'); // Obtener el ID de la información
                try {
                    // Obtener los detalles de la información por ID
                    const infoResponse = await fetch(`${apiUrl}/${infoId}`);
                    if (!infoResponse.ok) {
                        throw new Error('No se pudo obtener los detalles de la información.');
                    }
                    const info = await infoResponse.json();
            
                    // Mostrar los detalles en el modal
                    document.getElementById('infoImage').src = info.cover_photo 
                        ? `../../img/${info.cover_photo}` 
                        : '../../img/placeholder.png';
                    document.getElementById('infoTitle').textContent = info.name || 'Sin título';
                    document.getElementById('infoBody').textContent = info.body || 'No hay contenido disponible.';
                    document.getElementById('infoCategory').textContent = info.area ? info.area.name : 'Sin categoría';
            
                    // Mostrar el modal
                    modal.style.display = 'flex'; // Mostrar el modal
                    errorMessage.style.display = 'none'; // Ocultar errores
                } catch (error) {
                    console.error('Error al obtener los detalles:', error);
                    errorMessage.textContent = error.message;
                    errorMessage.style.display = 'block';
                }
            });
        });

        errorMessage.style.display = 'none';

    } catch (error) {
        console.error('Error al cargar la información:', error);
        errorMessage.textContent = error.message;
        errorMessage.style.display = 'block';
    }

    // Cerrar el modal al hacer clic en el botón de cerrar
    closeModal.addEventListener('click', () => {
        modal.style.display = 'none'; // Ocultar el modal
    });

    // Cerrar el modal si se hace clic fuera del contenido del modal
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none'; // Ocultar el modal
        }
    });
});
