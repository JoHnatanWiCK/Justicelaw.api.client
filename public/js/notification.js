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
    // Manejo del evento de "Me gusta"
    document.querySelectorAll('.corazon').forEach(corazon => {
        corazon.addEventListener('click', function () {
            const notificationId = corazon.closest('.notification').getAttribute('data-id');
            toggleLike(notificationId, corazon);
        });
    });

    // Manejo de dropdowns
    document.querySelectorAll('.user-menu1, .user-menu2').forEach(menu => {
        const toggleButton = menu.querySelector('label');
        const dropdown = menu.querySelector('.dropdown1, .dropdown2');

        toggleButton.addEventListener('click', function (event) {
            closeAllDropdowns();
            dropdown.classList.toggle('active');
        });
    });

    // Cierra todos los dropdowns cuando se hace clic fuera de ellos
    document.addEventListener('click', function (event) {
        if (!event.target.closest('.user-menu1') && !event.target.closest('.user-menu2')) {
            closeAllDropdowns();
        }
    });

    function closeAllDropdowns() {
        document.querySelectorAll('.dropdown1, .dropdown2').forEach(dropdown => {
            dropdown.classList.remove('active');
        });
    }

    // Función para mostrar mensajes de éxito
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

    // Botones de acciones globales
    document.querySelector('#marcarTodoLeido').addEventListener('click', function () {
        fetchNotificationsAction('markAllAsRead');
    });

    document.querySelector('#archivarTodo').addEventListener('click', function () {
        fetchNotificationsAction('archiveAll');
    });

    // Función para dar "Me gusta" a una notificación
    async function toggleLike(notificationId, corazon) {
        try {
            const response = await fetch(`${baseUrl}/${notificationId}/like`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${getAuthToken()}`,
                },
            });

            if (!response.ok) {
                throw new Error('Error al intentar dar me gusta');
            }

            // Cambia el ícono de "Me gusta"
            corazon.src = corazon.src.includes('Like.png') 
                ? '../../img/Like2.png' 
                : '../../img/Like.png';

        } catch (error) {
            console.error('Error al manejar el me gusta:', error);
        }
    }

    // Función para manejar acciones en notificaciones
async function fetchNotificationsAction(action, notificationId = null) {
    let url = baseUrl;

    if (notificationId) {
        url = `${url}/${notificationId}`;
    }

    const method = {
        markAsRead: 'POST', // Ruta POST para marcar como leído
        archive: 'POST',    // Ruta POST para archivar
        delete: 'DELETE',   // Ruta DELETE para eliminar
        archiveAll: 'POST', // Ruta POST para archivar todas
        deleteAll: 'DELETE' // Ruta DELETE para eliminar todas
    }[action] || 'POST';

    let body = null;
    if (['markAsRead', 'archive', 'delete'].includes(action)) {
        body = JSON.stringify({ action });
    }

    try {
        const response = await fetch(url, {
            method: method,
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${getAuthToken()}`,
            },
            body: body,
        });

        if (!response.ok) {
            throw new Error(`Error al realizar la acción: ${action}`);
        }

        const result = await response.json();
        console.log('Respuesta de la API:', result);

        const message = {
            'markAllAsRead': 'todas marcadas como leídas',
            'archiveAll': 'todas archivadas',
            'deleteAll': 'todas eliminadas'
        }[action] || 'realizada';

        showSuccessMessage(message);
        fetchAndRenderNotifications(); // Actualiza las notificaciones
    } catch (error) {
        console.error('Error al realizar acción:', error);
    }
}


    // Renderizar notificaciones desde la base de datos
    async function fetchAndRenderNotifications() {
        const notificationsList = document.querySelector('.notifications-list');
    
        try {
            const response = await fetch(baseUrl, {
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${getAuthToken()}`,
                },
            });
    
            if (!response.ok) {
                throw new Error(`Error al obtener las notificaciones: ${response.statusText}`);
            }
    
            const data = await response.json();
            console.log('Datos obtenidos:', data); // Para ver la respuesta completa
    
            // Accede al array de notificaciones dentro de la propiedad 'notifications'
            const notifications = data.notifications;
    
            if (Array.isArray(notifications)) {
                notificationsList.innerHTML = ''; // Limpia la lista actual
    
                notifications.forEach(notification => {
                    const notificationElement = document.createElement('div');
                    notificationElement.className = `notification ${notification.read_at ? '' : 'unread'} container2`;
                    notificationElement.setAttribute('data-id', notification.id);
    
                    notificationElement.innerHTML = `
                        <img class="img-perfil" src="../../img/fotoPerfil.png" alt="perfil">
                        <a href="${notification.data.url || '#'}">${notification.data.message || 'Notificación sin mensaje'}</a>
                        <img class="corazon" src="../../img/Like.png" alt="Like">
                        <div class="user-menu2">
                            <label class="dropdown-toggle">
                                <img class="img-3puntos" src="../../img/trespuntos.png" alt="Opciones">
                            </label>
                            <div class="dropdown2">
                                <ul>
                                    <li><a href="#" data-action="markAsRead">Marcar como leído</a></li>
                                    <li><a href="#" data-action="archive">Archivar</a></li>
                                    <li><a href="#" data-action="delete">Eliminar</a></li>
                                </ul>
                            </div>
                        </div>
                    `;
    
                    notificationsList.appendChild(notificationElement);
    
                    // Agrega eventos a las acciones individuales
                    const actions = notificationElement.querySelectorAll('[data-action]');
                    actions.forEach(actionElement => {
                        const action = actionElement.dataset.action;
                        actionElement.addEventListener('click', function (event) {
                            event.preventDefault();
                            fetchNotificationsAction(action, notification.id);
                        });
                    });
                });
            } else {
                console.error('La propiedad "notifications" no es un array:', notifications);
            }
        } catch (error) {
            console.error('Error al renderizar notificaciones:', error);
        }
    }

    // Inicializar la lista de notificaciones
    fetchAndRenderNotifications();
});
