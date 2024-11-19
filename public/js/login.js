document.getElementById('btnInicioWeb').addEventListener('click', login);

async function login(event) {
    // Evitar comportamiento predeterminado del formulario
    event.preventDefault();

    // Obtener los valores de los campos del formulario
    const email = document.getElementById('gmailWeb').value.trim();
    const password = document.getElementById('contraseñaWeb').value.trim();

    // Validar que los campos no estén vacíos
    if (!email || !password) {
        alert('Por favor, completa ambos campos.');
        return;
    }

    try {
        // Enviar la solicitud al servidor
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/auth/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify({ email, password })
        });

        // Parsear la respuesta del servidor
        const data = await response.json();

        // Depuración: imprimir los datos recibidos
        console.log('Respuesta del backend:', data);

        // Verificar si la respuesta fue exitosa
        if (response.ok && data.access_token) {
            // Guardar el token en localStorage
            localStorage.setItem('token', data.access_token);

            // Redirigir al usuario
            window.location.href = '/homeLogin';
        } else {
            // Mostrar un mensaje de error específico si el backend lo envía
            const errorMessage = data.message || 'Credenciales no válidas o error en el servidor.';
            alert(errorMessage);
        }
    } catch (error) {
        // Manejar errores de red o del cliente
        console.error('Error:', error);
        alert('Ocurrió un error al intentar iniciar sesión.');
    }
}