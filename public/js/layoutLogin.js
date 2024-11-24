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

            // Llamar a la función para cargar la foto de perfil
            await cargarFotoPerfil();
        }
    } catch (error) {
        console.error('Error:', error.message);
    }
});


async function cargarFotoPerfil() {
    const token = localStorage.getItem('token');

    if (!token) {
        alert('No estás autenticado.');
        return;
    }

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/getprofile', {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`
            }
        });

        if (response.ok) {
            const data = await response.json();
            console.log('Foto de perfil:', data.photo);

            const imgPerfil = document.getElementById('fotoPerfilLayout');
            if (imgPerfil) {
                const photoUrl = data.photo ? `${data.photo}?timestamp=${new Date().getTime()}` : '../../img/fotoPerfil.png';
                imgPerfil.src = photoUrl;
                console.log('Imagen de perfil cargada:', photoUrl);
            } else {
                console.error('Elemento con id "img-perfil" no encontrado.');
            }
        } else {
            const errorData = await response.json();
            console.error('Error al cargar la foto de perfil:', errorData);
        }
    } catch (error) {
        console.error('Error:', error);
    }
}

// Obtén los elementos del DOM
const confirmLogoutButton = document.getElementById('confirmLogout');
const cancelLogoutButton = document.getElementById('cancelLogout');
const logoutModal = document.getElementById('logoutModal');

// Función para cerrar sesión
async function logout() {
    const token = localStorage.getItem('token');

    if (!token) {
        alert('No estás autenticado.');
        return;
    }

    try {
        // Realiza la solicitud fetch al backend para cerrar sesión
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/auth/logout', {
            method: 'POST',
            headers: {
                'Authorization': `Bearer ${token}`
            }
        });

        if (response.ok) {
            const data = await response.json();
            console.log('Respuesta del servidor:', data);

            localStorage.removeItem('token');

            closeModal();
            window.location.href = 'http://127.0.0.1:8000/'; // Redirige al inicio después de cerrar sesión
        } else {
            const errorData = await response.json();
            console.error('Error:', errorData);
            alert('Hubo un error al cerrar sesión.');
        }
    } catch (error) {
        console.error('Error:', error);
        alert('No se pudo cerrar sesión.');
    }
}

// Función para cerrar el modal sin redirigir
function closeModal() {
    logoutModal.style.display = 'none'; // Esto solo cierra el modal, no redirige
}

if (confirmLogoutButton) {
    confirmLogoutButton.addEventListener('click', logout);
}

if (cancelLogoutButton) {
    cancelLogoutButton.addEventListener('click', closeModal);
}


const navLinks = document.querySelectorAll('.nav-links a');

        navLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                window.location.href = this.href;
                event.preventDefault();
            });
        });

