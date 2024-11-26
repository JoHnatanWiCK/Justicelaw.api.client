document.getElementById('recu').addEventListener('click', async () => {
    const email = document.getElementById('email').value;
    const errorMessage = document.getElementById('errorEmail');

    // Limpiar mensaje de error previo
    errorMessage.textContent = '';

    // Validación de que el campo no esté vacío
    if (!email) {
        errorMessage.textContent = 'Este campo es obligatorio';
        errorMessage.style.color = 'red'; // Estilo para el mensaje de error
        return; // Detiene la ejecución si el campo está vacío
    }

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/password/email', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
            body: JSON.stringify({ email }),
        });

        if (!response.ok) {
            const errorData = await response.json();
            // Aquí puedes manejar otros errores específicos del servidor si es necesario
            errorMessage.textContent = 'Hubo un problema con la solicitud. Intenta nuevamente.';
            errorMessage.style.color = 'red';
            return;
        }

        const data = await response.json();

        // Guardar el correo en el localStorage
        localStorage.setItem('email', email);

        // Redirigir a la página para ingresar el código
        window.location.href = '/olvidarContraseñaCodigo'; // Reemplaza con la URL de tu página
    } catch (error) {
        console.error('Error:', error);
        errorMessage.textContent = 'No se pudo realizar la solicitud. Intenta más tarde.';
        errorMessage.style.color = 'red';
    }
});
