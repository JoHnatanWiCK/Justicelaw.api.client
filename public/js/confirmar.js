// Confirmar
document.addEventListener('DOMContentLoaded', () => {
    const button = document.getElementById('exito');

    button.addEventListener('click', (e) => {
        e.preventDefault();
        // Redirige al usuario a la página de inicio de sesión
        window.location.href = '/login';
    });
});
