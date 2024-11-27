document.addEventListener('DOMContentLoaded', async () => {
    console.log('Script cargado y DOM completamente cargado');

    // Cargar usuarios y abogados al cargar la página
    await cargarUsuarios();
    await cargarAbogados();
});

async function cargarUsuarios() {
    const token = localStorage.getItem('token');
    const apiUrl = 'https://apijusticelaw-production.up.railway.app/v1/users';

    try {
        const response = await fetch(apiUrl, {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json',
            }
        });

        if (response.ok) {
            const users = await response.json();
            console.log('Usuarios obtenidos:', users);

            const profilesList = document.querySelector('.profiles-list');
            const noUsersMessage = document.getElementById('noUsersMessage');

            profilesList.innerHTML = ''; // Limpiar lista de usuarios
            noUsersMessage.style.display = 'none'; // Ocultar mensaje de error

            if (users.length > 0) {
                users.forEach(user => {
                    const userItem = document.createElement('div');
                    userItem.classList.add('profile-item');
                    userItem.innerHTML = `
                        <p class="user-name">${user.name}</p>
                        <p class="user-email">${user.email}</p>
                        <p class="user-created">${new Date(user.created_at).toLocaleString()}</p>
                        <button class="view-profile" data-id="${user.id}">Ver Perfil</button>
                    `;
                    userItem.querySelector('.view-profile').addEventListener('click', () => {
                        cargarDetallesPerfil(user.id);
                    });
                    profilesList.appendChild(userItem);
                });
            } else {
                noUsersMessage.style.display = 'block'; // Mostrar mensaje si no hay usuarios
            }
        } else {
            const errorData = await response.json();
            console.error('Error al cargar los usuarios:', errorData);
            alert('Ocurrió un error al cargar los usuarios.');
        }
    } catch (error) {
        console.error('Error al obtener los usuarios:', error);
        alert('No se pudo conectar con el servidor. Inténtalo de nuevo más tarde.');
    }
}

async function cargarAbogados() {
    const token = localStorage.getItem('token');
    const apiUrl = 'https://apijusticelaw-production.up.railway.app/v1/lawyers';

    try {
        const response = await fetch(apiUrl, {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json',
            }
        });

        if (response.ok) {
            const lawyers = await response.json();
            console.log('Abogados obtenidos:', lawyers);

            const lawyersList = document.querySelector('.lawyers-list');
            const noLawyersMessage = document.getElementById('noLawyersMessage');

            lawyersList.innerHTML = ''; // Limpiar lista de abogados
            noLawyersMessage.style.display = 'none'; // Ocultar mensaje de error

            if (lawyers.length > 0) {
                lawyers.forEach(lawyer => {
                    const lawyerItem = document.createElement('div');
                    lawyerItem.classList.add('profile-item');
                    lawyerItem.innerHTML = `
                        <p class="lawyer-name">${lawyer.name}</p>
                        <p class="lawyer-email">${lawyer.email}</p>
                        <p class="lawyer-created">${new Date(lawyer.created_at).toLocaleString()}</p>
                        <button class="view-profile" data-id="${lawyer.id}">Ver Perfil</button>
                    `;
                    lawyerItem.querySelector('.view-profile').addEventListener('click', () => {
                        cargarDetallesPerfil(lawyer.id);
                    });
                    lawyersList.appendChild(lawyerItem);
                });
            } else {
                noLawyersMessage.style.display = 'block'; // Mostrar mensaje si no hay abogados
            }
        } else {
            const errorData = await response.json();
            console.error('Error al cargar los abogados:', errorData);
            alert('Ocurrió un error al cargar los abogados.');
        }
    } catch (error) {
        console.error('Error al obtener los abogados:', error);
        alert('No se pudo conectar con el servidor. Inténtalo de nuevo más tarde.');
    }
}

// Función para cargar los detalles de un perfil
async function cargarDetallesPerfil(userId) {
    const token = localStorage.getItem('token');
    const apiUrl = `https://apijusticelaw-production.up.railway.app/v1/users/${userId}`; // Ajusta la URL

    try {
        const response = await fetch(apiUrl, {
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
            document.getElementById('profileResumeLink').href = profile.resume_link || '#';
            // document.getElementById('profileReports').textContent = `Reportes: ${profile.reports}`;
            // document.getElementById('profileComments').textContent = `Comentarios: ${profile.comments}`;
            // document.getElementById('profileReviews').textContent = `Reseñas: ${profile.reviews}`;
            // document.getElementById('profileAvatar').src = profile.avatar || '../../img/perfilcontacto.png';

            // Mostrar la sección de detalles
            document.getElementById('profileDetailsSection').style.display = 'block';
        } else {
            console.error('Error al obtener los detalles del perfil:', await response.json());
        }
    } catch (error) {
        console.error('Error al cargar detalles del perfil:', error);
    }
}

const closeModalButton = document.getElementById('closeModal');
const profileDetailsSection = document.getElementById('profileDetailsSection');

// Añadir un evento de clic al botón de cerrar
closeModalButton.addEventListener('click', function(event) {
    event.preventDefault(); // Prevenir el comportamiento por defecto del enlace
    profileDetailsSection.style.display = 'none'; // Ocultar el modal
});