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
        const message = document.createElement('div');
        message.classList.add('success-message');
        message.innerText = `Notificación ${action} con éxito`;
        document.body.appendChild(message);

        setTimeout(() => {
            document.body.removeChild(message);
        }, 3000);
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
    document.querySelector('#archivarTodo').addEventListener('click', function() {
        notifications.forEach(notification => {
            notification.classList.remove('unread');
        });
        showSuccessMessage('todas archivadas');
    });

    const marcarTodoLeidoButton = document.querySelector("#marcarTodoLeido");
    const archivarTodoButton = document.querySelector("#archivarTodo");
    const toast = document.querySelector(".toast");
    const progress = document.querySelector(".progress");
    const toastMessage = document.querySelector("#toastMessage"); 

    let timer1, timer2;

    const showToast = (actionMessage, completionMessage) => {
        toastMessage.textContent = actionMessage; 
        toast.classList.add("active");
        progress.classList.add("active");

       
        timer1 = setTimeout(() => {
            toastMessage.textContent = completionMessage; 
        }, 3000); 

        
        timer2 = setTimeout(() => {
            toast.classList.remove("active");
            progress.classList.remove("active");
        }, 5000); 
    };

    if (marcarTodoLeidoButton) {
        marcarTodoLeidoButton.addEventListener("click", () => {
            showToast( "¡Acción completada!", "¡Todo marcado como leído!"); 
        });
    }

    if (archivarTodoButton) {
        archivarTodoButton.addEventListener("click", () => {
            showToast( "¡Acción completada!", "¡Todo archivado correctamente!"); 
        });
    }

    //toast notification lawyer
    const aceptarButton = document.querySelector("#aceptar");
    const aplazarButton = document.querySelector("#aplazar");
    const toast1 = document.querySelector(".toast");
    const progress1 = document.querySelector(".progress");
    const toastMessage1 = document.querySelector("#toastMessage"); 

    let timer11, timer21;

    const showToast1 = (actionMessage, completionMessage) => {
        toastMessage1.textContent = actionMessage; 
        toast1.classList.add("active");
        progress1.classList.add("active");

        
        timer11 = setTimeout(() => {
            toastMessage1.textContent = completionMessage; 
        }, 3000); 

        
        timer21 = setTimeout(() => {
            toast1.classList.remove("active");
            progress1.classList.remove("active");
        }, 5000); 
    };

    if (aceptarButton) {
        aceptarButton.addEventListener("click", (event) => {
            event.preventDefault(); 
            showToast1("¡Asesoría aceptada!", "¡Acción completada!"); 
        });
    }

    if (aplazarButton) {
        aplazarButton.addEventListener("click", (event) => {
            event.preventDefault(); 
            showToast1("¡Asesoría aplazada!", "¡Acción completada!"); 
        });
    }



    // Navegación
    const navLinks = document.querySelectorAll('.nav-links a');

    navLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            window.location.href = this.href;
            event.preventDefault();
        });
    });
});
