document.addEventListener('DOMContentLoaded', function() {
    // Manejo de los corazones
    const corazones = document.querySelectorAll('.corazon');
    let estadoCorazon = 'vacio';

    corazones.forEach(corazon => {
        corazon.addEventListener('click', function() {
            if (estadoCorazon === 'vacio') {
                corazon.src = '../../img/Like2.png';
                estadoCorazon = 'lleno';
            } else {
                corazon.src = '../../img/Like.png';
                estadoCorazon = 'vacio';
            }
        });
    });

    // Manejo de los dropdowns con JavaScript
    const dropdowns = document.querySelectorAll('.user-menu1, .user-menu2');

    dropdowns.forEach(menu => {
        const toggleButton = menu.querySelector('label');
        const dropdown = menu.querySelector('.dropdown1, .dropdown2');

        toggleButton.addEventListener('click', function(event) {
            event.preventDefault();
            closeAllDropdowns(); // Cerrar todos los demás dropdowns primero
            dropdown.classList.toggle('active'); // Mostrar/Ocultar el dropdown actual
        });
    });

    // Función para cerrar todos los dropdowns
    function closeAllDropdowns() {
        document.querySelectorAll('.dropdown1, .dropdown2').forEach(dropdown => {
            dropdown.classList.remove('active');
        });
    }

    // Cerrar dropdowns si se hace clic fuera
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.user-menu1') && !event.target.closest('.user-menu2')) {
            closeAllDropdowns();
        }
    });

    // Mostrar mensaje de éxito
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
        }, 3000); // Ocultar el toast después de 3 segundos
    }

    // Marcar todo como leído
    const marcarTodoLeido = document.querySelector('#marcarTodoLeido');
    marcarTodoLeido.addEventListener('click', function() {
        fetchNotificationsAction('markAllAsRead');
    });

    // Archivar todo
    const archivarTodo = document.querySelector('#archivarTodo');
    archivarTodo.addEventListener('click', function() {
        fetchNotificationsAction('archiveAll');
    });

    // Eliminar todo
    const eliminarTodo = document.querySelector('#eliminarTodo');
    eliminarTodo.addEventListener('click', function() {
        fetchNotificationsAction('deleteAll');
    });

    // Función para manejar las acciones de las notificaciones
    async function fetchNotificationsAction(action, notificationId = null) {
        const token = localStorage.getItem('jwtToken'); // Obtener el token JWT
        let url = `https://apijusticelaw-production.up.railway.app/v1/notifications`;

        if (action !== 'markAllAsRead' && action !== 'archiveAll' && action !== 'deleteAll') {
            url = `https://apijusticelaw-production.up.railway.app/v1/notifications/${notificationId}`;
        }

        try {
            const response = await fetch(url, {
                method: action === 'markAllAsRead' ? 'POST' : 'DELETE', // Dependiendo de la acción (POST para marcar, DELETE para eliminar)
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json'
                },
                body: action !== 'markAllAsRead' ? JSON.stringify({ notificationId }) : null, // Solo para algunas acciones
            });

            if (!response.ok) {
                throw new Error(`Error al realizar la acción: ${action}`);
            }

            showSuccessMessage(action === 'markAllAsRead' ? 'todas marcadas como leídas' : action === 'archiveAll' ? 'todas archivadas' : 'todas eliminadas');
        } catch (error) {
            console.error('Error:', error);
        }
    }

    // Manejo de las opciones individuales de las notificaciones
    const notifications = document.querySelectorAll('.notification');
    notifications.forEach(notificacion => {
        const marcarLeido = notificacion.querySelector('a[href="m-leido"]');
        const archivar = notificacion.querySelector('a[href="archivar"]');
        const eliminar = notificacion.querySelector('a[href="eliminar"]');

        // Marcar como leído
        marcarLeido.addEventListener('click', function(event) {
            event.preventDefault();
            const notificationId = notificacion.getAttribute('data-id');
            fetchNotificationsAction('markAsRead', notificationId);
        });

        // Archivar notificación
        archivar.addEventListener('click', function(event) {
            event.preventDefault();
            const notificationId = notificacion.getAttribute('data-id');
            fetchNotificationsAction('archive', notificationId);
        });

        // Eliminar notificación
        eliminar.addEventListener('click', function(event) {
            event.preventDefault();
            const notificationId = notificacion.getAttribute('data-id');
            fetchNotificationsAction('delete', notificationId);
        });
    });
});
