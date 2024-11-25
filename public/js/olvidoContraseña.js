document.getElementById('recu').addEventListener('click', async () => {
    const email = document.getElementById('email').value;

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/password/email', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
            body: JSON.stringify({ email }),
        });

        if (!response.ok) {
            const errorData = await response.json();
            return;
        }

        const data = await response.json();
  

        // Guardar el correo en el localStorage
        localStorage.setItem('email', email);

        // Redirige a la página para ingresar el código
        window.location.href = '/olvidarContraseñaCodigo'; // Reemplaza con la URL de tu página
    } catch (error) {
        console.error('Error:', error);
    }
});
