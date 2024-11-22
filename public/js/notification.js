// URL base para las notificaciones
const baseUrl = 'https://apijusticelaw-production.up.railway.app/v1';

// Función para inicializar el DOM
document.addEventListener('DOMContentLoaded', function () {
    const corazones = document.querySelectorAll('.corazon');

    // Manejo del evento de "Me gusta"
    corazones.forEach(corazon => {
        corazon.addEventListener('click', function () {
            const notificationId = corazon.closest('.notification').getAttribute('data-id');
            toggleLike(notificationId, corazon);
        });
    });

    // Manejo de dropdowns
    const dropdowns = document.querySelectorAll('.user-menu1, .user-menu2');

    dropdowns.forEach(menu => {
        const toggleButton = menu.querySelector('label');
        const dropdown = menu.querySelector('.dropdown1, .dropdown2');

        toggleButton.addEventListener('click', function (event) {
            event.preventDefault();
            closeAllDropdowns();
            dropdown.classList.toggle('active');
        });
    });

    function closeAllDropdowns() {
        document.querySelectorAll('.dropdown1, .dropdown2').forEach(dropdown => {
            dropdown.classList.remove('active');
        });
    }

    document.addEventListener('click', function (event) {
        if (!event.target.closest('.user-menu1') && !event.target.closest('.user-menu2')) {
            closeAllDropdowns();
        }
    });

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
    const marcarTodoLeido = document.querySelector('#marcarTodoLeido');
    const archivarTodo = document.querySelector('#archivarTodo');

    marcarTodoLeido.addEventListener('click', function () {
        fetchNotificationsAction('markAllAsRead');
    });

    archivarTodo.addEventListener('click', function () {
        fetchNotificationsAction('archiveAll');
    });

    // Función para dar "Me gusta" a una notificación
    async function toggleLike(notificationId, corazon) {
        try {
            const response = await fetch(`${baseUrl}/notifications/${notificationId}/like`, {
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${localStorage.getItem('jwtToken')}`,
                    'Content-Type': 'application/json',
                },
            });

            if (!response.ok) {
                throw new Error('Error al intentar dar me gusta');
            }

            const result = await response.json();

            corazon.src = corazon.src.includes('Like.png') 
                ? '../../img/Like2.png' 
                : '../../img/Like.png';

            console.log(result.message);
        } catch (error) {
            console.error('Error al manejar el me gusta:', error);
        }
    }

    // Función para manejar acciones en notificaciones
    async function fetchNotificationsAction(action, notificationId = null) {
        let url = `${baseUrl}/notifications`;

        if (notificationId) {
            url = `${url}/${notificationId}`;
        }

        const method = {
            markAsRead: 'POST',
            archive: 'POST',
            delete: 'DELETE',
            archiveAll: 'POST',
            deleteAll: 'DELETE'
        }[action] || 'POST';

        try {
            const response = await fetch(url, {
                method: method,
                headers: {
                    'Authorization': `Bearer ${localStorage.getItem('jwtToken')}`,
                    'Content-Type': 'application/json',
                },
                body: notificationId ? JSON.stringify({ action }) : null,
            });

            if (!response.ok) {
                throw new Error(`Error al realizar la acción: ${action}`);
            }

            const message = 
                action === 'markAllAsRead' ? 'todas marcadas como leídas' :
                action === 'archiveAll' ? 'todas archivadas' :
                action === 'deleteAll' ? 'todas eliminadas' :
                'realizada';

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
            const response = await fetch(`${baseUrl}/notifications`, {
                headers: {
                    'Authorization': `Bearer ${localStorage.getItem('jwtToken')}`,
                    'Content-Type': 'application/json',
                },
            });

            if (!response.ok) {
                throw new Error('Error al obtener las notificaciones');
            }

            const notifications = await response.json();

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
        } catch (error) {
            console.error('Error al renderizar notificaciones:', error);
        }
    }

    // Inicializar la lista de notificaciones
    fetchAndRenderNotifications();
});
