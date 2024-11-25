document.getElementById('recu').addEventListener('click', async () => {
    const password = document.getElementById('password').value;

    if (!password) {
        alert('Por favor ingresa una nueva contraseña.');
        return;
    }

    // Guardar la nueva contraseña en localStorage
    localStorage.setItem('newPassword', password);

    // Recuperar el correo y el código desde localStorage
    const email = localStorage.getItem('email');
    const resetCode = localStorage.getItem('resetCode');

    if (!resetCode || !email) {

        return;
    }

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/password/reset', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                email,
                code: resetCode,  // Enviar el código almacenado
                password,          // Enviar la nueva contraseña
                password_confirmation: password  // Confirmar la contraseña
            }),
        });

        const data = await response.json();

        if (response.ok) {
            window.location.href = '/confirmacion'; // Reemplaza con la URL de la página de confirmación
        } else {

        }
    } catch (error) {
        console.error('Error:', error);
    }
});
