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
    
    // Manejo de los dropdowns
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

    function showSuccessMessage(action) {
        const message = document.createElement('div');
        message.classList.add('success-message');
        message.innerText = `Notificación ${action} con éxito`;
        document.body.appendChild(message);

        setTimeout(() => {
            document.body.removeChild(message);
        }, 3000);  
    }
    
    // leido y archivar
    const marcarTodoLeido = document.querySelector('#marcarTodoLeido');

    marcarTodoLeido.addEventListener('click', function() {
        notifications.forEach(notification => {
            notification.classList.remove('unread');
        });
        showSuccessMessage('todas marcadas como leídas');
    });

    
    document.querySelector('#archivarTodo').addEventListener('click', function() {
        notifications.forEach(notification => {
            notification.classList.remove('unread');
        });
        showSuccessMessage('todas archivadas');
    });

    
    const navLinks = document.querySelectorAll('.nav-links a');

    navLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            window.location.href = this.href; 
            event.preventDefault();
        });
    });
});
