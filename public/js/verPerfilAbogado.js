

document.addEventListener('DOMContentLoaded', async function() {
    // Obtener el lawyerId desde la URL
    const urlParams = new URLSearchParams(window.location.search);
    const lawyerId = window.location.pathname.split('/').pop();

    try {
        const response = await fetch(`https://apijusticelaw-production.up.railway.app/v1/verPerfilAbogado/${lawyerId}`);
        const data = await response.json();

        if (data && data.lawyer) {
            // Asignar los datos en la sección de Información Personal
            document.querySelector('.telefonoWeb p').textContent = data.verification.cell_phone || 'No disponible';
            document.querySelector('.correoWeb p').textContent = data.lawyer.email || 'No disponible';
            document.querySelector('.paisWeb p').textContent = data.verification.country || 'No disponible';
            document.querySelector('.ciudadWeb p').textContent = data.verification.city || 'No disponible';

            // Asignar la biografía en la sección de Presentación
            document.getElementById('biografiaUsuario').textContent = data.profile.biography || 'No disponible';

            // Asignar las áreas de práctica
            const areasList = document.querySelector('.civ');
            areasList.innerHTML = ''; // Limpiar las áreas previas
            data.areas.forEach(area => {
                const boxPractice = document.createElement('div');
                boxPractice.classList.add('box-practice');

                const practiceItem = document.createElement('div');
                practiceItem.classList.add('practice-item');
                practiceItem.classList.add(area.toLowerCase().replace(/\s/g, '')); // Convierte el nombre del área en un clase en minúsculas

                const practiceText = document.createElement('p');
                practiceText.classList.add('practice-text');
                practiceText.textContent = area;

                practiceItem.appendChild(practiceText);
                boxPractice.appendChild(practiceItem);
                areasList.appendChild(boxPractice);
            });

            // Ahora cargamos la hoja de vida (resume) desde la propiedad verification
            const resumeUrl = data.verification.resume;
            const hojaDeVidaSection = document.getElementById('hoja-de-vida');
            hojaDeVidaSection.innerHTML = ''; // Limpiar el contenido previo

            if (resumeUrl.endsWith('.pdf')) {
                const googleDocsUrl = `https://docs.google.com/viewer?url=${resumeUrl}&embedded=true`;
                const iframe = document.createElement('iframe');
                iframe.classList.add('iframeLarge');
                iframe.src = googleDocsUrl;
                iframe.frameBorder = "0";
                hojaDeVidaSection.appendChild(iframe);
            } else if (resumeUrl.endsWith('.docx') || resumeUrl.endsWith('.doc')) {
                const googleDocsUrl = `https://docs.google.com/viewer?url=${resumeUrl}&embedded=true`;
                const iframe = document.createElement('iframe');
                iframe.src = googleDocsUrl;
                iframe.classList.add('iframeLarge');
                iframe.frameBorder = "0";
                hojaDeVidaSection.appendChild(iframe);
            } else {
                const downloadLink = document.createElement('a');
                downloadLink.href = resumeUrl;
                downloadLink.download = true;
                downloadLink.textContent = 'Descargar hoja de vida';
                hojaDeVidaSection.appendChild(downloadLink);
            }

        } else {
            console.log('No se encontró el abogado.');
        }
    } catch (error) {
        console.error('Error al obtener los detalles del abogado:', error);
    }
});


document.addEventListener('DOMContentLoaded', function() {
  const navLinks = document.querySelectorAll('.profile-nav ul li a');
  const indicator = document.querySelector('.profile-nav .indicator');
  const sections = document.querySelectorAll('.section');

  function setIndicatorPosition(link) {
    const rect = link.getBoundingClientRect();
    const navRect = link.closest('.profile-nav').getBoundingClientRect();
    indicator.style.left = `${rect.left - navRect.left}px`;
    indicator.style.width = `${rect.width}px`;
  }

  function showSection(targetId) {
    sections.forEach(section => {
      if (section.id === targetId) {
        section.classList.add('active');
      } else {
        section.classList.remove('active');
      }
    });
  }

  navLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      navLinks.forEach(link => link.classList.remove('active'));
      link.classList.add('active');
      setIndicatorPosition(link);
      const targetId = link.getAttribute('data-target');
      showSection(targetId);
    });
  });

  const activeLink = document.querySelector('.profile-nav ul li a.active');
  if (activeLink) {
    setIndicatorPosition(activeLink);
    const targetId = activeLink.getAttribute('data-target');
    showSection(targetId);
  }
});


document.querySelectorAll('.star').forEach(star => {
  star.addEventListener('click', () => {
      const value = parseInt(star.getAttribute('data-value'));
      document.querySelectorAll('.star').forEach(s => {
          s.classList.remove('filled');
          if (parseInt(s.getAttribute('data-value')) <= value) {
              s.classList.add('filled');
          }
      });
  });
});


document.addEventListener('DOMContentLoaded', function() {
  const navLinks = document.querySelectorAll('.profile-nav-sm ul li a');
  const indicator = document.querySelector('.profile-nav-sm .indicator');
  const sections = document.querySelectorAll('.section-mov');

  function setIndicatorPosition(link) {
    const rect = link.getBoundingClientRect();
    const navRect = link.closest('.profile-nav-sm').getBoundingClientRect();
    indicator.style.left = `${rect.left - navRect.left}px`;
    indicator.style.width = `${rect.width}px`;
  }

  function showSection(targetId) {
    sections.forEach(section => {
      if (section.id === targetId) {
        section.classList.add('active');
      } else {
        section.classList.remove('active');
      }
    });
  }

  navLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      navLinks.forEach(link => link.classList.remove('active'));
      link.classList.add('active');
      setIndicatorPosition(link);
      const targetId = link.getAttribute('data-target');
      showSection(targetId);
    });
  });

  const activeLink = document.querySelector('.profile-nav-sm ul li a.active');
  if (activeLink) {
    setIndicatorPosition(activeLink);
    const targetId = activeLink.getAttribute('data-target');
    showSection(targetId);
  }
});


async function cargarReseñas() {
  const token = localStorage.getItem('token'); // Obtener el JWT del localStorage

  if (!token) {
      console.log('No estás autenticado.');
      return;
  }

  try {
      // Obtener el lawyerId dinámicamente desde la URL
      const lawyerId = window.location.pathname.split('/').pop();

      // Realizar la solicitud GET al endpoint con autorización
      const response = await fetch(`https://apijusticelaw-production.up.railway.app/v1/reseñaAbogado/${lawyerId}`, {
          method: 'GET',
          headers: {
              'Authorization': `Bearer ${token}`
          }
      });

      if (response.ok) {
          const data = await response.json();
          console.log('Reseñas obtenidas:', data);

          const reseñasPublicadas = document.getElementById('reseñasPublicadas');

          // Limpiar el contenedor de reseñas
          reseñasPublicadas.innerHTML = '';

          // Iterar sobre las reseñas recibidas y renderizarlas
          data.reviews.forEach((review) => {
              const nuevaReseña = document.createElement('div');
              nuevaReseña.className = 'reseña';

              nuevaReseña.innerHTML = `
                  <div class="reseña-content">
                      <div class="reseña-stars">
                          ${'&#9733;'.repeat(review.stars)}${'&#9734;'.repeat(5 - review.stars)}
                      </div>
                      <p>${review.content}</p>
                  </div>
              `;

              // Añadir la reseña al contenedor
              reseñasPublicadas.appendChild(nuevaReseña);
          });
      } else {
          const errorData = await response.json();
          console.error('Error al cargar las reseñas:', errorData);
      }
  } catch (error) {
      console.error('Error:', error);
  }
}


document.addEventListener('DOMContentLoaded', cargarReseñas);
// parte de santiago enviar reseña 
document.addEventListener('DOMContentLoaded', () => {
  const stars = document.querySelectorAll('.star');
  let selectedRating = 0;

  // Obtener el lawyerId desde la URL
  const lawyerId = window.location.pathname.split('/').pop();

  // Función para destacar las estrellas seleccionadas
  stars.forEach((star) => {
      star.addEventListener('click', () => {
          selectedRating = parseInt(star.getAttribute('data-value'));
          stars.forEach((s, index) => {
              s.style.color = index < selectedRating ? '#FFD700' : '#000'; // Amarillo para estrellas seleccionadas
          });
      });
  });


  // Publicar reseña
  document.getElementById('boton-publicar').addEventListener('click', async () => {
      const reseñaInput = document.getElementById('inputReseña');
      const textoReseña = reseñaInput.value.trim();

      if (!textoReseña || selectedRating === 0) {
          alert('Por favor, selecciona una calificación y escribe tu reseña.');
          return;
      }

      // Datos a enviar al servidor
      const reviewData = {
          content: textoReseña,
          stars: selectedRating,
          lawyer_id: lawyerId // ID dinámico obtenido de la URL
      };

      try {
          const token = localStorage.getItem('token'); // JWT almacenado

          // Enviar la reseña al servidor
          const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/enviarReviews', {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/json',
                  'Authorization': `Bearer ${token}` // Incluye el JWT para autenticar
              },
              body: JSON.stringify(reviewData)
          });

          if (response.ok) {
              const data = await response.json();
              alert('Reseña publicada con éxito.');

              // Actualiza la vista con la nueva reseña
              const reseñasPublicadas = document.getElementById('reseñasPublicadas');
              const nuevaReseña = document.createElement('div');
              nuevaReseña.className = 'reseña';

              nuevaReseña.innerHTML = `
                  <div class="reseña-content">
                      <div class="reseña-stars">
                          ${'&#9733;'.repeat(selectedRating)}${'&#9734;'.repeat(5 - selectedRating)}
                      </div>
                      <p>${textoReseña}</p>
                  </div>
              `;
              reseñasPublicadas.appendChild(nuevaReseña);

              // Limpiar el formulario
              reseñaInput.value = '';
              selectedRating = 0;
              stars.forEach((star) => (star.style.color = '#000')); // Restaurar color de estrellas
          } else if (response.status === 403) {
              const error = await response.json();
              alert(error.message); // Muestra el mensaje "Tienes que haber interactuado..."
          } else {
              alert('Ocurrió un error al publicar la reseña.');
          }
      } catch (error) {
          console.error('Error al enviar la reseña:', error);
          alert('Error de conexión. Inténtalo más tarde.');
      }
  });
});
