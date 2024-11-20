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

        
document.getElementById('buscarBtn').addEventListener('click', async function(e) {
  e.preventDefault(); // Prevenir recarga de página

  // Obtener el término de búsqueda
  const searchQuery = document.querySelector('.search-bar input').value.trim();

  if (!searchQuery) {
      alert('Por favor, ingresa un término de búsqueda.');
      return;
  }

  try {
      // Realizar la solicitud al backend
      const response = await fetch('/api/informations/search', {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json',
              'Accept': 'application/json'
          },
          body: JSON.stringify({ query: searchQuery })
      });

      const data = await response.json();

      if (data.results.length > 0) {
          // Mostrar resultados en la pantalla
          console.log('Resultados encontrados:', data.results);
      } else {
          alert('No se encontraron resultados.');
      }
  } catch (error) {
      console.error('Error al realizar la búsqueda:', error);
      alert('Ocurrió un error al buscar la información.');
  }
});
