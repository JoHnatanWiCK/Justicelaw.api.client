document.getElementById('codigoButton').addEventListener('click', async () => {
    // Recuperar el correo desde localStorage
    const email = localStorage.getItem('email');
    const code = document.getElementById('codigoInput').value;

    if (!email || !code) {
        return;
    }

    try {
        // Guardar el código en localStorage sin enviarlo al backend todavía
        localStorage.setItem('resetCode', code);

        // Redirige a la página para ingresar la nueva contraseña
        window.location.href = '/nuevaContraseña'; // Reemplaza con la URL de tu página
    } catch (error) {
        console.error('Error:', error);
    }
});
