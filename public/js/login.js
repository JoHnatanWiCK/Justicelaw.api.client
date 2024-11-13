document.getElementById('btnInicioWeb').addEventListener('click', login);

async function login() {
    // Obtener los valores de los campos del formulario
    const email = document.getElementById('gmailWeb').value;
    const password = document.getElementById('contraseñaWeb').value;

    try {

        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/auth/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ email, password })
        });

        const data = await response.json();
        console.log('Respuesta del backend:', data); // Verificar qué datos llegan

        // Verificar si el login fue exitoso y el access_token está presente
        if (response.ok && data.access_token) {
            // Guardar el token en localStorage y redirigir
            localStorage.setItem('token', data.access_token); // Cambiado a access_token
            window.location.href = '/homeLogin'; // Redirige a la página principal
        } else {
            alert('Credenciales no válidas o error en el servidor.');
        }
    } catch (error) {
        console.error('Error:', error);
        alert('Ocurrió un error al intentar iniciar sesión.');
    }
}


document.querySelector('a').addEventListener('click', function(e) {
    window.location.href = this.href;
});

