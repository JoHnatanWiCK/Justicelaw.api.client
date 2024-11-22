document.querySelectorAll('.filter-menu button').forEach(button => {
    button.addEventListener('click', function() {
      document.querySelectorAll('.filter-menu button').forEach(btn => {
        btn.style.color = '';
      });

      this.style.color = '#CF9E3E';
    });
  });


  const botones = document.querySelectorAll(".filter-button");

        botones.forEach((boton) => {
          boton.addEventListener("click", () => {
            botones.forEach((btn) => btn.classList.remove("active"));

            boton.classList.add("active");
          });
        });

        



        document.addEventListener('DOMContentLoaded', function () {

          document.getElementById('btnDesp').addEventListener('click', function(){
            window.location.href="/informacionDespido"
          });
      
          document.getElementById('btnGuia').addEventListener('click', function(){
            window.location.href="/informacionAccidente"
          });

          document.getElementById('btnConsu').addEventListener('click', function(){
            window.location.href="/informacionConsumidor"
          });

          document.getElementById('btnInquilino').addEventListener('click', function(){
            window.location.href="/informacionArrendamiento"
          });
      
          document.getElementById('btnAspect').addEventListener('click', function(){
            window.location.href="/informacionNegocio"
          });
      
          document.getElementById('btnDest').addEventListener('click', function(){
            window.location.href="/informacionPension"
          });

          document.getElementById('btnDer').addEventListener('click', function(){
            window.location.href="/informacionesLaboral"
          });
          
         
        });

        
        document.addEventListener("DOMContentLoaded", function () {
          const container = document.getElementById("information-container"); // Contenedor donde se mostrarán las informaciones
          const searchInput = document.getElementById("search-input"); // Campo de búsqueda
          const buscarBtn = document.getElementById("buscarBtn"); // Botón de búsqueda
      
          // Función para cargar las informaciones filtradas desde la API
          function loadInformations(query) {
              const apiUrl = `/api/v1/informations/search?search=${encodeURIComponent(query)}`;
      
              // Cambié la URL de la solicitud para que utilice la API correcta
              fetch(apiUrl)
                  .then(response => response.json())
                  .then(data => {
                      container.innerHTML = ""; // Limpiar el contenedor
      
                      if (data.length === 0) {
                          container.innerHTML = `
                              <p class="text-center text-muted">No se encontraron artículos.</p>
                          `;
                      } else {
                          data.forEach(information => {
                              const card = `
                                  <div class="col-md-4">
                                      <div class="card mb-4">
                                          <img class="card-img-top" src="${information.cover_photo ?? 'default-image.jpg'}" alt="${information.name}">
                                          <div class="card-body">
                                              <h5 class="card-title">${information.name}</h5>
                                              <p class="card-text">${information.body.substring(0, 150)}...</p>
                                              <a href="/informations/${information.id}" class="btn btn-primary">Leer más</a>
                                          </div>
                                      </div>
                                  </div>
                              `;
                              container.innerHTML += card;
                          });
                      }
                  })
                  .catch(error => {
                      console.error("Error al cargar los artículos:", error);
                      container.innerHTML = `
                          <p class="text-center text-danger">Hubo un error al cargar los artículos. Intenta nuevamente más tarde.</p>
                      `;
                  });
          }
      
          // Llamar a la función con una búsqueda vacía para cargar todas las informaciones inicialmente
          loadInformations("");
      
          // Listener para el botón de búsqueda
          buscarBtn.addEventListener("click", function (event) {
              event.preventDefault(); // Evitar la recarga de la página
      
              const query = searchInput.value.trim(); // Obtener el valor del campo de búsqueda
              loadInformations(query); // Cargar las informaciones filtradas
          });
      
          // Opcional: Listener para ejecutar la búsqueda al presionar "Enter"
          searchInput.addEventListener("keypress", function (event) {
              if (event.key === "Enter") {
                  event.preventDefault(); // Evitar la recarga de la página
                  const query = searchInput.value.trim();
                  loadInformations(query); // Cargar las informaciones filtradas
              }
          });
      });
      