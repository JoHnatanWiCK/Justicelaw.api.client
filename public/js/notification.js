document.addEventListener('DOMContentLoaded', function() {
    // Manejo de los corazones
    const corazones = document.querySelectorAll('.corazon');

    corazones.forEach(corazon => {
        let estadoCorazon = 'vacio';

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

    // Filtrado de notificaciones
    const dropdownItems = document.querySelectorAll('.dropdown1 a');
    const notifications = document.querySelectorAll('.notification');

    dropdownItems.forEach(item => {
        item.addEventListener('click', (event) => {
            event.preventDefault();
            const filter = item.getAttribute('data-filter');
            filterNotifications(filter);
        });
    });

    function filterNotifications(filter) {
        notifications.forEach(notification => {
            const isFavorite = notification.classList.contains('favorite');
            const isArchived = notification.classList.contains('archived');
            const isUnread = notification.classList.contains('unread');

            switch (filter) {
                case 'favoritas':
                    notification.style.display = isFavorite ? 'block' : 'none';
                    break;
                case 'archivadas':
                    notification.style.display = isArchived ? 'block' : 'none';
                    break;
                case 'noleidas':
                    notification.style.display = isUnread ? 'block' : 'none';
                    break;
                case 'todas':
                default:
                    notification.style.display = 'block';
                    break;
            }
        });
    }

    filterNotifications('todas');

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
        notifications.forEach(notification => {
            notification.classList.remove('unread');
        });
        showSuccessMessage('todas marcadas como leídas');
    });

    // Archivar todo
    const archivarTodo = document.querySelector('#archivarTodo');
    archivarTodo.addEventListener('click', function() {
        notifications.forEach(notification => {
            notification.style.display = 'none';
        });
        showSuccessMessage('todas archivadas');
    });

    // Manejo de las opciones individuales de las notificaciones
    notifications.forEach(notificacion => {
        const marcarLeido = notificacion.querySelector('a[href="m-leido"]');
        const archivar = notificacion.querySelector('a[href="archivar"]');
        const eliminar = notificacion.querySelector('a[href="eliminar"]');

        // Marcar como leído
        marcarLeido.addEventListener('click', function(event) {
            event.preventDefault();
            notificacion.classList.remove('unread');
            showSuccessMessage('marcada como leída');
        });

        // Archivar notificación
        archivar.addEventListener('click', function(event) {
            event.preventDefault();
            notificacion.style.display = 'none';
            showSuccessMessage('archivada');
        });

        // Eliminar notificación
        eliminar.addEventListener('click', function(event) {
            event.preventDefault();
            notificacion.remove();
            showSuccessMessage('eliminada');
        });
    });

    // Navegación en los links del sidebar (si es necesario)
    const navLinks = document.querySelectorAll('.nav-links a');

    navLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            window.location.href = this.href;
            event.preventDefault();
        });
    });
});
