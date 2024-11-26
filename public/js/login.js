document.getElementById('btnInicioWeb').addEventListener('click', login);

async function login(event) {
    event.preventDefault();

    const email = document.getElementById('gmailWeb').value.trim();
    const password = document.getElementById('contraseñaWeb').value.trim();

    clearErrorMessages();

    let valid = true;

    if (!email) {
        showErrorMessage('gmailWeb', 'El campo de email es obligatorio.');
        valid = false;
    }

    if (!password) {
        showErrorMessage('contraseñaWeb', 'El campo de contraseña es obligatorio.');
        valid = false;
    }

    if (!valid) return;

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify({ email, password })
        });

        const data = await response.json();

        console.log('Respuesta del backend:', data);

        if (response.ok && data.access_token) {
            // Almacenar el token y el rol
            localStorage.setItem('token', data.access_token);
            localStorage.setItem('role', data.role); // Almacenar el rol

            // Redirigir según el rol
            switch (data.role) {
                case 'user':
                    window.location.href = '/homeLogin';
                    break;
                case 'lawyer':
                    window.location.href = '/crearPerfilAbogado';
                    break;
                case 'admin':
                    window.location.href = '/dashboard';
                    break;
                default:
                    window.location.href = '/';
                    break;
            }
        } else {
            const errorMessage = data.message || 'Credenciales no válidas o error en el servidor.';
            showErrorMessage('contraseñaWeb', errorMessage);
        }

    } catch (error) {
        console.error('Error:', error);
        showErrorMessage('gmailWeb', 'Ocurrió un error al intentar iniciar sesión.');
    }
}

function showErrorMessage(inputId, message) {
    const errorDiv = document.createElement('div');
    errorDiv.classList.add('error-message');
    errorDiv.textContent = message;

    const inputField = document.getElementById(inputId);
    inputField.insertAdjacentElement('afterend', errorDiv);
}

function clearErrorMessages() {
    const errorMessages = document.querySelectorAll('.error-message');
    errorMessages.forEach(message => message.remove());
}

document.getElementById('togglePassword').addEventListener('click', function () {
    const passwordField = document.getElementById('contraseñaWeb');
    const type = passwordField.type === 'password' ? 'text' : 'password';
    passwordField.type = type;

    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');
});
