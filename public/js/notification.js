document.addEventListener('DOMContentLoaded', function () {
    // Estado del corazón
    const corazones = document.querySelectorAll('.corazon');

    corazones.forEach(corazon => {
        corazon.addEventListener('click', function () {
            const notificationId = corazon.closest('.notification').getAttribute('data-id');
            toggleLike(notificationId, corazon);
        });
    });

    async function toggleLike(notificationId, corazon) {
        try {
            const response = await fetch(`/notifications/${notificationId}/like`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Content-Type': 'application/json',
                },
            });

            if (!response.ok) {
                throw new Error('Error al intentar dar me gusta');
            }

            const result = await response.json();

            // Cambia el estado del corazón en el frontend
            if (corazon.src.includes('Like.png')) {
                corazon.src = '../../img/Like2.png'; // Cambia al estado "me gusta"
            } else {
                corazon.src = '../../img/Like.png'; // Cambia al estado "no me gusta"
            }

            console.log(result.message); // Mensaje en consola
        } catch (error) {
            console.error('Error al manejar el me gusta:', error);
        }
    }

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

    // Función para manejar las acciones
    async function fetchNotificationsAction(action, notificationId = null) {
        const token = localStorage.getItem('jwtToken'); // Cambiar por tu sistema de autenticación JWT
        let url = `/api/notifications`;

        if (notificationId) {
            url = `/api/notifications/${notificationId}`;
        }

        let method = 'POST';
        if (action === 'archive' || action === 'delete') {
            method = 'DELETE';
        }

        try {
            const response = await fetch(url, {
                method: method,
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json'
                },
                body: notificationId ? JSON.stringify({ action }) : null
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

            // Actualiza la lista de notificaciones
            fetchAndRenderNotifications();
        } catch (error) {
            console.error('Error:', error);
        }
    }

    // Renderizar notificaciones desde la base de datos
    async function fetchAndRenderNotifications() {
        const token = localStorage.getItem('jwtToken');
        const notificationsList = document.querySelector('.notifications-list');

        try {
            const response = await fetch('/api/notifications', {
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json'
                }
            });

            if (!response.ok) {
                throw new Error('Error al obtener las notificaciones');
            }

            const notifications = await response.json();

            // Limpia la lista actual
            notificationsList.innerHTML = '';

            // Renderiza las notificaciones
            notifications.forEach(notification => {
                const notificationElement = document.createElement('div');
                notificationElement.className = `notification ${notification.type} container2`;
                notificationElement.setAttribute('data-id', notification.id);

                notificationElement.innerHTML = `
                    <img class="img-perfil" src="${notification.userImage}" alt="perfil">
                    <a href="${notification.link}">${notification.message}</a>
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
