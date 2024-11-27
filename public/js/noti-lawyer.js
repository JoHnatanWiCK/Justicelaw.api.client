document.addEventListener('DOMContentLoaded', function() {
    // Función para manejar la acción de aceptar una asesoría
    function aceptarAsesoria(notificationItem) {
        notificationItem.remove(); // Simulación de aceptación (puedes cambiarlo por una llamada a tu backend)
        showSuccessMessage('solicitud aceptada');
    }

    // Función para manejar la acción de aplazar una asesoría
    function aplazarAsesoria(notificationItem) {
        notificationItem.classList.add('aplazado'); // Marca visualmente la asesoría como aplazada (puedes ajustar el estilo)
        showSuccessMessage('solicitud aplazada');
    }

    // Mostrar mensaje de éxito
    function showSuccessMessage(action) {
        const toastMessage = document.querySelector('#toastMessage');
        const toast = document.querySelector('.toast');
        const progress = document.querySelector('.progress');

        toastMessage.textContent = `¡${action} con éxito!`;
        toast.classList.add('active');
        progress.classList.add('active');

        setTimeout(() => {
            toast.classList.remove('active');
            progress.classList.remove('active');
        }, 3000); // Ocultar el toast después de 3 segundos
    }

    // Manejo de aceptar y aplazar para cada notificación
    const notificationItems = document.querySelectorAll('.notification-item');

    notificationItems.forEach(notificationItem => {
        const aceptarBtn = notificationItem.querySelector('#aceptar');
        const aplazarBtn = notificationItem.querySelector('#aplazar');

        if (aceptarBtn) {
            aceptarBtn.addEventListener('click', function(event) {
                event.preventDefault();
                aceptarAsesoria(notificationItem);
            });
        }

        if (aplazarBtn) {
            aplazarBtn.addEventListener('click', function(event) {
                event.preventDefault();
                aplazarAsesoria(notificationItem);
            });
        }
    });

    // Funcionalidad de "Cargar más"
    const cargarMasBtn = document.querySelector('.load-more button');
    let cargadas = 0; // Simulación de cuántas notificaciones se han cargado

    cargarMasBtn.addEventListener('click', function() {
        // Simulación de carga de más notificaciones
        const nuevasNotificaciones = [
            {
                nombre: 'Ana López ',
                fecha: '2024-11-02',
                asesoría: 'Jueves 14 noviembre a las 8:00 a.m'
            },
            {
                nombre: 'Juan Pérez ',
                fecha: '2024-11-02',
                asesoría: 'Jueves 14 noviembre a las 8:00 a.m'
            }
        ];

        nuevasNotificaciones.forEach(notificacion => {
            const newNotificationItem = document.createElement('div');
            newNotificationItem.classList.add('notification-item');
            newNotificationItem.innerHTML = `
                <div class="user-info">
                    <img src="../../img/fotoPerfil.png" alt="User Image">
                    <p>${notificacion.nombre}ha solicitado una asesoría para el día ${notificacion.asesoría}</p>
                </div>
                <div class="actions">
                    <a href="#" id="aceptar">Aceptar</a>
                    <a href="#" id="aplazar">Aplazar</a>
                    <span class="date">${notificacion.fecha}</span>
                </div>
            `;

            const aceptarBtn = newNotificationItem.querySelector('#aceptar');
            const aplazarBtn = newNotificationItem.querySelector('#aplazar');

            aceptarBtn.addEventListener('click', function(event) {
                event.preventDefault();
                aceptarAsesoria(newNotificationItem);
            });

            aplazarBtn.addEventListener('click', function(event) {
                event.preventDefault();
                aplazarAsesoria(newNotificationItem);
            });

            document.querySelector('.notification-list').insertBefore(newNotificationItem, cargarMasBtn.parentElement);
        });

        cargadas += nuevasNotificaciones.length;

        // Si ya no hay más notificaciones para cargar, oculta el botón
        if (cargadas >= 10) { // Ajusta este número según lo que necesites
            cargarMasBtn.style.display = 'none';
        }
    });

    // Cerrar toast manualmente
    const closeToastBtn = document.querySelector('.toast .close');
    closeToastBtn.addEventListener('click', function() {
        const toast = document.querySelector('.toast');
        const progress = document.querySelector('.progress');
        toast.classList.remove('active');
        progress.classList.remove('active');
    });
});
