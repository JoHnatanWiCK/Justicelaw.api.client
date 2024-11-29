const navLinks = document.querySelectorAll('.nav-links a');

        navLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                window.location.href = this.href;
                event.preventDefault();
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            const apiUrl = 'https://apijusticelaw-production.up.railway.app/v1/informations'; // URL de la API
            const searchBar = document.getElementById('searchBar'); // Campo de búsqueda
            const searchButton = document.getElementById('searchButton'); // Botón de búsqueda
            const container = document.getElementById('informationContainer'); // Contenedor para resultados
            const errorMessage = document.getElementById('errorMessage'); // Mensaje de error
            const modal = document.getElementById('informationDetail'); // Modal de detalles
            const closeModal = document.getElementById('closeModal'); // Botón para cerrar el modal
            const maxLength = 150; // Máximo de caracteres para el resumen
        
            // Función para manejar la búsqueda
            const searchInformations = async (searchTerm) => {
                try {
                    // Realizar la llamada a la API con el término de búsqueda
                    const response = await fetch(`${apiUrl}?search=${searchTerm}`); 
                    if (!response.ok) {
                        throw new Error('Error al obtener los datos del servidor.');
                    }
        
                    // Obtener los datos de la API
                    const informations = await response.json();
                    container.innerHTML = ''; // Limpiar el contenedor antes de agregar nuevos resultados
        
                    if (!informations.length) {
                        errorMessage.textContent = 'No se encontraron resultados.';
                        errorMessage.style.display = 'block';
                        return;
                    }
        
                    // Iterar sobre los datos y mostrarlos en el contenedor
                    informations.forEach(info => {
                        let areaName = 'Sin categoría'; // Valor por defecto
        
                        const infoElement = document.createElement('div');
                        infoElement.classList.add('info-informacion');
        
                        // Truncar el texto para el resumen
                        const fullText = info.body || 'Sin contenido disponible.';
                        const shortText = fullText.length > maxLength ? fullText.slice(0, maxLength) + '...' : fullText;
        
                        // Generar el contenido HTML para cada información
                        infoElement.innerHTML = `
                            <div class="imagen-container">
                                <img src="${info.cover_photo ? info.cover_photo : '../../img/placeholder.png'}" alt="${info.name || 'Imagen no disponible'}" class="informacion-imagen">
                            </div>
                            <div class="informacion-texto">
                                <h3>${info.name || 'Sin nombre'}</h3>
                                <p>${shortText}</p>
                                <p><strong>Categoría:</strong> ${areaName}</p>
                                <a href="#" class="leer-mas-btn" data-id="${info.id}">Leer más</a>
                            </div>
                        `;
        
                        // Agregar el resultado al contenedor
                        container.appendChild(infoElement);
        
                        // Evento para mostrar detalles en el modal
                        const readMoreButton = infoElement.querySelector('.leer-mas-btn');
                        readMoreButton.addEventListener('click', async (event) => {
                            event.preventDefault(); // Evitar la redirección del enlace
                            const infoId = readMoreButton.getAttribute('data-id');
                            try {
                                const infoResponse = await fetch(`${apiUrl}/${infoId}`);
                                if (!infoResponse.ok) {
                                    throw new Error('No se pudo obtener los detalles.');
                                }
                                const fullInfo = await infoResponse.json();
                                const data = fullInfo.information; // Obtener la información completa
        
                                // Mostrar los detalles en el modal
                                const modalImage = document.getElementById('infoImage');
                                modalImage.src = data.cover_photo ? data.cover_photo : '../../img/placeholder.png';
                                document.getElementById('infoTitle').textContent = data.name || 'Sin título';
                                document.getElementById('infoBody').textContent = data.body || 'No hay contenido disponible.';
                                document.getElementById('infoCategory').textContent = data.category ? data.category.name : 'Sin categoría';
                                modal.style.display = 'flex'; // Mostrar el modal
                            } catch (error) {
                                console.error('Error al obtener los detalles:', error);
                                errorMessage.textContent = error.message;
                                errorMessage.style.display = 'block';
                            }
                        });
                    });
                } catch (error) {
                    console.error('Error al cargar la información:', error);
                    errorMessage.textContent = error.message;
                    errorMessage.style.display = 'block';
                }
            };
        
            // Ejecutar la búsqueda al hacer clic en el botón
            searchButton.addEventListener('click', () => {
                const searchTerm = searchBar.value.trim(); // Obtener el término de búsqueda
                if (searchTerm) {
                    searchInformations(searchTerm);
                } else {
                    errorMessage.textContent = 'Por favor, ingresa un término de búsqueda.';
                    errorMessage.style.display = 'block';
                }
            });
        
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
        