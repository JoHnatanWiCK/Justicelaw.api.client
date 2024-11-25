document.addEventListener('DOMContentLoaded', () => {
    const button = document.getElementById('codigoButton');
    const codigoInput = document.getElementById('codigoInput');

    if (!button || !codigoInput) {
        console.error("No se han encontrado los elementos necesarios en el DOM.");
        return;
    }

    button.addEventListener('click', async (e) => {
        e.preventDefault();

        const codigo = codigoInput.value.trim();

        if (!codigo) {
            alert('Por favor, ingresa el código de validación.');
            return;
        }

        try {
            const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/validate-code', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ code: codigo }),
            });

            // Revisar si el servidor responde con un código diferente de 200
            if (!response.ok) {
                const errorText = await response.text(); // Leer el texto de la respuesta
                console.error('Error en el servidor:', errorText); // Mostrar el error en consola
                alert('Hubo un problema con la solicitud. Intenta nuevamente más tarde.');
                return;
            }

            const result = await response.json();

            if (result.status === 'success') {
                alert('Código validado correctamente.');
                window.location.href = '/restablecer-contraseña';
            } else {
                alert(result.message || 'El código es inválido. Intenta nuevamente.');
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Hubo un error en el servidor. Inténtalo más tarde.');
        }
    });
});
