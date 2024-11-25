document.addEventListener('DOMContentLoaded', () => {
    const button = document.getElementById('recu');

    button.addEventListener('click', async (e) => {
        e.preventDefault();
        const emailInput = document.getElementById('email');
        const email = emailInput.value;

        if (!email) {
            alert('Por favor, ingresa un correo electrónico.');
            return;
        }

        try {
            const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/password', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ email }),
            });

            const result = await response.json();

            if (result.status === 'success') {
                alert('Se ha enviado un enlace de recuperación a tu correo.');
                // Redirigir a la segunda vista si es necesario
                window.location.href = '/olvidarContraseñaCodigo';
            } else {
                alert(result.message || 'Error al enviar el correo. Inténtalo de nuevo.');
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Hubo un error en el servidor. Inténtalo más tarde.');
        }
    });
});

