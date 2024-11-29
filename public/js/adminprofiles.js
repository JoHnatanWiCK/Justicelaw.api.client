document.addEventListener('DOMContentLoaded', async () => {
    console.log('Script cargado y DOM completamente cargado');

    // Cargar usuarios y abogados al cargar la página
    await cargarUsuarios();
    await cargarAbogados();
});

let currentProfileType = null; // Para rastrear si es usuario o abogado
let currentProfileId = null;  // Para rastrear el ID del perfil actual

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
                        <button class="view-profile" data-id="${user.id}" data-type="user">Ver Perfil</button>
                    `;
                    userItem.querySelector('.view-profile').addEventListener('click', () => {
                        cargarDetallesPerfil(user.id, 'user');
                    });
                    profilesList.appendChild(userItem);
                });
            } else {
                noUsersMessage.style.display = 'block'; // Mostrar mensaje si no hay usuarios
            }
        } else {
            console.error('Error al cargar los usuarios:', await response.json());
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
                        <button class="view-profile" data-id="${lawyer.id}" data-type="lawyer">Ver Perfil</button>
                    `;
                    lawyerItem.querySelector('.view-profile').addEventListener('click', () => {
                        cargarDetallesPerfil(lawyer.id, 'lawyer');
                    });
                    lawyersList.appendChild(lawyerItem);
                });
            } else {
                noLawyersMessage.style.display = 'block'; // Mostrar mensaje si no hay abogados
            }
        } else {
            console.error('Error al cargar los abogados:', await response.json());
            alert('Ocurrió un error al cargar los abogados.');
        }
    } catch (error) {
        console.error('Error al obtener los abogados:', error);
        alert('No se pudo conectar con el servidor. Inténtalo de nuevo más tarde.');
    }
}

// Función para cargar los detalles de un perfil en el modal
async function cargarDetallesPerfil(profileId, profileType) {
    const token = localStorage.getItem('token');
    const apiUrl =
        profileType === 'user'
            ? `https://apijusticelaw-production.up.railway.app/v1/users/${profileId}`
            : `https://apijusticelaw-production.up.railway.app/v1/lawyers/${profileId}`;

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

            // Llenar los detalles en el modal
            document.getElementById('profileName').textContent = profile.name;
            document.getElementById('profileEmail').textContent = profile.email;

            // Mostrar el enlace de hoja de vida solo para abogados
            const resumeLink = document.getElementById('profileResumeLink');
            if (profileType === 'lawyer' && profile.resume_link) {
                resumeLink.style.display = 'inline';
                resumeLink.href = profile.resume_link;
            } else {
                resumeLink.style.display = 'none';
            }

            // Guardar el tipo y el ID del perfil actual
            currentProfileType = profileType;
            currentProfileId = profileId;

            // Mostrar el modal
            document.getElementById('profileDetailsSection').style.display = 'block';
        } else {
            console.error('Error al obtener los detalles del perfil:', await response.json());
        }
    } catch (error) {
        console.error('Error al cargar detalles del perfil:', error);
    }
}

// Funcionalidad del botón "Ver Perfil Completo"
const profileDetailsSection = document.getElementById('profileDetailsSection');
profileDetailsSection.querySelector('.btn[href="#"]').addEventListener('click', (event) => {
    event.preventDefault();
    if (currentProfileType === 'user') {
        window.location.href = '/crearPerfil';
    } else if (currentProfileType === 'lawyer') {
        window.location.href = `/crearPerfil`;
    }
});

// Función para cerrar el modal
const closeModalButton = document.getElementById('closeModal');
closeModalButton.addEventListener('click', (event) => {
    event.preventDefault();
    profileDetailsSection.style.display = 'none';
});
