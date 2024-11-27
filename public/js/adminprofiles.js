document.addEventListener('DOMContentLoaded', async () => {
    console.log('Script cargado y DOM completamente cargado'); // Verifica si el script se carga
    
    const token = localStorage.getItem('token');
    if (!token) {
        alert('No estás autenticado.');
        window.location.href = '/login';
        return;
    }

    await cargarPerfiles();
});

async function cargarPerfiles() {
    const token = localStorage.getItem('token');

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/profiles', {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json',
            }
        });

        if (response.ok) {
            const data = await response.json();
            console.log('Perfiles obtenidos:', data);

            const profilesList = document.querySelector('.profiles-list');
            profilesList.innerHTML = ''; // Limpiar la lista antes de agregar nuevos perfiles

            // Iterar sobre los perfiles y agregar cada uno al DOM
            data.forEach(profile => {
                const profileItem = document.createElement('div');
                profileItem.classList.add('profile-item');
                profileItem.innerHTML = `
                    <a href="#" class="profile-link" data-id="${profile.id}">
                        <p class="initials">${profile.name.substring(0, 2).toUpperCase()}</p>
                        ${profile.name} - ${profile.role} - ${new Date(profile.created_at).toLocaleString()}
                    </a>
                `;
                profilesList.appendChild(profileItem);
            });

            // Agregar el evento de clic a cada perfil
            const profileLinks = document.querySelectorAll('.profile-link');
            profileLinks.forEach(link => {
                link.addEventListener('click', (event) => {
                    event.preventDefault();
                    const profileId = link.getAttribute('data-id');
                    cargarDetallesPerfil(profileId); // Cargar detalles del perfil
                });
            });

        } else {
            const errorData = await response.json();
            console.error('Error al cargar los perfiles:', errorData);
        }
    } catch (error) {
        console.error('Error al obtener los perfiles:', error);
    }
}

// Función para cargar los detalles de un perfil
async function cargarDetallesPerfil(profileId) {
    const token = localStorage.getItem('token');
    try {
        const response = await fetch(`https://apijusticelaw-production.up.railway.app/v1/profiles/${profileId}`, {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json',
            }
        });

        if (response.ok) {
            const profile = await response.json();
            console.log('Detalles del perfil:', profile);

            // Llenar la sección de detalles con los datos del perfil
            document.getElementById('profileName').textContent = profile.name;
            document.getElementById('profileEmail').textContent = profile.email;
            document.getElementById('profileResumeLink').href = profile.resume_link;
            document.getElementById('profileReports').textContent = `Reportes: ${profile.reports}`;
            document.getElementById('profileComments').textContent = `Comentarios: ${profile.comments}`;
            document.getElementById('profileReviews').textContent = `Reseñas: ${profile.reviews}`;
            document.getElementById('profileAvatar').src = profile.avatar || '../../img/perfilcontacto.png';

            // Mostrar la sección de detalles
            document.getElementById('profileDetailsSection').style.display = 'block';
        } else {
            const errorData = await response.json();
            console.error('Error al obtener los detalles del perfil:', errorData);
        }
    } catch (error) {
        console.error('Error al cargar detalles del perfil:', error);
    }
}