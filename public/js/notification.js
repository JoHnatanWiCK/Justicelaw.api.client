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
            const notificationId = likeButton.closest('.notification')?.getAttribute('data-id');
            notificationId ? toggleLike(notificationId, likeButton) : console.error('ID de notificación no encontrado.');
        }
    });

    // Manejo de dropdowns
    document.addEventListener('click', function (event) {
        const dropdownToggle = event.target.closest('.dropdown-toggle');
        if (dropdownToggle) {
            const dropdown = dropdownToggle.nextElementSibling;
            closeAllDropdowns();
            dropdown?.classList.toggle('active');
        } else if (!event.target.closest('.user-menu1') && !event.target.closest('.user-menu2')) {
            closeAllDropdowns();
        }
    });

    // Manejo de acciones de notificación
    document.addEventListener('click', function (event) {
        const actionButton = event.target.closest('.dropdown2 a');
        if (actionButton) {
            const action = actionButton.getAttribute('data-action');
            const notificationId = actionButton.closest('.notification')?.getAttribute('data-id');
            notificationId ? fetchNotificationsAction(action, notificationId) : console.error('ID de notificación no encontrado.');
        }
    });

    // Botones de acciones globales
    document.querySelector('#marcarTodoLeido')?.addEventListener('click', () => fetchNotificationsAction('markAllAsRead'));
    document.querySelector('#eliminarTodo')?.addEventListener('click', () => fetchNotificationsAction('deleteAll'));
}

// Cierra todos los dropdowns abiertos
function closeAllDropdowns() {
    document.querySelectorAll('.dropdown1, .dropdown2').forEach(dropdown => dropdown.classList.remove('active'));
}

// Obtiene los encabezados comunes para las solicitudes
function getHeaders() {
    return {
        'Content-Type': 'application/json',
        'Authorization': `Bearer ${getAuthToken()}`,
    };
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
        const response = await fetch(`${baseUrl}/${notificationId}/like`, {
            method: 'POST',
            headers: getHeaders(),
        });

        if (!response.ok) throw new Error('Error al intentar dar "Me gusta"');

        const isLiked = likeButton.src.includes('Like.png');
        likeButton.src = isLiked ? '../../img/Like2.png' : '../../img/Like.png';

        setTimeout(fetchAndRenderNotifications, 500);
    } catch (error) {
        console.error('Error al manejar el "Me gusta":', error);
    }
}

// Función para marcar una notificación como leída
async function markNotificationAsRead(notificationId) {
    try {
        const response = await fetch(`${baseUrl}/${notificationId}/mark-as-read`, {
            method: 'PATCH',
            headers: getHeaders(),
        });

        if (!response.ok) throw new Error('Error al marcar la notificación como leída');

        fetchAndRenderNotifications();  // Actualizar las notificaciones después de marcar
    } catch (error) {
        console.error('Error al marcar como leído', error);
    }
}

// Función para eliminar una notificación
async function deleteNotification(notificationId) {
    try {
        const response = await fetch(`${baseUrl}/${notificationId}`, {
            method: 'DELETE',
            headers: getHeaders(),
        });

        if (!response.ok) throw new Error('Error al eliminar la notificación');

        fetchAndRenderNotifications();  // Actualizar las notificaciones después de eliminar
    } catch (error) {
        console.error('Error al eliminar la notificación', error);
    }
}
async function deleteAllNotifications() {
    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/notifications/delete-all', {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${token}`, // Si usas token de autenticación
            }
        });  // Aquí cerramos el paréntesis de fetch

        if (!response.ok) throw new Error('Error al eliminar todas las notificaciones');

        fetchAndRenderNotifications();  // Actualizar las notificaciones después de eliminar
    } catch (error) {
        console.error('Error al eliminar todas las notificaciones', error);
    }
}

// Función para realizar las acciones sobre las notificaciones
async function fetchNotificationsAction(action, notificationId = null) {
    try {
        let url = baseUrl;
        let method = '';

        // Ajustar las URLs y métodos en función de la acción
        if (action === 'markAllAsRead') {
            url = `${baseUrl}/mark-all`;  // Marcar todas como leídas
            method = 'POST';
        } else if (action === 'deleteAll') {
            url = `${baseUrl}/delete-all`;  // Eliminar todas las notificaciones
            method = 'DELETE';
        } else if (notificationId) {
            if (action === 'markAsRead') {
                url = `${baseUrl}/${notificationId}/mark-as-read`;  // Marcar una notificación como leída
                method = 'PATCH';
            } else if (action === 'delete') {
                url = `${baseUrl}/${notificationId}`;  // Eliminar una notificación
                method = 'DELETE';
            }
        }

        const response = await fetch(url, {
            method,
            headers: getHeaders(),
        });

        if (!response.ok) throw new Error(`Error al realizar la acción: ${action}`);

        const result = await response.json();
        console.log('Respuesta de la API:', result);

        const message = {
            markAsRead: 'Notificación marcada como leída.',
            delete: 'Notificación eliminada.',
            markAllAsRead: 'Todas las notificaciones marcadas como leídas.',
            deleteAll: 'Todas las notificaciones eliminadas.',
        }[action] || 'Acción realizada con éxito.';

        showSuccessMessage(message);
        fetchAndRenderNotifications();  // Actualizar las notificaciones

    } catch (error) {
        console.error('Error al realizar acción:', error);
    }
}

// Renderiza las notificaciones desde la base de datos
async function fetchAndRenderNotifications() {
    const notificationsList = document.querySelector('.notifications-list');
    try {
        const response = await fetch(baseUrl, {
            headers: getHeaders(),
        });

        if (!response.ok) throw new Error(`Error al obtener las notificaciones: ${response.statusText}`);

        const { notifications } = await response.json();

        if (Array.isArray(notifications)) {
            notificationsList.innerHTML = ''; // Limpia la lista actual

            notifications.forEach(notification => {
                const notificationElement = document.createElement('div');
                notificationElement.className = `notification ${notification.read_at ? '' : 'unread'} container2`;
                notificationElement.setAttribute('data-id', notification.id);

                const likeIcon = notification.data.liked ? '../../img/Like2.png' : '../../img/Like.png';

                notificationElement.innerHTML = `
                    <img class="img-perfil" src="../../img/fotoPerfil.png" alt="perfil">
                    <a href="${notification.data.url || '/forologin'}">${notification.data.message || 'Notificación sin mensaje'}</a>
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

                // Asignar los manejadores de eventos
                const markAsReadButton = notificationElement.querySelector('[data-action="markAsRead"]');
                if (markAsReadButton) {
                    markAsReadButton.addEventListener('click', function () {
                        markNotificationAsRead(notification.id);
                    });
                }

                const deleteButton = notificationElement.querySelector('[data-action="delete"]');
                if (deleteButton) {
                    deleteButton.addEventListener('click', function () {
                        deleteNotification(notification.id);
                    });
                }
            });
        } else {
            console.error('La propiedad "notifications" no es un array:', notifications);
        }
    } catch (error) {
        console.error('Error al renderizar notificaciones:', error);
    }
}
