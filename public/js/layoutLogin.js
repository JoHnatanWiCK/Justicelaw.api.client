document.addEventListener('DOMContentLoaded', async () => {

    console.log('Script cargado y DOM completamente cargado'); // Verifica si el script se carga

    const userMenu = document.querySelector('.user-menu');
    const spanUserName = userMenu.querySelector('span');

    const token = localStorage.getItem('token');

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/auth/me', {
            method: 'POST',
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json',
            },
        });

        if (!response.ok) {
            if (response.status === 401) {
                alert('Tu sesión ha expirado. Serás redirigido a la página de inicio de sesión.');
                localStorage.removeItem('token');
                setTimeout(() => {
                    window.location.href = '/login';
                }, 3000);
            } else {
                throw new Error('Error al obtener datos del usuario');
            }
        } else {
            const data = await response.json();
            console.log('Datos del usuario:', data);

            // Mostrar nombre y apellido directamente desde data
            const { name } = data;
            spanUserName.textContent = `${name}`;
        }
    } catch (error) {
        console.error('Error:', error.message);
       
    }
});



const navLinks = document.querySelectorAll('.nav-links a');

        navLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                window.location.href = this.href;
                event.preventDefault();
            });
        });

