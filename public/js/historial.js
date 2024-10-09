const navLinks = document.querySelectorAll('.nav-links a');

        navLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                window.location.href = this.href;
                event.preventDefault();
            });
        });


        document.querySelectorAll('.eliminar').forEach(function(eliminarBtn) {
            eliminarBtn.addEventListener('click', function(e) {
              e.preventDefault(); // Evitar cualquier acción predeterminada del enlace
              const visita = this.closest('.visita');
              if (visita) {
                visita.remove(); // Eliminar el contenedor 'visita'
              }
            });
          });


          document.querySelectorAll('.tres-puntos-label').forEach(function(tresPuntosLabel) {
            tresPuntosLabel.addEventListener('click', function() {
              const menu = this.nextElementSibling; // Encontrar el menú desplegable
              menu.classList.toggle('activo'); // Mostrar u ocultar el menú
            });
          });

          document.addEventListener('click', function(e) {
            document.querySelectorAll('.menu-desplegable').forEach(function(menu) {
              if (!menu.contains(e.target) && !menu.previousElementSibling.contains(e.target)) {
                menu.classList.remove('activo'); // Ocultar el menú si se hace clic fuera
              }
            });
          });


          document.getElementById('search-input').addEventListener('input', function() {
            // Obtén el valor que el usuario ha ingresado en el campo de búsqueda
            let filter = this.value.toLowerCase();

            // Selecciona todos los elementos de las visitas
            let visitas = document.querySelectorAll('.visita, .visita-small');

            // Recorre cada visita para ver si coincide con el texto de búsqueda
            visitas.forEach(function(visita) {
                let textoVisita = visita.textContent.toLowerCase();

                // Si el texto de la visita incluye el texto buscado, se muestra. Si no, se oculta.
                if (textoVisita.includes(filter)) {
                    visita.style.display = '';
                } else {
                    visita.style.display = 'none';
                }
            });
        });
