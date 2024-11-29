// URL del backend
const BASE_URL = "https://apijusticelaw-production.up.railway.app/v1"; // Cambia esto por la URL real de tu backend

// Obtener elementos del DOM
const form = document.getElementById('informationForm');
const messageDiv = document.getElementById('message');

// Manejar el envío del formulario
form.addEventListener('submit', async (e) => {
    e.preventDefault(); // Evitar recargar la página

    // Crear el objeto FormData
    const formData = new FormData(form);

    try {
        // Enviar datos al backend
        const response = await fetch(`${BASE_URL}/informations`, {
            method: 'POST',
            body: formData, // Enviar el formulario como multipart/form-data
        });

        // Verificar si la respuesta fue exitosa
        if (!response.ok) {
            throw new Error('Error al guardar la información. Verifica los datos ingresados.');
        }

        const result = await response.json();

        // Mostrar mensaje de éxito
        messageDiv.innerHTML = `<p class="success">Información guardada con éxito.</p>`;
        form.reset(); // Reiniciar el formulario
    } catch (error) {
        // Mostrar mensaje de error
        messageDiv.innerHTML = `<p class="error">${error.message}</p>`;
    }
});
