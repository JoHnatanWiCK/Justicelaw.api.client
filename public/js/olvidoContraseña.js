document.getElementById('validate-code-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const code = document.getElementById('validation-code').value;

    fetch('https://apijusticelaw-production.up.railway.app/v1/password', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify({ code })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            alert('Código validado correctamente. Por favor, elige una nueva contraseña.');
            // Redirigir al formulario de nueva contraseña
        } else {
            alert('Error al validar el código: ' + data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
