// URL base para las notificaciones
const baseUrl = 'https://apijusticelaw-production.up.railway.app/v1/notifications';

// Función para obtener el token de autenticación
function getAuthToken() {
    const token = localStorage.getItem('token');
    if (!token) {
        alert('No se encontró el token de autenticación. Por favor, inicie sesión.');
        window.location.href = '/login'; // Redirige al usuario a la página de login.
        return null;
    }
    return token;
}

// Función para inicializar el DOM
document.addEventListener('DOMContentLoaded', function () {
    fetchAndRenderNotifications(); // Cargar notificaciones
    initializeEvents(); // Inicializar los eventos
});

// Inicializa los eventos del DOM
function initializeEvents() {
    // Manejo de "Me gusta"
    document.addEventListener('click', function (event) {
        const likeButton = event.target.closest('.corazon');
        if (likeButton) {
            const notification = likeButton.closest('.notification');
            if (notification) {
                const notificationId = notification.getAttribute('data-id');
                if (notificationId) {
                    toggleLike(notificationId, likeButton);
                } else {
                    console.error('No se encontró un ID para la notificación');
                }
            } else {
                console.error('No se encontró el contenedor de la notificación');
            }
        }
    });

    // Manejo de dropdowns
    document.addEventListener('click', function (event) {
        const dropdownToggle = event.target.closest('.dropdown-toggle');
        if (dropdownToggle) {
            const dropdown = dropdownToggle.nextElementSibling;
            closeAllDropdowns(); // Cierra otros dropdowns
            dropdown?.classList.toggle('active');
        } else if (!event.target.closest('.user-menu1') && !event.target.closest('.user-menu2')) {
            closeAllDropdowns(); // Cierra todos los dropdowns si haces clic fuera
        }
    });
    // Manejo de acciones de notificación
    document.addEventListener('click', function (event) {
        const actionButton = event.target.closest('.dropdown2 a');
        if (actionButton) {
            const action = actionButton.getAttribute('data-action');
            const notification = actionButton.closest('.notification');
            if (notification) {
                const notificationId = notification.getAttribute('data-id');
                if (notificationId) {
                    fetchNotificationsAction(action, notificationId);
                } else {
                    console.error('No se encontró un ID para la notificación');
                }
            } else {
                console.error('No se encontró el contenedor de la notificación');
            }
        }
    });

    // Botones de acciones globales
    document.querySelector('#marcarTodoLeido')?.addEventListener('click', () => fetchNotificationsAction('markAllAsRead'));
    document.querySelector('#archivarTodo')?.addEventListener('click', () => fetchNotificationsAction('archiveAll'));
}

// Cierra todos los dropdowns abiertos
function closeAllDropdowns() {
    document.querySelectorAll('.dropdown1, .dropdown2').forEach(dropdown => dropdown.classList.remove('active'));
}

// Muestra un mensaje de éxito
function showSuccessMessage(action) {
    const toastMessage = document.querySelector('#toastMessage');
    const toast = document.querySelector('.toast');
    const progress = document.querySelector('.progress');

    toastMessage.textContent = `Notificación ${action} con éxito`;
    toast.classList.add('active');
    progress.classList.add('active');

    setTimeout(() => {
        toast.classList.remove('active');
        progress.classList.remove('active');
    }, 3000);
}

// Cambia el estado de "Me gusta" en una notificación
async function toggleLike(notificationId, likeButton) {
    try {
        // Realiza la solicitud para dar "Me gusta"
        const response = await fetch(`${baseUrl}/${notificationId}/like`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${getAuthToken()}`,
            },
        });

        if (!response.ok) throw new Error('Error al intentar dar "Me gusta"');

        // Cambia el ícono de "Me gusta" localmente antes de re-renderizar
        const newSrc = likeButton.src.includes('Like.png') ? '../../img/Like2.png' : '../../img/Like.png';
        likeButton.src = newSrc; // Actualiza el ícono en el frontend

        // Espera un poco antes de hacer una recarga de las notificaciones para reflejar los cambios
        setTimeout(() => {
            fetchAndRenderNotifications(); // Recarga las notificaciones para asegurar que los cambios se persistan
        }, 500); // Ajusta el tiempo según sea necesario

    } catch (error) {
        console.error('Error al manejar el "Me gusta":', error);
    }
}

// Función para manejar la acción de eliminar
async function fetchNotificationsAction(action, notificationId = null) {
    try {
        let url = notificationId ? `${baseUrl}/${notificationId}` : baseUrl;
        const method = {
            markAsRead: 'PATCH',  // Actualización
            delete: 'DELETE',     // Eliminación
            deleteAll: 'DELETE',  // Eliminar todas
        }[action] || 'POST';

        const response = await fetch(url, {
            method,
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${getAuthToken()}`,
            },
            body: ['markAsRead', 'delete'].includes(action) ? JSON.stringify({ action }) : null,
        });

        if (!response.ok) throw new Error(`Error al realizar la acción: ${action}`);

        const result = await response.json();
        console.log('Respuesta de la API:', result);

        const message = {
            markAllAsRead: 'todas marcadas como leídas',
            deleteAll: 'todas eliminadas',
        }[action] || 'realizada';

        showSuccessMessage(message);
        fetchAndRenderNotifications(); // Actualiza la lista de notificaciones
    } catch (error) {
        console.error('Error al realizar acción:', error);
    }
}

// Renderiza las notificaciones desde la base de datos
async function fetchAndRenderNotifications() {
    const notificationsList = document.querySelector('.notifications-list');
    try {
        const response = await fetch(baseUrl, {
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${getAuthToken()}`,
            },
        });

        if (!response.ok) throw new Error(`Error al obtener las notificaciones: ${response.statusText}`);

        const { notifications } = await response.json();
        console.log('Datos obtenidos:', notifications);

        if (Array.isArray(notifications)) {
            notificationsList.innerHTML = ''; // Limpia la lista actual

            notifications.forEach(notification => {
                const notificationElement = document.createElement('div');
                notificationElement.className = `notification ${notification.read_at ? '' : 'unread'} container2`;
                notificationElement.setAttribute('data-id', notification.id);
                const likeIcon = notification.data.liked ? '../../img/Like2.png' : '../../img/Like.png';

                notificationElement.innerHTML = `
                    <img class="img-perfil" src="../../img/fotoPerfil.png" alt="perfil">
                    <a href="${notification.data.url || '#'}">${notification.data.message || 'Notificación sin mensaje'}</a>
                    <img class="corazon" src="${likeIcon}" alt="Like">
                    <div class="user-menu2">
                        <label class="dropdown-toggle">
                            <img class="img-3puntos" src="../../img/trespuntos.png" alt="Opciones">
                        </label>
                        <div class="dropdown2">
                            <ul>
                                <li><a href="#" data-action="markAsRead">Marcar como leído</a></li>
                                <li><a href="#" data-action="delete">Eliminar</a></li>
                            </ul>
                        </div>
                    </div>
                `;
                notificationsList.appendChild(notificationElement);
            });
        } else {
            console.error('La propiedad "notifications" no es un array:', notifications);
        }
    } catch (error) {
        console.error('Error al renderizar notificaciones:', error);
    }
}
